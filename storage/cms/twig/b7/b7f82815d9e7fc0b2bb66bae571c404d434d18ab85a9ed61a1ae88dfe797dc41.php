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

/* C:\xampp\htdocs\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/last_news.htm */
class __TwigTemplate_4c36bf27e2be0ac184c5836a6e1a0d8ae2a2a66f4131ee1b618920d5dafefd78 extends \Twig\Template
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
        echo "<div class=\"last-news container m-b-3\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "  <div class=\"row\">
    <div class=\"col-md-8\">
        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"featured-images text-center\">
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 8
                    echo "            <p>
                <img class=\"position-relative\"
                    data-src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"
                    src=\"";
                    // line 11
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 11), 500]);
                    echo "\"
                    alt=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 12), "html", null, true);
                    echo "\"
                    />
            </p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            </div>
        ";
            }
            // line 18
            echo "    </div>
    <div class=\"col-md-4\">
        <div class=\"teaser-text arrow-left\">
            <h3>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
            <p class=\"info\">
                Gepubliceerd op ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 23), "M d, Y"), "html", null, true);
            echo "
                
            </p>
            <p class=\"excerpt\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 26);
            echo "</p>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 27));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "                    <span class=\"categories\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</span>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                    echo ", ";
                }
                // line 29
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            <div>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 31), "html", null, true);
            echo "\">Lees meer</a>
            </div>
        </div>
    </div>
  </div>
  <div class=\"text-xs-center\">
      <a class=\"button m-x-auto\" href=\"#\">Alle artikels ></a>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/last_news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  142 => 31,  139 => 30,  125 => 29,  118 => 28,  101 => 27,  97 => 26,  91 => 23,  86 => 21,  81 => 18,  77 => 16,  67 => 12,  63 => 11,  59 => 10,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"last-news container m-b-3\">
    {% for post in posts %}
  <div class=\"row\">
    <div class=\"col-md-8\">
        {% if post.featured_images.count %}
            <div class=\"featured-images text-center\">
            {% for image in post.featured_images %}
            <p>
                <img class=\"position-relative\"
                    data-src=\"{{ image.filename}}\"
                    src=\"{{ image.path|resize(500)}}\"
                    alt=\"{{ image.description }}\"
                    />
            </p>
            {% endfor %}
            </div>
        {% endif %}
    </div>
    <div class=\"col-md-4\">
        <div class=\"teaser-text arrow-left\">
            <h3>{{ post.title }}</h3>
            <p class=\"info\">
                Gepubliceerd op {{ post.published_at|date('M d, Y') }}
                
            </p>
            <p class=\"excerpt\">{{ post.summary|raw }}</p>
            {% for category in post.categories %}
                    <span class=\"categories\">{{ category.name }}</span>{% if not loop.last %}, {% endif %}
                {% endfor %}
            <div>
                <a href=\"{{ post.url }}\">Lees meer</a>
            </div>
        </div>
    </div>
  </div>
  <div class=\"text-xs-center\">
      <a class=\"button m-x-auto\" href=\"#\">Alle artikels ></a>
  </div>
  {% endfor %}
</div>", "C:\\xampp\\htdocs\\natuur.riemst/themes/hambern-hambern-blank-bootstrap-4/partials/last_news.htm", "");
    }
}
