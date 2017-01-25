<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_806e3bbf5009ece90dbb7848ec3f3d2b5cc6e4ff19346985e1a924a697f46ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cec80c7301e0e02fedf63f309078ada72ea1cc202e9d681425bfeaf30b6a65ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec80c7301e0e02fedf63f309078ada72ea1cc202e9d681425bfeaf30b6a65ef->enter($__internal_cec80c7301e0e02fedf63f309078ada72ea1cc202e9d681425bfeaf30b6a65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec80c7301e0e02fedf63f309078ada72ea1cc202e9d681425bfeaf30b6a65ef->leave($__internal_cec80c7301e0e02fedf63f309078ada72ea1cc202e9d681425bfeaf30b6a65ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_895bf118dbf7358e84846e8447086b70e3c1f8818bd025de39456c65583ccb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895bf118dbf7358e84846e8447086b70e3c1f8818bd025de39456c65583ccb7e->enter($__internal_895bf118dbf7358e84846e8447086b70e3c1f8818bd025de39456c65583ccb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_895bf118dbf7358e84846e8447086b70e3c1f8818bd025de39456c65583ccb7e->leave($__internal_895bf118dbf7358e84846e8447086b70e3c1f8818bd025de39456c65583ccb7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
