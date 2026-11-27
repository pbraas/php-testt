(function () {
    'use strict';

    // Resolve every asset against this script's own URL, so a viewer works from
    // any forum location without a hardcoded forum root.
    const SCRIPT_URL = (function () {
        if (document.currentScript && document.currentScript.src) {
            return document.currentScript.src;
        }
        const tag = document.querySelector('script[src*="/gpxviewer/"]');
        return tag ? tag.src : document.baseURI;
    })();

    const asset = (path) => new URL(path, SCRIPT_URL).href;
    const forumRoot = () => SCRIPT_URL.replace(/\/ext\/.*$/, '/');

    const LEAFLET_CSS   = asset('../vendor/leaflet/leaflet.css');
    const ELEVATION_CSS = asset('../vendor/leaflet-elevation/dist/leaflet-elevation.min.css');
    const LEAFLET_JS    = asset('../vendor/leaflet/leaflet.js');
    const D3_JS         = asset('../vendor/d3/d3.min.js');
    const ELEVATION_JS  = asset('../vendor/leaflet-elevation/dist/leaflet-elevation.min.js');

    // The elevation plugin's defaults point at unpkg for these helpers and pulls
    // each in with a dynamic import(); repoint them at the vendored copies.
    const TOGEOJSON_JS  = asset('../vendor/togeojson/togeojson.umd.js');
    const GEOMUTIL_JS   = asset('../vendor/leaflet-geometryutil/leaflet.geometryutil.js');
    const ALMOSTOVER_JS = asset('../vendor/leaflet-almostover/leaflet.almostover.js');

    const CONFIG = (typeof window.GPX_VIEWER_CONFIG === 'object' && window.GPX_VIEWER_CONFIG) || {};

    const DEFAULTS = {
        tileUrl: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        maxZoom: 19,
        mapHeight: 'auto',
        profileHeight: 'auto',
        messages: {
            noSource: 'No GPX route configured for this viewer.',
            loadFailed: 'Could not download the GPX route.',
            invalidRoute: 'This file is not a valid GPX route.',
            noPoints: 'This GPX file does not contain any route points.',
            renderFailed: 'Something went wrong while drawing the route.',
        },
    };

    const config = (key) => (CONFIG[key] !== undefined ? CONFIG[key] : DEFAULTS[key]);
    const message = (key) => ((CONFIG.messages && CONFIG.messages[key]) || DEFAULTS.messages[key]);

    // Resolve a height from a per-element attribute, falling back to the
    // configured default. A bare integer is a pixel count and must sit within
    // MIN_HEIGHT..MAX_HEIGHT; a value carrying its own unit is used as-is.
    // "auto" (or 0) means the viewer computes the height from its own width.
    const MIN_HEIGHT = 1;
    const MAX_HEIGHT = 2000;

    function height(attrValue, defaultValue) {
        const raw = String(attrValue === null || attrValue === undefined ? '' : attrValue).trim();

        if (raw === '') {
            return defaultValue;
        }

        if (raw.toLowerCase() === 'auto' || raw === '0') {
            return 'auto';
        }

        if (/^\d+$/.test(raw)) {
            const pixels = parseInt(raw, 10);
            return (pixels >= MIN_HEIGHT && pixels <= MAX_HEIGHT) ? pixels + 'px' : defaultValue;
        }

        return raw;
    }

    // Resolve a max zoom level from a per-element attribute. Authors can only
    // lower the board's limit (tiles above the server's maximum come back grey),
    // so a bare integer must sit within 1..defaultValue.
    function zoom(attrValue, defaultValue) {
        const raw = String(attrValue === null || attrValue === undefined ? '' : attrValue).trim();

        if (!/^\d+$/.test(raw)) {
            return defaultValue;
        }

        const level = parseInt(raw, 10);
        return (level >= 1 && level <= defaultValue) ? level : defaultValue;
    }

    // The elevation plugin ships English labels and runs them through L._().
    // Translate the ones the viewer shows; unknown strings pass through.
    // CONFIG.labels can override or extend this table.
    const LABELS = Object.assign({
        'Total Length: ': 'Totale lengte: ',
        'Min Elevation: ': 'Laagste punt: ',
        'Max Elevation: ': 'Hoogste punt: ',
        'Avg Elevation: ': 'Gemiddelde hoogte: ',
        'Total Ascent: ': 'Totaal stijgen: ',
        'Total Descent: ': 'Totaal dalen: ',
        'Total Time: ': 'Totale tijd: ',
        'Min Slope: ': 'Minimale helling: ',
        'Max Slope: ': 'Maximale helling: ',
        'Avg Slope: ': 'Gemiddelde helling: ',
        'x: ': 'afstand: ',
        'y: ': 'hoogte: ',
        'T: ': 'tijd: ',
        'Elevation': 'Hoogteprofiel',
        'Download': 'Downloaden',
    }, CONFIG.labels || {});

    // A boolean attribute: 1, true or yes switch it on, anything else is off.
    function flag(attrValue) {
        return ['1', 'true', 'yes'].indexOf(String(attrValue === null || attrValue === undefined ? '' : attrValue).trim().toLowerCase()) !== -1;
    }

    // Automatic sizing. The map keeps a 5:3 aspect ratio (CSS, see ensureStyle),
    // clamped between 240px and 70% of the viewport. The elevation chart is a
    // fraction of the width, clamped to a readable range; its container reserves
    // the chart height plus 20px (the plugin subtracts 20px for its scrollbar)
    // and then grows with its content, so the summary never overlaps the text below.
    const CHART_MIN = 120;
    const CHART_MAX = 260;
    const CHART_PAD = 20;

    function chartHeight(width) {
        return Math.max(CHART_MIN, Math.min(CHART_MAX, Math.round(width * 0.2)));
    }

    // Load each external file only once, even with multiple components on a page.
    const cache = {};

    function loadScript(src) {
        if (!cache[src]) {
            cache[src] = new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = () => reject(new Error('Could not load ' + src));
                document.head.appendChild(script);
            });
        }
        return cache[src];
    }

    function loadCss(href) {
        if (!document.querySelector('link[href="' + href + '"]')) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            document.head.appendChild(link);
        }
    }

    const STYLE_ID = 'gpx-viewer-style';

    function ensureStyle() {
        if (document.getElementById(STYLE_ID)) return;
        const style = document.createElement('style');
        style.id = STYLE_ID;
        style.textContent = [
            'gpx-viewer { display: block; }',
            'gpx-viewer .gpx-map { width: 100%; border-radius: 8px; }',
            'gpx-viewer .gpx-map.gpx-auto { aspect-ratio: 5 / 3; min-height: 240px; max-height: 70vh; }',
            'gpx-viewer .gpx-profile { width: 100%; margin-top: 10px; }',
            'gpx-viewer .gpx-error { border: 1px solid #a33; background: #fdd; color: #600;',
            '    padding: 12px; border-radius: 8px; font: 14px/1.4 sans-serif; }',
        ].join('\n');
        document.head.appendChild(style);
    }

    let counter = 0;

    class GpxViewer extends HTMLElement {
        async connectedCallback() {
            if (this._initialised) return;
            this._initialised = true;

            const id = ++counter;
            const mapId = 'gpx-map-' + id;
            const profileId = 'gpx-profile-' + id;

            const attachId = this.getAttribute('data-attach');
            const srcAttr = this.getAttribute('src');
            const url = attachId
                ? forumRoot() + 'download/file.php?id=' + encodeURIComponent(attachId)
                : srcAttr;

            const mapHeight = height(this.getAttribute('map-height'), config('mapHeight'));
            const profileHeight = height(this.getAttribute('profile-height'), config('profileHeight'));
            const maxZoom = zoom(this.getAttribute('max-zoom'), config('maxZoom'));
            this._maxZoom = maxZoom;
            const wantTime = flag(this.getAttribute('time'));

            // Light DOM (no Shadow DOM): Leaflet CSS and the elevation plugin's
            // selector-based "elevationDiv" don't work well inside a shadow root.
            ensureStyle();
            const autoMap = mapHeight === 'auto';
            const autoProfile = profileHeight === 'auto';
            this.innerHTML =
                '<div class="gpx-map' + (autoMap ? ' gpx-auto' : '') + '" id="' + mapId + '"' +
                    (autoMap ? '' : ' style="height:' + mapHeight + '"') + '></div>' +
                '<div class="gpx-profile' + (autoProfile ? ' gpx-auto' : '') + '" id="' + profileId + '"' +
                    (autoProfile ? '' : ' style="height:' + profileHeight + '"') + '></div>';

            const profileDiv = this.querySelector('.gpx-profile');
            const initialChartHeight = chartHeight(this.clientWidth || 600);
            if (autoProfile) {
                profileDiv.style.minHeight = (initialChartHeight + CHART_PAD) + 'px';
            }

            if (!url) {
                this._fail(message('noSource'));
                return;
            }

            let text;
            try {
                // Fetch and validate the route ourselves: the elevation plugin
                // only console.warns on bad input, which would leave a blank viewer.
                const response = await fetch(url, { credentials: 'same-origin' });
                if (!response.ok) {
                    this._fail(message('loadFailed'), 'HTTP ' + response.status);
                    return;
                }
                text = await response.text();
            } catch (err) {
                this._fail(message('loadFailed'), err && err.message);
                return;
            }

            let doc = null;
            try {
                doc = new DOMParser().parseFromString(text, 'application/xml');
            } catch (err) {
                doc = null;
            }

            if (!doc || !doc.documentElement || doc.querySelector('parsererror')
                || doc.documentElement.nodeName.toLowerCase() !== 'gpx') {
                this._fail(message('invalidRoute'));
                return;
            }
            if (!doc.querySelector('trkpt, rtept')) {
                this._fail(message('noPoints'));
                return;
            }

            // Without real timestamps the plugin invents times from an assumed
            // walking speed, so only show the time axis when the file has them.
            const showTime = wantTime && doc.querySelectorAll('trkpt > time, rtept > time').length >= 2;

            try {
                loadCss(LEAFLET_CSS);
                loadCss(ELEVATION_CSS);

                // Order matters: Leaflet -> D3 -> elevation plugin.
                await loadScript(LEAFLET_JS);
                await loadScript(D3_JS);
                await loadScript(ELEVATION_JS);

                // The plugin only installs its identity fallback when L._ is
                // missing, so this replacement stays in place.
                L._ = L.i18n = (string) => (Object.prototype.hasOwnProperty.call(LABELS, string) ? LABELS[string] : string);

                // The plugin keeps these as prototype properties (not options),
                // each pointing at unpkg by default.
                L.Control.Elevation.include({
                    __D3: D3_JS,
                    __TOGEOJSON: TOGEOJSON_JS,
                    __LGEOMUTIL: GEOMUTIL_JS,
                    __LALMOSTOVER: ALMOSTOVER_JS,
                });

                const map = L.map(mapId, { maxZoom: maxZoom }).setView([52.1, 5.2], Math.min(7, maxZoom));

                L.tileLayer(config('tileUrl'), {
                    maxZoom: maxZoom,
                    attribution: config('attribution'),
                }).addTo(map);

                const elevationControl = L.control.elevation({
                    theme: 'lightblue-theme',
                    detached: true,
                    elevationDiv: '#' + profileId,
                    autohide: false,
                    collapsed: false,
                    closeBtn: false,
                    summary: 'inline',
                    time: showTime,
                    edgeScale: false,
                    height: initialChartHeight,
                }).addTo(map);

                elevationControl.load(text);

                this._map = map;

                if (autoMap || autoProfile) {
                    this._observeSize(map, elevationControl, profileDiv, autoProfile);
                }
            } catch (err) {
                this._fail(message('renderFailed'), err && err.message);
            }
        }

        // Re-fit when the available width changes (window resize, rotation,
        // sidebar toggles). Only width changes count: height changes are our own.
        _observeSize(map, elevationControl, profileDiv, autoProfile) {
            if (typeof ResizeObserver === 'undefined') return;

            let lastWidth = this.clientWidth;
            let timer = null;

            this._observer = new ResizeObserver(() => {
                const width = this.clientWidth;
                if (width === lastWidth) return;
                lastWidth = width;

                clearTimeout(timer);
                timer = setTimeout(() => {
                    if (!this._map) return;
                    if (autoProfile) {
                        const h = chartHeight(width);
                        profileDiv.style.minHeight = (h + CHART_PAD) + 'px';
                        elevationControl.options.height = h;
                    }
                    // Fires Leaflet's "resize", which makes the plugin redraw the chart.
                    map.invalidateSize();
                }, 100);
            });
            this._observer.observe(this);
        }

        _fail(text, detail) {
            const box = document.createElement('div');
            box.className = 'gpx-error';
            box.setAttribute('role', 'alert');
            box.textContent = detail ? text + ' (' + detail + ')' : text;
            this.replaceChildren(box);
        }

        disconnectedCallback() {
            if (this._observer) {
                this._observer.disconnect();
                this._observer = null;
            }
            if (this._map) {
                this._map.remove();
            }
            this._map = null;
            this._initialised = false;
        }
    }

    customElements.define('gpx-viewer', GpxViewer);
})();
