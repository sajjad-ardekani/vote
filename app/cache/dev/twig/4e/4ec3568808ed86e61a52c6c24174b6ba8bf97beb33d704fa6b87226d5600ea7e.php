<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_bc52e0d6a63bb5df3a83249c9edda2f9250c7f7b8057e31a4393607a671a23f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6ee79f3190c46609249b60541eace375fae16f6fd7e1f5f88527fd7fdb5a86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ee79f3190c46609249b60541eace375fae16f6fd7e1f5f88527fd7fdb5a86e->enter($__internal_f6ee79f3190c46609249b60541eace375fae16f6fd7e1f5f88527fd7fdb5a86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ee79f3190c46609249b60541eace375fae16f6fd7e1f5f88527fd7fdb5a86e->leave($__internal_f6ee79f3190c46609249b60541eace375fae16f6fd7e1f5f88527fd7fdb5a86e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_488f26cd616c02a12c271ba2863eecb20a9eb347a2792680196945e315a7728a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488f26cd616c02a12c271ba2863eecb20a9eb347a2792680196945e315a7728a->enter($__internal_488f26cd616c02a12c271ba2863eecb20a9eb347a2792680196945e315a7728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">لیست
                <small>اساتید</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">

        <div class=\"col-lg-12\">
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </div>
            ";
        }
        // line 27
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 28
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </div>
            ";
        }
        // line 34
        echo "        </div>

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 36, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "            <div  class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div style=\"min-height: 150px;\" class=\"caption\">
                        <h3>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array())) ? (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array()), "firstname", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array()), "lastname", array()))) : ("")), "html", null, true);
            echo "</h3>
                        <small><strong>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array()), "jobTitle", array())) : ("")), "html", null, true);
            echo "</strong></small>
                        
                        <p><small>";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "person", array()), "description", array())) : ("")), "html", null, true);
            echo "</small></p>
                    </div>
                        <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_vote", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">نظرسنجی</a>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
    <!-- /.row -->


";
        
        $__internal_488f26cd616c02a12c271ba2863eecb20a9eb347a2792680196945e315a7728a->leave($__internal_488f26cd616c02a12c271ba2863eecb20a9eb347a2792680196945e315a7728a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  131 => 46,  126 => 44,  121 => 42,  117 => 41,  111 => 37,  107 => 36,  103 => 34,  99 => 32,  90 => 30,  86 => 29,  83 => 28,  80 => 27,  76 => 25,  67 => 23,  63 => 22,  60 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}


    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">لیست
                <small>اساتید</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">

        <div class=\"col-lg-12\">
            {% if app.session.flashBag.has('success') %}
                <div class=\"alert alert-success\">
                    {% for msg in app.session.flashBag.get('success') %}
                        {{ msg }}
                    {% endfor %}
                </div>
            {% endif %}
            {% if app.session.flashBag.has('error') %}
                <div class=\"alert alert-danger\">
                    {% for msg in app.session.flashBag.get('error') %}
                        {{ msg }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {% for user in users%}
            <div  class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div style=\"min-height: 150px;\" class=\"caption\">
                        <h3>{{user.person ? user.person.firstname ~ \" \" ~ user.person.lastname : \"\"}}</h3>
                        <small><strong>{{user.person ? user.person.jobTitle : \"\"}}</strong></small>
                        
                        <p><small>{{user.person ? user.person.description : \"\"}}</small></p>
                    </div>
                        <a class=\"btn btn-success\" href=\"{{path(\"app_vote\",{'id': user.id})}}\">نظرسنجی</a>
                </div>
            </div>

        {%endfor%}
    </div>
    <!-- /.row -->


{% endblock %}

", "AppBundle:Default:index.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
