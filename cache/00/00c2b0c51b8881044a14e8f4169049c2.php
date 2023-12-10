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

/* views/admin/login.html.twig */
class __TwigTemplate_8f798c0041e654dff999af52789ad4c0 extends \Twig\Template
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
<!DOCTYPE html>
<html lang=\"en\">
<head>
    
    <meta charset=\"utf-8\">
    <meta content=\"ie=edge\" http-equiv=\"x-ua-compatible\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Bedaya Login page | Medians System</title>
    <meta name=\"description\" content=\"Medians PS is a solution that manage cyber cafes, gaming & playstation lounges branches witn inventory management and booking system.\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://bedayahospitals.com/login\">
    <meta property=\"og:title\" content=\"\">
    <meta property=\"og:image\" content=\"https://bedayahospitals.com/route/image.php?src=1253926083_1828277228_581308477.jpg&img=pic&w=800\">
    <meta property=\"og:description\" content=\"Medians PS is a solution that manage cyber cafes, gaming & playstation lounges branches witn inventory management and booking system\">
    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:title\" content=\"\">
    <!-- <meta property=\"twitter:image\" content=\"\"> -->
    <meta property=\"twitter:description\" content=\"Medians PS is a solution that manage cyber cafes, gaming & playstation lounges branches witn inventory management and booking system\">

    <!-- Favicon -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/uploads/images/favicon.webp\">
    <link rel=\"icon\" type=\"image.webp\" sizes=\"32x32\" href=\"/uploads/images/favicon.webp\">
    <link rel=\"icon\" type=\"image.webp\" sizes=\"16x16\" href=\"/uploads/images/favicon.webp\">

    <!-- CSS -->
   <link rel=\"stylesheet\" href=\"/src/front/main.css\">
    

    <!-- JS -->
    <script type=\"text/javascript\">
    var rootURL = 'https://bedayahospitals.com/';
    var imageURL = 'https://bedayahospitals.com/route/image.php?';
    </script>
    
</head>
<body class=\"p-0 m-0 \">
<section class=\"sigin__page bg__white\">
   <div class=\"container\">
      <div class=\"signin__wrapper\">
         <div class=\"row justify-content-between align-items-center\">
            <div class=\"col-lg-6\">
               <div class=\"signin__content__left\">
                  <form action=\"/login\" method=\"POST\" id=\"login-form\">
                     <div class=\"row g-4\">
                        <div class=\"py-4 w-full\">
                           <div class=\"form__grp\">
                              <label class=\"py-2 block\" for=\"emailid\">Email</label>
                              <input name=\"params[email]\"  type=\"email\" id=\"emailid\" placeholder=\"Enter Your Email...\" required>
                           </div>
                        </div>
                        <div class=\"py-4 w-full\">
                           <div class=\"form__grp\">
                              <label class=\"py-2 block\" for=\"paswords\">Password</label>
                              <input name=\"params[password]\" minlength=\"5\" type=\"password\" id=\"paswords\" placeholder=\"Enter Your Password...\" required>
                           </div>
                        </div>
                     </div>
                     <p style=\"padding-top: 15px;\">
                        <button type=\"submit\" class=\"cmn--btn\">
                           <span>
                              Login
                           </span>
                        </button>
                        <a href=\"/\" class=\"danger\" style=\"padding: 10px; \">
                           <span>Back home</span>
                        </a>
                     </p>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

   


   <!--Jquery 3 6 0 Min Js-->
   <script src=\"/src/builder/js/jquery.min.js\"></script>
   <!--Bootstrap bundle Js-->
   <script src=\"/src/builder/assets/js/bootstrap.bundle.min.js\"></script>
   
   <!--Sweetalert2 Js-->
   <script src=\"/src/front/js/sweetalert2@11.js\"></script>

   <!--main Js-->
   <script src=\"/src/front/main.js\"></script>

   <style>
   .block {display:block}
   .py-4 {padding: 10px 0}
   .py-2 {padding: 5px 0}
   </style>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "views/admin/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/admin/login.html.twig", "C:\\xampp\\htdocs\\bedaya\\app\\views\\admin\\login.html.twig");
    }
}
