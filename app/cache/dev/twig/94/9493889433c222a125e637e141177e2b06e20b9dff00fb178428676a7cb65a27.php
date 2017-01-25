<?php

/* AppBundle:User/Gallery:galleryTree.html.twig */
class __TwigTemplate_c00752e7f26723f7c2dde0c9f76fbb6df47fc5c6be3b725305743ee8eaf48b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:User/Gallery:galleryTree.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f0f64150063c42e45dd0ce39432afcb729ec5d224e907e9b8aae0c9273c3275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0f64150063c42e45dd0ce39432afcb729ec5d224e907e9b8aae0c9273c3275->enter($__internal_4f0f64150063c42e45dd0ce39432afcb729ec5d224e907e9b8aae0c9273c3275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/Gallery:galleryTree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0f64150063c42e45dd0ce39432afcb729ec5d224e907e9b8aae0c9273c3275->leave($__internal_4f0f64150063c42e45dd0ce39432afcb729ec5d224e907e9b8aae0c9273c3275_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_11fcaac6b5d16315b62781a6c3d76a4469e56ff56532ba772fb8bc27dedcd137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fcaac6b5d16315b62781a6c3d76a4469e56ff56532ba772fb8bc27dedcd137->enter($__internal_11fcaac6b5d16315b62781a6c3d76a4469e56ff56532ba772fb8bc27dedcd137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">گالری
                    <small>درختان</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">صفحه اصلی</a>
                    </li>
                    <li class=\"active\">گالری</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new Twig_Error_Runtime('Variable "photos" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 19
            echo "                <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                    <a class=\"thumbnail\" href=\"#\">
                        <img class=\"img-responsive\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("upload/gallery/photo/thumb-" . twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "name", array())) . ".jpeg")), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        </div>
    </div>
    <!-- /.container -->
";
        
        $__internal_11fcaac6b5d16315b62781a6c3d76a4469e56ff56532ba772fb8bc27dedcd137->leave($__internal_11fcaac6b5d16315b62781a6c3d76a4469e56ff56532ba772fb8bc27dedcd137_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_061a57f6454c87db6771d25463f21d322c11ea51b819f9287041abb91c7bc223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061a57f6454c87db6771d25463f21d322c11ea51b819f9287041abb91c7bc223->enter($__internal_061a57f6454c87db6771d25463f21d322c11ea51b819f9287041abb91c7bc223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/thumbnail-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_061a57f6454c87db6771d25463f21d322c11ea51b819f9287041abb91c7bc223->leave($__internal_061a57f6454c87db6771d25463f21d322c11ea51b819f9287041abb91c7bc223_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d0cfeb1694269e337db2499e979e8330b423b5051bbf93e3794107488af9817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0cfeb1694269e337db2499e979e8330b423b5051bbf93e3794107488af9817->enter($__internal_2d0cfeb1694269e337db2499e979e8330b423b5051bbf93e3794107488af9817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "
    ";
        // line 37
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeline.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_2d0cfeb1694269e337db2499e979e8330b423b5051bbf93e3794107488af9817->leave($__internal_2d0cfeb1694269e337db2499e979e8330b423b5051bbf93e3794107488af9817_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/Gallery:galleryTree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 37,  117 => 36,  111 => 35,  102 => 32,  97 => 31,  91 => 30,  80 => 25,  70 => 21,  66 => 19,  62 => 18,  52 => 11,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{%block content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">گالری
                    <small>درختان</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{path(\"homepage\")}}\">صفحه اصلی</a>
                    </li>
                    <li class=\"active\">گالری</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            {%for photo in photos %}
                <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                    <a class=\"thumbnail\" href=\"#\">
                        <img class=\"img-responsive\" src=\"{{asset('upload/gallery/photo/thumb-'~ photo.name ~'.jpeg')}}\" alt=\"\">
                    </a>
                </div>
            {%endfor%}

        </div>
    </div>
    <!-- /.container -->
{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('assets/css/thumbnail-gallery.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}

    {{ parent() }}

    <script src=\"{{asset('assets/js/timeline.js')}}\"></script>

{% endblock %}", "AppBundle:User/Gallery:galleryTree.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/Gallery/galleryTree.html.twig");
    }
}
