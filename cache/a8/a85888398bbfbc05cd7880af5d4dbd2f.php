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

/* views/front/includes/header.html.twig */
class __TwigTemplate_d23d520be05f392230ae5dbaddf8a049 extends \Twig\Template
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
        $this->loadTemplate("views/front/includes/head.html.twig", "views/front/includes/header.html.twig", 1)->display($context);
        // line 2
        echo "
    <div class=\"";
        // line 3
        ((($context["headerPosition"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["headerPosition"] ?? null), "html", null, true))) : (print ("lg-fixed ")));
        echo " lg:py-4 z-index9 head w-full fixed-on-scroll\" style=\"z-index: 99999;\">
        <div class=\"container mx-auto  flex \">
            <div class=\"bg-white lg:my-2 flex lg:rounded-lg w-full\">
                <div class=\"flex w-full gap-3\">
                    <a id=\"show-menu\" title=\"Show menu\" class=\"lg:hidden  pt-4 mt-1 px-2\" href=\"javascript:;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"15\" viewBox=\"0 0 22 15\">
                            <g id=\"Menu_Dashes\" data-name=\"Menu Dashes\" transform=\"translate(-1332.67 5847.643)\">
                                <g id=\"Rectangle_74\" data-name=\"Rectangle 74\" transform=\"translate(1332.67 -5847.643)\" fill=\"#463f3f\" stroke=\"#707070\" stroke-width=\"1\">
                                    <rect width=\"22\" height=\"3\" stroke=\"none\" />
                                    <rect x=\"0.5\" y=\"0.5\" width=\"21\" height=\"2\" fill=\"none\" />
                                </g>
                                <g id=\"Rectangle_75\" data-name=\"Rectangle 75\" transform=\"translate(1332.67 -5841.643)\" fill=\"#463f3f\" stroke=\"#707070\" stroke-width=\"1\">
                                    <rect width=\"22\" height=\"3\" stroke=\"none\" />
                                    <rect x=\"0.5\" y=\"0.5\" width=\"21\" height=\"2\" fill=\"none\" />
                                </g>
                                <g id=\"Rectangle_76\" data-name=\"Rectangle 76\" transform=\"translate(1332.67 -5835.643)\" fill=\"#463f3f\" stroke=\"#707070\" stroke-width=\"1\">
                                    <rect width=\"22\" height=\"3\" stroke=\"none\" />
                                    <rect x=\"0.5\" y=\"0.5\" width=\"21\" height=\"2\" fill=\"none\" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a aria-label=\"Logo\" title=\"Logo\" class=\"p-1 lg:p-3 pb-1 mt-0 lg:mt-auto\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "CONF", [], "any", false, false, false, 25), "url", [], "any", false, false, false, 25), "html", null, true);
        echo "\"><img loading=\"lazy\" alt=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 25)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/logo.webp\" width=\"95\" height=\"50\"  /></a>
                    <ul class=\"lg:flex  hidden gap-1 h-full font-semibold purple-color\">
                        <li class=\"h-full\"><a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"/\"><span class=\"block pt-8\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "home"], "method", false, false, false, 27), "html", null, true);
        echo "</span></a></li>
                        
                        <li class=\"has-sub-menu h-full relative\">
                            <a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"javascript:;\"><span class=\"block pt-8\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "About_Bedaya"], "method", false, false, false, 30), "html", null, true);
        echo "</span></a>
                            <ul class=\"text-sm sub-menu w-48 absolute top-18 right-0 bg-white p-6 mt-4\">
                            ";
        // line 32
        $this->loadTemplate("views/front/includes/about_dropmenu.html.twig", "views/front/includes/header.html.twig", 32)->display($context);
        // line 33
        echo "                            </ul>
                        </li>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "specializations", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 36) == 2)) {
                // line 37
                echo "                        <li class=\"has-sub-menu h-full relative\">
                            <a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 38), "prefix", [], "any", false, false, false, 38), "html", null, true);
                echo "\"><span class=\"block pt-8\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
                echo "</span></a>
                            <ul class=\"text-sm sub-menu w-48 absolute top-18 right-0 bg-white p-6 mt-4\">
                                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 40), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 40) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 40)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["child_item"]) {
                    // line 41
                    echo "                                <li class=\"py-1\"><a href=\"/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 41), "prefix", [], "any", false, false, false, 41), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            </ul>
                        </li>
                        ";
            }
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                        <li class=\"has-sub-menu h-full relative\">
                            <a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"javascript:;\"><span class=\"block pt-8\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "specializations"], "method", false, false, false, 49), "html", null, true);
        echo "</span></a>
                            <ul class=\"text-sm sub-menu w-48 absolute top-18 right-0 bg-white p-6 mt-4\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "specializations", [], "any", false, false, false, 51), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 51) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 51)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 52) != 2)) {
                // line 53
                echo "                                <li class=\"py-1 has-sub-menu h-full relative ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                                    <a href=\"/";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 54), "prefix", [], "any", false, false, false, 54), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
                echo "</a>

                                    ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                    <ul class=\"text-sm sub-menu w-48 absolute top-18 right-40 bg-white p-6\">
                                        ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 58), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 58) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 58)); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["child_item"]) {
                        // line 59
                        echo "                                        <li class=\"py-1\"><a href=\"/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 59), "prefix", [], "any", false, false, false, 59), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
                        echo "</a></li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                                    </ul>
                                    ";
                }
                // line 63
                echo "                                </li>
                                ";
            }
            // line 65
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                            </ul>
                        </li>
                        <li class=\"h-full\"><a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"/";
        // line 69
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 69) == "ar")) ? ("قصص-نجاح-حقن-مجهرى") : ("icsi-success-stories"));
        echo "\"><span class=\"block pt-8\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "success stories"], "method", false, false, false, 69), "html", null, true);
        echo "</span></a></li>

                        <li class=\"h-full\"><a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"/blog\"><span class=\"block pt-8\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "blog"], "method", false, false, false, 71), "html", null, true);
        echo "</span></a></li>
                        <li class=\"h-full\"><a class=\"block px-2 h-full  hover:bg-blue-100 purple-color\" href=\"/";
        // line 72
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 72) == "ar")) ? ("contact") : ("contactus"));
        echo "\"><span class=\"block pt-8\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Contact"], "method", false, false, false, 72), "html", null, true);
        echo "</span></a></li>
                    </ul>
                </div>
                <div class=\"p-1 lg:py-4 lg:px-4  flex gap-3  \">
                    <a href=\"tel:19483\" class=\"text-lg px-1 lg:px-2 my-1 pt-2 font-normal ltr purple-color flex \"><span class=\"w-8\"><img src=\"/stream?image=/uploads/img/phone-call.webp\" alt=\"hotline\" width=\"24\" height=\"24\" /></span> 19483</a>
                    <a style=\"white-space:nowrap\" href=\"/";
        // line 77
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 77) == "ar")) ? ("الحجز") : ("booking"));
        echo "\" class=\"hide-mobile rounded-lg px-4 my-1 pt-2 cyan-bg font-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "BOOK_NOW"], "method", false, false, false, 77), "html", null, true);
        echo "</a>
                    <a aria-label=\"Search\" title=\"Search\"  href=\"/search\" class=\"hide-mobile text-center lg:w-8 w-8 pb-2 pt-3 px-1\"><img loading=\"lazy\" alt=\"";
        // line 78
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 78)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/search-svgrepo-com.webp\" width=\"34\" height=\"40\" /></a>
                    <a aria-label=\"switch lang\" title=\"switch lang\" href=\"/switch-lang/";
        // line 79
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 79) == "ar")) ? ("english") : ("arabic"));
        echo "\" class=\"text-center lg:w-8 w-8 pb-2 pt-3 px-1 \"><img loading=\"lazy\" width=\"36\" height=\"36\" alt=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/lang";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 79), "html", null, true);
        echo ".webp\" /></a>
                </div>
            </div>
        </div>
        <div id=\"mobile-menu\" class=\"fixed z-10 top-0 left-0 h-screen main-mobile-menu lg:hidden bg-white py-4 px-4 w-full z-90 \">
            <div class=\"flex\">
                <div class=\"w-full flex gap-3 pb-3\">
                    <a id=\"close-menu\" href=\"javascript:;\" class=\"pt-2 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" class=\"mx-auto\" height=\"20\" viewBox=\"0 0 18.074 17.91\">
                            <g id=\"Menu_Dashes\" data-name=\"Menu Dashes\" transform=\"translate(-5066.245 3184.082) rotate(45)\">
                                <g id=\"Rectangle_74\" data-name=\"Rectangle 74\" transform=\"matrix(0.017, 1, -1, 0.017, 1344.697, -5844.721)\" fill=\"#463f3f\" stroke=\"#707070\" stroke-width=\"1\">
                                    <rect width=\"22\" height=\"3\" stroke=\"none\" />
                                    <rect x=\"0.5\" y=\"0.5\" width=\"21\" height=\"2\" fill=\"none\" />
                                </g>
                                <g id=\"Rectangle_76\" data-name=\"Rectangle 76\" transform=\"translate(1332.67 -5835.643)\" fill=\"#463f3f\" stroke=\"#707070\" stroke-width=\"1\">
                                    <rect width=\"22\" height=\"3\" stroke=\"none\" />
                                    <rect x=\"0.5\" y=\"0.5\" width=\"21\" height=\"2\" fill=\"none\" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=\"/\" aria-label=\"Logo\" title=\"Logo\"><img loading=\"lazy\" alt=\"";
        // line 100
        echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 100)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sitename"] ?? null) : null), "html", null, true);
        echo "\" width=\"95\" height=\"50\" src=\"/stream?image=/uploads/img/Logo_j.webp\"></a>
                </div>
                <div class=\"gap-2 w-64 text-left flex\">
                    <a href=\"tel:19483\"  aria-label=\"hotline\" title=\"hotline\" class=\"text-lg px-2  font-normal ltr purple-color flex \"><span class=\"w-8\"><img src=\"/stream?image=/uploads/img/phone-call.webp\" alt=\"hotline\" width=\"24\" height=\"24\" /></span> 19483</a>
                    <a  aria-label=\"Search\" title=\"Search\" href=\"/search\"><img loading=\"lazy\" alt=\"";
        // line 104
        echo twig_escape_filter($this->env, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 104)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sitename"] ?? null) : null), "html", null, true);
        echo "\"  width=\"24\" height=\"28\" src=\"/stream?image=/uploads/img/search-svgrepo-com.webp\"></a>
                    <a aria-label=\"switch lang\" title=\"switch lang\" href=\"/switch-lang/";
        // line 105
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 105) == "ar")) ? ("english") : ("arabic"));
        echo "\"><img loading=\"lazy\" alt=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 105)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sitename"] ?? null) : null), "html", null, true);
        echo "\" width=\"24\" height=\"24\"  src=\"/stream?image=/uploads/img/lang";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 105), "html", null, true);
        echo ".webp\"></a>
                </div>
            </div>


            <div class=\"mobile-menu relative \" >
                <img alt=\"";
        // line 111
        echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 111)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sitename"] ?? null) : null), "html", null, true);
        echo "\" 
                src=\"/stream?image=/uploads/img/light-network.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: .5;\" />
                <ul class=\"relative font-semibold py-2\">
                    <li class=\"py-1 \"><a href=\"/\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "homepage"], "method", false, false, false, 114), "html", null, true);
        echo "</a></li>
                    <li class=\"py-1 flex\">
                        <a class=\"w-full\" href=\"javascript:;\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "about_bedaya"], "method", false, false, false, 116), "html", null, true);
        echo "</a>
                        <div class=\"relative w-full sub-menu \">
                            <ul class=\"w-full absolute  bg-white p-2 rounded-lg z-10 \">
                            ";
        // line 119
        $this->loadTemplate("views/front/includes/about_dropmenu.html.twig", "views/front/includes/header.html.twig", 119)->display($context);
        // line 120
        echo "                            </ul>
                        </div>
                    </li>

                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "specializations", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 125
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125) == 2)) {
                // line 126
                echo "                    <li class=\"py-1 flex\">
                        <a class=\"w-64 \" href=\"";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 127), "prefix", [], "any", false, false, false, 127), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 127), "title", [], "any", false, false, false, 127), "html", null, true);
                echo "</a>
                        <div class=\"relative w-full sub-menu\">

                            <ul class=\"w-full absolute  bg-white p-2 rounded-lg z-10 \">
                                ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 131), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 131) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 131)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["child_item"]) {
                    // line 132
                    echo "                                <li class=\"py-1\"><a href=\"/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 132), "prefix", [], "any", false, false, false, 132), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 132), "title", [], "any", false, false, false, 132), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                            </ul>
                            </div>
                    </li>
                    ";
            }
            // line 138
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
                    <li class=\"py-1 flex\">
                        <a class=\"w-64 \" href=\"javascript:;\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "SPECIALIZATIONS"], "method", false, false, false, 141), "html", null, true);
        echo "</a>
                        <div class=\"relative w-full sub-menu\">
                            <ul class=\"w-full absolute  bg-white p-2 rounded-lg z-10 \">
                                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "specializations", [], "any", false, false, false, 144), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 144) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 144)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 145
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 145) > 2)) {
                // line 146
                echo "                                <li class=\"py-1 switch-child-ul w-full\">
                                    <a href=\"";
                // line 147
                ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 147))) ? (print ("javascript:;")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 147), "prefix", [], "any", false, false, false, 147), "html", null, true))));
                echo "\" class=\"";
                echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 147))) ? ("bg-gray-100 px-2") : (""));
                echo " block p-1  w-full\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 147), "title", [], "any", false, false, false, 147), "html", null, true);
                echo "</a>

                                    ";
                // line 149
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 149))) {
                    // line 150
                    echo "                                    <ul class=\"text-sm  px-2 hidden\" >
                                        ";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "childs", [], "any", false, false, false, 151), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "sort", [], "any", false, false, false, 151) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "sort", [], "any", false, false, false, 151)); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["child_item"]) {
                        // line 152
                        echo "                                        <li class=\"py-1\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 152), "prefix", [], "any", false, false, false, 152), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_item"], "content", [], "any", false, false, false, 152), "title", [], "any", false, false, false, 152), "html", null, true);
                        echo "</a></li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                                    </ul>
                                    ";
                }
                // line 156
                echo "                                </li>
                                ";
            }
            // line 158
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                            </ul>
                        </div>
                    </li>

                    <li class=\"py-1 \"><a href=\"/";
        // line 164
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 164) == "ar")) ? ("قصص-نجاح-حقن-مجهرى") : ("icsi-success-stories"));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "success stories"], "method", false, false, false, 164), "html", null, true);
        echo "</a></li>
                    <li class=\"py-1 \"><a href=\"/blog\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "blog"], "method", false, false, false, 165), "html", null, true);
        echo "</a></li>
                    <li class=\"py-1 \"><a href=\"/";
        // line 166
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 166) == "ar")) ? ("contact") : ("contactus"));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Contact"], "method", false, false, false, 166), "html", null, true);
        echo "</a></li>

                </ul>
                <a class=\"mx-auto block w-28 rounded-lg text-center font-semibold purple-color py-2 px-4 cyan-bg\" href=\"/booking\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "book_now"], "method", false, false, false, 169), "html", null, true);
        echo "</a>
                <p class=\"text-center font-semibold my-2\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "MAIN_ADDRESS"], "method", false, false, false, 170), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "views/front/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 170,  443 => 169,  435 => 166,  431 => 165,  425 => 164,  419 => 160,  412 => 158,  408 => 156,  404 => 154,  393 => 152,  389 => 151,  386 => 150,  384 => 149,  375 => 147,  372 => 146,  369 => 145,  365 => 144,  359 => 141,  355 => 139,  349 => 138,  343 => 134,  332 => 132,  328 => 131,  319 => 127,  316 => 126,  313 => 125,  309 => 124,  303 => 120,  301 => 119,  295 => 116,  290 => 114,  284 => 111,  271 => 105,  267 => 104,  260 => 100,  232 => 79,  228 => 78,  222 => 77,  212 => 72,  208 => 71,  201 => 69,  196 => 66,  190 => 65,  186 => 63,  182 => 61,  171 => 59,  167 => 58,  164 => 57,  162 => 56,  155 => 54,  150 => 53,  147 => 52,  143 => 51,  138 => 49,  134 => 47,  128 => 46,  123 => 43,  112 => 41,  108 => 40,  101 => 38,  98 => 37,  95 => 36,  91 => 35,  87 => 33,  85 => 32,  80 => 30,  74 => 27,  67 => 25,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/header.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\header.html.twig");
    }
}
