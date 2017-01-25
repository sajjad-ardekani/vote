<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_30bb1cc8844b64ccf1b7d6ec0c14acbea4dae3d3cb62b54538b64c8ce4b8b6b4 extends Twig_Template
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
        $__internal_c932c8f64a58bf8133a6ad1833bdda30b070e3af07cba27636d41d4635d334e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c932c8f64a58bf8133a6ad1833bdda30b070e3af07cba27636d41d4635d334e7->enter($__internal_c932c8f64a58bf8133a6ad1833bdda30b070e3af07cba27636d41d4635d334e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c932c8f64a58bf8133a6ad1833bdda30b070e3af07cba27636d41d4635d334e7->leave($__internal_c932c8f64a58bf8133a6ad1833bdda30b070e3af07cba27636d41d4635d334e7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_27c5a63037bd03aa3c93369201f908e8ed0ec06bf684c6e2e646d20ba659cbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c5a63037bd03aa3c93369201f908e8ed0ec06bf684c6e2e646d20ba659cbc4->enter($__internal_27c5a63037bd03aa3c93369201f908e8ed0ec06bf684c6e2e646d20ba659cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">About
                <small>Subheading</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a>
                </li>
                <li class=\"active\">About</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">Our Team</h2>
        </div>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        ";
            // line 44
            echo "                        <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_vote", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">نظرسنجی</a>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
    <!-- /.row -->


";
        
        $__internal_27c5a63037bd03aa3c93369201f908e8ed0ec06bf684c6e2e646d20ba659cbc4->leave($__internal_27c5a63037bd03aa3c93369201f908e8ed0ec06bf684c6e2e646d20ba659cbc4_prof);

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
        return array (  92 => 50,  79 => 44,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}


    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">About
                <small>Subheading</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Home</a>
                </li>
                <li class=\"active\">About</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">Our Team</h2>
        </div>

        {% for user in users%}
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        {#                  <ul class=\"list-inline\">
                                              <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                                              </li>
                                              <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                                              </li>
                                              <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                                              </li>
                                          </ul>#}
                        <a class=\"btn btn-success\" href=\"{{path(\"app_vote\",{'id': user.id})}}\">نظرسنجی</a>
                    </div>
                </div>
            </div>

        {%endfor%}
    </div>
    <!-- /.row -->


{% endblock %}

", "AppBundle:Default:index.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
