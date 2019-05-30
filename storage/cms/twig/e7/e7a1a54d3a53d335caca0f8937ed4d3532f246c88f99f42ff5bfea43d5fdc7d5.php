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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_b731f9331e139793952d4ae4f609c9e9b369f45702699f6cafc7010c3e81eef9 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">

\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Natuur.Riemst</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "baseFileName", [], "any", false, false, false, 5) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Over ons</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "baseFileName", [], "any", false, false, false, 8) == "nature")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("nature");
        echo "\">Natuur</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 11
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "baseFileName", [], "any", false, false, false, 11) == "projects")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("projects");
        echo "\">Projecten</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 14
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "baseFileName", [], "any", false, false, false, 14) == "news")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">Nieuws</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 17
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "baseFileName", [], "any", false, false, false, 17) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>

\t</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  80 => 17,  75 => 15,  71 => 14,  66 => 12,  62 => 11,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">

\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Natuur.Riemst</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">Over ons</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'nature' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'nature'|page }}\">Natuur</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'projects' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'projects'|page }}\">Projecten</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'news' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'news'|page }}\">Nieuws</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>

\t</nav>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
