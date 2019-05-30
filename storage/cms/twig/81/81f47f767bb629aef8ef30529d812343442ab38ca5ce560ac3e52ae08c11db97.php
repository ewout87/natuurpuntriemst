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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm */
class __TwigTemplate_da52abeb7a73eb235aadd6e11a75f353398442933b63c1db6d9c560aa95e28b7 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<div class=\"jumbotron footer m-b-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <srrong>Steun ons </strong><a class=\"social\" href=\"#\"><i class=\"fas fa-heart\"></i></a>
            </div>
            <div class=\"col-md-3\">
                <strong>Volg ons </strong><a class=\"social\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
            </div>
            <div class=\"col-md-6\">
                 <strong>Schrijf je in voor onze nieuwsbrief</strong>
                <form class=\"form-inline\" action=\"/action_page.php\">
                
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"jouw emailadres\">
                    <input type=\"submit\" class=\"btn btn-default\"value=\"Verzenden\">
                </form>
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron footer m-b-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <srrong>Steun ons </strong><a class=\"social\" href=\"#\"><i class=\"fas fa-heart\"></i></a>
            </div>
            <div class=\"col-md-3\">
                <strong>Volg ons </strong><a class=\"social\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
            </div>
            <div class=\"col-md-6\">
                 <strong>Schrijf je in voor onze nieuwsbrief</strong>
                <form class=\"form-inline\" action=\"/action_page.php\">
                
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"jouw emailadres\">
                    <input type=\"submit\" class=\"btn btn-default\"value=\"Verzenden\">
                </form>
            </div>
        </div>
\t</div>
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/footer.htm", "");
    }
}
