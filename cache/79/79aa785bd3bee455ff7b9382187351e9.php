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

/* views/front/blog_cat_items.html.twig */
class __TwigTemplate_b66d2a919fe32a9735e3342ffcc5435d extends \Twig\Template
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
        <div class=\"container mx-auto relative z-10  px-1\">
        
            <div class=\"title-gradient rounded-lg py-2 mt-12 my-2 pl-40 pr-6 purple-color font-semibold text-xl \" style=\"width: max-content;\">
                <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "content", [], "any", false, false, false, 5), "prefix", [], "any", false, false, false, 5), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["catTitle"] ?? null), "html", null, true);
        echo "</a>
            </div>

            <div class=\"custom-scroll-container custom-scroll container grid mx-auto relative z-10 \" >
                <div class=\"custom-scroll-list block lg:grid my-4 lg:grid-cols-2 gap gap-3 lg:gap-0 sm:grid-cols-2 w-full \">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catItemsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    <div class=\" relative custom-scroll-item blog-main-item lg:flex block w-full \">
                        <div class=\"blog-item-img lg:w-5/12\">
                            <img width=\"350\" height=\"232\" loading=\"lazy\" src=\"/stream?image=";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "method", false, false, false, 13), "html", null, true);
            echo "\" class=\"rounded-lg rounded w-full my-2 lg:my-4\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"blog-item-content lg:w-7/12\">
                            <div class=\"py-2 lg:py-6 lg:pr-6 lg:px-10 px-2\">
                                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 17), "prefix", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"block  font-semibold text-sm cyan-color\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "update_date", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 18), "prefix", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"py-2 block font-bold purple-color lg:text-xl text-base\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                                <p class=\" font-semibold text-gray-600 lg:text-base text-sm\">";
            // line 19
            echo twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 19), "content", [], "any", false, false, false, 19)), 0, 180);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
            </div>

            <a href=\"/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "content", [], "any", false, false, false, 27), "prefix", [], "any", false, false, false, 27), "html", null, true);
        echo "\" class=\"text-center mx-auto w-40 block font-semibold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "show More"], "method", false, false, false, 27), "html", null, true);
        echo "</a>

        </div>";
    }

    public function getTemplateName()
    {
        return "views/front/blog_cat_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  93 => 24,  82 => 19,  76 => 18,  70 => 17,  61 => 13,  57 => 11,  53 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/blog_cat_items.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\blog_cat_items.html.twig");
    }
}
