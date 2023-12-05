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

/* views/front/includes/footer.html.twig */
class __TwigTemplate_96b4d46cd5a4d2273bd0ff5fc3cf8463 extends \Twig\Template
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
        echo "    <footer class=\"w-full footer-bg relative\">
        <img loading=\"lazy\" alt=\"";
        // line 2
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sitename"] ?? null) : null), "html", null, true);
        echo "\" src=\"/stream?image=/uploads/img/light-network.webp\" class=\"absolute left-0 top-10 w-full \" style=\"opacity: .08;\" />
        <div class=\"mx-auto container py-10 px-2 lg:px-0 relative\"  style=\"z-index:99\">
            <div class=\"flex w-full\">
                <div class=\"w-full\"><a class=\"w-40 block py-2 px-6 bg-white rounded-lg\" href=\"#!\"  aria-label=\"Logo\" title=\"Logo\"  ><img loading=\"lazy\" alt=\"";
        // line 5
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Settings", [], "any", false, false, false, 5)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["sitename"] ?? null) : null), "html", null, true);
        echo "\" width=\"110\" height=\"65\" src=\"/stream?image=/uploads/img/Logo_j.webp\"></a></div>
                <div class=\"w-64\">
                    <a href=\"/";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 7) == "ar")) ? ("الحجز") : ("booking"));
        echo "\" class=\"font-bold block mx-auto w-32 py-2 px-6 cyan-bg text-center rounded-lg\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "book now"], "method", false, false, false, 7), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"block lg:flex w-full gap gap-3\">
                <div class=\"w-full\">
                    <ul class=\"block text-white my-4\">
                        <li class=\"py-2 flex w-full\">
                            <div class=\"bg-white rounded-lg p-2 w-14 text-center mx-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto\" width=\"24.917\" height=\"35.501\" viewBox=\"0 0 24.917 35.501\">
                                    <path id=\"pin\" d=\"M12.417.25A12.108,12.108,0,0,1,21.25,3.875a11.908,11.908,0,0,1,3.667,8.792,16.988,16.988,0,0,1-1.292,5.958,34.589,34.589,0,0,1-3.125,6.25q-1.833,2.875-3.667,5.417T13.75,34.334l-1.333,1.417q-.5-.5-1.333-1.5T8.126,30.376Q6,27.5,4.334,24.793a38.083,38.083,0,0,1-3-6.126,16.842,16.842,0,0,1-1.333-6A11.972,11.972,0,0,1,3.625,3.875,11.972,11.972,0,0,1,12.417.25Zm0,16.833a4.4,4.4,0,0,0,3.167-1.292,4.33,4.33,0,0,0,0-6.25A4.389,4.389,0,0,0,12.417,8.25,4.411,4.411,0,0,0,8,12.667a4.409,4.409,0,0,0,4.417,4.416Z\" transform=\"translate(0 -0.25)\" fill=\"#36d3eb\" /></svg>
                            </div>
                            <a class=\"text-white font-semibold\" href=\"#!\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Dokki"], "method", false, false, false, 18), "html", null, true);
        echo "
                                <span class=\"block text-gray-300 text-base font-normal\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "MAIN_ADDRESS"], "method", false, false, false, 19), "html", null, true);
        echo "</span>
                            </a>
                        </li>
                        <li class=\"py-2 hidden w-full\">
                            <div class=\"bg-white rounded-lg p-2 w-14 text-center mx-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto\" width=\"24.917\" height=\"35.501\" viewBox=\"0 0 24.917 35.501\">
                                    <path id=\"pin\" d=\"M12.417.25A12.108,12.108,0,0,1,21.25,3.875a11.908,11.908,0,0,1,3.667,8.792,16.988,16.988,0,0,1-1.292,5.958,34.589,34.589,0,0,1-3.125,6.25q-1.833,2.875-3.667,5.417T13.75,34.334l-1.333,1.417q-.5-.5-1.333-1.5T8.126,30.376Q6,27.5,4.334,24.793a38.083,38.083,0,0,1-3-6.126,16.842,16.842,0,0,1-1.333-6A11.972,11.972,0,0,1,3.625,3.875,11.972,11.972,0,0,1,12.417.25Zm0,16.833a4.4,4.4,0,0,0,3.167-1.292,4.33,4.33,0,0,0,0-6.25A4.389,4.389,0,0,0,12.417,8.25,4.411,4.411,0,0,0,8,12.667a4.409,4.409,0,0,0,4.417,4.416Z\" transform=\"translate(0 -0.25)\" fill=\"#36d3eb\" /></svg>
                            </div>
                            <a class=\"text-white font-semibold\" href=\"#!\">عيادات كليوباترا -زايد
                                <span class=\"block text-gray-300 text-base font-normal\">الشيخ زايد الشيخ زايد, المحور المركزى, </span>
                            </a>
                        </li>
                        <li class=\"py-2 hidden w-full\">
                            <div class=\"bg-white rounded-lg p-2 w-14 text-center mx-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto\" width=\"24.917\" height=\"35.501\" viewBox=\"0 0 24.917 35.501\">
                                    <path id=\"pin\" d=\"M12.417.25A12.108,12.108,0,0,1,21.25,3.875a11.908,11.908,0,0,1,3.667,8.792,16.988,16.988,0,0,1-1.292,5.958,34.589,34.589,0,0,1-3.125,6.25q-1.833,2.875-3.667,5.417T13.75,34.334l-1.333,1.417q-.5-.5-1.333-1.5T8.126,30.376Q6,27.5,4.334,24.793a38.083,38.083,0,0,1-3-6.126,16.842,16.842,0,0,1-1.333-6A11.972,11.972,0,0,1,3.625,3.875,11.972,11.972,0,0,1,12.417.25Zm0,16.833a4.4,4.4,0,0,0,3.167-1.292,4.33,4.33,0,0,0,0-6.25A4.389,4.389,0,0,0,12.417,8.25,4.411,4.411,0,0,0,8,12.667a4.409,4.409,0,0,0,4.417,4.416Z\" transform=\"translate(0 -0.25)\" fill=\"#36d3eb\" /></svg>
                            </div>
                            <a class=\"text-white font-semibold\" href=\"#!\">مستشفى كليوباترا - مصر الجديدة
                                <span class=\"block text-gray-300 text-base font-normal\">ا 29 ش كليوباترا - الماظة - هليوبوليس</span>
                            </a>
                        </li>
                        <li class=\"py-2 hidden w-full \">
                            <div class=\"bg-white rounded-lg p-2 w-14 text-center mx-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"mx-auto\" width=\"24.917\" height=\"35.501\" viewBox=\"0 0 24.917 35.501\">
                                    <path id=\"pin\" d=\"M12.417.25A12.108,12.108,0,0,1,21.25,3.875a11.908,11.908,0,0,1,3.667,8.792,16.988,16.988,0,0,1-1.292,5.958,34.589,34.589,0,0,1-3.125,6.25q-1.833,2.875-3.667,5.417T13.75,34.334l-1.333,1.417q-.5-.5-1.333-1.5T8.126,30.376Q6,27.5,4.334,24.793a38.083,38.083,0,0,1-3-6.126,16.842,16.842,0,0,1-1.333-6A11.972,11.972,0,0,1,3.625,3.875,11.972,11.972,0,0,1,12.417.25Zm0,16.833a4.4,4.4,0,0,0,3.167-1.292,4.33,4.33,0,0,0,0-6.25A4.389,4.389,0,0,0,12.417,8.25,4.411,4.411,0,0,0,8,12.667a4.409,4.409,0,0,0,4.417,4.416Z\" transform=\"translate(0 -0.25)\" fill=\"#36d3eb\" /></svg>
                            </div>
                            <a class=\"text-white font-semibold\" href=\"#!\">عيادات كليوباترا -التجمع الخامس
                                <span class=\"block text-gray-300 text-base font-normal\">عيادات كليوباترا- ش ال 90 - التجمع الخامس</span>
                            </a>
                        </li>
                        <li>
                            <div class=\"py-6 text-blue-500 social-footer-link\">
                                <a title=\"Bedaya facebook\" href=\"";
        // line 51
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 51) == "ar")) ? ("https://www.facebook.com/bedayaivf") : ("https://www.facebook.com/bedayahospital"));
        echo "\" class=\"inline-block bg-white rounded-lg p-2 w-10 text-center mx-1 text-blue-500\">
                                    <i class=\"fab fa-facebook\"></i>
                                </a>
                                <a title=\"Bedaya insta\"  href=\"";
        // line 54
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 54) == "ar")) ? ("https://www.instagram.com/bedayaivf/") : ("https://www.instagram.com/bedayaivf5/"));
        echo "\" class=\"inline-block bg-white rounded-lg p-2 w-10 text-center mx-1 text-purple-600\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                                <a title=\"Bedaya facebook\"  href=\"";
        // line 57
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 57) == "ar")) ? ("https://www.youtube.com/@Bedayaivf") : ("https://www.youtube.com/channel/UCTN7gpAomop62gtbnSNumsw"));
        echo "\" class=\"inline-block bg-white rounded-lg p-2 w-10 text-center mx-1 text-red-500\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                                <a title=\"Bedaya linked in\"  href=\"https://www.linkedin.com/company/bedaya-hospital/ \" class=\"inline-block bg-white rounded-lg p-2 w-10 text-center mx-1 text-blue-500\">
                                    <i class=\"fab fa-linkedin\"></i>
                                </a>
                                <a title=\"Bedaya facebook\"  href=\"";
        // line 63
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 63) == "ar")) ? ("https://www.snapchat.com/add/bedaya_hospital/") : ("https://www.snapchat.com/add/bedayaivf"));
        echo "\" class=\"inline-block text-yellow-400 bg-white rounded-lg p-2 w-10 text-center mx-2\">
                                    <i class=\"fab fa-snapchat\"></i>
                                </a>
                                <a title=\"Bedaya X\"  href=\"";
        // line 66
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 66) == "ar")) ? ("https://twitter.com/bedayaivf/") : ("https://twitter.com/BedayaEnglish"));
        echo "\" class=\"inline-block bg-white rounded-lg p-2 w-10 text-center mx-1 text-blue-400\">
                                    <img alt=\"Bedaya X Twitter\" width=\"36\" height=\"36\" src=\"/stream?image=/uploads/img/x.webp\" class=\"p-1\" />
                                </a> 
                                <a title=\"Bedaya TikTok\"  href=\"";
        // line 69
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 69) == "ar")) ? ("https://www.tiktok.com/@bedayahospital") : ("https://www.tiktok.com/@bedayaivf"));
        echo "\" class=\"inline-block bg-white rounded-lg p-1 w-10 text-center mx-1 text-blue-400\">
                                    <img alt=\"Bedaya TikTok\" width=\"36\" height=\"36\" src=\"/stream?image=/uploads/img/tiktok.webp\" class=\"p-1\" />
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"w-full pt-6 lg:pr-20\">
                    <div class=\"font-bold pb-2 block text-white\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "bedaya_specializations"], "method", false, false, false, 77), "html", null, true);
        echo "</div>
                    <ul class=\"block text-white \">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "specializations", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 80
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 80) == 2)) {
                // line 81
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "childs", [], "any", false, false, false, 81));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 82
                    echo "                        ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 82), [0 => 52, 1 => 53, 2 => 57])) {
                        // line 83
                        echo "                        <li class=\"cat-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 83), "html", null, true);
                        echo " py-1\"><a href=\"/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 83), "prefix", [], "any", false, false, false, 83), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
                        echo "</a></li>
                        ";
                    }
                    // line 85
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                        ";
            }
            // line 87
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </ul>
                </div>
                <div class=\"w-full \">
                    <p class=\"py-6 font-bold pb-2 block text-white\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "important links"], "method", false, false, false, 91), "html", null, true);
        echo "</p>
                    <ul class=\"block text-white \">
                        <li class=\"py-1\"><a href=\"/contact\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "contact us"], "method", false, false, false, 93), "html", null, true);
        echo "</a></li>
                        <li class=\"py-1\"><a href=\"#!\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Pregnancy period Calculator"], "method", false, false, false, 94), "html", null, true);
        echo "</a></li>
                        <li class=\"py-1\"><a href=\"#!\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "OVULATION_CALCULATOR"], "method", false, false, false, 95), "html", null, true);
        echo "</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class=\"text-center font-semibold text-white\">
                <p>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "COPYRIGHTS"], "method", false, false, false, 101), "html", null, true);
        echo " 2023</p>
                <img loading=\"lazy\" src=\"/stream?image=/uploads/img/iso.webp\" alt=\"ISO\" width=\"85\" height=\"38\" class=\"mx-auto my-2\">
            </div>
        </div>
    </footer>
    <div style=\"z-index:99999\" id=\"modal-wrapper\" class=\"w-full fixed left-0 top-0 h-screen hidden \">
        <div id=\"modal-bg\" style=\"background:rgba(0, 0, 0, .5);\" class=\"absolute w-full h-full left-0\"></div>
        <div id=\"modal-content\"  class=\"p-10 bg-white rounded-2xl m-auto absolute left-0 right-0 top-0 bottom-0 max-w-2xl my-10\" style=\"z-index:9\"></div>
    </div>
    <!-- <script src=\"/assets?asset=/src/front/owl/owl.carousel.min.js\"></script> -->
    <!-- <script src=\"/assets?asset=/src/front/js/sweetalert2@11.js\"></script> -->
    <script src=\"/assets?asset=/src/front/js/all.js\"></script>
    <script src=\"/assets?asset=/src/front/js/custom.js\"></script>

    <script>
    </script>
    <a href=\"https://wa.me/201225368744\" target=\"_blank\"> 
        <img loading=\"lazy\" alt=\"whatsapp\" src=\"https://www.bedayahospitals.com/library/WhatsApp.svg.png\" class=\"fixed wapp-side-icon \">
    </a>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "views/front/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  213 => 95,  209 => 94,  205 => 93,  200 => 91,  195 => 88,  189 => 87,  186 => 86,  180 => 85,  170 => 83,  167 => 82,  162 => 81,  159 => 80,  155 => 79,  150 => 77,  139 => 69,  133 => 66,  127 => 63,  118 => 57,  112 => 54,  106 => 51,  71 => 19,  67 => 18,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/footer.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\footer.html.twig");
    }
}
