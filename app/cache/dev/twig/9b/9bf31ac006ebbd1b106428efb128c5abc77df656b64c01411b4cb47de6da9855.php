<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d109d02d8c9fdad9f40f11d46c5e2b1a57ade80c87f325f8d0c9571c01933cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d0c596b242f0be72e37fafa54778f56de1f4e391a7431e16d60c1ce61265675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0c596b242f0be72e37fafa54778f56de1f4e391a7431e16d60c1ce61265675->enter($__internal_2d0c596b242f0be72e37fafa54778f56de1f4e391a7431e16d60c1ce61265675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0c596b242f0be72e37fafa54778f56de1f4e391a7431e16d60c1ce61265675->leave($__internal_2d0c596b242f0be72e37fafa54778f56de1f4e391a7431e16d60c1ce61265675_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_449aa606996fcfe11d7454bed516ed7aa8da130abfc501d18cfec689163ce2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449aa606996fcfe11d7454bed516ed7aa8da130abfc501d18cfec689163ce2e3->enter($__internal_449aa606996fcfe11d7454bed516ed7aa8da130abfc501d18cfec689163ce2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_449aa606996fcfe11d7454bed516ed7aa8da130abfc501d18cfec689163ce2e3->leave($__internal_449aa606996fcfe11d7454bed516ed7aa8da130abfc501d18cfec689163ce2e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d2ed280bc62ec6d54c79e681f52179dd2ae27b8d56d251e87ff1c60d8bae5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2ed280bc62ec6d54c79e681f52179dd2ae27b8d56d251e87ff1c60d8bae5ac->enter($__internal_4d2ed280bc62ec6d54c79e681f52179dd2ae27b8d56d251e87ff1c60d8bae5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d2ed280bc62ec6d54c79e681f52179dd2ae27b8d56d251e87ff1c60d8bae5ac->leave($__internal_4d2ed280bc62ec6d54c79e681f52179dd2ae27b8d56d251e87ff1c60d8bae5ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d65064d2220027af0f3998530408392f7c08b3cf3ab53f1358bf99b819105bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65064d2220027af0f3998530408392f7c08b3cf3ab53f1358bf99b819105bf2->enter($__internal_d65064d2220027af0f3998530408392f7c08b3cf3ab53f1358bf99b819105bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d65064d2220027af0f3998530408392f7c08b3cf3ab53f1358bf99b819105bf2->leave($__internal_d65064d2220027af0f3998530408392f7c08b3cf3ab53f1358bf99b819105bf2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
