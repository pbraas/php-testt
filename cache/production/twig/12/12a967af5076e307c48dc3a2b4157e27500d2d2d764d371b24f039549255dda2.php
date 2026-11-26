<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* overall_header.html */
class __TwigTemplate_1b823a841849efd16f2690157390d3ec20395f9b0f88a50fb20a9f8bde9f985e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\" xml:lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
    <head>
        ";
        // line 4
        $location = "config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("config.html", "overall_header.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/favicon.png\" />
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <!-- Google Tag Manager (noscript) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

            })(window,document,'script','dataLayer','GTM-M5PL8LMD');</script>

        <!-- End Google Tag Manager -->


        Additionally, paste this code immediately after the opening <body> tag:

            <!-- Google Tag Manager (noscript) -->

            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-M5PL8LMD\"

                              height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
            <meta name=\"comboot-version\" content=\"1.1-rc5\">
                <meta name=\"comboot-channel\" content=\"";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "BETA", [], "any", false, false, false, 32) == 1)) {
            echo "beta";
        } else {
            echo "stable";
        }
        echo "\">

                    ";
        // line 34
        echo ($context["META"] ?? null);
        echo "
                    <title>";
        // line 35
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

                    ";
        // line 37
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 38
            echo "                    ";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 39
            echo "                        ";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 40
            echo "                            ";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 41
            echo "                                ";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 42
            echo "                                    ";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 43
            echo "                                        ";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 44
            echo "                                            ";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 45
            echo "                                                ";
            // line 46
            echo "                                                ";
        }
        // line 47
        echo "
                                                ";
        // line 48
        if (($context["U_CANONICAL"] ?? null)) {
            // line 49
            echo "                                                <link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
                                                    ";
        }
        // line 51
        echo "
                                                    <!--
                                                            phpBB style name: ComBoot Free
                                                            Based on style:   prosilver (this is the default phpBB3 style)
                                                            Original author:  Tom Beddard ( http://www.subBlue.com/ )
                                                            Modified by: Florian Gareis (http://www.florian-gareis.de)
                                                    -->

                                                    ";
        // line 59
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 60
            echo "                                                    <script>
                                                        WebFontConfig = {
                                                        google: {
                                                        families: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
                                                        }
                                                        };

                                                        (function (d) {
                                                        var wf = d.createElement('script'), s = d.scripts[0];
                                                        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
                                                        wf.async = true;
                                                        s.parentNode.insertBefore(wf, s);
                                                        })(document);
                                                    </script>
                                                    ";
        }
        // line 75
        echo "                                                    <link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">


                                                        ";
        // line 78
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 79
            echo "                                                        <link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
                                                            ";
        }
        // line 81
        echo "
                                                            ";
        // line 82
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 83
            echo "                                                            <link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
                                                                ";
        }
        // line 85
        echo "
                                                                ";
        // line 86
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 87
            echo "                                                                <link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
                                                                    ";
        }
        // line 89
        echo "
                                                                    <!--[if lte IE 9]>
                                                                            <link href=\"";
        // line 91
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
                                                                    <![endif]-->

                                                                    ";
        // line 94
        // line 95
        echo "
                                                                    ";
        // line 96
        $location = "additional_files.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("additional_files.html", "overall_header.html", 96)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 97
        echo "
                                                                    ";
        // line 98
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 98);
        echo "
                                                                    <link href=\"";
        // line 99
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
                                                                        ";
        // line 100
        // line 101
        echo "                                                                        <script>
\t\twindow.GPX_VIEWER_CONFIG = window.GPX_VIEWER_CONFIG || {
\t\t\ttileUrl: 'https://' + String.fromCharCode(123,115,125) + '.tile.openstreetmap.org/' + String.fromCharCode(123,122,125) + '/' + String.fromCharCode(123,120,125) + '/' + String.fromCharCode(123,121,125) + '.png',
\t\t\tattribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>',
\t\t\tmaxZoom: 19,
\t\t\tmapHeight: '450px',
\t\t\tprofileHeight: '180px'
\t\t};
\t</script>
\t<script src=\"/phpbb3/ext/wf/gpxviewer/assets/js/webcomponent.js\" defer></script>

                                                                        </head>

                                                                        <body id=\"phpbb\" class=\"nojs notouch section-{
                                                                              SCRIPT_NAME
                                                                              }
                                                                              {
                                                                              S_CONTENT_DIRECTION
                                                                              }
                                                                              {
                                                                              BODY_CLASS
                                                                              }
                                                                              ";
        // line 123
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "logged-in";
        }
        echo "\">

                                                                            ";
        // line 125
        // line 126
        echo "
                                                                            <div id=\"wrap\">
                                                                                <a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
                                                                                <div id=\"page-header\">
                                                                                    ";
        // line 130
        // line 131
        echo "                                                                                    ";
        // line 132
        echo "                                                                                    ";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 132)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 133
        echo "                                                                                    ";
        // line 134
        echo "                                                                                </div>

                                                                                <div class=\"jumbotron no-margin-bottom no-padding-bottom\">
                                                                                    <div class=\"container\">

                                                                                        <div class=\"block-menu-algemene-informatie\">
                                                                                            <ul id=\"menu-algemene-informatie\">
                                                                                                <li class=\"first leaf\"><a href=\"https://www.wereldfietser.nl/aanmelden\" target=\"_blank\">Lid worden</a></li>
                                                                                                <li class=\"last leaf\"><a href=\"https://www.wereldfietser.nl/contact\" target=\"_blank\" title=\"Contact met ons opnemen\">Contact</a></li>
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class=\"top-bar\">
                                                                                            <a id=\"logo\" class=\"logo\" href=\"";
        // line 147
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        }
        echo "\">";
        echo ($context["SITE_LOGO_IMG"] ?? null);
        echo "</a>
                                                                                            <p>";
        // line 148
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</p>
                                                                                            <p class=\"skiplink\"><a href=\"#start_here\">";
        // line 149
        echo $this->extensions['phpbb\template\twig\extension']->lang("SKIP");
        echo "</a></p>
                                                                                            <nav id=\"page-nav\">
                                                                                                <label for=\"hamburger\">&#9776;</label>
                                                                                                <input type=\"checkbox\" id=\"hamburger\"/>
                                                                                                <ul>
                                                                                                    <li class=\"active\"><a href=\"https://forum.wereldfietser.nl\">Forum home</a></li>\t\t\t\t
                                                                                                    <li><a href=\"https://www.wereldfietser.nl/\" target=\"_blank\">Website van de wereldfietser</a></li>\t\t\t\t
                                                                                                    <!-- <li><a href=\"https://www.wereldfietser.nl/\">Home</a></li>\t\t\t\t
                                                                                                    <li><a href=\"https://www.wereldfietser.nl/vereniging\">Vereniging</a></li>\t\t\t\t
                                                                                                    <li><a href=\"https://www.wereldfietser.nl/activiteiten\">Activiteiten</a></li>\t\t\t\t
                                                                                                    <li class=\"active\"><a href=\"https://forum.wereldfietser.nl\">Forum</a></li>\t\t\t\t
                                                                                                    <li><a href=\"https://www.wereldfietser.nl/fiets-en-landeninformatie\">Wiki</a></li> -->
                                                                                                </ul>
                                                                                            </nav>\t\t\t\t
                                                                                        </div>


                                                                                    </div>




                                                                                </div>

                                                                                ";
        // line 173
        // line 174
        echo "
                                                                                <a id=\"start_here\" class=\"anchor\"></a>
                                                                                <div class=\"container\" id=\"page-body\">
                                                                                    <div class=\"row\">
                                                                                        <div class=\"col-md-12\">
                                                                                            ";
        // line 179
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 180
        echo "                                                                                            ";
        // line 181
        echo "                                                                                            <ol class=\"breadcrumb no-margin-bottom\" id=\"nav-breadcrumbs\">
                                                                                                ";
        // line 182
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 183
            echo "                                                                                                <li><span class=\"crumb\"";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 183);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\"><i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i></span></a></span></li>
                                                                                                ";
        }
        // line 185
        echo "                                                                                                <li><span class=\"crumb\"";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 185);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span></a></span></li>
                                                                                                ";
        // line 186
        // line 187
        echo "                                                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "navlinks", [], "any", false, false, false, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 188
            echo "                                                                                                ";
            // line 189
            echo "                                                                                                <li><span class=\"crumb\"";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 189);
            echo "><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", false, false, false, 189);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 189)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 189);
            }
            echo " itemprop=\"url\"><span itemprop=\"title\">";
            echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", false, false, false, 189);
            echo "</span></a></span></li>
                                                                                                ";
            // line 190
            // line 191
            echo "                                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                                                                                                ";
        // line 193
        echo "                                                                                            </ol>
                                                                                            ";
        // line 194
        // line 195
        echo "                                                                                        </div>
                                                                                    </div>
                                                                                    ";
        // line 197
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 198
            echo "                                                                                    <div id=\"information\" class=\"row\">
                                                                                        <div class=\"col-md-12\">
                                                                                            <div class=\"alert alert-danger rules\">
                                                                                                <strong>";
            // line 201
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    ";
        }
        // line 206
        echo "
                                                                                    ";
        // line 207
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 207,  554 => 206,  543 => 201,  538 => 198,  536 => 197,  532 => 195,  531 => 194,  528 => 193,  526 => 192,  520 => 191,  519 => 190,  505 => 189,  503 => 188,  498 => 187,  497 => 186,  486 => 185,  478 => 183,  476 => 182,  473 => 181,  471 => 180,  468 => 179,  461 => 174,  460 => 173,  433 => 149,  429 => 148,  413 => 147,  398 => 134,  396 => 133,  383 => 132,  381 => 131,  380 => 130,  374 => 126,  373 => 125,  366 => 123,  342 => 101,  341 => 100,  337 => 99,  333 => 98,  330 => 97,  318 => 96,  315 => 95,  314 => 94,  306 => 91,  302 => 89,  294 => 87,  292 => 86,  289 => 85,  281 => 83,  279 => 82,  276 => 81,  268 => 79,  266 => 78,  259 => 75,  242 => 60,  240 => 59,  230 => 51,  224 => 49,  222 => 48,  219 => 47,  216 => 46,  214 => 45,  201 => 44,  188 => 43,  177 => 42,  166 => 41,  155 => 40,  144 => 39,  133 => 38,  131 => 37,  106 => 35,  102 => 34,  93 => 32,  64 => 6,  61 => 5,  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
