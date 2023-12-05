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

/* views/front/includes/success_story_blocks.html.twig */
class __TwigTemplate_a450e3adbbbc2214a3871ecf132e9a76 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["all_stories"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "field", [], "any", false, false, false, 2), "sort", [], "any", false, false, false, 2) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "field", [], "any", false, false, false, 2), "sort", [], "any", false, false, false, 2)); }));
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
            // line 3
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3) < 4)) {
                // line 4
                echo "                <div class=\" relative custom-scroll-item\">
                    <div class=\"show-modal-iframe play-icon absolute z-10 cursor-pointer right-0 left-0 top-0 w-12 rounded-full border-4 border border-white mx-auto bg-white\" data-youtube-link=\"";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 5), "video_link", [], "any", false, false, false, 5), "html", null, true);
                echo "\">
                        <img loading=\"lazy\" alt=\"";
                // line 6
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sitename"] ?? null) : null), "html", null, true);
                echo "\" width=\"46\" height=\"46\" src=\"/stream?image=/uploads/img/play-button_ex.webp\"  />
                    </div>
                    <div class=\"relative rounded-tl-2xl rounded-br-2xl m-6 cyan-gradient-vertical p-10\">
                        <div class=\"mb-4 text-white font-semibold custom-scroll h-32 p-2 overflow-auto\">
                            <p>";
                // line 10
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 10), "content", [], "any", false, false, false, 10);
                echo "</p>
                        </div>
                        <div style=\"bottom: -95px;\" class=\"w-full absolute right-0 left-0 bottom-0 w-30  mx-auto\">
                            <div data-youtube-link=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 13), "video_link", [], "any", false, false, false, 13), "html", null, true);
                echo "\" class=\"rounded-full border-4 border border-white  bg-white w-28 mx-auto show-modal-iframe \">
                                <img loading=\"lazy\" alt=\"";
                // line 14
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 14) == "ar")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 14), "short_name_ar", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 14), "short_name", [], "any", false, false, false, 14))), "html", null, true);
                echo "\" src=\"/app/image.php?w=110&h=110&src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "method", false, false, false, 14), "html", null, true);
                echo "\" class=\"w-28 h-28 rounded-full\" />
                            </div>
                            <a data-youtube-link=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 16), "video_link", [], "any", false, false, false, 16), "html", null, true);
                echo "\" class=\"show-modal-iframe block mx-auto text-center w-64 font-semibold purple-color\" href=\"javascript:;\"><span>";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 16) == "ar")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 16), "short_name_ar", [], "any", false, false, false, 16)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field", [], "any", false, false, false, 16), "short_name", [], "any", false, false, false, 16))), "html", null, true);
                echo "</span></a>
                        </div>
                    </div>
                </div>
                ";
            }
            // line 21
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
    }

    public function getTemplateName()
    {
        return "views/front/includes/success_story_blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  91 => 16,  84 => 14,  80 => 13,  74 => 10,  67 => 6,  63 => 5,  60 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/success_story_blocks.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\success_story_blocks.html.twig");
    }
}
