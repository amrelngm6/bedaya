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

/* views/front/includes/header-banner.html.twig */
class __TwigTemplate_d091f577331bb8cbc789611ee2422ee3 extends \Twig\Template
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "isMobileDevice", [], "any", false, false, false, 2)) {
            // line 3
            echo "<img alt=\"Bedaya\" height=\"900\" width=\"500\" class=\"lg:hidden block w-full home-bg mx-auto relative\" style=\"max-width: 100%; z-index:999\" src=\"/stream?image=/uploads/images/banner2.webp\">
";
        } else {
            // line 5
            echo "<img alt=\"Bedaya\" height=\"1400\" width=\"700\" class=\"lg:block hidden w-full home-bg mx-auto relative\" style=\"max-width: 100%; z-index:999\" src=\"/stream?image=/uploads/images/banner1.webp\">
<img alt=\"Bedaya\" height=\"1400\" width=\"700\" class=\"lg:hidden block w-full home-bg mx-auto relative\" style=\"max-width: 100%; z-index:999\" src=\"/stream?image=/uploads/images/banner2.webp\">
";
        }
    }

    public function getTemplateName()
    {
        return "views/front/includes/header-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/header-banner.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\header-banner.html.twig");
    }
}
