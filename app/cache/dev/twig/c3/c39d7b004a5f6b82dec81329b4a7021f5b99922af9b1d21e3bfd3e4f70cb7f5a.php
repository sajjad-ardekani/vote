<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_6bb585bf24cc0dc4ad8f53ede04afb12e92232be43258fda5b2ad17e11c4c848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_804d3d1ce18bb66817c4bda46f62fa8d227245dc4def8c177291e84b761467bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804d3d1ce18bb66817c4bda46f62fa8d227245dc4def8c177291e84b761467bb->enter($__internal_804d3d1ce18bb66817c4bda46f62fa8d227245dc4def8c177291e84b761467bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804d3d1ce18bb66817c4bda46f62fa8d227245dc4def8c177291e84b761467bb->leave($__internal_804d3d1ce18bb66817c4bda46f62fa8d227245dc4def8c177291e84b761467bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_957ba241c9efb16865b945489f6a4a23406f795f74be8cab4c587f830b25e382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957ba241c9efb16865b945489f6a4a23406f795f74be8cab4c587f830b25e382->enter($__internal_957ba241c9efb16865b945489f6a4a23406f795f74be8cab4c587f830b25e382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_957ba241c9efb16865b945489f6a4a23406f795f74be8cab4c587f830b25e382->leave($__internal_957ba241c9efb16865b945489f6a4a23406f795f74be8cab4c587f830b25e382_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/var/www/vote/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
