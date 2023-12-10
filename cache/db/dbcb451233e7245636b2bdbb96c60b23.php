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

/* views/front/blog.html.twig */
class __TwigTemplate_1aea6aee0bf74bd68a24f4194a4a77bd extends \Twig\Template
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
        $this->loadTemplate("views/front/includes/header.html.twig", "views/front/blog.html.twig", 1)->display($context);
        // line 2
        echo "    
";
        // line 3
        $this->loadTemplate("views/front/includes/navbar.html.twig", "views/front/blog.html.twig", 3)->display($context);
        // line 4
        echo "    

    <div class=\"w-full cyan-bg pb-6 pt-20  relative \">
        <div class=\"relative pt-4\">
            <div class=\"w-full overflow-hidden h-full absolute bottom-0 left-0\">        
                <img loading=\"lazy\"  alt=\"";
        // line 9
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/light-network.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: .3;\" />
            </div>
            <div class=\"container mx-auto relative pt-8\">
                <h1 class=\"text-2xl mx-auto w-32 text-center font-bold text-white\" >";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "blog"], "method", false, false, false, 12), "html", null, true);
        echo "</h1>
                <div class=\"mx-auto w-80 my-0 relative z-10\">
                    <form class=\"absolute top-0  left-0 right-0 mx-auto\">
                        <input name=\"search\" class=\"border-1 runded border border-1 border-gray-200 w-full text-sm rounded-2xl bg-white px-4 py-3\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "SEARCH_PLACEHOLDER"], "method", false, false, false, 15), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["search_text"] ?? null), "html", null, true);
        echo "\">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class=\"blog-content mt-2\">

        ";
        // line 25
        if (($context["search_text"] ?? null)) {
            // line 26
            echo "
        <div class=\"cairo mx-auto  pt-10   purple-color font-semibold text-2xl mx-auto text-center w-72\">
            ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "SEARCH_RESULT"], "method", false, false, false, 28), "html", null, true);
            echo "
            <span class=\"mx-auto my-4 w-20 border border-b-1  border-gray-300 block\"></span>
        </div>
        ";
            // line 31
            if (twig_length_filter($this->env, ($context["search_items"] ?? null))) {
                echo " 
        <div class=\"custom-scroll-container mb-10 custom-scroll relative z-10 overflow-x-auto\">
            <div style=\"min-width: ";
                // line 33
                echo twig_escape_filter($this->env, (460 * twig_length_filter($this->env, ($context["items"] ?? null))), "html", null, true);
                echo "px; \"   class=\"custom-scroll-list w-full flex gap-3 gap px-1 \">
                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["search_items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "                <div style=\"min-width:250px; max-width: 500px\" class=\"relative custom-scroll-item w-full lg:h-full h-auto my-2 rounded-xl overflow-hidden\">
                    <a href=\"/";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 36), "prefix", [], "any", false, false, false, 36), "html", null, true);
                    echo "\"><img width=\"350\" height=\"232\" src=\"/stream?image=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "picture", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" class=\"rounded-lg w-full h-64\" /></a>  
                    <div class=\"shadow w-full h-full left-0 top-0 absolute z-10 rounder-lg\"></div>
                    <div class=\"w-full absolute  left-0 bottom-8 hover:bottom-10 px-8 z-20\">
                        <a href=\"/";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 39), "prefix", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" class=\"text-white text-xl font-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "</a>
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            </div>
        </div>
        ";
            } else {
                // line 46
                echo "        <div class=\"text-lg text-center mb-20\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "EMPTY_RESULT"], "method", false, false, false, 46), "html", null, true);
                echo "</div>
        ";
            }
            // line 48
            echo "        ";
        }
        // line 49
        echo "
        <div class=\"container mx-auto\"  >
            <div class=\"blog-main-item lg:flex block w-full\">
                <div class=\"blog-item-img lg:w-5/12\">
                    <img width=\"533\" height=\"355\" src=\"/stream?image=";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "picture", [], "any", false, false, false, 53), "html", null, true);
        echo "\" class=\"rounded-lg rounded w-full my-10 lg:my-10 max-w-full\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 53), "title", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                </div>
                <div class=\"blog-item-content lg:w-7/12\">
                    <div class=\" lg:pt-10 lg:pr-10 lg:px-20 px-2\">
                        <h2><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 57), "prefix", [], "any", false, false, false, 57), "html", null, true);
        echo "\" class=\"py-6 block font-bold purple-color text-xl lg:text-3xl\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), "html", null, true);
        echo "</a></h2>
                        <p class=\"text-sm lg:text-lg font-semibold text-gray-600\">";
        // line 58
        echo twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 58), "content", [], "any", false, false, false, 58)), 0, 400);
        echo " </p>
                        <div class=\"item-writer flex gap-3 gap my-12\">
                            <div class=\"w-full\">
                                <a class=\" block cyan-color font-semibold\"  aria-label=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "content", [], "any", false, false, false, 61), "prefix", [], "any", false, false, false, 61), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "field", [], "any", false, false, false, 61), "author_name", [], "any", false, false, false, 61), "html", null, true);
        echo "</a>
                                <Span class=\" block text-gray-400 \" >";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["first_item"] ?? null), "updated_at", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
        echo "</Span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"cairo mx-auto  pb-2   purple-color font-semibold text-2xl mx-auto text-center w-72\">
            ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Latest articles"], "method", false, false, false, 71), "html", null, true);
        echo "
            <span class=\"mx-auto my-4 w-20 border border-b-1  border-gray-300 block\"></span>
        </div>

        <div class=\"custom-scroll-container  custom-scroll relative z-10 overflow-x-auto\">
            <div style=\"min-width: ";
        // line 76
        echo twig_escape_filter($this->env, (360 * twig_length_filter($this->env, ($context["items"] ?? null))), "html", null, true);
        echo "px;\"   class=\"custom-scroll-list w-full flex gap-3 gap px-1 overflow-x-auto\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            echo "                <div class=\"relative custom-scroll-item w-full lg:h-full h-auto my-2 rounded-xl overflow-hidden\">
                    <img width=\"350\" height=\"232\" loading=\"lazy\" src=\"/stream?image=";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "picture", [], "any", false, false, false, 79), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 79), "title", [], "any", false, false, false, 79), "html", null, true);
            echo "\" class=\"rounded-lg w-full h-64\" />  
                    <div class=\"shadow w-full h-full left-0 top-0 absolute z-10 rounder-lg\"></div>
                    <div class=\"w-full absolute  left-0 bottom-8 hover:bottom-10 px-8 z-20\">
                        <a href=\"/";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 82), "prefix", [], "any", false, false, false, 82), "html", null, true);
            echo "\" class=\"text-white text-xl font-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>

    </div>
    
    <div class=\"relative pb-6   w-full overflow-hidden bg-gray-100\">
        <img loading=\"lazy\" alt=\"circle\" src=\"/stream?image=/uploads/img/circles-bg.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: 0.05;\" />
        
        ";
        // line 94
        $context["catTitle"] = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Women health"], "method", false, false, false, 94);
        // line 95
        echo "        ";
        $context["catItemsList"] = ($context["cat_her"] ?? null);
        // line 96
        echo "        ";
        $context["cat"] = ($context["cather"] ?? null);
        // line 97
        echo "        ";
        $this->loadTemplate("views/front/blog_cat_items.html.twig", "views/front/blog.html.twig", 97)->display($context);
        // line 98
        echo "
    </div>


    <div class=\"relative py-10  w-full  cyan-gradient45 overflow-hidden \">
        <img loading=\"lazy\" src=\"/stream?image=/uploads/img/light-network.webp\" alt=\"Medians\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: .4;\" />
        <div class=\"container  mx-auto relative z-10  px-2\">
            <div class=\"lg:w-5/12 lg:float-right relative   \">
                <h3 class=\" text-xl lg:text-3xl font-semibold text-white\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "online_consultation_block_title"], "method", false, false, false, 106), "html", null, true);
        echo " </h3>
                <p class=\" py-2 purple-color lg:text-lg text-sm font-semibold\">
                    ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "online_consultation_block_text"], "method", false, false, false, 108), "html", null, true);
        echo "
                <a href=\"/booking\" class=\"mt-2 font-normal block mx-auto w-32 py-2 px-6 purple-bg text-white text-center text-sm rounded-lg\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "book now"], "method", false, false, false, 109), "html", null, true);
        echo "</a>
                </p>
                <br />
            </div>
            
            <div class=\"lg:w-7/12 lg:inline-block hidden pb-10\">
                <img loading=\"lazy\" alt=\"Bedaya\" style=\"max-width:none;\" class=\"float-left rounded-lg\" width=\"90%\" height=\"auto\" title=\"\" src=\"/stream?image=/uploads/images/online-64f6e38f85156.png\">
            </div>
        </div>
        <div class=\"crossed lg:block hidden\">
        </div>
    </div>
    

    <div class=\"relative pb-6  w-full overflow-hidden \">
        <img loading=\"lazy\" alt=\"";
        // line 124
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 124)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/circles-bg.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: 0.05;\" />
        ";
        // line 125
        $context["catTitle"] = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Men health"], "method", false, false, false, 125);
        // line 126
        echo "        
        <div class=\"container mx-auto relative z-10  px-1\">
        
            <div class=\"title-gradient rounded-lg py-2 mt-12 my-2 pl-40 pr-6 purple-color font-semibold text-xl \" style=\"width: max-content;\">
                <a href=\"/";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cathim"] ?? null), "content", [], "any", false, false, false, 130), "prefix", [], "any", false, false, false, 130), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["catTitle"] ?? null), "html", null, true);
        echo "</a>
            </div>

            <div class=\"custom-scroll-container custom-scroll container grid mx-auto relative z-10 \" >
                <div class=\"custom-scroll-list block lg:grid my-4 lg:grid-cols-2 gap gap-3 lg:gap-0 sm:grid-cols-2 w-full \">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cat_him"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                    <div class=\" relative custom-scroll-item blog-main-item lg:flex block w-full \">
                        <div class=\"blog-item-img lg:w-5/12\">
                            <img width=\"350\" height=\"232\" loading=\"lazy\" src=\"/stream?image=";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "method", false, false, false, 138), "html", null, true);
            echo "\" class=\"rounded-lg rounded w-full my-2 lg:my-4\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 138), "title", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"blog-item-content lg:w-7/12\">
                            <div class=\"py-2 lg:py-6 lg:pr-6 lg:px-10 px-2\">
                                <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 142), "prefix", [], "any", false, false, false, 142), "html", null, true);
            echo "\" class=\"block  font-semibold text-sm cyan-color\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "update_date", [], "any", false, false, false, 142), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 143), "prefix", [], "any", false, false, false, 143), "html", null, true);
            echo "\" class=\"py-2 block font-bold purple-color lg:text-xl text-base\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143), "html", null, true);
            echo "</a>
                                <p class=\" font-semibold text-gray-600 lg:text-base text-sm\">";
            // line 144
            echo twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 144), "content", [], "any", false, false, false, 144)), 0, 180);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
            </div>
            <a href=\"/";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cathim"] ?? null), "content", [], "any", false, false, false, 151), "prefix", [], "any", false, false, false, 151), "html", null, true);
        echo "\" class=\"text-center mx-auto w-40 block font-semibold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "show More"], "method", false, false, false, 151), "html", null, true);
        echo "</a>

        </div>
    </div>

    ";
        // line 156
        $this->loadTemplate("views/front/services_bottom.html.twig", "views/front/blog.html.twig", 156)->display($context);
        // line 157
        echo "

";
        // line 159
        $this->loadTemplate("views/front/includes/footer.html.twig", "views/front/blog.html.twig", 159)->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "views/front/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 159,  366 => 157,  364 => 156,  354 => 151,  350 => 149,  339 => 144,  333 => 143,  327 => 142,  318 => 138,  314 => 136,  310 => 135,  300 => 130,  294 => 126,  292 => 125,  288 => 124,  270 => 109,  266 => 108,  261 => 106,  251 => 98,  248 => 97,  245 => 96,  242 => 95,  240 => 94,  230 => 86,  218 => 82,  210 => 79,  207 => 78,  203 => 77,  199 => 76,  191 => 71,  179 => 62,  169 => 61,  163 => 58,  157 => 57,  148 => 53,  142 => 49,  139 => 48,  133 => 46,  128 => 43,  116 => 39,  106 => 36,  103 => 35,  99 => 34,  95 => 33,  90 => 31,  84 => 28,  80 => 26,  78 => 25,  63 => 15,  57 => 12,  51 => 9,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/blog.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\blog.html.twig");
    }
}
