<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4cd8a6cc183cdea6ec912904833bf013928ff197b8019d7e1cd045dcfbad70a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3760cb2c2971b5b41592a5bbd35ff24dd88b86287f75c424406d4d6dc08317e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3760cb2c2971b5b41592a5bbd35ff24dd88b86287f75c424406d4d6dc08317e5->enter($__internal_3760cb2c2971b5b41592a5bbd35ff24dd88b86287f75c424406d4d6dc08317e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3760cb2c2971b5b41592a5bbd35ff24dd88b86287f75c424406d4d6dc08317e5->leave($__internal_3760cb2c2971b5b41592a5bbd35ff24dd88b86287f75c424406d4d6dc08317e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea16a172e628ac811433ad29283b8d171984e9b522578c05e33705cab20271eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea16a172e628ac811433ad29283b8d171984e9b522578c05e33705cab20271eb->enter($__internal_ea16a172e628ac811433ad29283b8d171984e9b522578c05e33705cab20271eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ea16a172e628ac811433ad29283b8d171984e9b522578c05e33705cab20271eb->leave($__internal_ea16a172e628ac811433ad29283b8d171984e9b522578c05e33705cab20271eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
