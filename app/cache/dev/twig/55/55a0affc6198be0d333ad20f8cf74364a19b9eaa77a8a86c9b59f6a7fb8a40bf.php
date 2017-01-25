<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_beea43154381114f568c59599bb3f189551c5b282627e56075ee13273101cc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_849d30293fef9a16486aba80bafd075ed5ad758fc610575cdf86d07bd94ad0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d30293fef9a16486aba80bafd075ed5ad758fc610575cdf86d07bd94ad0b3->enter($__internal_849d30293fef9a16486aba80bafd075ed5ad758fc610575cdf86d07bd94ad0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849d30293fef9a16486aba80bafd075ed5ad758fc610575cdf86d07bd94ad0b3->leave($__internal_849d30293fef9a16486aba80bafd075ed5ad758fc610575cdf86d07bd94ad0b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_908170ef332f818fcba21d749a564f707a9de2ede1dadbbd09400be78fe71d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908170ef332f818fcba21d749a564f707a9de2ede1dadbbd09400be78fe71d65->enter($__internal_908170ef332f818fcba21d749a564f707a9de2ede1dadbbd09400be78fe71d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_908170ef332f818fcba21d749a564f707a9de2ede1dadbbd09400be78fe71d65->leave($__internal_908170ef332f818fcba21d749a564f707a9de2ede1dadbbd09400be78fe71d65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
