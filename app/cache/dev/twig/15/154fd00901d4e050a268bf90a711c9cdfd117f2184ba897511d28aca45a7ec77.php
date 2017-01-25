<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6876e883399f45a98fe40be3497dc9ca8288173bf839945ac326abdb95a54530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a01d81e1f94b905ff7c554a7f213c8e80e35bf3b8e4c515c4c84a6705a2577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a01d81e1f94b905ff7c554a7f213c8e80e35bf3b8e4c515c4c84a6705a2577b->enter($__internal_4a01d81e1f94b905ff7c554a7f213c8e80e35bf3b8e4c515c4c84a6705a2577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a01d81e1f94b905ff7c554a7f213c8e80e35bf3b8e4c515c4c84a6705a2577b->leave($__internal_4a01d81e1f94b905ff7c554a7f213c8e80e35bf3b8e4c515c4c84a6705a2577b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d49460142ee228aa00c9b3a147a79bde5cf5bb76ecd431b7770034a47fad3cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49460142ee228aa00c9b3a147a79bde5cf5bb76ecd431b7770034a47fad3cd4->enter($__internal_d49460142ee228aa00c9b3a147a79bde5cf5bb76ecd431b7770034a47fad3cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d49460142ee228aa00c9b3a147a79bde5cf5bb76ecd431b7770034a47fad3cd4->leave($__internal_d49460142ee228aa00c9b3a147a79bde5cf5bb76ecd431b7770034a47fad3cd4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
