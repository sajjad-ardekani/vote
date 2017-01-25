<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9d1d8b579138063c8c0df340c09ec8cedd3fc7b5667a6c442183b128765690a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3834125cf9e579167c6e7a6c33074c05b1723ceec18929a6751129aeed9fde63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3834125cf9e579167c6e7a6c33074c05b1723ceec18929a6751129aeed9fde63->enter($__internal_3834125cf9e579167c6e7a6c33074c05b1723ceec18929a6751129aeed9fde63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3834125cf9e579167c6e7a6c33074c05b1723ceec18929a6751129aeed9fde63->leave($__internal_3834125cf9e579167c6e7a6c33074c05b1723ceec18929a6751129aeed9fde63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95e613848c68ede6ed3ebed94467c09e8b6c28d5f857cda497b4dc4b44784455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e613848c68ede6ed3ebed94467c09e8b6c28d5f857cda497b4dc4b44784455->enter($__internal_95e613848c68ede6ed3ebed94467c09e8b6c28d5f857cda497b4dc4b44784455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_95e613848c68ede6ed3ebed94467c09e8b6c28d5f857cda497b4dc4b44784455->leave($__internal_95e613848c68ede6ed3ebed94467c09e8b6c28d5f857cda497b4dc4b44784455_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
