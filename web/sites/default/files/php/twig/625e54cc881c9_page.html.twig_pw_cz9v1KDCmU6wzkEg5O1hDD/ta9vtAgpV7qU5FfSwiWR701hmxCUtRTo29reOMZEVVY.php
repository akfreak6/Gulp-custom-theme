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

/* page.html.twig */
class __TwigTemplate_a619ce018c5d4557e15825d82d237af50e2484c499b51e002867ef28730c306e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'featured' => [$this, 'block_featured'],
            'main' => [$this, 'block_main'],
            'hooter' => [$this, 'block_hooter'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('featured', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('hooter', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
     ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
     ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
     ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
</header>
";
    }

    // line 9
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<section class=\"featured\" id=\"featured\" role=\"complementary\">
   ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
</section>
";
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
     ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
   </main>
   <aside class=\"right--sidebar\" id=\"sidebar\" role=\"complementary\">
     ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_sidebar", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
   </aside>
</section>
";
    }

    // line 26
    public function block_hooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
   <div>
      ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hooter_first", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
   </div>
";
    }

    // line 32
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer--top\">
     ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
     ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
     ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
   </div>
   <div class=\"footer--bottom\">
       ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
   </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 40,  156 => 37,  152 => 36,  148 => 35,  144 => 33,  140 => 32,  133 => 28,  126 => 26,  118 => 21,  112 => 18,  108 => 16,  104 => 15,  97 => 11,  94 => 10,  90 => 9,  83 => 5,  79 => 4,  75 => 3,  72 => 2,  68 => 1,  64 => 32,  61 => 31,  59 => 26,  56 => 25,  54 => 15,  51 => 14,  49 => 9,  46 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
     {{ page.branding }}
     {{ page.navigation }}
     {{ page.search }}
</header>
{% endblock %}

{% block featured %}
<section class=\"featured\" id=\"featured\" role=\"complementary\">
   {{ page.featured }}
</section>
{% endblock %}

{% block main %}
<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
     {{ page.content }}
   </main>
   <aside class=\"right--sidebar\" id=\"sidebar\" role=\"complementary\">
     {{ page.right_sidebar }}
   </aside>
</section>
{% endblock %}

{% block hooter %}  
   <div>
      {{ page.hooter_first }}
   </div>
{% endblock %}

{% block footer %}
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer--top\">
     {{ page.footer_first }}
     {{ page.footer_second }}
     {{ page.footer_third }}
   </div>
   <div class=\"footer--bottom\">
       {{ page.footer_bottom }}
   </div>
</footer>
{% endblock %}", "page.html.twig", "themes/custom/zeus/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                []
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
