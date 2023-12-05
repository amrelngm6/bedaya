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

/* views/front/includes/doctors_block.html.twig */
class __TwigTemplate_1c4005b5af0d3a0cf94fca94aa7a3a84 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["doctors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "                <div class=\" relative custom-scroll-item\">
                    <div style=\"top:-15px\" class=\"absolute z-10 right-0 left-0 top-0 w-20 rounded-full border-4 border border-white mx-auto bg-white\">
                        <img loading=\"lazy\" alt=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
            echo "\" src=\"/app/image.php?w=110&h=110&src=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "method", false, false, false, 5), "html", null, true);
            echo "\" class=\"w-20 h-20 rounded-full\" />
                    </div>
                    <div class=\"relative rounded-tl-2xl rounded-br-2xl m-2 mx-4 bg-white lg:py-10 lg:px-6 py-10 px-2 pb-6\">
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 8), "prefix", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"block text-center pt-6 pb-2 w-full text-xl text-gray-800 font-semibold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</a>
                        <span class=\"block text-center  pb-2 w-full text-base cyan-color font-semibold\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prefex", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                        <div class=\"mb-4 text-gray-600  font-semibold custom-scroll h-32 p-2 overflow-auto\">
                            <p>";
            // line 11
            echo twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 11), "content", [], "any", false, false, false, 11)), 0, 500);
            echo "</p>
                        </div>
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "CONF", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 13), "prefix", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"block mx-auto w-32 py-2 px-6 bg-blue-100 text-center rounded-lg\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "more"], "method", false, false, false, 13), "html", null, true);
            echo "</a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "views/front/includes/doctors_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 11,  62 => 9,  56 => 8,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/doctors_block.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\doctors_block.html.twig");
    }
}
