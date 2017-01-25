<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1ecba928a89fc9205192176213919ab9c0b5f3da3b66f3b90bf954293b9761fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_905df4e04235e2a26fd56b28e917cdab8865071764250941584cb804fe8e4e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905df4e04235e2a26fd56b28e917cdab8865071764250941584cb804fe8e4e40->enter($__internal_905df4e04235e2a26fd56b28e917cdab8865071764250941584cb804fe8e4e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_905df4e04235e2a26fd56b28e917cdab8865071764250941584cb804fe8e4e40->leave($__internal_905df4e04235e2a26fd56b28e917cdab8865071764250941584cb804fe8e4e40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caba55c2ccb7b0615cecc2fcf793223786921b1a5fd58575a4aae28315c453af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caba55c2ccb7b0615cecc2fcf793223786921b1a5fd58575a4aae28315c453af->enter($__internal_caba55c2ccb7b0615cecc2fcf793223786921b1a5fd58575a4aae28315c453af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_caba55c2ccb7b0615cecc2fcf793223786921b1a5fd58575a4aae28315c453af->leave($__internal_caba55c2ccb7b0615cecc2fcf793223786921b1a5fd58575a4aae28315c453af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_464378448342313ede2150b52a40ef2596f3205e5561c272230b1cb0b4a7dfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464378448342313ede2150b52a40ef2596f3205e5561c272230b1cb0b4a7dfd4->enter($__internal_464378448342313ede2150b52a40ef2596f3205e5561c272230b1cb0b4a7dfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_464378448342313ede2150b52a40ef2596f3205e5561c272230b1cb0b4a7dfd4->leave($__internal_464378448342313ede2150b52a40ef2596f3205e5561c272230b1cb0b4a7dfd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f5924108dcdf0272725f48b670d374cfa727471c9b83204a29304f1722178f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5924108dcdf0272725f48b670d374cfa727471c9b83204a29304f1722178f6->enter($__internal_7f5924108dcdf0272725f48b670d374cfa727471c9b83204a29304f1722178f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7f5924108dcdf0272725f48b670d374cfa727471c9b83204a29304f1722178f6->leave($__internal_7f5924108dcdf0272725f48b670d374cfa727471c9b83204a29304f1722178f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
