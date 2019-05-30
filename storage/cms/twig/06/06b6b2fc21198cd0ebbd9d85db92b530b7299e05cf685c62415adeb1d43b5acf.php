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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/upcoming_events.htm */
class __TwigTemplate_cf5df4b186a53c190c406b47875daac1e8842f144cad516f14f3722d3762c6c4 extends \Twig\Template
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
    <div class=\"row m-b-1\">
        <div class=\"col-md-12 text-xs-center\">
            <h2>Komende activiteiten</h2>
        </div>
    </div>
  <div class=\"row m-b-1\">
  
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "  
    <div class=\"col-md-4\">

          <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"calendar\">
                    <div>";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "start_at", [], "any", false, false, false, 16), "l"), 0, 3), "html", null, true);
            echo "</div>
                  <div>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "start_at", [], "any", false, false, false, 17), "d"), "html", null, true);
            echo "</div>
                  <div>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "start_at", [], "any", false, false, false, 18), "M"), "html", null, true);
            echo "</div>
                </div>
            </div>
            <div class=\"col-md-8\">
              <div class=\"\">
                <h5 class=\"card-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "address", [], "any", false, false, false, 24), "html", null, true);
            echo "</h6>
                <a href=\"#\" class=\"card-link\">Lees meer</a>
              </div>
            </div>
          </div>

    </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>
      <div class=\"text-xs-center\">
        <a class=\"button m-x-auto\" href=\"#\">Alle activiteiten ></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/upcoming_events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  77 => 24,  73 => 23,  65 => 18,  61 => 17,  57 => 16,  49 => 10,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container m-b-3\">
    <div class=\"row m-b-1\">
        <div class=\"col-md-12 text-xs-center\">
            <h2>Komende activiteiten</h2>
        </div>
    </div>
  <div class=\"row m-b-1\">
  
  {% for record in records %}
  
    <div class=\"col-md-4\">

          <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"calendar\">
                    <div>{{ record.start_at|date(\"l\")|slice(0, 3) }}</div>
                  <div>{{ record.start_at|date(\"d\") }}</div>
                  <div>{{ record.start_at|date(\"M\") }}</div>
                </div>
            </div>
            <div class=\"col-md-8\">
              <div class=\"\">
                <h5 class=\"card-title\">{{ record.name }}</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">{{ record.address }}</h6>
                <a href=\"#\" class=\"card-link\">Lees meer</a>
              </div>
            </div>
          </div>

    </div>
    
    {% endfor %}
  </div>
      <div class=\"text-xs-center\">
        <a class=\"button m-x-auto\" href=\"#\">Alle activiteiten ></a>
    </div>
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/upcoming_events.htm", "");
    }
}
