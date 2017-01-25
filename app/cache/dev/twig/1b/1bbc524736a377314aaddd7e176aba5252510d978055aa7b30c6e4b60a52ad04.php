<?php

/* BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig */
class __TwigTemplate_f7b9eef6abce821307b909a77243a84c48ebf97af780260a1813bd24807efb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2cff3d7195186df4df4feb7d57efb95f703340981a27413cac99cbe43614a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cff3d7195186df4df4feb7d57efb95f703340981a27413cac99cbe43614a6d->enter($__internal_d2cff3d7195186df4df4feb7d57efb95f703340981a27413cac99cbe43614a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig"));

        // line 1
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->getSourceContext()); })()), "")) : (""));
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 3, $this->getSourceContext()); })()) > 1)) {
            // line 4
            echo "    ";
            if ((array_key_exists("style", $context) && ((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 4, $this->getSourceContext()); })()) == "pager"))) {
                // line 5
                echo "
        ";
                // line 6
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 6, $this->getSourceContext()); })()), "Previous")) : ("Previous"));
                // line 7
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 7, $this->getSourceContext()); })()), "Next")) : ("Next"));
                // line 8
                echo "        ";
                $context["aligned"] = ((array_key_exists("aligned", $context)) ? (_twig_default_filter((isset($context["aligned"]) || array_key_exists("aligned", $context) ? $context["aligned"] : (function () { throw new Twig_Error_Runtime('Variable "aligned" does not exist.', 8, $this->getSourceContext()); })()), false)) : (false));
                // line 9
                echo "
        <ul class=\"pager";
                // line 10
                if ( !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->getSourceContext()); })()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
                }
                echo "\">
            ";
                // line 11
                if (array_key_exists("previous", $context)) {
                    // line 12
                    echo "                <li";
                    if ((isset($context["aligned"]) || array_key_exists("aligned", $context) ? $context["aligned"] : (function () { throw new Twig_Error_Runtime('Variable "aligned" does not exist.', 12, $this->getSourceContext()); })())) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 12, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 12, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 12, $this->getSourceContext()); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 12, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 12, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) || array_key_exists("aligned", $context) ? $context["aligned"] : (function () { throw new Twig_Error_Runtime('Variable "aligned" does not exist.', 14, $this->getSourceContext()); })())) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 14, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 16
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 17
                    echo "                <li";
                    if ((isset($context["aligned"]) || array_key_exists("aligned", $context) ? $context["aligned"] : (function () { throw new Twig_Error_Runtime('Variable "aligned" does not exist.', 17, $this->getSourceContext()); })())) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 17, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 17, $this->getSourceContext()); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 17, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 17, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) || array_key_exists("aligned", $context) ? $context["aligned"] : (function () { throw new Twig_Error_Runtime('Variable "aligned" does not exist.', 19, $this->getSourceContext()); })())) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 19, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 21
                echo "        </ul>
    ";
            } else {
                // line 23
                echo "
        ";
                // line 24
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 24, $this->getSourceContext()); })()), "&laquo;")) : ("&laquo;"));
                // line 25
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 25, $this->getSourceContext()); })()), "&raquo;")) : ("&raquo;"));
                // line 26
                echo "
        <ul class=\"pagination";
                // line 27
                if ( !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 27, $this->getSourceContext()); })()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
                }
                echo "\">
            ";
                // line 28
                if (((array_key_exists("first_label", $context) && array_key_exists("first", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 28, $this->getSourceContext()); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 28, $this->getSourceContext()); })())))) {
                    // line 29
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 29, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 29, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 29, $this->getSourceContext()); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 29, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) || array_key_exists("first_label", $context) ? $context["first_label"] : (function () { throw new Twig_Error_Runtime('Variable "first_label" does not exist.', 29, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } elseif (                // line 30
array_key_exists("last_label", $context)) {
                    // line 31
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["first_label"]) || array_key_exists("first_label", $context) ? $context["first_label"] : (function () { throw new Twig_Error_Runtime('Variable "first_label" does not exist.', 31, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 33
                echo "
            ";
                // line 34
                if (array_key_exists("previous", $context)) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 35, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 35, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 35, $this->getSourceContext()); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 35, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 35, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } else {
                    // line 37
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["prev_label"]) || array_key_exists("prev_label", $context) ? $context["prev_label"] : (function () { throw new Twig_Error_Runtime('Variable "prev_label" does not exist.', 37, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 39
                echo "
            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 40, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "                ";
                    if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 41, $this->getSourceContext()); })()))) {
                        // line 42
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 42, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 42, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 42, $this->getSourceContext()); })()) => $context["page"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 44
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 46
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
            ";
                // line 49
                if (array_key_exists("next", $context)) {
                    // line 50
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 50, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 50, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 50, $this->getSourceContext()); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 50, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 50, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } else {
                    // line 52
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["next_label"]) || array_key_exists("next_label", $context) ? $context["next_label"] : (function () { throw new Twig_Error_Runtime('Variable "next_label" does not exist.', 52, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if (((array_key_exists("last_label", $context) && array_key_exists("last", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 55, $this->getSourceContext()); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 55, $this->getSourceContext()); })())))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 56, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 56, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 56, $this->getSourceContext()); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 56, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) || array_key_exists("last_label", $context) ? $context["last_label"] : (function () { throw new Twig_Error_Runtime('Variable "last_label" does not exist.', 56, $this->getSourceContext()); })());
                    echo "</a></li>
            ";
                } elseif (                // line 57
array_key_exists("last_label", $context)) {
                    // line 58
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["last_label"]) || array_key_exists("last_label", $context) ? $context["last_label"] : (function () { throw new Twig_Error_Runtime('Variable "last_label" does not exist.', 58, $this->getSourceContext()); })());
                    echo "</span></li>
            ";
                }
                // line 60
                echo "        </ul>
    ";
            }
        }
        
        $__internal_d2cff3d7195186df4df4feb7d57efb95f703340981a27413cac99cbe43614a6d->leave($__internal_d2cff3d7195186df4df4feb7d57efb95f703340981a27413cac99cbe43614a6d_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 60,  224 => 58,  222 => 57,  215 => 56,  213 => 55,  210 => 54,  204 => 52,  196 => 50,  194 => 49,  191 => 48,  184 => 46,  178 => 44,  170 => 42,  167 => 41,  163 => 40,  160 => 39,  154 => 37,  146 => 35,  144 => 34,  141 => 33,  135 => 31,  133 => 30,  126 => 29,  124 => 28,  117 => 27,  114 => 26,  111 => 25,  109 => 24,  106 => 23,  102 => 21,  92 => 19,  80 => 17,  77 => 16,  67 => 14,  55 => 12,  53 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set class = class|default('') %}

{% if pageCount > 1 %}
    {% if style is defined and style == 'pager' %}

        {% set prev_label = prev_label|default('Previous') %}
        {% set next_label = next_label|default('Next') %}
        {% set aligned = aligned|default(false) %}

        <ul class=\"pager{% if class is not empty %} {{ class }}{% endif %}\">
            {% if previous is defined %}
                <li{% if aligned %} class=\"previous\"{% endif %}><a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">{{ prev_label|raw }}</a></li>
            {% else %}
                <li class=\"disabled{% if aligned %} previous{% endif %}\"><span>{{ prev_label|raw }}</span></li>
            {% endif %}
            {% if next is defined %}
                <li{% if aligned %} class=\"next\"{% endif %}><a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ next_label|raw }}</a></li>
            {% else %}
                <li class=\"disabled{% if aligned %} next{% endif %}\"><span>{{ next_label|raw }}</span></li>
            {% endif %}
        </ul>
    {% else %}

        {% set prev_label = prev_label|default('&laquo;') %}
        {% set next_label = next_label|default('&raquo;') %}

        <ul class=\"pagination{% if class is not empty %} {{ class }}{% endif %}\">
            {% if first_label is defined and first is defined and current != first %}
                <li><a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">{{ first_label|raw }}</a></li>
            {% elseif last_label is defined %}
                <li class=\"disabled\"><span>{{ first_label|raw }}</span></li>
            {% endif %}

            {% if previous is defined %}
                <li><a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">{{ prev_label|raw }}</a></li>
            {% else %}
                <li class=\"disabled\"><span>{{ prev_label|raw }}</span></li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li><a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a></li>
                {% else %}
                    <li class=\"active\"><span>{{ page }}</span></li>
                {% endif %}

            {% endfor %}

            {% if next is defined %}
                <li><a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ next_label|raw }}</a></li>
            {% else %}
                <li class=\"disabled\"><span>{{ next_label|raw }}</span></li>
            {% endif %}

            {% if last_label is defined and last is defined and current != last %}
                <li><a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last_label|raw }}</a></li>
            {% elseif last_label is defined %}
                <li class=\"disabled\"><span>{{ last_label|raw }}</span></li>
            {% endif %}
        </ul>
    {% endif %}
{% endif %}
", "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig", "/var/www/vote/vendor/braincrafted/bootstrap-bundle/Braincrafted/Bundle/BootstrapBundle/Resources/views/Pagination/bootstrap.html.twig");
    }
}
