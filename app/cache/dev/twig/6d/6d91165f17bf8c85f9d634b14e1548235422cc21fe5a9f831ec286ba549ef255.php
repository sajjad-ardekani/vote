<?php

/* AppBundle:User:user_update.html.twig */
class __TwigTemplate_f3427bfee4f86a5793650f41e9cd2f0fe2b669e82be80f6e9fc8ef6ba4b30f06 extends Twig_Template
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
        $__internal_343d69d76649e814fd95f6aa43f568f8e297e7039c79094dfeaada4bb6c95fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343d69d76649e814fd95f6aa43f568f8e297e7039c79094dfeaada4bb6c95fac->enter($__internal_343d69d76649e814fd95f6aa43f568f8e297e7039c79094dfeaada4bb6c95fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:user_update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343d69d76649e814fd95f6aa43f568f8e297e7039c79094dfeaada4bb6c95fac->leave($__internal_343d69d76649e814fd95f6aa43f568f8e297e7039c79094dfeaada4bb6c95fac_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f807b07892ba9f6af5a07de5d72c58c81f87a93c7178706b0cb8dafdb0410dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f807b07892ba9f6af5a07de5d72c58c81f87a93c7178706b0cb8dafdb0410dda->enter($__internal_f807b07892ba9f6af5a07de5d72c58c81f87a93c7178706b0cb8dafdb0410dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("کاربزان"), "html", null, true);
        
        $__internal_f807b07892ba9f6af5a07de5d72c58c81f87a93c7178706b0cb8dafdb0410dda->leave($__internal_f807b07892ba9f6af5a07de5d72c58c81f87a93c7178706b0cb8dafdb0410dda_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_ba76d233eded7acb7d4be3d2618f40427e9d073eec22c352621acfb11ed91e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba76d233eded7acb7d4be3d2618f40427e9d073eec22c352621acfb11ed91e40->enter($__internal_ba76d233eded7acb7d4be3d2618f40427e9d073eec22c352621acfb11ed91e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "کاربران";
        
        $__internal_ba76d233eded7acb7d4be3d2618f40427e9d073eec22c352621acfb11ed91e40->leave($__internal_ba76d233eded7acb7d4be3d2618f40427e9d073eec22c352621acfb11ed91e40_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_eb3fbf378c620e0a29092207da25cf0ae3e06e53ff0f0c400e00b2103c28e123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3fbf378c620e0a29092207da25cf0ae3e06e53ff0f0c400e00b2103c28e123->enter($__internal_eb3fbf378c620e0a29092207da25cf0ae3e06e53ff0f0c400e00b2103c28e123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li>
        <i class=\"fa fa-dashboard\"></i> کاربر
    </li>
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> ویرایش
    </li>
";
        
        $__internal_eb3fbf378c620e0a29092207da25cf0ae3e06e53ff0f0c400e00b2103c28e123->leave($__internal_eb3fbf378c620e0a29092207da25cf0ae3e06e53ff0f0c400e00b2103c28e123_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_2aec62c26bc67340f47257648710024a3c7aeb3baee494ae03157d905dcc4fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aec62c26bc67340f47257648710024a3c7aeb3baee494ae03157d905dcc4fea->enter($__internal_2aec62c26bc67340f47257648710024a3c7aeb3baee494ae03157d905dcc4fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2aec62c26bc67340f47257648710024a3c7aeb3baee494ae03157d905dcc4fea->leave($__internal_2aec62c26bc67340f47257648710024a3c7aeb3baee494ae03157d905dcc4fea_prof);

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
