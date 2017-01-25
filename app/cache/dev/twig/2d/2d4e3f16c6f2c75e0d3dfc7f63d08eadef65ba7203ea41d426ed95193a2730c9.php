<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_53b94402486789711341109c79713bdb41980f0f919c01a38fb769a47065cc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6bbd11f6b332146c4be6e48c1a3d8133616e905478b310bb93977b0f7bde9d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbd11f6b332146c4be6e48c1a3d8133616e905478b310bb93977b0f7bde9d1d->enter($__internal_6bbd11f6b332146c4be6e48c1a3d8133616e905478b310bb93977b0f7bde9d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bbd11f6b332146c4be6e48c1a3d8133616e905478b310bb93977b0f7bde9d1d->leave($__internal_6bbd11f6b332146c4be6e48c1a3d8133616e905478b310bb93977b0f7bde9d1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f354d9628c1bf93c7b6bdfcb09c46a365be910369196a99e23555acff9d8f94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f354d9628c1bf93c7b6bdfcb09c46a365be910369196a99e23555acff9d8f94d->enter($__internal_f354d9628c1bf93c7b6bdfcb09c46a365be910369196a99e23555acff9d8f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 5, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f354d9628c1bf93c7b6bdfcb09c46a365be910369196a99e23555acff9d8f94d->leave($__internal_f354d9628c1bf93c7b6bdfcb09c46a365be910369196a99e23555acff9d8f94d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/var/www/vote/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
