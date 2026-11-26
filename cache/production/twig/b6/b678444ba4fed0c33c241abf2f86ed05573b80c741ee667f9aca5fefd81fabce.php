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

/* notification_dropdown.html */
class __TwigTemplate_fdfbef269e045c0b256c471bf85daf58700c3a97388a978b637042d0d6b2e4fa extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
        echo " <span class=\"pull-right\"><a href=\"";
        echo ($context["U_NOTIFICATION_SETTINGS"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SETTINGS");
        echo "</a></span></div>
\t";
        // line 3
        if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"panel-body\">
\t\t\t<span id=\"mark_all_notifications\"><button class=\"btn btn-warning btn-block\" type=\"button\" onclick=\"window.location.href='";
            // line 5
            echo ($context["U_MARK_ALL_NOTIFICATIONS"] ?? null);
            echo "'\" data-ajax=\"notification.mark_all_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL_READ");
            echo "</button></span>
\t\t</div>
\t";
        }
        // line 8
        echo "\t<ul class=\"list-group\">
\t\t";
        // line 9
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notifications", [], "any", false, false, false, 9))) {
            // line 10
            echo "\t\t\t<li class=\"list-group-item no_notifications\">
\t\t\t\t";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t</li>
\t\t";
        }
        // line 14
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notifications", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 15
            echo "\t\t\t<li class=\"list-group-item ";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 15)) {
                echo " list-group-item-info";
            }
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "STYLING", [], "any", false, false, false, 15)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "STYLING", [], "any", false, false, false, 15);
            }
            if ( !twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 15)) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t\t\t\t\t<a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 17)) {
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "U_MARK_READ", [], "any", false, false, false, 17);
                    echo "\" data-real-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 17);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 17);
                }
                echo "\">
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t<div class=\"row notification\">
\t\t\t\t\t<div class=\"col-xs-2 notification-avatar\">
\t\t\t\t\t\t";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "AVATAR", [], "any", false, false, false, 21)) {
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "AVATAR", [], "any", false, false, false, 21);
            } else {
                echo "<img class=\"avatar notification-avatar\" src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 22
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["notifications"], "FORMATTED_TITLE", [], "any", false, false, false, 25);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "REFERENCE", [], "any", false, false, false, 26)) {
                echo "<p class=\"notification-reference\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "REFERENCE", [], "any", false, false, false, 26);
                echo "</p>";
            }
            // line 27
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "FORUM", [], "any", false, false, false, 27)) {
                echo "<p class=\"notification-forum\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "FORUM", [], "any", false, false, false, 27);
                echo "</p>";
            }
            // line 28
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "REASON", [], "any", false, false, false, 28)) {
                echo "<p class=\"notification-reason\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "REASON", [], "any", false, false, false, 28);
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo twig_get_attribute($this->env, $this->source, $context["notifications"], "TIME", [], "any", false, false, false, 29);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 33)) {
                echo "</a>";
            }
            // line 34
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "U_MARK_READ", [], "any", false, false, false, 35);
                echo "\" class=\"mark_read\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                echo "\"><i class=\"fa fa-check-circle-o fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</ul>
\t<div class=\"panel-footer\">
\t\t<button class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"window.location.href='";
        // line 41
        echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
        echo "'\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEE_ALL");
        echo "</button>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 41,  179 => 39,  172 => 37,  164 => 35,  161 => 34,  157 => 33,  149 => 29,  142 => 28,  135 => 27,  129 => 26,  125 => 25,  120 => 22,  112 => 21,  108 => 19,  96 => 17,  94 => 16,  80 => 15,  75 => 14,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  53 => 5,  50 => 4,  48 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification_dropdown.html", "");
    }
}
