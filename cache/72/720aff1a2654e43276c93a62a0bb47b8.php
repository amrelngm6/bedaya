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

/* views/front/services_bottom.html.twig */
class __TwigTemplate_04caab8e8731e578b593075dfe1d5209 extends \Twig\Template
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
        echo "    ";
        if (($context["specializations"] ?? null)) {
            // line 2
            echo "
    <div class=\"relative pb-20  w-full overflow-hidden px-1\">
        <img alt=\"circle\" loading=\"lazy\" src=\"/stream?image=/uploads/img/circles-bg.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: 0.05;\" />

        <div class=\"container mx-auto relative z-10\">
        
            <h4 class=\"title-gradient rounded-lg py-2 mt-12 my-2 pl-40 pr-6 purple-color font-semibold text-xl \" style=\"width: max-content;\">
                ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Bedaya services"], "method", false, false, false, 9), "html", null, true);
            echo "
            </h4>
            
            <div class=\"lg:flex  gap-3 gap row\">
                
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["specializations"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15) > 6)) {
                    // line 16
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) < 9)) {
                        // line 17
                        echo "                <div class=\"blog-main-item lg:flex block w-full\">
                    <div class=\"blog-item-img lg:w-5/12\">
                        <a href=\"";
                        // line 19
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 19), "prefix", [], "any", false, false, false, 19), "html", null, true);
                        echo "\"><img loading=\"lazy\" src=\"/stream?image=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "photo", [], "any", false, false, false, 19), "html", null, true);
                        echo "\" class=\"rounded-lg w-full h-full py-4 lg:py-6\" width=\"400\" height=\"400\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19), "html", null, true);
                        echo "\"></a>
                    </div>
                    <div class=\"blog-item-content lg:w-7/12\">
                        <div class=\"py-2 lg:py-6 lg:pr-6 lg:px-10 px-2\">
                            <a href=\"";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 23), "prefix", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" class=\"lg:py-4 py-2 block font-bold purple-color lg:text-xl md:text-lg text-lg\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
                        echo "</a>
                            <p class=\" font-semibold text-gray-600 lg:text-base text-sm\">";
                        // line 24
                        echo twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 24), "content", [], "any", false, false, false, 24)), 0, 200);
                        echo ".. <a class=\"text-gray-400 \" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 24), "prefix", [], "any", false, false, false, 24), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "more"], "method", false, false, false, 24), "html", null, true);
                        echo "</a> </p>
                        </div>
                    </div>
                </div>
                ";
                    }
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
            </div>

        </div>
    </div>
                ";
        }
    }

    public function getTemplateName()
    {
        return "views/front/services_bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  116 => 30,  113 => 29,  101 => 24,  95 => 23,  84 => 19,  80 => 17,  77 => 16,  74 => 15,  57 => 14,  49 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/services_bottom.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\services_bottom.html.twig");
    }
}
