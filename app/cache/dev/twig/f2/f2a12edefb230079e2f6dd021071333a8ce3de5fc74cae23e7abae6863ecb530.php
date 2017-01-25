<?php

/* AppBundle:User:user_update.html.twig */
class __TwigTemplate_43d97d79865590f4d0144767de07b9e4a83fccba451dafab688544d15376a230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:User:user_update.html.twig", 1);
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
        $__internal_9b0a338ed59d82a471c8b341cb98e907bc3f59fc7ffb51b8f0c830f43140d191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0a338ed59d82a471c8b341cb98e907bc3f59fc7ffb51b8f0c830f43140d191->enter($__internal_9b0a338ed59d82a471c8b341cb98e907bc3f59fc7ffb51b8f0c830f43140d191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:user_update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b0a338ed59d82a471c8b341cb98e907bc3f59fc7ffb51b8f0c830f43140d191->leave($__internal_9b0a338ed59d82a471c8b341cb98e907bc3f59fc7ffb51b8f0c830f43140d191_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c128634e6e0c8011e0e2ca963fed25574395d85c5727b8f8ce22d1bf20459138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c128634e6e0c8011e0e2ca963fed25574395d85c5727b8f8ce22d1bf20459138->enter($__internal_c128634e6e0c8011e0e2ca963fed25574395d85c5727b8f8ce22d1bf20459138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("کاربزان"), "html", null, true);
        
        $__internal_c128634e6e0c8011e0e2ca963fed25574395d85c5727b8f8ce22d1bf20459138->leave($__internal_c128634e6e0c8011e0e2ca963fed25574395d85c5727b8f8ce22d1bf20459138_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_c78cb63fe8ab864559c632fe81e63a42bc9251f252da1973f84b8a4a91bfc74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78cb63fe8ab864559c632fe81e63a42bc9251f252da1973f84b8a4a91bfc74e->enter($__internal_c78cb63fe8ab864559c632fe81e63a42bc9251f252da1973f84b8a4a91bfc74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "کاربران";
        
        $__internal_c78cb63fe8ab864559c632fe81e63a42bc9251f252da1973f84b8a4a91bfc74e->leave($__internal_c78cb63fe8ab864559c632fe81e63a42bc9251f252da1973f84b8a4a91bfc74e_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d0a25dd94545eeba2971eebd87e4e1edcb851faea293c093371f3cf89305f96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a25dd94545eeba2971eebd87e4e1edcb851faea293c093371f3cf89305f96a->enter($__internal_d0a25dd94545eeba2971eebd87e4e1edcb851faea293c093371f3cf89305f96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li>
        <i class=\"fa fa-dashboard\"></i> کاربر
    </li>
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> ویرایش
    </li>
";
        
        $__internal_d0a25dd94545eeba2971eebd87e4e1edcb851faea293c093371f3cf89305f96a->leave($__internal_d0a25dd94545eeba2971eebd87e4e1edcb851faea293c093371f3cf89305f96a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_d51d9752aeb3aa246d40eb29143754e62bebf95272e428e31ef1880b5addef2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51d9752aeb3aa246d40eb29143754e62bebf95272e428e31ef1880b5addef2c->enter($__internal_d51d9752aeb3aa246d40eb29143754e62bebf95272e428e31ef1880b5addef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <section class=\"panel\">
        <header class=\"panel-heading\">
            <div class=\"panel-actions\">
                <a href=\"#\" class=\"panel-action panel-action-toggle\" data-panel-toggle=\"\"></a>
            </div>
        </header>
        <div class=\"panel-body\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "\" class=\"mb-xs mt-xs mr-xs btn btn-primary\"/>
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </section>
";
        
        $__internal_d51d9752aeb3aa246d40eb29143754e62bebf95272e428e31ef1880b5addef2c->leave($__internal_d51d9752aeb3aa246d40eb29143754e62bebf95272e428e31ef1880b5addef2c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:user_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 22,  99 => 21,  95 => 20,  86 => 13,  80 => 12,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}
{% block title %}{{ 'کاربزان'|trans }}{% endblock %}
{%block toolbarTitle %}کاربران{%endblock%}
{%block breadcrumb %} 
    <li>
        <i class=\"fa fa-dashboard\"></i> کاربر
    </li>
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> ویرایش
    </li>
{%endblock%}
{% block content %}
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <div class=\"panel-actions\">
                <a href=\"#\" class=\"panel-action panel-action-toggle\" data-panel-toggle=\"\"></a>
            </div>
        </header>
        <div class=\"panel-body\">
            {{form_start(form)}}
            {{ form_widget(form) }}
            <input type=\"submit\" value=\"{{'Update'|trans }}\" class=\"mb-xs mt-xs mr-xs btn btn-primary\"/>
            {{form_end(form)}}
        </div>
    </section>
{% endblock %}", "AppBundle:User:user_update.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/user_update.html.twig");
    }
}
