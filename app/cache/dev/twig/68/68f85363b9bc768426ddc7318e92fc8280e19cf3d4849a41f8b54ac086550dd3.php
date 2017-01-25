<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7f4d5690ba091bd13a16575e47c872c6ca4799e8d10eae1f7674e995a22bfa3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_66a9b62d51c247ce955f9f32c4e5376dbe389d6246f4a78db120b2737f3fa3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a9b62d51c247ce955f9f32c4e5376dbe389d6246f4a78db120b2737f3fa3d9->enter($__internal_66a9b62d51c247ce955f9f32c4e5376dbe389d6246f4a78db120b2737f3fa3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a9b62d51c247ce955f9f32c4e5376dbe389d6246f4a78db120b2737f3fa3d9->leave($__internal_66a9b62d51c247ce955f9f32c4e5376dbe389d6246f4a78db120b2737f3fa3d9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c1a6af289bb78bef735bcdf9883e46b34755268fed7d199095ab56b64e00bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a6af289bb78bef735bcdf9883e46b34755268fed7d199095ab56b64e00bce->enter($__internal_4c1a6af289bb78bef735bcdf9883e46b34755268fed7d199095ab56b64e00bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section class=\"panel\"  style='margin-top: 50px;'>
        <header class=\"panel-heading\">
            <div class=\"panel-actions\">
                <a data-panel-toggle=\"\" class=\"panel-action panel-action-toggle\" href=\"#\"></a>
                <a data-panel-dismiss=\"\" class=\"panel-action panel-action-dismiss\" href=\"#\"></a>
            </div>
        </header>
        <div class=\"panel-body\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("panel.add"), "html", null, true);
        echo "</a>
            <hr />
            ";
        // line 14
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
    </section>
";
        
        $__internal_4c1a6af289bb78bef735bcdf9883e46b34755268fed7d199095ab56b64e00bce->leave($__internal_4c1a6af289bb78bef735bcdf9883e46b34755268fed7d199095ab56b64e00bce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  57 => 14,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block content %}
    <section class=\"panel\"  style='margin-top: 50px;'>
        <header class=\"panel-heading\">
            <div class=\"panel-actions\">
                <a data-panel-toggle=\"\" class=\"panel-action panel-action-toggle\" href=\"#\"></a>
                <a data-panel-dismiss=\"\" class=\"panel-action panel-action-dismiss\" href=\"#\"></a>
            </div>
        </header>
        <div class=\"panel-body\">
            <a href=\"{{path('fos_user_group_new')}}\" class=\"btn btn-success\">{{'panel.add' | trans}}</a>
            <hr />
            {% include \"FOSUserBundle:Group:list_content.html.twig\" %}
        </div>
    </section>
{% endblock content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
