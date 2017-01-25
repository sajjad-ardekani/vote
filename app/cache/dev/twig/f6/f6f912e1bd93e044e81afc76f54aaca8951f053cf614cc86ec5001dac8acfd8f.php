<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2f358014374c179c7202cab5646363c8a965a0cab7f3a53f3121b448575a69e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_038ed5569a454ed0121097576af2b249a805946c7b911698bd17423019425f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038ed5569a454ed0121097576af2b249a805946c7b911698bd17423019425f7e->enter($__internal_038ed5569a454ed0121097576af2b249a805946c7b911698bd17423019425f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_038ed5569a454ed0121097576af2b249a805946c7b911698bd17423019425f7e->leave($__internal_038ed5569a454ed0121097576af2b249a805946c7b911698bd17423019425f7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cbf0a250d24859e978559b843281e557c4a01019cd15ae3c54b2dddb2c9af3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbf0a250d24859e978559b843281e557c4a01019cd15ae3c54b2dddb2c9af3b->enter($__internal_2cbf0a250d24859e978559b843281e557c4a01019cd15ae3c54b2dddb2c9af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2cbf0a250d24859e978559b843281e557c4a01019cd15ae3c54b2dddb2c9af3b->leave($__internal_2cbf0a250d24859e978559b843281e557c4a01019cd15ae3c54b2dddb2c9af3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7f2aaccc83b1582ecfd7d1a183840c04ca627e7cbf77db939b00cd8efbba540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2aaccc83b1582ecfd7d1a183840c04ca627e7cbf77db939b00cd8efbba540->enter($__internal_e7f2aaccc83b1582ecfd7d1a183840c04ca627e7cbf77db939b00cd8efbba540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e7f2aaccc83b1582ecfd7d1a183840c04ca627e7cbf77db939b00cd8efbba540->leave($__internal_e7f2aaccc83b1582ecfd7d1a183840c04ca627e7cbf77db939b00cd8efbba540_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
