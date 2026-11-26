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

/* overall_footer.html */
class __TwigTemplate_0f489f08477dba3549dd772cd89c0e4829550d44a719ae285cdd33676185c229 extends \Twig\Template
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
        echo "\t\t\t\t</div>
\t\t\t";
        // line 2
        // line 3
        echo "
\t\t\t";
        // line 4
        // line 5
        echo "
\t\t\t<div id=\"page-footer\" class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 8
        if ((($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null))) {
            // line 9
            echo "\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
            // line 11
            if (($context["U_MCP"] ?? null)) {
                // line 12
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t\t\t\t\t";
            if (($context["U_ACP"] ?? null)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) || (($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)))) {
            // line 21
            echo "\t\t\t\t\t\t<div class=\"col-md-2 pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group dropup pull-right\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\" display: block; \">
\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_UNANSWERED"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                // line 30
                if (($context["S_LOAD_UNREADS"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo ($context["U_SEARCH_UNREAD"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"rightside\"><a href=\"";
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" accesskey=\"m\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo ($context["U_MARK_FORUMS"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_SUBFORUMS_READ");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"copyright text-center\">
\t\t\t\t\t";
        // line 53
        // line 54
        echo "\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 56
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 57
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert alert alert-info\" data-l-err=\"";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t<strong class=\"alert_title\">&nbsp;</strong><p class=\"alert_text\"></p>
\t\t\t\t</div>
\t\t\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t<div class=\"alert_text\"></div>
\t\t\t\t</div>
\t\t\t\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t\t\t\t";
        // line 70
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 71
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"wf_footer\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 77
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/footer-logo.svg\" />\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<nav class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t      <ul>
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"/\">Forum home</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"https://forum.wereldfietser.nl/\" target=\"_blank\"></a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.wereldfietser.nl/\" target=\"_newwindow\">Website van de wereldfietser</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- <li><a href=\"https://www.wereldfietser.nl/vereniging\">Vereniging</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.wereldfietser.nl/activiteiten\">Activiteiten</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"https://forum.wereldfietser.nl\">Forum</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.wereldfietser.nl/fiets-en-landeninformatie\">Wiki</a></li> -->
\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</nav>\t
\t\t\t\t\t
\t\t\t\t</div>\t
\t\t\t</div>\t
\t\t</div>\t
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 97
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
\t\t";
        // line 98
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 99
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
\t\t";
        // line 100
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 101
        echo "\t\t";
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 102
        echo "
\t\t";
        // line 103
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 104
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t(function(\$){
\t\t\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 109
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\t\t\$fa_cdn.remove();
\t\t\t\t\t}
\t\t\t\t\t\$span.remove();
\t\t\t\t})(jQuery);
\t\t\t</script>
\t\t";
        }
        // line 116
        echo "
\t\t";
        // line 117
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 118
            echo "\t\t\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t\t\t<script>
\t\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\t\"message\": \"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\t\"dismiss\": \"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\t\"link\": \"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\"
\t\t\t\t\t\t}
\t\t\t\t\t})});
\t\t\t</script>
\t\t";
        }
        // line 139
        echo "
\t\t";
        // line 140
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 141
        echo "
\t\t";
        // line 142
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 142)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 143
        echo "\t\t";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 143);
        echo "

\t\t<script type=\"text/javascript\">
\t\t\t\$( document ).ready(function(\$){
\t\t\t\t";
        // line 147
        if (($context["S_MERGE_VIEW"] ?? null)) {
            // line 148
            echo "\t\t\t\t\t\$('#merge-panel-tab').tab('show');
\t\t\t\t";
        } elseif (        // line 149
($context["S_SPLIT_VIEW"] ?? null)) {
            // line 150
            echo "\t\t\t\t\t\$('#split-panel-tab').tab('show');
\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\$('#display-panel-tab').tab('show');
\t\t\t\t";
        }
        // line 154
        echo "\t\t\t});

\t\t\t";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "AJAX_PAGELOAD", [], "any", false, false, false, 156) == 1)) {
            // line 157
            echo "\t\t\t\t\t\$(document).pjax('a', '#wrap', {fragment: '#wrap'});
\t\t\t";
        }
        // line 159
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "PAGELOAD_INDICATOR", [], "any", false, false, false, 159) == 1)) {
            // line 160
            echo "\t\t\t\t\$primaryColor = \$('.btn-primary').css('background-color');
\t\t\t\t\$('.pace .pace-progress').css('background-color', \$primaryColor);
\t\t\t";
        }
        // line 163
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "AUTOSAVE", [], "any", false, false, false, 163) == 1)) {
            // line 164
            echo "\t\t\t\tif( \$('#message, #subject').val() ) {
\t\t\t\t\t\$('#message, #subject').phoenix('remove');
\t\t\t\t}
\t\t\t\t\$('#message, #subject').phoenix();
\t\t\t\t\$('#postform, #qr_postform').submit(function(e){
\t\t\t\t\t\$('#message, #subject').phoenix('remove');
\t\t\t\t});
\t\t\t";
        }
        // line 172
        echo "\t\t</script>

\t\t";
        // line 174
        // line 175
        echo "\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 175,  441 => 174,  437 => 172,  427 => 164,  424 => 163,  419 => 160,  416 => 159,  412 => 157,  410 => 156,  406 => 154,  402 => 152,  398 => 150,  396 => 149,  393 => 148,  391 => 147,  383 => 143,  369 => 142,  366 => 141,  361 => 140,  358 => 139,  350 => 134,  346 => 133,  342 => 132,  322 => 118,  320 => 117,  317 => 116,  307 => 109,  300 => 104,  298 => 103,  295 => 102,  280 => 101,  266 => 100,  259 => 99,  251 => 98,  247 => 97,  224 => 77,  216 => 71,  212 => 70,  198 => 61,  183 => 57,  180 => 56,  174 => 55,  172 => 54,  171 => 53,  167 => 51,  160 => 46,  157 => 45,  149 => 43,  146 => 42,  143 => 41,  135 => 39,  132 => 38,  124 => 36,  116 => 34,  113 => 33,  105 => 31,  103 => 30,  96 => 29,  94 => 28,  85 => 21,  82 => 20,  77 => 17,  69 => 15,  66 => 14,  58 => 12,  56 => 11,  52 => 9,  50 => 8,  45 => 5,  44 => 4,  41 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
