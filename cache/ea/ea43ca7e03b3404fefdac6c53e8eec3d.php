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

/* views/front/includes/head.html.twig */
class __TwigTemplate_8f807822d302feae700e7a34bbc6ab9e extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "dir"], "method", false, false, false, 2), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ($context["lang_key"] ?? null), "html", null, true);
        echo "\">

<head>
";
        // line 5
        if (($context["noindex"] ?? null)) {
            // line 6
            echo "    ";
        } else {
            // line 8
            echo "    <meta name=\"robots\" content=\"index,follow\">
";
        }
        // line 10
        echo "    <meta charset=\"utf-8\">
    <meta content=\"ie=edge\" http-equiv=\"x-ua-compatible\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "setting", [0 => "sitename"], "method", false, false, false, 13))), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 14
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 14), "seo_desc", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 14), "seo_desc", [], "any", false, false, false, 14), "html", null, true))) : (print ("مجموعة مستشفيات بداية متخصصون فى علاج العقم وأمراض الذكورة وأطفال الانابيب وأمراض الجهاز التناسلي")));
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"canonical\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "uri", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "uri", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "setting", [0 => "sitename"], "method", false, false, false, 20))), "html", null, true);
        echo "\">
    <meta property=\"og:image\" content=\"/route/image.php?src=1253926083_1828277228_581308477.jpg&img=pic&w=800\">
    <meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 22), "seo_desc", [], "any", false, false, false, 22)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 22), "seo_desc", [], "any", false, false, false, 22)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "setting", [0 => "seo_desc"], "method", false, false, false, 22))), "html", null, true);
        echo "\">
    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:title\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "setting", [0 => "sitename"], "method", false, false, false, 25))), "html", null, true);
        echo "\">
    <meta property=\"twitter:image\" content=\"/route/image.php?src=1253926083_1828277228_581308477.jpg&img=pic&w=800\">
    <meta property=\"twitter:description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 27), "seo_desc", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 27), "seo_desc", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "setting", [0 => "seo_desc"], "method", false, false, false, 27))), "html", null, true);
        echo "\">

    <!-- Favicon -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/uploads/images/favicon.png\">
    <link rel=\"icon\" type=\"image.png\" sizes=\"32x32\" href=\"/uploads/images/favicon.png\">
    <link rel=\"icon\" type=\"image.png\" sizes=\"16x16\" href=\"/uploads/images/favicon.png\">

    <!-- CSS -->
    <link href=\"/assets?asset=/src/front/css/tailwind.min.css\" rel=\"stylesheet\">
    <link href=\"/assets?asset=/src/front/fontawesome/css/all.min.css\" rel=\"stylesheet\">  
    <link href=\"/assets?asset=/src/front/css/custom.css\" rel=\"stylesheet\">

    <!-- JS -->
    <script src=\"/assets?asset=/src/front/js/jquery-3.5.1.min.js\"></script>
    <script type=\"text/javascript\">
    var rootURL = 'https://bedaya.medianssolutions.com/';
    var imageURL = 'https://bedaya.medianssolutions.com/route/image.php?';
    </script>
    <style>.text-default{text-align: ";
        // line 45
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 45) == "ar")) ? ("right") : ("left"));
        echo " } @media (max-width: 500px) { #large-slider { display: none; } }</style>
    <!-- UA-89806532-4 -->
    <meta name=\"google-site-verification\" content=\"-X2XHH_xRXPphZ-NG1_0ldtVIn2TQq5wHG8VRu9yZmY\" />
    <script>
        
        function scrollBody()
        {
            if (window.innerWidth < 900 )
            {
                window.scrollY > 100
                ? jQuery('.fixed-on-scroll').addClass('fixed')
                : jQuery('.fixed-on-scroll').removeClass('fixed')
            } else {
                window.scrollY > 100
                ? jQuery('.fixed-on-scroll').css('padding-top', '0px')
                : jQuery('.fixed-on-scroll').css('padding-top', '16px')
            }
        }
    </script>
    
    <!-- Google tag (gtag.js) -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-89806532-4\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-89806532-4');
</script>



</head>
<body class=\"p-0 m-0 ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "dir"], "method", false, false, false, 78), "html", null, true);
        echo "\" onScroll=\"scrollBody()\">
";
    }

    public function getTemplateName()
    {
        return "views/front/includes/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 78,  118 => 45,  97 => 27,  92 => 25,  86 => 22,  81 => 20,  77 => 19,  71 => 16,  66 => 14,  62 => 13,  57 => 10,  53 => 8,  50 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/head.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\head.html.twig");
    }
}
