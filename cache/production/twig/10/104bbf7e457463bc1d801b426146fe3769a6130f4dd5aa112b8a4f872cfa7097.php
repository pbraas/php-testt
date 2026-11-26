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

/* timezone_option.html */
class __TwigTemplate_817feb9561efda9c79e51658f58681e82705ef383b1c07a354b22dbb63f3a711 extends \Twig\Template
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
        echo "<div class=\"form-group\">
\t<label for=\"timezone\" class=\"form-label col-md-4\">
\t\t";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_TIMEZONE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
\t</label>

\t<div class=\"col-md-8\">

\t\t";
        // line 8
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "timezone_date", [], "any", false, false, false, 8))) {
            // line 9
            echo "\t\t<div id=\"tz_select_date\" style=\"display: none;\" class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"form-control no-selectpicker tz_select\">
\t\t\t\t\t<option value=\"\">";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "timezone_date", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_date"]) {
                // line 14
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_date"], "VALUE", [], "any", false, false, false, 14);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["timezone_date"], "SELECTED", [], "any", false, false, false, 14)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_date"], "TITLE", [], "any", false, false, false, 14);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"btn btn-default\" style=\"display: none;\" timezone-preselect=\"";
            // line 19
            if (($context["S_TZ_PRESELECT"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<select name=\"tz\" id=\"timezone\" class=\"form-control no-selectpicker tz_select timezone\">
\t\t\t\t\t<option value=\"\">";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "timezone_select", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 28
            echo "\t\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone_select"], "LABEL", [], "any", false, false, false, 28);
            echo "\" data-tz-value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone_select"], "VALUE", [], "any", false, false, false, 28);
            echo "\">
\t\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["timezone_select"], "timezone_options", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 30
                echo "\t\t\t\t\t\t\t<option title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "TITLE", [], "any", false, false, false, 30);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "VALUE", [], "any", false, false, false, 30);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["timezone_options"], "SELECTED", [], "any", false, false, false, 30)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "LABEL", [], "any", false, false, false, 30);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t</select>
\t\t\t</div>

\t\t\t";
        // line 37
        $asset_file = "timezone.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 38
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 38,  153 => 37,  148 => 34,  141 => 32,  124 => 30,  120 => 29,  113 => 28,  109 => 27,  105 => 26,  100 => 23,  85 => 19,  80 => 16,  65 => 14,  61 => 13,  57 => 12,  52 => 9,  50 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "timezone_option.html", "");
    }
}
