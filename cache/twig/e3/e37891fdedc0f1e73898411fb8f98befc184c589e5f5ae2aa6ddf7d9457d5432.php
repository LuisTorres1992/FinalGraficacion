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

/* partials/footer.html.twig */
class __TwigTemplate_08345b153c7f4e8bbfde3dd23716e4b859e20406b2e6483675c64ae993da6278 extends \Twig\Template
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
        echo "<footer id=\"footer\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_icons", [])) > 0)) {
            // line 3
            echo "    <ul class=\"actions\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_icons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 5
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["icon"], "link", []);
                echo "\" class=\"icon ";
                echo $this->getAttribute($context["icon"], "icon", []);
                echo "\"></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_items", [])) > 0)) {
            // line 11
            echo "    <ul class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li>";
                echo $this->getAttribute($context["item"], "item", []);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
    ";
        }
        // line 17
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  78 => 15,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  53 => 7,  42 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
    {% if theme_config.footer_icons|length > 0 %}
    <ul class=\"actions\">
        {% for icon in theme_config.footer_icons %}
        <li><a href=\"{{ icon.link }}\" class=\"icon {{ icon.icon }}\"></a></li>
        {% endfor %}
    </ul>
    {% endif %}

    {% if theme_config.footer_items|length > 0 %}
    <ul class=\"menu\">
        {% for item in theme_config.footer_items %}
        <li>{{ item.item }}</li>
        {% endfor %}
    </ul>
    {% endif %}
</footer>
", "partials/footer.html.twig", "/var/www/grav/user/themes/big-picture/templates/partials/footer.html.twig");
    }
}
