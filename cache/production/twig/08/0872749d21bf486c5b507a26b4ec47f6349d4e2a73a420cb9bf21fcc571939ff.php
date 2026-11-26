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

/* ucp_prefs_personal.html */
class __TwigTemplate_75141d324f8759c83b6c8e7095deed33b804409efcac5eeae7ec3b1aaaf1bd7c extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t";
        // line 13
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"alert alert-danger\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 14
        echo "\t\t\t";
        // line 15
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("SHOW_EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"viewemail1\" class=\"radio-inline\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
        // line 20
        if (($context["S_VIEW_EMAIL"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"viewemail0\" class=\"radio-inline\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
        // line 21
        if ( !($context["S_VIEW_EMAIL"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"massemail1\" class=\"radio-inline\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 29
        if (($context["S_MASS_EMAIL"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"massemail0\" class=\"radio-inline\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 30
        if ( !($context["S_MASS_EMAIL"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_PM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"allowpm1\" class=\"radio-inline\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 38
        if (($context["S_ALLOW_PM"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"allowpm0\" class=\"radio-inline\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 39
        if ( !($context["S_ALLOW_PM"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t";
        // line 41
        echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_PM_EXPLAIN");
        echo "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 45
        if (($context["S_CAN_HIDE_ONLINE"] ?? null)) {
            // line 46
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ONLINE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<label for=\"hideonline1\" class=\"radio-inline\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 51
            if (($context["S_HIDE_ONLINE"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t\t\t\t<label for=\"hideonline0\" class=\"radio-inline\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 52
            if ( !($context["S_HIDE_ONLINE"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ONLINE_EXPLAIN");
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "\t\t\t";
        if (($context["S_SELECT_NOTIFY"] ?? null)) {
            // line 60
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<label for=\"notifymethod0\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 65
            if (($context["S_NOTIFY_EMAIL"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t\t\t<label for=\"notifymethod1\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 66
            if (($context["S_NOTIFY_IM"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t\t\t<label for=\"notifymethod2\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 67
            if (($context["S_NOTIFY_BOTH"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 71
        echo "\t\t\t";
        if (($context["S_MORE_LANGUAGES"] ?? null)) {
            // line 72
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 74
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_LANGUAGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "
\t\t\t\t\t</label>

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<select name=\"lang\" id=\"lang\">";
            // line 78
            echo ($context["S_LANG_OPTIONS"] ?? null);
            echo "</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if ((($context["S_STYLE_OPTIONS"] ?? null) && ($context["S_MORE_STYLES"] ?? null))) {
            // line 83
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_STYLE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "
\t\t\t\t\t</label>

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<select name=\"user_style\" id=\"user_style\">";
            // line 89
            echo ($context["S_STYLE_OPTIONS"] ?? null);
            echo "</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 93
        echo "\t\t\t";
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_prefs_personal.html", 93)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 94
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 96
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DATE_FORMAT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<select name=\"dateoptions\" id=\"dateoptions\" class=\"form-control\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">
\t\t\t\t\t\t";
        // line 100
        echo ($context["S_DATEFORMAT_OPTIONS"] ?? null);
        echo "
\t\t\t\t\t</select>
\t\t\t\t\t<div id=\"custom_date\" style=\"display:none;\">
\t\t\t\t\t\t<input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
        // line 103
        echo ($context["DATE_FORMAT"] ?? null);
        echo "\" maxlength=\"64\" class=\"form-control\" style=\"margin-top: 3px;\" />
\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t";
        // line 105
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DATE_FORMAT_EXPLAIN");
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 110
        // line 111
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 115
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 116
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 117
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

<script type=\"text/javascript\">
// <![CDATA[
\tvar date_format = '";
        // line 125
        echo ($context["A_DATE_FORMAT"] ?? null);
        echo "';
\tvar default_dateformat = '";
        // line 126
        echo ($context["A_DEFAULT_DATEFORMAT"] ?? null);
        echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
// ]]>
</script>

";
        // line 159
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 159)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 159,  366 => 126,  362 => 125,  351 => 117,  347 => 116,  341 => 115,  335 => 111,  334 => 110,  326 => 105,  321 => 103,  315 => 100,  307 => 96,  303 => 94,  290 => 93,  283 => 89,  275 => 85,  271 => 83,  268 => 82,  261 => 78,  253 => 74,  249 => 72,  246 => 71,  235 => 67,  227 => 66,  219 => 65,  212 => 62,  208 => 60,  205 => 59,  197 => 54,  188 => 52,  180 => 51,  173 => 48,  169 => 46,  167 => 45,  160 => 41,  151 => 39,  143 => 38,  136 => 35,  124 => 30,  116 => 29,  109 => 26,  97 => 21,  89 => 20,  82 => 17,  78 => 15,  76 => 14,  70 => 13,  62 => 8,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_prefs_personal.html", "");
    }
}
