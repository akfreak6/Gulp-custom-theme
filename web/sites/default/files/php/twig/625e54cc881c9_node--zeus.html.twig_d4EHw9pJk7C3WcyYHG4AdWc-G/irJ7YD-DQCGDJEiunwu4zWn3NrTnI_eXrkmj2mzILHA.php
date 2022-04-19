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

/* themes/custom/zeus/templates/node--zeus.html.twig */
class __TwigTemplate_43700f966494b95c0d7c540cb21bd05f21320d146cacc582824c4865953d51c1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'hooter' => [$this, 'block_hooter'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/zeus/templates/node--zeus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bartik/classy.node"), "html", null, true);
        echo "
    <article";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo ">
      <header>
        ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
          ";
        // line 9
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 10
            echo "          <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 10), 10, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 11, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 11, $this->source), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 14
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 14, $this->source), "html", null, true);
        echo "
      </header>

      <div";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
        
        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("zeus/cuddly-slider"), "html", null, true);
        echo "
        <div>Some fluffy markup ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 20, $this->source), "html", null, true);
        echo "</div>
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 21, $this->source), "html", null, true);
        echo "
      </div>
    </article>
  ";
    }

    // line 26
    public function block_hooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
    <div class=\"hoot\"
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/zeus/templates/node--zeus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  102 => 21,  98 => 20,  94 => 19,  89 => 17,  82 => 14,  74 => 11,  69 => 10,  67 => 9,  63 => 8,  58 => 6,  53 => 5,  49 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"page.html.twig\" %}


  {% block main %}
  {{ attach_library('bartik/classy.node') }}
    <article{{ attributes.addClass(classes) }}>
      <header>
        {{ title_prefix }}
          {% if label and not page %}
          <h2{{ title_attributes.addClass('node__title') }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
          </h2>
        {% endif %}
        {{ title_suffix }}
      </header>

      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        
        {{ attach_library('zeus/cuddly-slider') }}
        <div>Some fluffy markup {{ message }}</div>
        {{ content }}
      </div>
    </article>
  {% endblock main %}

{% block hooter %}  
    <div class=\"hoot\"
    </div>
{% endblock hooter %}", "themes/custom/zeus/templates/node--zeus.html.twig", "/var/www/html/web/themes/custom/zeus/templates/node--zeus.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("escape" => 5);
        static $functions = array("attach_library" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
