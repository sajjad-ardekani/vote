<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_eb405001a26e8e6dc21bbbb1282a82aef599e3aca984d4a6f2849dccc53861e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c5b5fa780d23d881fee6de268ed55b14eea2146017f01262ea1ca4ea6195b0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b5fa780d23d881fee6de268ed55b14eea2146017f01262ea1ca4ea6195b0f1->enter($__internal_c5b5fa780d23d881fee6de268ed55b14eea2146017f01262ea1ca4ea6195b0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b5fa780d23d881fee6de268ed55b14eea2146017f01262ea1ca4ea6195b0f1->leave($__internal_c5b5fa780d23d881fee6de268ed55b14eea2146017f01262ea1ca4ea6195b0f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_447a4d548c395ecdcc5a773df57fee82e8b2a4bba4f78a9f482779d49fa94e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447a4d548c395ecdcc5a773df57fee82e8b2a4bba4f78a9f482779d49fa94e04->enter($__internal_447a4d548c395ecdcc5a773df57fee82e8b2a4bba4f78a9f482779d49fa94e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_447a4d548c395ecdcc5a773df57fee82e8b2a4bba4f78a9f482779d49fa94e04->leave($__internal_447a4d548c395ecdcc5a773df57fee82e8b2a4bba4f78a9f482779d49fa94e04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/var/www/vote/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
