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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/contact.htm */
class __TwigTemplate_bb0e23c892183d7bc927c63e3d0614f71bb0b22c1ca243ba1581761b0533737a extends \Twig\Template
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
        echo "<div class=\"contact jumbotron m-b-3 text-xs-center\">
  <div class=\"container\">
    <div>
        <p>
            <strong>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
            </strong>
        </p>
        <a class=\"button\" href=\"#\" role=\"button\">Contacteer ons</a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact jumbotron m-b-3 text-xs-center\">
  <div class=\"container\">
    <div>
        <p>
            <strong>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
            </strong>
        </p>
        <a class=\"button\" href=\"#\" role=\"button\">Contacteer ons</a>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/contact.htm", "");
    }
}
