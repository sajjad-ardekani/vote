<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ec7b0e2824bfe79c9cd025737c92e48140fc70339232fb5f16ca2f2f4a2c4fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_7a2279616ccd94ad7d913d405de797fc93015fc4e6739e74469c2da31b81b306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2279616ccd94ad7d913d405de797fc93015fc4e6739e74469c2da31b81b306->enter($__internal_7a2279616ccd94ad7d913d405de797fc93015fc4e6739e74469c2da31b81b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2279616ccd94ad7d913d405de797fc93015fc4e6739e74469c2da31b81b306->leave($__internal_7a2279616ccd94ad7d913d405de797fc93015fc4e6739e74469c2da31b81b306_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07627e3c094dd81d2604266ced1baa8e23188f09a37af3c9245e667c63fee256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07627e3c094dd81d2604266ced1baa8e23188f09a37af3c9245e667c63fee256->enter($__internal_07627e3c094dd81d2604266ced1baa8e23188f09a37af3c9245e667c63fee256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07627e3c094dd81d2604266ced1baa8e23188f09a37af3c9245e667c63fee256->leave($__internal_07627e3c094dd81d2604266ced1baa8e23188f09a37af3c9245e667c63fee256_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fd2ec79fe842bbf9a5857e7f27db3126f63b1160889c2d4f4a8ef5f491bf5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd2ec79fe842bbf9a5857e7f27db3126f63b1160889c2d4f4a8ef5f491bf5d9->enter($__internal_7fd2ec79fe842bbf9a5857e7f27db3126f63b1160889c2d4f4a8ef5f491bf5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7fd2ec79fe842bbf9a5857e7f27db3126f63b1160889c2d4f4a8ef5f491bf5d9->leave($__internal_7fd2ec79fe842bbf9a5857e7f27db3126f63b1160889c2d4f4a8ef5f491bf5d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccfe7b9fa434bc9b95964594cf71a90322718166f1b22faf961966c0056c721a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfe7b9fa434bc9b95964594cf71a90322718166f1b22faf961966c0056c721a->enter($__internal_ccfe7b9fa434bc9b95964594cf71a90322718166f1b22faf961966c0056c721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ccfe7b9fa434bc9b95964594cf71a90322718166f1b22faf961966c0056c721a->leave($__internal_ccfe7b9fa434bc9b95964594cf71a90322718166f1b22faf961966c0056c721a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
