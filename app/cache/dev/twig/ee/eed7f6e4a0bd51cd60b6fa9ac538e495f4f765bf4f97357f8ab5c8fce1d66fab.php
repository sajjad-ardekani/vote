<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0ee1f2c2f03869fcefa6b754f81d44839c7f561eb3d84d5c168e55caf327e0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_11896d47e7024ede11908a850d7401f43bfa4fe995c8d26995c4f1329c048921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11896d47e7024ede11908a850d7401f43bfa4fe995c8d26995c4f1329c048921->enter($__internal_11896d47e7024ede11908a850d7401f43bfa4fe995c8d26995c4f1329c048921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11896d47e7024ede11908a850d7401f43bfa4fe995c8d26995c4f1329c048921->leave($__internal_11896d47e7024ede11908a850d7401f43bfa4fe995c8d26995c4f1329c048921_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36b3a83ca248eb0a0c27f43fc0acbbf3575e917eb4794e2c5bb103a202d7b7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b3a83ca248eb0a0c27f43fc0acbbf3575e917eb4794e2c5bb103a202d7b7b9->enter($__internal_36b3a83ca248eb0a0c27f43fc0acbbf3575e917eb4794e2c5bb103a202d7b7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_36b3a83ca248eb0a0c27f43fc0acbbf3575e917eb4794e2c5bb103a202d7b7b9->leave($__internal_36b3a83ca248eb0a0c27f43fc0acbbf3575e917eb4794e2c5bb103a202d7b7b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
