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

/* @phpbb_viglink/event/overall_footer_after.html */
class __TwigTemplate_297dbb51867dd063d8c99373820690083330a229125fadaf0600dd5bb1629a48 extends \Twig\Template
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
        if (($context["VIGLINK_ENABLED"] ?? null)) {
            // line 2
            echo "<script";
            if (($context["S_CONSENTMANAGER_MARKETING_ENABLED"] ?? null)) {
                echo " type=\"text/plain\" data-consent-category=\"marketing\"";
            }
            echo ">
\tvar vglnk = {
\t\tkey: '";
            // line 4
            echo twig_escape_filter($this->env, ($context["VIGLINK_API_KEY"] ?? null), "js");
            echo "',
\t\tsub_id: '";
            // line 5
            echo twig_escape_filter($this->env, ($context["VIGLINK_SUB_ID"] ?? null), "js");
            echo "'
\t};

\t(function(d, t) {
\t\tvar s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
\t\ts.src = '//cdn.viglink.com/api/vglnk.js';
\t\tvar r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
\t}(document, 'script'));
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_viglink/event/overall_footer_after.html", "");
    }
}
