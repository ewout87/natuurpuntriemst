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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/disclaimer.htm */
class __TwigTemplate_ea00dafb4f504ec9fd4cae38a7055d29842f78c4241fbcbf9a6218e1d78720c3 extends \Twig\Template
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
        echo "<footer class=\"footer mt-auto py-3\">
  <div class=\"container\">
    <ul>
        <li>
            <a href=\"#\">Privacy</a>
        </li>
        <li>
            <a href=\"#\">Cookies</a>
        </li>
        <li>
            <span>2019</span>
        </li>
    </ul>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/disclaimer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer mt-auto py-3\">
  <div class=\"container\">
    <ul>
        <li>
            <a href=\"#\">Privacy</a>
        </li>
        <li>
            <a href=\"#\">Cookies</a>
        </li>
        <li>
            <span>2019</span>
        </li>
    </ul>
  </div>
</footer>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/disclaimer.htm", "");
    }
}
