<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e949fb16f9bd72d5381465099f6d2dfc312d5422716c298f6bfa497f97415fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8099131d7b294a2cc87345e9a68d8a39ab31b0685410e33c4e76d3bdcdafea93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8099131d7b294a2cc87345e9a68d8a39ab31b0685410e33c4e76d3bdcdafea93->enter($__internal_8099131d7b294a2cc87345e9a68d8a39ab31b0685410e33c4e76d3bdcdafea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8099131d7b294a2cc87345e9a68d8a39ab31b0685410e33c4e76d3bdcdafea93->leave($__internal_8099131d7b294a2cc87345e9a68d8a39ab31b0685410e33c4e76d3bdcdafea93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
