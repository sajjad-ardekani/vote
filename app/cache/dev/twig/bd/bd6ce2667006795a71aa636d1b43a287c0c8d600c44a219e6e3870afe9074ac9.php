<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a661b9342aa7a968b96df66d140912aaa394c3e1760e8877c36d41fac87ccb4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3e24d4039f737a1ed27ddd950d5b0adf86120dae1b0c23ca03468511b5ce88dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e24d4039f737a1ed27ddd950d5b0adf86120dae1b0c23ca03468511b5ce88dd->enter($__internal_3e24d4039f737a1ed27ddd950d5b0adf86120dae1b0c23ca03468511b5ce88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e24d4039f737a1ed27ddd950d5b0adf86120dae1b0c23ca03468511b5ce88dd->leave($__internal_3e24d4039f737a1ed27ddd950d5b0adf86120dae1b0c23ca03468511b5ce88dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9949c493852107adf5f294731211758420c0fc016adce31d8ade78abd7f148f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9949c493852107adf5f294731211758420c0fc016adce31d8ade78abd7f148f7->enter($__internal_9949c493852107adf5f294731211758420c0fc016adce31d8ade78abd7f148f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9949c493852107adf5f294731211758420c0fc016adce31d8ade78abd7f148f7->leave($__internal_9949c493852107adf5f294731211758420c0fc016adce31d8ade78abd7f148f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
