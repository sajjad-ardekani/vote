<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_b47f0b1233dcb22aa8aacb7e409fb235c771103f254628349f20ca1ddf91363b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_7d4b4a4da65c4202e54ac822407e1785de726c7efb21a3ecb312f92ee28298d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4b4a4da65c4202e54ac822407e1785de726c7efb21a3ecb312f92ee28298d3->enter($__internal_7d4b4a4da65c4202e54ac822407e1785de726c7efb21a3ecb312f92ee28298d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4b4a4da65c4202e54ac822407e1785de726c7efb21a3ecb312f92ee28298d3->leave($__internal_7d4b4a4da65c4202e54ac822407e1785de726c7efb21a3ecb312f92ee28298d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45e5bd29efcfc0d8b238d65f2f014520780f15cb3c48cfb62ab519de82085ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5bd29efcfc0d8b238d65f2f014520780f15cb3c48cfb62ab519de82085ac8->enter($__internal_45e5bd29efcfc0d8b238d65f2f014520780f15cb3c48cfb62ab519de82085ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_45e5bd29efcfc0d8b238d65f2f014520780f15cb3c48cfb62ab519de82085ac8->leave($__internal_45e5bd29efcfc0d8b238d65f2f014520780f15cb3c48cfb62ab519de82085ac8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
