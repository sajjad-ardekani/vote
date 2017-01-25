<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9c9b2b2dd043caa7fc45698a5aedbc7953c4c6b463b5ef26240eedb31a68dacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9374d9d6c8864f94f09e30bc8408ebfca953403f37b9e0072f56839674086f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9374d9d6c8864f94f09e30bc8408ebfca953403f37b9e0072f56839674086f34->enter($__internal_9374d9d6c8864f94f09e30bc8408ebfca953403f37b9e0072f56839674086f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9374d9d6c8864f94f09e30bc8408ebfca953403f37b9e0072f56839674086f34->leave($__internal_9374d9d6c8864f94f09e30bc8408ebfca953403f37b9e0072f56839674086f34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0a8494015df52c456c35ec418295359f8b60a8fefb35d4d7dc084066fdcda9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a8494015df52c456c35ec418295359f8b60a8fefb35d4d7dc084066fdcda9c->enter($__internal_b0a8494015df52c456c35ec418295359f8b60a8fefb35d4d7dc084066fdcda9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b0a8494015df52c456c35ec418295359f8b60a8fefb35d4d7dc084066fdcda9c->leave($__internal_b0a8494015df52c456c35ec418295359f8b60a8fefb35d4d7dc084066fdcda9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/var/www/vote/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
