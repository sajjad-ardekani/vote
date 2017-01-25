<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7effcc08f0d43913e36f517ca24ddfc11b1f8dfba65422bbaee7d3ebaa822d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37c870b914a03c82923ac7ad9e7da4391adaa75bc5a4daace09bae39930f1833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c870b914a03c82923ac7ad9e7da4391adaa75bc5a4daace09bae39930f1833->enter($__internal_37c870b914a03c82923ac7ad9e7da4391adaa75bc5a4daace09bae39930f1833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c870b914a03c82923ac7ad9e7da4391adaa75bc5a4daace09bae39930f1833->leave($__internal_37c870b914a03c82923ac7ad9e7da4391adaa75bc5a4daace09bae39930f1833_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38902a8f54f9e595dfeed3c02e8d0f2773dc9737ee225f93c7f38c1b4ba5240d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38902a8f54f9e595dfeed3c02e8d0f2773dc9737ee225f93c7f38c1b4ba5240d->enter($__internal_38902a8f54f9e595dfeed3c02e8d0f2773dc9737ee225f93c7f38c1b4ba5240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38902a8f54f9e595dfeed3c02e8d0f2773dc9737ee225f93c7f38c1b4ba5240d->leave($__internal_38902a8f54f9e595dfeed3c02e8d0f2773dc9737ee225f93c7f38c1b4ba5240d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf441464a472bb1695b3097cf2c68ee0576c049e786d3fa9c61e0b80f3c3c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf441464a472bb1695b3097cf2c68ee0576c049e786d3fa9c61e0b80f3c3c24->enter($__internal_8cf441464a472bb1695b3097cf2c68ee0576c049e786d3fa9c61e0b80f3c3c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8cf441464a472bb1695b3097cf2c68ee0576c049e786d3fa9c61e0b80f3c3c24->leave($__internal_8cf441464a472bb1695b3097cf2c68ee0576c049e786d3fa9c61e0b80f3c3c24_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96a05d7b3d69ed1c698149218d9ffd7a7c0a8774f61c7748c30ecf034169b022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a05d7b3d69ed1c698149218d9ffd7a7c0a8774f61c7748c30ecf034169b022->enter($__internal_96a05d7b3d69ed1c698149218d9ffd7a7c0a8774f61c7748c30ecf034169b022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_96a05d7b3d69ed1c698149218d9ffd7a7c0a8774f61c7748c30ecf034169b022->leave($__internal_96a05d7b3d69ed1c698149218d9ffd7a7c0a8774f61c7748c30ecf034169b022_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
