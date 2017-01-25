<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f54283616b47da5764185809712d1660ece013aa7de96ce618229cf509b13f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_98f12976ce5db160cdd8422105fa5582326343e1066bd82927dd2b00147be788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f12976ce5db160cdd8422105fa5582326343e1066bd82927dd2b00147be788->enter($__internal_98f12976ce5db160cdd8422105fa5582326343e1066bd82927dd2b00147be788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f12976ce5db160cdd8422105fa5582326343e1066bd82927dd2b00147be788->leave($__internal_98f12976ce5db160cdd8422105fa5582326343e1066bd82927dd2b00147be788_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_387f9dc5e829914376bc72e5f819231f58a303790adaf2a17c602143a5cf6bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387f9dc5e829914376bc72e5f819231f58a303790adaf2a17c602143a5cf6bf6->enter($__internal_387f9dc5e829914376bc72e5f819231f58a303790adaf2a17c602143a5cf6bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_387f9dc5e829914376bc72e5f819231f58a303790adaf2a17c602143a5cf6bf6->leave($__internal_387f9dc5e829914376bc72e5f819231f58a303790adaf2a17c602143a5cf6bf6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
