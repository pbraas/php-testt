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

/* config.html */
class __TwigTemplate_b18d66464ecc1333daede2b2345bb78a1e3ed092a06d6f99439f1a3c6aa4a5db extends \Twig\Template
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
        $value = 1;
        $context['definition']->set('BETA', $value);
        // line 2
        $value = 0;
        $context['definition']->set('THEME_FILE', $value);
        // line 3
        $value = 1;
        $context['definition']->set('NOTIFICATION', $value);
        // line 4
        $value = 1;
        $context['definition']->set('PAGELOAD_INDICATOR', $value);
        // line 5
        $value = 0;
        $context['definition']->set('AJAX_PAGELOAD', $value);
        // line 6
        $value = 1;
        $context['definition']->set('AUTOSAVE', $value);
        // line 7
        $value = 1;
        $context['definition']->set('LIGHTBOX', $value);
        // line 8
        $value = 1;
        $context['definition']->set('VALUE_SLIDER', $value);
        // line 9
        echo "
";
        // line 10
        $value = "ONLINE";
        $context['definition']->set('ONLINE_BADGE', $value);
        // line 11
        $value = "OFFLINE";
        $context['definition']->set('OFFLINE_BADGE', $value);
    }

    public function getTemplateName()
    {
        return "config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "config.html", "");
    }
}
