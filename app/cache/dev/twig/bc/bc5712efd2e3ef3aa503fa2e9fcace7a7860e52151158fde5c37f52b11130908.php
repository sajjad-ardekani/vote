<?php

/* AppBundle:Admin:answerAdd.html.twig */
class __TwigTemplate_c625b13f80e277d9f2b133c28192f5cecc8ceed036136cc38f6030bf6fb4fb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:answerAdd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5dc5712e3e1054fce4b14a30eacd8e018dd36187af5d86b3afcfeecefdf6bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dc5712e3e1054fce4b14a30eacd8e018dd36187af5d86b3afcfeecefdf6bce->enter($__internal_b5dc5712e3e1054fce4b14a30eacd8e018dd36187af5d86b3afcfeecefdf6bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:answerAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5dc5712e3e1054fce4b14a30eacd8e018dd36187af5d86b3afcfeecefdf6bce->leave($__internal_b5dc5712e3e1054fce4b14a30eacd8e018dd36187af5d86b3afcfeecefdf6bce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cf97aa60e22085ead32960027551b2d0019bb83d9a3e894cace1c2ac24172d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf97aa60e22085ead32960027551b2d0019bb83d9a3e894cace1c2ac24172d3->enter($__internal_4cf97aa60e22085ead32960027551b2d0019bb83d9a3e894cace1c2ac24172d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("جواب ها"), "html", null, true);
        
        $__internal_4cf97aa60e22085ead32960027551b2d0019bb83d9a3e894cace1c2ac24172d3->leave($__internal_4cf97aa60e22085ead32960027551b2d0019bb83d9a3e894cace1c2ac24172d3_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_49bead4b47ae41db6ac91ba65f92607c42303446069ec79208ccecab2d1c8ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bead4b47ae41db6ac91ba65f92607c42303446069ec79208ccecab2d1c8ce7->enter($__internal_49bead4b47ae41db6ac91ba65f92607c42303446069ec79208ccecab2d1c8ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "جواب ها";
        
        $__internal_49bead4b47ae41db6ac91ba65f92607c42303446069ec79208ccecab2d1c8ce7->leave($__internal_49bead4b47ae41db6ac91ba65f92607c42303446069ec79208ccecab2d1c8ce7_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_19d88ff45e4ccf7571cf46441b1ffe419a57e4eb0e5b27cb26db46d6d0df8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d88ff45e4ccf7571cf46441b1ffe419a57e4eb0e5b27cb26db46d6d0df8cb3->enter($__internal_19d88ff45e4ccf7571cf46441b1ffe419a57e4eb0e5b27cb26db46d6d0df8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> جواب ها
    </li>
";
        
        $__internal_19d88ff45e4ccf7571cf46441b1ffe419a57e4eb0e5b27cb26db46d6d0df8cb3->leave($__internal_19d88ff45e4ccf7571cf46441b1ffe419a57e4eb0e5b27cb26db46d6d0df8cb3_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_211a929e78865052fe955de30385c272058a609d2e00454f9d4b3581bddba0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211a929e78865052fe955de30385c272058a609d2e00454f9d4b3581bddba0df->enter($__internal_211a929e78865052fe955de30385c272058a609d2e00454f9d4b3581bddba0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form');
        echo "

";
        
        $__internal_211a929e78865052fe955de30385c272058a609d2e00454f9d4b3581bddba0df->leave($__internal_211a929e78865052fe955de30385c272058a609d2e00454f9d4b3581bddba0df_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:answerAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  77 => 9,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block title %}{{ 'جواب ها'|trans }}{% endblock %}
{%block toolbarTitle %}جواب ها{%endblock%}
{%block breadcrumb %} 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> جواب ها
    </li>
{%endblock%}
{% block content %}
    {{form(form)}}

{% endblock %}", "AppBundle:Admin:answerAdd.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/answerAdd.html.twig");
    }
}
