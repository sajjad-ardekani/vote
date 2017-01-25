<?php

/* AppBundle:Admin:questionEdit.html.twig */
class __TwigTemplate_bd9f071941c62b3c23eeab37945ef0d95ef8a23e0a6b23d9bc2b9b620a3e1811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:questionEdit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_903b78b23a924ad9bde1cb70bfa7690bc734934aaa8bc3ef74c58bc3a27e1bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903b78b23a924ad9bde1cb70bfa7690bc734934aaa8bc3ef74c58bc3a27e1bcd->enter($__internal_903b78b23a924ad9bde1cb70bfa7690bc734934aaa8bc3ef74c58bc3a27e1bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:questionEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_903b78b23a924ad9bde1cb70bfa7690bc734934aaa8bc3ef74c58bc3a27e1bcd->leave($__internal_903b78b23a924ad9bde1cb70bfa7690bc734934aaa8bc3ef74c58bc3a27e1bcd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd4f799d9cbdba7ce31adc9e69e1192a70d84bb83a7ade04fa6d02f2c878ee17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f799d9cbdba7ce31adc9e69e1192a70d84bb83a7ade04fa6d02f2c878ee17->enter($__internal_dd4f799d9cbdba7ce31adc9e69e1192a70d84bb83a7ade04fa6d02f2c878ee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("جواب ها"), "html", null, true);
        
        $__internal_dd4f799d9cbdba7ce31adc9e69e1192a70d84bb83a7ade04fa6d02f2c878ee17->leave($__internal_dd4f799d9cbdba7ce31adc9e69e1192a70d84bb83a7ade04fa6d02f2c878ee17_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_3f1e0321fdaf130c16473dad4d187cb0c8ae47858d53ce9335a48878be65dfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1e0321fdaf130c16473dad4d187cb0c8ae47858d53ce9335a48878be65dfdf->enter($__internal_3f1e0321fdaf130c16473dad4d187cb0c8ae47858d53ce9335a48878be65dfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "جواب ها";
        
        $__internal_3f1e0321fdaf130c16473dad4d187cb0c8ae47858d53ce9335a48878be65dfdf->leave($__internal_3f1e0321fdaf130c16473dad4d187cb0c8ae47858d53ce9335a48878be65dfdf_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a170cb571e5cb28f8fe8f6b85da450d1380855ab0ac1cc465a2cc599df202fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a170cb571e5cb28f8fe8f6b85da450d1380855ab0ac1cc465a2cc599df202fe1->enter($__internal_a170cb571e5cb28f8fe8f6b85da450d1380855ab0ac1cc465a2cc599df202fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> جواب ها
    </li>
";
        
        $__internal_a170cb571e5cb28f8fe8f6b85da450d1380855ab0ac1cc465a2cc599df202fe1->leave($__internal_a170cb571e5cb28f8fe8f6b85da450d1380855ab0ac1cc465a2cc599df202fe1_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc724b347ed8ff1dc5b054e1e2f4019fe458dc558fdfc86d01cc2605f1ff64d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc724b347ed8ff1dc5b054e1e2f4019fe458dc558fdfc86d01cc2605f1ff64d2->enter($__internal_fc724b347ed8ff1dc5b054e1e2f4019fe458dc558fdfc86d01cc2605f1ff64d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "text", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "questionAnswers", array()), 'row', array("attr" => array("class" => "typeahead")));
        echo "
    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_fc724b347ed8ff1dc5b054e1e2f4019fe458dc558fdfc86d01cc2605f1ff64d2->leave($__internal_fc724b347ed8ff1dc5b054e1e2f4019fe458dc558fdfc86d01cc2605f1ff64d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae237bde029817cb9d94bbcad5a366b13209458e97fc779874d20eef0e81c1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae237bde029817cb9d94bbcad5a366b13209458e97fc779874d20eef0e81c1a6->enter($__internal_ae237bde029817cb9d94bbcad5a366b13209458e97fc779874d20eef0e81c1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/select2/css/select2.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ae237bde029817cb9d94bbcad5a366b13209458e97fc779874d20eef0e81c1a6->leave($__internal_ae237bde029817cb9d94bbcad5a366b13209458e97fc779874d20eef0e81c1a6_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cfe42a03eadd27bdde349ec19c9840c1e1340c7c2c02c854c65be74367f1328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfe42a03eadd27bdde349ec19c9840c1e1340c7c2c02c854c65be74367f1328->enter($__internal_9cfe42a03eadd27bdde349ec19c9840c1e1340c7c2c02c854c65be74367f1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script> 
    <script>
        \$('.typeahead').select2();
    </script>
";
        
        $__internal_9cfe42a03eadd27bdde349ec19c9840c1e1340c7c2c02c854c65be74367f1328->leave($__internal_9cfe42a03eadd27bdde349ec19c9840c1e1340c7c2c02c854c65be74367f1328_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:questionEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  133 => 20,  127 => 19,  118 => 17,  113 => 16,  107 => 15,  98 => 13,  94 => 12,  90 => 11,  85 => 10,  79 => 9,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
    {{form_start(form)}}
    {{form_row(form.text)}}
    {{form_row(form.questionAnswers, { 'attr': {'class':'typeahead'} }) }}
    {{form_end(form)}}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('assets/vendor/select2/css/select2.min.css')}}\" />
{%endblock%}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset('assets/vendor/select2/js/select2.full.min.js')}}\"></script> 
    <script>
        \$('.typeahead').select2();
    </script>
{% endblock %}", "AppBundle:Admin:questionEdit.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/questionEdit.html.twig");
    }
}
