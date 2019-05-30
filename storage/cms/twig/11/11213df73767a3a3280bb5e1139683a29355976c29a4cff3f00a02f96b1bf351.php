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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/projects.htm */
class __TwigTemplate_a179c01abed0fdccc441d2e0f1e198fe871d94e8efd22949108a55cd2b2b3d2c extends \Twig\Template
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
        echo "<div class=\"projects container m-b-3\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"teaser-text arrow-right\">
                <h2>Project title</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
                </p>
                <a href=\"#\">Lees meer</a>
            </div>
        </div>    
        <div class=\"col-md-8 position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
              <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
              </ol>
              <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"First slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>First Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class=\"carousel-item\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"Second slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Second Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class=\"carousel-item\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"Third slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Third Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
              </a>
              <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
              </a>
            </div>
        </div>
    </div> 
    <div class=\"text-xs-center\">
          <a class=\"button m-x-auto\" href=\"#\">Alle projecten ></a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/projects.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"projects container m-b-3\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"teaser-text arrow-right\">
                <h2>Project title</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac libero pellentesque, varius risus vel, fringilla leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis consectetur libero. Sed vehicula blandit pharetra. 
                </p>
                <a href=\"#\">Lees meer</a>
            </div>
        </div>    
        <div class=\"col-md-8 position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
              <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
              </ol>
              <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"First slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>First Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class=\"carousel-item\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"Second slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Second Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class=\"carousel-item\">
                  <img class=\"d-block w-100\" src=\"https://source.unsplash.com/random/640x480\" alt=\"Third slide\">
                  <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Third Slide</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
              </a>
              <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
              </a>
            </div>
        </div>
    </div> 
    <div class=\"text-xs-center\">
          <a class=\"button m-x-auto\" href=\"#\">Alle projecten ></a>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/projects.htm", "");
    }
}
