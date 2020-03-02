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

/* partials/head.html.twig */
class __TwigTemplate_b6ca8e13c7606c19edb79bbed21ec9e1a7d9c3e948538ba8a0cc7bcec6560392 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        // line 2
        echo "<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo " ";
        }
        echo "</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 7
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", []) != "generator")) {
                // line 8
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", [])) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", [])) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", [])) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", [])) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", []);
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 13
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
";
        }
        // line 15
        echo "
";
        // line 16
        $context["favicon"] = "favicon.png";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) > 0)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 19
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["icon"], "name", []);
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        echo "
<link rel=\"icon\" href=\"";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["favicon"] ?? null)), true);
        echo "\" />

";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    ";
        // line 27
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/font-awesome.min.css"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/main.css"], "method");
        // line 29
        echo "
    ";
        // line 30
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 31
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie8.css"], "method");
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 9))) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie9.css"], "method");
            // line 36
            echo "    ";
        }
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 43
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/ie/html5shiv.js"], "method");
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 47
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/ie/respond.min.js"], "method");
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    ";
        // line 50
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 51
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.poptrox.min.js"], "method");
        // line 52
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.dropotron.min.js"], "method");
        // line 53
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.onvisible.min.js"], "method");
        // line 54
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.scrolly.min.js"], "method");
        // line 55
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.scrollex.min.js"], "method");
        // line 56
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 57
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/util.js"], "method");
        // line 58
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/main.js"], "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 58,  239 => 57,  236 => 56,  233 => 55,  230 => 54,  227 => 53,  224 => 52,  221 => 51,  219 => 50,  216 => 49,  213 => 48,  210 => 47,  208 => 46,  205 => 45,  202 => 44,  199 => 43,  196 => 42,  193 => 41,  188 => 36,  185 => 35,  183 => 34,  180 => 33,  177 => 32,  174 => 31,  172 => 30,  169 => 29,  166 => 28,  164 => 27,  161 => 26,  158 => 25,  151 => 61,  148 => 60,  146 => 41,  141 => 39,  138 => 38,  136 => 25,  131 => 23,  128 => 22,  121 => 20,  118 => 19,  113 => 18,  111 => 17,  109 => 16,  106 => 15,  100 => 13,  98 => 12,  95 => 11,  61 => 8,  58 => 7,  54 => 6,  39 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

{% set favicon = 'favicon.png' %}
{% if theme_config.favicon|length > 0 %}
    {% for icon in theme_config.favicon %}
        {% set favicon = icon.name %}
    {% endfor %}
{% endif %}

<link rel=\"icon\" href=\"{{ url('theme://images/' ~ favicon, true) }}\" />

{% block stylesheets %}
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    {% do assets.add('theme://assets/css/font-awesome.min.css') %}
    {% do assets.add('theme://assets/css/main.css') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/css/ie8.css') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
        {% do assets.add('theme://assets/css/ie9.css') %}
    {% endif %}
{% endblock %}

{{ assets.css() }}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/html5shiv.js') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/respond.min.js') %}
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://assets/js/jquery.poptrox.min.js') %}
    {% do assets.add('theme://assets/js/jquery.dropotron.min.js') %}
    {% do assets.add('theme://assets/js/jquery.onvisible.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrolly.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrollex.min.js') %}
    {% do assets.add('theme://assets/js/skel.min.js') %}
    {% do assets.add('theme://assets/js/util.js') %}
    {% do assets.add('theme://assets/js/main.js') %}
{% endblock %}

{{ assets.js() }}

{% endblock head %}
", "partials/head.html.twig", "/var/www/grav/user/themes/big-picture/templates/partials/head.html.twig");
    }
}
