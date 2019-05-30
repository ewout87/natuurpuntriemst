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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm */
class __TwigTemplate_df7704bd2376d1953572c23991e150c9f0ed0e7a18b1aabbf4827c2aa9df5c36 extends \Twig\Template
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
        echo "<div class=\"jumbotron gradient header text-xs-center\">
\t\t<div class=\"container\">
\t\t\t";
        // line 3
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 4
        echo "\t\t\t<h1 class=\"display-3\">Welkom</h1>
\t\t\t<p class=\"lead\">";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("lead"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 7
        echo "\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  49 => 3,  43 => 5,  40 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron gradient header text-xs-center\">
\t\t<div class=\"container\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Welkom</h1>
\t\t\t<p class=\"lead\">{% content 'lead' %}</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/header.htm", "");
    }
}
