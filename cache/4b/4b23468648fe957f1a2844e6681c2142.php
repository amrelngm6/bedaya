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

/* views/front/includes/navbar.html.twig */
class __TwigTemplate_3e751b6405c47ffa8e71c55847d81338 extends \Twig\Template
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
        // line 2
        echo "
<div class=\"show-mobile w-full bg-white h-10 fixed\" id=\"fixed-icons\" style=\"bottom:0; z-index:9999\">
    <div class=\"custom-scroll-container custom-scroll \" style=\"margin-bottom:0\">
        <div class=\"pt-2 navbar-mobile flex justify-center items-center px-3 custom-scroll-list  \">
            <a href=\"/";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 6) == "ar")) ? ("استشارات-اونلاين") : ("online-consultation"));
        echo "\" class=\"px-4 custom-scroll-item ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 6) == "/%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%88%D9%86%D9%84%D8%A7%D9%8A%D9%86")) ? ("active") : (""));
        echo "  ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 6) == "/online-consultation")) ? ("active") : (""));
        echo "   navbar-item relative  text-center w-full pt-1\">
                <svg width=\"25\" height=\"24\" viewbox=\"0 0 25 24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"color-animate mx-auto w-6 h-6 relative\" preserveaspectratio=\"none\">
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.7445 15.4645C5.68218 14.5268 6.95395 14 8.28003 14H16.28C17.6061 14 18.8779 14.5268 19.8156 15.4645C20.7532 16.4021 21.28 17.6739 21.28 19V21C21.28 21.5523 20.8323 22 20.28 22C19.7277 22 19.28 21.5523 19.28 21V19C19.28 18.2044 18.964 17.4413 18.4013 16.8787C17.8387 16.3161 17.0757 16 16.28 16H8.28003C7.48438 16 6.72132 16.3161 6.15871 16.8787C5.5961 17.4413 5.28003 18.2044 5.28003 19V21C5.28003 21.5523 4.83231 22 4.28003 22C3.72774 22 3.28003 21.5523 3.28003 21V19C3.28003 17.6739 3.80681 16.4021 4.7445 15.4645Z\" ></path>
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.28 4C10.6232 4 9.28003 5.34315 9.28003 7C9.28003 8.65685 10.6232 10 12.28 10C13.9369 10 15.28 8.65685 15.28 7C15.28 5.34315 13.9369 4 12.28 4ZM7.28003 7C7.28003 4.23858 9.51861 2 12.28 2C15.0415 2 17.28 4.23858 17.28 7C17.28 9.76142 15.0415 12 12.28 12C9.51861 12 7.28003 9.76142 7.28003 7Z\" ></path>
                </svg>
                <p class=\"text-xs font-semibold    color-animate \">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Consultation"], "method", false, false, false, 11), "html", null, true);
        echo "</p>
            </a>
            <a href=\"/";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 13) == "ar")) ? ("bedaya-offers") : ("offers"));
        echo "\" class=\"px-4 custom-scroll-item ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 13) == "/offers")) ? ("active") : (""));
        echo "  ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 13) == "/bedaya-offers")) ? ("active") : (""));
        echo "  navbar-item relative  text-center w-full pt-1\">
            
                <svg width=\"25\" height=\"24\" viewbox=\"0 0 25 24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"color-animate w-6 h-6 mx-auto relative\" preserveaspectratio=\"none\">
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.51655 2.43001C9.73744 2.93619 9.50616 3.52561 8.99997 3.7465C7.65257 4.33448 6.46971 5.24359 5.55481 6.39432C4.63992 7.54506 4.02084 8.9024 3.75171 10.3477C3.48258 11.7929 3.57158 13.2821 4.01094 14.6851C4.4503 16.088 5.22664 17.3619 6.27209 18.3955C7.31753 19.4291 8.60026 20.1908 10.0081 20.6141C11.416 21.0374 12.9061 21.1094 14.3482 20.8238C15.7903 20.5382 17.1404 19.9036 18.2807 18.9757C19.4209 18.0477 20.3164 16.8545 20.889 15.5005C21.1041 14.9918 21.6908 14.7538 22.1995 14.9689C22.7082 15.184 22.9461 15.7708 22.7311 16.2794C22.0313 17.9344 20.9367 19.3927 19.5431 20.5269C18.1495 21.6611 16.4993 22.4366 14.7367 22.7857C12.9742 23.1348 11.1529 23.0468 9.43221 22.5294C7.71151 22.012 6.14374 21.081 4.86597 19.8178C3.58821 18.5545 2.63935 16.9975 2.10235 15.2828C1.56535 13.5681 1.45657 11.748 1.78551 9.98153C2.11445 8.21509 2.8711 6.55612 3.9893 5.14966C5.10751 3.74321 6.55322 2.63208 8.20005 1.91343C8.70624 1.69254 9.29565 1.92382 9.51655 2.43001Z\" ></path>
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.8929 1.29289C12.0804 1.10536 12.3348 1 12.6 1C14.0445 1 15.4749 1.28452 16.8095 1.83733C18.1441 2.39013 19.3567 3.20038 20.3782 4.22183C21.3996 5.24327 22.2099 6.4559 22.7627 7.79048C23.3155 9.12506 23.6 10.5555 23.6 12C23.6 12.5523 23.1523 13 22.6 13H12.6C12.0477 13 11.6 12.5523 11.6 12V2C11.6 1.73478 11.7054 1.48043 11.8929 1.29289ZM13.6 3.05573V11H21.5443C21.4505 10.1614 21.2391 9.33849 20.9149 8.55585C20.4626 7.46392 19.7997 6.47177 18.964 5.63604C18.1282 4.80031 17.1361 4.13738 16.0442 3.68508C15.2615 3.3609 14.4386 3.14949 13.6 3.05573Z\" ></path>
                </svg>
                <p class=\"text-xs font-semibold   color-animate  \">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "offers"], "method", false, false, false, 19), "html", null, true);
        echo "</p>
            </a>
            <a href=\"/\" class=\"px-4 custom-scroll-item ";
        // line 21
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 21) == "/")) ? ("active") : (""));
        echo "  navbar-item relative  text-center w-full pt-1\">
                <svg width=\"25\" height=\"24\" viewbox=\"0 0 25 24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"color-animate mx-auto w-6 h-6 relative\" preserveaspectratio=\"none\">
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.306 1.21065C12.6672 0.929784 13.1728 0.929784 13.5339 1.21065L22.5339 8.21065C22.7775 8.4001 22.92 8.69141 22.92 9V20C22.92 20.7957 22.6039 21.5587 22.0413 22.1213C21.4787 22.6839 20.7156 23 19.92 23H5.91998C5.12433 23 4.36127 22.6839 3.79866 22.1213C3.23605 21.5587 2.91998 20.7957 2.91998 20V9C2.91998 8.69141 3.06246 8.4001 3.30604 8.21065L12.306 1.21065ZM4.91998 9.48908V20C4.91998 20.2652 5.02534 20.5196 5.21288 20.7071C5.40041 20.8946 5.65477 21 5.91998 21H19.92C20.1852 21 20.4396 20.8946 20.6271 20.7071C20.8146 20.5196 20.92 20.2652 20.92 20V9.48908L12.92 3.26686L4.91998 9.48908Z\" ></path>
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.91998 12C8.91998 11.4477 9.3677 11 9.91998 11H15.92C16.4723 11 16.92 11.4477 16.92 12V22C16.92 22.5523 16.4723 23 15.92 23C15.3677 23 14.92 22.5523 14.92 22V13H10.92V22C10.92 22.5523 10.4723 23 9.91998 23C9.3677 23 8.91998 22.5523 8.91998 22V12Z\" ></path>
                </svg>
                <p class=\"block w-full text-xs font-semibold     \">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "home"], "method", false, false, false, 26), "html", null, true);
        echo "</p>
            </a>
            <a href=\"/";
        // line 28
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 28) == "ar")) ? ("الحجز") : ("booking"));
        echo "\" class=\"px-4 custom-scroll-item ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 28) == "/booking")) ? ("active") : (""));
        echo "  ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 28) == "/%D8%A7%D9%84%D8%AD%D8%AC%D8%B2")) ? ("active") : (""));
        echo "    navbar-item relative  text-center w-full pt-1\">
                <svg width=\"25\" height=\"24\" viewbox=\"0 0 25 24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"color-animate mx-auto w-6 h-6 relative\" preserveaspectratio=\"none\">
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.44 3C7.46947 3 3.44003 7.02944 3.44003 12C3.44003 16.9706 7.46947 21 12.44 21C17.4106 21 21.44 16.9706 21.44 12C21.44 7.02944 17.4106 3 12.44 3ZM1.44003 12C1.44003 5.92487 6.3649 1 12.44 1C18.5152 1 23.44 5.92487 23.44 12C23.44 18.0751 18.5152 23 12.44 23C6.3649 23 1.44003 18.0751 1.44003 12Z\" ></path>
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.44 5C12.9923 5 13.44 5.44772 13.44 6V11.382L16.8872 13.1056C17.3812 13.3526 17.5814 13.9532 17.3345 14.4472C17.0875 14.9412 16.4868 15.1414 15.9928 14.8944L11.9928 12.8944C11.654 12.725 11.44 12.3788 11.44 12V6C11.44 5.44772 11.8877 5 12.44 5Z\" ></path>
                </svg>
                <p class=\"text-xs font-semibold     \">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Book"], "method", false, false, false, 33), "html", null, true);
        echo "</p>
            </a>
            <a href=\"/search\" class=\"px-4 custom-scroll-item ";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "currentPage", [], "any", false, false, false, 35) == "/search")) ? ("active") : (""));
        echo "  navbar-item relative  text-center w-full pt-1\">
                <svg width=\"25\" height=\"24\" viewbox=\"0 0 25 24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"color-animate mx-auto w-6 h-6 relative\" preserveaspectratio=\"none\">
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.76 4C7.89402 4 4.76001 7.13401 4.76001 11C4.76001 14.866 7.89402 18 11.76 18C15.626 18 18.76 14.866 18.76 11C18.76 7.13401 15.626 4 11.76 4ZM2.76001 11C2.76001 6.02944 6.78945 2 11.76 2C16.7306 2 20.76 6.02944 20.76 11C20.76 15.9706 16.7306 20 11.76 20C6.78945 20 2.76001 15.9706 2.76001 11Z\" ></path>
                    <path class=\"color-animate\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M16.7029 15.9429C17.0934 15.5524 17.7266 15.5524 18.1171 15.9429L22.4671 20.2929C22.8576 20.6834 22.8576 21.3166 22.4671 21.7071C22.0766 22.0977 21.4434 22.0977 21.0529 21.7071L16.7029 17.3571C16.3124 16.9666 16.3124 16.3334 16.7029 15.9429Z\" ></path>
                </svg>
                <p class=\"text-xs font-semibold     \">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "search"], "method", false, false, false, 40), "html", null, true);
        echo "</p>
            </a>
        </div>
    </div>
</div>



<div class=\"w-full cyan-bg text-white hidden relative\" style=\"z-index:999\">
\t<div class=\"mx-auto flex gap-3    container rtl\">
\t\t<a class=\"pt-2 px-2 font-semibold arrow arrow-r\" href=\"javascript:;\">
\t\t\t<b>→</b>
\t\t</a>
\t\t<div class=\"box-inner overflow-auto w-full custom-scroll\">
\t\t\t<div class=\"  custom-scroll-list gap-10 flex w-full p-2\">
\t\t\t\t<a href=\"javascript:;\" class=\"flex gap-2\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "online consultation"], "method", false, false, false, 55), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"javascript:;\" class=\"flex gap-2\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "offers"], "method", false, false, false, 56), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"javascript:;\" class=\"flex gap-2\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "OVULATION_CALCULATOR"], "method", false, false, false, 57), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"javascript:;\" class=\"flex gap-2\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "PREGNANCY_CALCULATOR"], "method", false, false, false, 58), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"javascript:;\" class=\"flex gap-2\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "about us"], "method", false, false, false, 59), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t<a class=\"pt-2 px-2 font-semibold arrow arrow-l\" href=\"javascript:;\">
\t\t\t←
\t\t</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "views/front/includes/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  146 => 58,  142 => 57,  138 => 56,  134 => 55,  116 => 40,  108 => 35,  103 => 33,  91 => 28,  86 => 26,  78 => 21,  73 => 19,  60 => 13,  55 => 11,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/navbar.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\navbar.html.twig");
    }
}
