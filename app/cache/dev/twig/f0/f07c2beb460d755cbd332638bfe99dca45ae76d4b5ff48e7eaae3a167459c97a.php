<?php

/* AppBundle:Admin:questionList.html.twig */
class __TwigTemplate_25c1b6b04e8ef3b99a7eb9ea8a5ed1e6dd3ad87d10715daf11610902509acbbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:questionList.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cb4ed828a341e93b2901f422d814f1b143ef663fdf837f4e353023ead5b7f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb4ed828a341e93b2901f422d814f1b143ef663fdf837f4e353023ead5b7f09->enter($__internal_2cb4ed828a341e93b2901f422d814f1b143ef663fdf837f4e353023ead5b7f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:questionList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb4ed828a341e93b2901f422d814f1b143ef663fdf837f4e353023ead5b7f09->leave($__internal_2cb4ed828a341e93b2901f422d814f1b143ef663fdf837f4e353023ead5b7f09_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_17391b48e3cb85898f36f67e50db63e8afb4d48047755016b279a38e07ad6ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17391b48e3cb85898f36f67e50db63e8afb4d48047755016b279a38e07ad6ef8->enter($__internal_17391b48e3cb85898f36f67e50db63e8afb4d48047755016b279a38e07ad6ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("سوال"), "html", null, true);
        
        $__internal_17391b48e3cb85898f36f67e50db63e8afb4d48047755016b279a38e07ad6ef8->leave($__internal_17391b48e3cb85898f36f67e50db63e8afb4d48047755016b279a38e07ad6ef8_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_517ba9cd64e97647ea8d16e0a07ac3902fd3927f1e5902478bc665600b6ecf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517ba9cd64e97647ea8d16e0a07ac3902fd3927f1e5902478bc665600b6ecf67->enter($__internal_517ba9cd64e97647ea8d16e0a07ac3902fd3927f1e5902478bc665600b6ecf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "سوالات";
        
        $__internal_517ba9cd64e97647ea8d16e0a07ac3902fd3927f1e5902478bc665600b6ecf67->leave($__internal_517ba9cd64e97647ea8d16e0a07ac3902fd3927f1e5902478bc665600b6ecf67_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ce3b5dbc9242d6efa884a193f0688d2aeaf6f7420faa0eac338728d9d0b34e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3b5dbc9242d6efa884a193f0688d2aeaf6f7420faa0eac338728d9d0b34e33->enter($__internal_ce3b5dbc9242d6efa884a193f0688d2aeaf6f7420faa0eac338728d9d0b34e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> سوال و جواب ها
    </li>
";
        
        $__internal_ce3b5dbc9242d6efa884a193f0688d2aeaf6f7420faa0eac338728d9d0b34e33->leave($__internal_ce3b5dbc9242d6efa884a193f0688d2aeaf6f7420faa0eac338728d9d0b34e33_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f5e42a688472a9815d0c87b3aed217c8efa0b80220bdbfffdd5dcf78afb5f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5e42a688472a9815d0c87b3aed217c8efa0b80220bdbfffdd5dcf78afb5f6d->enter($__internal_7f5e42a688472a9815d0c87b3aed217c8efa0b80220bdbfffdd5dcf78afb5f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <!-- Content Row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            // line 15
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 18
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "text", array()), "html", null, true);
            echo "</a>
                                <div class=\"pull-left\">
                                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_question_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_question_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                                </div>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 25
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "questionAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 29
                echo "                                        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["answer"], "text", array()), "html", null, true);
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
            <!-- /.panel-group -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
";
        
        $__internal_7f5e42a688472a9815d0c87b3aed217c8efa0b80220bdbfffdd5dcf78afb5f6d->leave($__internal_7f5e42a688472a9815d0c87b3aed217c8efa0b80220bdbfffdd5dcf78afb5f6d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:questionList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  135 => 31,  126 => 29,  122 => 28,  116 => 25,  109 => 21,  105 => 20,  98 => 18,  93 => 15,  89 => 14,  83 => 10,  77 => 9,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block title %}{{ 'سوال'|trans }}{% endblock %}
{%block toolbarTitle %}سوالات{%endblock%}
{%block breadcrumb %} 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> سوال و جواب ها
    </li>
{%endblock%}
{% block content %}
    <!-- Content Row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel-group\" id=\"accordion\">
                {%for key,question in questions%}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{key}}\">{{question.text}}</a>
                                <div class=\"pull-left\">
                                    <a href=\"{{path(\"app_question_edit\",{'id': question.id})}}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                    <a href=\"{{path(\"app_question_delete\",{'id': question.id})}}\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                                </div>
                            </h4>
                        </div>
                        <div id=\"collapse{{key}}\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <ul>
                                    {%for answer in question.questionAnswers%}
                                        <li>{{answer.text}}</li>
                                        {%endfor%}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                {%endfor%}
            </div>
            <!-- /.panel-group -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
{% endblock %}
", "AppBundle:Admin:questionList.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/questionList.html.twig");
    }
}
