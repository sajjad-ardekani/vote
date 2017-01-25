<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6039073a9488563b9f1ed526395b0b26c1ebb522bab3803b86b689352504bb67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3e797e6fa375025fc9282f85dce50d83dc78301ef94a9ea3fcf4213ee1875692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e797e6fa375025fc9282f85dce50d83dc78301ef94a9ea3fcf4213ee1875692->enter($__internal_3e797e6fa375025fc9282f85dce50d83dc78301ef94a9ea3fcf4213ee1875692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e797e6fa375025fc9282f85dce50d83dc78301ef94a9ea3fcf4213ee1875692->leave($__internal_3e797e6fa375025fc9282f85dce50d83dc78301ef94a9ea3fcf4213ee1875692_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0acf20aa77bd6d53bc2fbcf717ceb4433d78d1d5f8053835fe9d8bc7bfc1f45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf20aa77bd6d53bc2fbcf717ceb4433d78d1d5f8053835fe9d8bc7bfc1f45e->enter($__internal_0acf20aa77bd6d53bc2fbcf717ceb4433d78d1d5f8053835fe9d8bc7bfc1f45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0acf20aa77bd6d53bc2fbcf717ceb4433d78d1d5f8053835fe9d8bc7bfc1f45e->leave($__internal_0acf20aa77bd6d53bc2fbcf717ceb4433d78d1d5f8053835fe9d8bc7bfc1f45e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
