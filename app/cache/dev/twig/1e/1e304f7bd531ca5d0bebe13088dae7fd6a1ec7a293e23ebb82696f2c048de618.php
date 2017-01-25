<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ef3884e4a68625d0070c1839c02585c65ded779441c8dbc3110a9521dbac7ba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a44825215497adbe032d4b53d0a8d546931db9e9fa9e63c26da77a5b346e62a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44825215497adbe032d4b53d0a8d546931db9e9fa9e63c26da77a5b346e62a7->enter($__internal_a44825215497adbe032d4b53d0a8d546931db9e9fa9e63c26da77a5b346e62a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44825215497adbe032d4b53d0a8d546931db9e9fa9e63c26da77a5b346e62a7->leave($__internal_a44825215497adbe032d4b53d0a8d546931db9e9fa9e63c26da77a5b346e62a7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_47cccdfcdbb8f96dd429ace669cdc9ae96d90234f6f0049fcd6c77fe81087c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cccdfcdbb8f96dd429ace669cdc9ae96d90234f6f0049fcd6c77fe81087c4a->enter($__internal_47cccdfcdbb8f96dd429ace669cdc9ae96d90234f6f0049fcd6c77fe81087c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_47cccdfcdbb8f96dd429ace669cdc9ae96d90234f6f0049fcd6c77fe81087c4a->leave($__internal_47cccdfcdbb8f96dd429ace669cdc9ae96d90234f6f0049fcd6c77fe81087c4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}
{% block content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
