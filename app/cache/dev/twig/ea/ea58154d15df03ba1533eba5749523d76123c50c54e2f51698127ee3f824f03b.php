<?php

/* BraincraftedBootstrapBundle::flash.html.twig */
class __TwigTemplate_ee6071b63710309f7bf4de8db9e968f7f50a8a81fa43041b96cd452cc659199f extends Twig_Template
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
        $__internal_6319038d1030187dd1810dd024e8f1f7f30c5c36e7957c6cb3cf3d478da01b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6319038d1030187dd1810dd024e8f1f7f30c5c36e7957c6cb3cf3d478da01b82->enter($__internal_6319038d1030187dd1810dd024e8f1f7f30c5c36e7957c6cb3cf3d478da01b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::flash.html.twig"));

        // line 1
        if ( !array_key_exists("translation_domain", $context)) {
            // line 2
            echo "    ";
            $context["translation_domain"] = null;
        }
        // line 4
        if ( !array_key_exists("close", $context)) {
            // line 5
            echo "    ";
            $context["close"] = false;
        }
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-warning";
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 9, $this->getSourceContext()); })())) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 10
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 10, $this->getSourceContext()); })())) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 11, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-danger";
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 16, $this->getSourceContext()); })())) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 17
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 17, $this->getSourceContext()); })())) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info";
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 23, $this->getSourceContext()); })())) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 24
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 24, $this->getSourceContext()); })())) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 25, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-success";
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 30, $this->getSourceContext()); })())) {
                echo " alert-dismissible";
            }
            echo "\">
        ";
            // line 31
            if ((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new Twig_Error_Runtime('Variable "close" does not exist.', 31, $this->getSourceContext()); })())) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 32, $this->getSourceContext()); })())), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6319038d1030187dd1810dd024e8f1f7f30c5c36e7957c6cb3cf3d478da01b82->leave($__internal_6319038d1030187dd1810dd024e8f1f7f30c5c36e7957c6cb3cf3d478da01b82_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  132 => 31,  125 => 30,  121 => 29,  118 => 28,  108 => 25,  104 => 24,  97 => 23,  93 => 22,  90 => 21,  80 => 18,  76 => 17,  69 => 16,  65 => 15,  62 => 14,  52 => 11,  48 => 10,  41 => 9,  37 => 8,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if translation_domain is not defined %}
    {% set translation_domain = null %}
{% endif %}
{% if close is not defined %}
    {% set close = false %}
{% endif %}

{% for flashMessage in app.session.flashbag.get('alert') %}
    <div class=\"alert alert-warning{% if close %} alert-dismissible{% endif %}\">
        {% if close %}<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>{% endif %}
        {{ flashMessage|trans({}, translation_domain) }}
    </div>
{% endfor %}

{% for flashMessage in app.session.flashbag.get('danger') %}
    <div class=\"alert alert-danger{% if close %} alert-dismissible{% endif %}\">
        {% if close %}<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>{% endif %}
        {{ flashMessage|trans({}, translation_domain) }}
    </div>
{% endfor %}

{% for flashMessage in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info{% if close %} alert-dismissible{% endif %}\">
        {% if close %}<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>{% endif %}
        {{ flashMessage|trans({}, translation_domain) }}
    </div>
{% endfor %}

{% for flashMessage in app.session.flashbag.get('success') %}
    <div class=\"alert alert-success{% if close %} alert-dismissible{% endif %}\">
        {% if close %}<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>{% endif %}
        {{ flashMessage|trans({}, translation_domain) }}
    </div>
{% endfor %}
", "BraincraftedBootstrapBundle::flash.html.twig", "/var/www/vote/vendor/braincrafted/bootstrap-bundle/Braincrafted/Bundle/BootstrapBundle/Resources/views/flash.html.twig");
    }
}
