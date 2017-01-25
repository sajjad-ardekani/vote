<?php

/* AppBundle:Admin:questionAdd.html.twig */
class __TwigTemplate_dd97f23fc2e6564ba8e49d6d9d1ed1974eeb311cf0d5075301cc929c94d93ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:questionAdd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e59e8c2229b67f0b62114df1fb47f0eafaf80f3c91f059ed86186be583fbd3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59e8c2229b67f0b62114df1fb47f0eafaf80f3c91f059ed86186be583fbd3d4->enter($__internal_e59e8c2229b67f0b62114df1fb47f0eafaf80f3c91f059ed86186be583fbd3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:questionAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59e8c2229b67f0b62114df1fb47f0eafaf80f3c91f059ed86186be583fbd3d4->leave($__internal_e59e8c2229b67f0b62114df1fb47f0eafaf80f3c91f059ed86186be583fbd3d4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eee0fa4573e7273c901948d42a112eebf337d5e84bc9b32814f22d060f53d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eee0fa4573e7273c901948d42a112eebf337d5e84bc9b32814f22d060f53d73->enter($__internal_5eee0fa4573e7273c901948d42a112eebf337d5e84bc9b32814f22d060f53d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("سوال"), "html", null, true);
        
        $__internal_5eee0fa4573e7273c901948d42a112eebf337d5e84bc9b32814f22d060f53d73->leave($__internal_5eee0fa4573e7273c901948d42a112eebf337d5e84bc9b32814f22d060f53d73_prof);

    }

    // line 3
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_be1d03161e74e8fad5e1f50e019ab6ef5c62949c7866162d4560c38440bddd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1d03161e74e8fad5e1f50e019ab6ef5c62949c7866162d4560c38440bddd92->enter($__internal_be1d03161e74e8fad5e1f50e019ab6ef5c62949c7866162d4560c38440bddd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "سوال";
        
        $__internal_be1d03161e74e8fad5e1f50e019ab6ef5c62949c7866162d4560c38440bddd92->leave($__internal_be1d03161e74e8fad5e1f50e019ab6ef5c62949c7866162d4560c38440bddd92_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f38fe201f8d575d52263485d9fc4895d8137902435a96163cf3be1aea3aa3b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38fe201f8d575d52263485d9fc4895d8137902435a96163cf3be1aea3aa3b7d->enter($__internal_f38fe201f8d575d52263485d9fc4895d8137902435a96163cf3be1aea3aa3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> سوال
    </li>
";
        
        $__internal_f38fe201f8d575d52263485d9fc4895d8137902435a96163cf3be1aea3aa3b7d->leave($__internal_f38fe201f8d575d52263485d9fc4895d8137902435a96163cf3be1aea3aa3b7d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d4520158c139dea01c71e3bf135946fa813390f6ab2d485337267d4ce98e75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4520158c139dea01c71e3bf135946fa813390f6ab2d485337267d4ce98e75d->enter($__internal_3d4520158c139dea01c71e3bf135946fa813390f6ab2d485337267d4ce98e75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <form id=\"pf\" method=\"post\" class=\"form-horizontal\">
        <div class=\"form-group\">
            <label for=\"appbundle_question_text\" class=\"col-xs-1 control-label required\">سوال</label>
            <div class=\"col-xs-4\">
                <input type=\"text\" class=\"form-control\" maxlength=\"255\" required=\"required\" name=\"appbundle_question\" id=\"appbundle_question_text\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-xs-1 control-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("جواب ها"), "html", null, true);
        echo "</label>
            <div class=\"col-xs-4\">
                <input type=\"text\" class=\"form-control\" name='p[0]' placeholder=\"جواب\" />
            </div>
            <div class=\"col-xs-1\">
                <button type=\"button\" class=\"btn btn-default addButton\"><i class=\"fa fa-plus\"></i></button>
            </div>
        </div>

        <!-- The template for adding new field -->
        <div class=\"form-group hide\" id=\"pt\">
            <div class=\"col-xs-4 col-xs-offset-1\">
                <input type=\"text\" class=\"form-control\" name=\"pid\" placeholder=\"جواب\" />
            </div>
            <div class=\"col-xs-1\">
                <button type=\"button\" class=\"btn btn-default removeButton\"><i class=\"fa fa-minus\"></i></button>
            </div>
        </div>

        <div class=\"form-group\" id=\"phid1\">
            <div class=\"col-xs-5 col-xs-offset-1\">
                <button type=\"submit\" class=\"btn btn-default\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ثبت"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
";
        
        $__internal_3d4520158c139dea01c71e3bf135946fa813390f6ab2d485337267d4ce98e75d->leave($__internal_3d4520158c139dea01c71e3bf135946fa813390f6ab2d485337267d4ce98e75d_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebffdd7b92669381d547e195abaa6ac9f6ceb90ad0981ded29b1b880f7b5f301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebffdd7b92669381d547e195abaa6ac9f6ceb90ad0981ded29b1b880f7b5f301->enter($__internal_ebffdd7b92669381d547e195abaa6ac9f6ceb90ad0981ded29b1b880f7b5f301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var bookIndex = 0;
        \$('#pf')
                // Add button click handler
                .on('click', '.addButton', function () {
                    bookIndex++;
                    var \$template = \$('#pt'),
                            \$clone = \$template
                            .clone()
                            .removeClass('hide')
                            .removeAttr('id')
                            .attr('data-book-index', bookIndex)
                            .insertBefore(\$template);
                    \$clone
                            .find('[name=\"pid\"]').attr('name', 'p[' + bookIndex + ']').end();
                })
                .on('click', '.removeButton', function () {
                    var \$row = \$(this).parents('.form-group');
                    \$row.remove();
                });
    </script>
";
        
        $__internal_ebffdd7b92669381d547e195abaa6ac9f6ceb90ad0981ded29b1b880f7b5f301->leave($__internal_ebffdd7b92669381d547e195abaa6ac9f6ceb90ad0981ded29b1b880f7b5f301_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:questionAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  132 => 46,  120 => 41,  96 => 20,  84 => 10,  78 => 9,  62 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block title %}{{ 'سوال'|trans }}{% endblock %}
{%block toolbarTitle %}سوال{%endblock%}
{%block breadcrumb %} 
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> سوال
    </li>
{%endblock%}
{% block content %}

    <form id=\"pf\" method=\"post\" class=\"form-horizontal\">
        <div class=\"form-group\">
            <label for=\"appbundle_question_text\" class=\"col-xs-1 control-label required\">سوال</label>
            <div class=\"col-xs-4\">
                <input type=\"text\" class=\"form-control\" maxlength=\"255\" required=\"required\" name=\"appbundle_question\" id=\"appbundle_question_text\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-xs-1 control-label\">{{'جواب ها' | trans }}</label>
            <div class=\"col-xs-4\">
                <input type=\"text\" class=\"form-control\" name='p[0]' placeholder=\"جواب\" />
            </div>
            <div class=\"col-xs-1\">
                <button type=\"button\" class=\"btn btn-default addButton\"><i class=\"fa fa-plus\"></i></button>
            </div>
        </div>

        <!-- The template for adding new field -->
        <div class=\"form-group hide\" id=\"pt\">
            <div class=\"col-xs-4 col-xs-offset-1\">
                <input type=\"text\" class=\"form-control\" name=\"pid\" placeholder=\"جواب\" />
            </div>
            <div class=\"col-xs-1\">
                <button type=\"button\" class=\"btn btn-default removeButton\"><i class=\"fa fa-minus\"></i></button>
            </div>
        </div>

        <div class=\"form-group\" id=\"phid1\">
            <div class=\"col-xs-5 col-xs-offset-1\">
                <button type=\"submit\" class=\"btn btn-default\">{{'ثبت' | trans}}</button>
            </div>
        </div>
    </form>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script>
        var bookIndex = 0;
        \$('#pf')
                // Add button click handler
                .on('click', '.addButton', function () {
                    bookIndex++;
                    var \$template = \$('#pt'),
                            \$clone = \$template
                            .clone()
                            .removeClass('hide')
                            .removeAttr('id')
                            .attr('data-book-index', bookIndex)
                            .insertBefore(\$template);
                    \$clone
                            .find('[name=\"pid\"]').attr('name', 'p[' + bookIndex + ']').end();
                })
                .on('click', '.removeButton', function () {
                    var \$row = \$(this).parents('.form-group');
                    \$row.remove();
                });
    </script>
{% endblock %}   ", "AppBundle:Admin:questionAdd.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/questionAdd.html.twig");
    }
}
