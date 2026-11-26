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

/* ucp_header.html */
class __TwigTemplate_8fff7640f944bf5c057b52d5c4082e0872fefed812dbed2c3d38bdc95e60a4a5 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
        echo "</h2>
</div>

<div id=\"ucp-container\">
\t<ul class=\"nav nav-tabs nav-justified\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block1", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 10
            echo "\t\t<li role=\"presentation\" ";
            if (twig_get_attribute($this->env, $this->source, $context["t_block1"], "S_SELECTED", [], "any", false, false, false, 10)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t_block1"], "U_TITLE", [], "any", false, false, false, 10);
            echo "\"><span>";
            echo twig_get_attribute($this->env, $this->source, $context["t_block1"], "L_TITLE", [], "any", false, false, false, 10);
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

\t<div class=\"well\" id=\"ucp-nav\">
\t\t";
        // line 15
        if (($context["S_COMPOSE_PM"] ?? null)) {
            // line 16
            echo "\t\t\t<form id=\"postform\" method=\"post\" action=\"";
            echo ($context["S_POST_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">
\t\t";
        }
        // line 18
        echo "\t\t<div class=\"row\">
\t\t\t<div id=\"cp-menu\" class=\"col-md-2\">
\t\t\t\t<div  id=\"navigation\" role=\"navigation\">
\t\t\t\t\t";
        // line 21
        if (($context["S_PRIVMSGS"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block2", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["S_PRIVMSGS"] ?? null) &&  !twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_LAST_ROW", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_SELECTED", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 26);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 26);
                        echo "</span></a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 28);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 28);
                        echo "</span></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "folder", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_FIRST_ROW", [], "any", false, false, false, 35)) {
                }
                // line 36
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_CUR_FOLDER", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["folder"], "U_FOLDER", [], "any", false, false, false, 37);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 37) > 0)) {
                        echo "<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 37);
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 37);
                        echo ")</strong>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 37);
                    }
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["folder"], "U_FOLDER", [], "any", false, false, false, 39);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 39) > 0)) {
                        echo "<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 39);
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 39);
                        echo ")</strong>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 39);
                    }
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_LAST_ROW", [], "any", false, false, false, 41)) {
                }
                // line 42
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block2", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 47
            echo "\t\t\t\t\t\t\t";
            if (((($context["S_PRIVMSGS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_LAST_ROW", [], "any", false, false, false, 47)) ||  !($context["S_PRIVMSGS"] ?? null))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_SELECTED", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 49);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 50);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 53);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 54);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 60
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_online", [], "any", false, false, false, 60)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 60)))) {
            // line 61
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 63
            echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS");
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_online", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<div class=\"friend-online\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS_ONLINE");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["friends_online"], "USERNAME_FULL", [], "any", false, false, false, 65);
                echo " ";
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo twig_get_attribute($this->env, $this->source, $context["friends_online"], "USER_ID", [], "any", false, false, false, 65);
                    echo "]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-success\" />";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["friends_online"], "S_LAST_ROW", [], "any", false, false, false, 65) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 65)))) {
                    echo "<hr />";
                }
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<div class=\"friend-offline\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["friends_offline"], "USERNAME_FULL", [], "any", false, false, false, 68);
                echo " ";
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo twig_get_attribute($this->env, $this->source, $context["friends_offline"], "USER_ID", [], "any", false, false, false, 68);
                    echo "]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-danger\" />";
                }
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t";
        if (($context["S_SHOW_COLOUR_LEGEND"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 76
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_COLOURS");
            echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pm_colour_info", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t<div class=\"pm-legend";
                if (twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "CLASS", [], "any", false, false, false, 80)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "CLASS", [], "any", false, false, false, 80);
                }
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "IMG", [], "any", false, false, false, 80)) {
                    echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "IMG", [], "any", false, false, false, 80);
                    echo " ";
                }
                echo "<small>";
                echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "LANG", [], "any", false, false, false, 80);
                echo "</small></div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"cp-main\" class=\"ucp-main panel-container col-md-10\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 85,  349 => 82,  330 => 80,  326 => 79,  320 => 76,  316 => 74,  313 => 73,  308 => 70,  289 => 68,  284 => 67,  262 => 65,  258 => 64,  254 => 63,  250 => 61,  248 => 60,  245 => 59,  239 => 58,  236 => 57,  230 => 54,  225 => 53,  219 => 50,  214 => 49,  211 => 48,  208 => 47,  204 => 46,  201 => 45,  197 => 43,  191 => 42,  187 => 41,  171 => 39,  155 => 37,  152 => 36,  148 => 35,  144 => 34,  140 => 32,  134 => 31,  131 => 30,  123 => 28,  115 => 26,  112 => 25,  109 => 24,  105 => 23,  102 => 22,  100 => 21,  95 => 18,  87 => 16,  85 => 15,  80 => 12,  65 => 10,  61 => 9,  53 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_header.html", "");
    }
}
