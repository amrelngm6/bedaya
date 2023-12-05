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

/* views/front/page.html.twig */
class __TwigTemplate_26d0783dab85c3378459ef675034f544 extends \Twig\Template
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
        $context["hasindex"] = 2;
        // line 2
        $this->loadTemplate("views/front/includes/header.html.twig", "views/front/page.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "home", [], "any", false, false, false, 4) == 0)) {
            // line 5
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "order", [], "any", false, false, false, 5) != 3)) {
                // line 6
                echo "<div class=\"w-full cyan-bg pb-6 lg:pt-20 relative \">
    <div class=\"w-full overflow-hidden h-full absolute bottom-0 left-0\">
        <img loading=\"lazy\" alt=\"";
                // line 8
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "settings", [], "any", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["sitename"] ?? null) : null), "html", null, true);
                echo "\" src=\"/stream?image=/uploads/img/light-network.webp\" class=\"absolute left-0 top-0 w-full\" style=\"opacity: .3;\" />
    </div>
    <div class=\"container mx-auto relative pt-8\">
        <h1 class=\"text-2xl mx-auto w-auto text-center font-bold text-white\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
                echo "</h1>
        ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 12), "short", [], "any", false, false, false, 12)) {
                    echo "<p class=\"text-center w-full text-white\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 12), "short", [], "any", false, false, false, 12), "html", null, true);
                    echo "</p>";
                }
                // line 13
                echo "    </div>
</div>
";
            }
        }
        // line 17
        echo "<div class=\"blog-content \">
    <div class=\"mx-auto \">
        ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "renderTemplate", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 19), "content", [], "any", false, false, false, 19), 1 => ($context["item"] ?? null)], "method", false, false, false, 19), "render", [0 => ["item" => ($context["item"] ?? null), "hasindex" => 4, "app" => ($context["app"] ?? null), "lang" => ($context["lang"] ?? null), "specializations" => ($context["specializations"] ?? null), "story_dates" => ($context["story_dates"] ?? null), "stories" => ($context["stories"] ?? null), "all_stories" => ($context["all_stories"] ?? null), "doctors" => ($context["doctors"] ?? null), "blog" => ($context["blog"] ?? null), "all_technologies" => ($context["all_technologies"] ?? null)]], "method", false, false, false, 19);
        echo "
    </div>
</div>
";
        // line 22
        $this->loadTemplate("views/front/includes/navbar.html.twig", "views/front/page.html.twig", 22)->display($context);
        // line 23
        echo "

<style>
.blog-content section.kedit > .keditable > h3
{
    color: #fff
}
.blog-content section.kedit > .keditable > p
{
}
.list-icon li [
    margin: 0 0 5px 0
]
</style>

";
        // line 38
        $this->loadTemplate("views/front/includes/footer.html.twig", "views/front/page.html.twig", 38)->display($context);
    }

    public function getTemplateName()
    {
        return "views/front/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  86 => 23,  84 => 22,  78 => 19,  74 => 17,  68 => 13,  62 => 12,  58 => 11,  52 => 8,  48 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/front/page.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\front\\page.html.twig");
    }
}
