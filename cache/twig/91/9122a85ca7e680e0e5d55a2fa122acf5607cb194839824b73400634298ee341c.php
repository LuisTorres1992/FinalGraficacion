<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/header.html.twig */
class __TwigTemplate_79ef2d54c2abbde390456866ff487687d79122d3e64d4895d9c74d429e14a4b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\">
    <h1 id=\"logo\"><a href=\"";
        // line 2
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a></h1>
    <nav id=\"nav\">
        <ul>
            ";
        // line 5
        if ((($this->getAttribute(($context["page"] ?? null), "template", [], "method") != "modular") &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "home_menu_item", [])))) {
            // line 6
            echo "              <li><a href=\"";
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "home_menu_item", []);
            echo "</a></li>
            ";
        }
        // line 8
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 9
            echo "            <li><a href=\"#";
            echo twig_replace_filter($this->getAttribute($context["module"], "folder", []), ["_" => ""]);
            echo "\">";
            echo $this->getAttribute($context["module"], "menu", []);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  56 => 9,  51 => 8,  43 => 6,  41 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
    <h1 id=\"logo\"><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a></h1>
    <nav id=\"nav\">
        <ul>
            {% if page.template() != 'modular' and page.header.home_menu_item is not empty %}
              <li><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ page.header.home_menu_item }}</a></li>
            {% endif %}
            {% for module in page.collection() %}
            <li><a href=\"#{{ module.folder|replace({'_': ''}) }}\">{{ module.menu }}</a></li>
            {% endfor %}
        </ul>
    </nav>
</header>
", "partials/header.html.twig", "/var/www/grav/user/themes/big-picture/templates/partials/header.html.twig");
    }
}
