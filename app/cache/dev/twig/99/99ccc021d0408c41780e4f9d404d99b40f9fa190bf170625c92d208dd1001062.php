<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e7e50bbb585e2b7d62fc75b4360f3dab6101cecd301e66a3c56d2450c394ced2 extends Twig_Template
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
        $__internal_0145d068f7ea7e0c6d3c732ed424fe961114421bfe86a030b247be6b8fe26259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0145d068f7ea7e0c6d3c732ed424fe961114421bfe86a030b247be6b8fe26259->enter($__internal_0145d068f7ea7e0c6d3c732ed424fe961114421bfe86a030b247be6b8fe26259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0145d068f7ea7e0c6d3c732ed424fe961114421bfe86a030b247be6b8fe26259->leave($__internal_0145d068f7ea7e0c6d3c732ed424fe961114421bfe86a030b247be6b8fe26259_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5546b4838dfed975636ad37d14ee56ce8bec288a77f70f4ea33252ed8e4148c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5546b4838dfed975636ad37d14ee56ce8bec288a77f70f4ea33252ed8e4148c3->enter($__internal_5546b4838dfed975636ad37d14ee56ce8bec288a77f70f4ea33252ed8e4148c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5546b4838dfed975636ad37d14ee56ce8bec288a77f70f4ea33252ed8e4148c3->leave($__internal_5546b4838dfed975636ad37d14ee56ce8bec288a77f70f4ea33252ed8e4148c3_prof);

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
