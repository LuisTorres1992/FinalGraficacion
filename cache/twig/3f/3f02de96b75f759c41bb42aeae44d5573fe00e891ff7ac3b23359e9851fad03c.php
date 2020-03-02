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

/* partials/base.html.twig */
class __TwigTemplate_39b076586b0de86adee14571ef2919d2f073b7197d28cba5c986279c8ab70df6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 5
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 5)->display($context);
        // line 6
        echo "    </head>
    <body>
        ";
        // line 8
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  43 => 6,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% include 'partials/head.html.twig' %}
    </head>
    <body>
        {% include 'partials/header.html.twig' %}

        {% block content %}{% endblock %}

        {% include 'partials/footer.html.twig' %}
    </body>
</html>
", "partials/base.html.twig", "/var/www/grav/user/themes/big-picture/templates/partials/base.html.twig");
    }
}
