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

/* views/front/includes/about_dropmenu.html.twig */
class __TwigTemplate_685404bf677e7281e98efdc7cfe8d9da extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "lang"], "method", false, false, false, 1) == "ar")) {
            // line 2
            echo "<li class=\"py-1\"><a href=\"/أحدث-التقنيات\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Latest Technologies"], "method", false, false, false, 2), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/استشارات-اونلاين\">";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "ONLINE_CONSULTATION"], "method", false, false, false, 3), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/expatriates\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "INTERNATIONAL_PATIENTS"], "method", false, false, false, 4), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/bedaya-offers\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Offers"], "method", false, false, false, 5), "html", null, true);
            echo "</a></li> 
<li class=\"py-1\"><a href=\"/رحلة-علاجك-في-مستشفى-بداية\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Medical Journey"], "method", false, false, false, 6), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/doctors\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "our Doctors"], "method", false, false, false, 7), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/من-نحن\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "About Us"], "method", false, false, false, 8), "html", null, true);
            echo " </a></li>
";
        } else {
            // line 10
            echo "<li class=\"py-1\"><a href=\"/about-us\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "About Us"], "method", false, false, false, 10), "html", null, true);
            echo " </a></li>
<li class=\"py-1\"><a href=\"/foreign-patients\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "INTERNATIONAL_PATIENTS"], "method", false, false, false, 11), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/Latest-technologies\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Latest Technologies"], "method", false, false, false, 12), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/offers\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Offers"], "method", false, false, false, 13), "html", null, true);
            echo "</a></li> 
<li class=\"py-1\"><a href=\"/Your-medical-journey-begins-in-the-hospital\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "Medical Journey"], "method", false, false, false, 14), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/online-consultation\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "ONLINE_CONSULTATION"], "method", false, false, false, 15), "html", null, true);
            echo "</a></li>
<li class=\"py-1\"><a href=\"/doctors\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "__", [0 => "our Doctors"], "method", false, false, false, 16), "html", null, true);
            echo "</a></li>
";
        }
    }

    public function getTemplateName()
    {
        return "views/front/includes/about_dropmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/includes/about_dropmenu.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\includes\\about_dropmenu.html.twig");
    }
}
