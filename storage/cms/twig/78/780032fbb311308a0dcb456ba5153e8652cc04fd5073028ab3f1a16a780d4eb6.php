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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/nature.htm */
class __TwigTemplate_dd955d10ef889e72af17ef6c551632eef617fe55dc0d7719171de66a7b138624 extends \Twig\Template
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
        echo "<div class=\"container m-b-3\">
  <div class=\"nature gradient\">
    <div>
        <h2>Ontdek onze natuur!</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
        </p>
        <a class=\"button\" href=\"#\" role=\"button\">Naar interactieve kaart</a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/nature.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container m-b-3\">
  <div class=\"nature gradient\">
    <div>
        <h2>Ontdek onze natuur!</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
        </p>
        <a class=\"button\" href=\"#\" role=\"button\">Naar interactieve kaart</a>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/nature.htm", "");
    }
}
