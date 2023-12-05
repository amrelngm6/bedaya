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

/* views/front/includes/specializations_switch.html.twig */
class __TwigTemplate_204a477384bbab5ba6fb57b326653b1f extends \Twig\Template
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
        <span :set=\"childs = []\"></span>
        <div class=\"container mx-auto relative lg:block z-10\">
            <div class=\"lg:grid lg:grid-cols-5 custom-scroll lg:overflow-hidden overflow-auto lg:h-64 lg:h-auto md:h-full sm:h-full  flex lg:w-full gap-6 lg:px-10 px-2 py-2 content-center mt-4\" style=\"align-content:baseline\" id=\"switch-cat\">

                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["specializations"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "content", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "content", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div data-childs=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"spec-item lg:block flex border-1  text-center border border-purple-300 cursor-pointer rounded-tl-2xl rounded-br-2xl bg-white   hover:bg-blue-400 lg:px-4 px-2 py-2 lg:pt-6 text-black hover:text-white switch-hover\">
                    ";
            // line 8
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 8)) > 0)) {
                echo " 
                    <img loading=\"lazy\" width=\"78\" height=\"78\" alt=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
                echo "\" src=\"/stream?image=/uploads/img/specialization-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 9), "html", null, true);
                echo "-dark.webp\" class=\"mx-auto pic-1 lg:w-auto w-10\">
                    <img loading=\"lazy\" alt=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
                echo "\" src=\"/stream?image=/uploads/img/specialization-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo ".webp\" class=\"mx-auto mx-auto pic-2 lg:w-auto w-10\">
                    ";
            } else {
                // line 12
                echo "                    <img loading=\"lazy\" width=\"78\" height=\"78\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" src=\"/stream?image=/uploads/img/specialization-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "-dark.webp\" class=\"mx-auto pic-1 lg:w-auto w-10\">
                    <img loading=\"lazy\" alt=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\" src=\"/stream?image=/uploads/img/specialization-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo ".webp\" class=\"mx-auto mx-auto pic-2 lg:w-auto w-10\">
                    ";
            }
            // line 15
            echo "                    <p class=\"w-full pt-4 px-2 lg:text-lg text-base font-semibold lg:font-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
            </div>
            <div class=\"w-full block text-center mx-auto lg:mt-0 lg:ml-auto mt-2 ml-2 px-4 \">
                <div class=\"gap-4 w-full block\" id=\"cat-content\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["specializations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "childs", [], "any", false, false, false, 22), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "content", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "content", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "                    <a class=\"lg:inline-block block lg:mx-2 my-2 py-2 px-4 lightcyan-bg font-semibold purple-color border border-purple-400 rounded-lg\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "content", [], "any", false, false, false, 23), "prefix", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "content", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "views/front/includes/specializations_switch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  106 => 23,  102 => 22,  96 => 18,  86 => 15,  78 => 13,  70 => 12,  63 => 10,  57 => 9,  53 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/specializations_switch.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\specializations_switch.html.twig");
    }
}
