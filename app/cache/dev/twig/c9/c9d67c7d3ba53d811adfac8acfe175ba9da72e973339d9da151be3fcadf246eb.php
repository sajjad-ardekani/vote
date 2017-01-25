<?php

/* AppBundle:Dashboard:dashboard.html.twig */
class __TwigTemplate_a8daf67b68f260f6221336516e491071eee2e0ff6a91e0f78ede2136d5e615d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Dashboard:dashboard.html.twig", 1);
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
        $__internal_afa9f4e0e34f8e6f704a2a97b7eb98a7113872dec932c84ec98376a5fc040117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa9f4e0e34f8e6f704a2a97b7eb98a7113872dec932c84ec98376a5fc040117->enter($__internal_afa9f4e0e34f8e6f704a2a97b7eb98a7113872dec932c84ec98376a5fc040117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Dashboard:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa9f4e0e34f8e6f704a2a97b7eb98a7113872dec932c84ec98376a5fc040117->leave($__internal_afa9f4e0e34f8e6f704a2a97b7eb98a7113872dec932c84ec98376a5fc040117_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3f4b3d63ee10ab51c4b31645a813eb27eaec3a80e269c40c0cea992c661256f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f4b3d63ee10ab51c4b31645a813eb27eaec3a80e269c40c0cea992c661256f->enter($__internal_e3f4b3d63ee10ab51c4b31645a813eb27eaec3a80e269c40c0cea992c661256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            ";
        // line 11
        echo "                            <i class=\"fa fa-ticket fa-5x\" aria-hidden=\"true\"></i>

                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["countOfVote"]) || array_key_exists("countOfVote", $context) ? $context["countOfVote"] : (function () { throw new Twig_Error_Runtime('Variable "countOfVote" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
                            <div>نظرسنجی</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">جزئیات</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comment fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["CountOfNoteVote"]) || array_key_exists("CountOfNoteVote", $context) ? $context["CountOfNoteVote"] : (function () { throw new Twig_Error_Runtime('Variable "CountOfNoteVote" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
                            <div>نظر</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">جزئیات</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- /.row -->
    <!-- Content Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> پاسخ ها</h3>
                    </div>
                    <div class=\"panel-body\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionAnswerss"]) || array_key_exists("questionAnswerss", $context) ? $context["questionAnswerss"] : (function () { throw new Twig_Error_Runtime('Variable "questionAnswerss" does not exist.', 63, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["q"] => $context["questions"]) {
            // line 64
            echo "                        <div class=\"col-lg-4\">
                            <div class=\"list-group\">
                                <a class=\"list-group-item active\" href=\"#\">";
            // line 66
            echo twig_escape_filter($this->env, $context["q"], "html", null, true);
            echo "</a>
                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["questions"]);
            foreach ($context['_seq'] as $context["key"] => $context["question"]) {
                // line 68
                echo "                                    <a class=\"list-group-item\" href=\"#\">";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "answer", array()) . " ( ") . twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "count", array())) . " )"), "html", null, true);
                echo " </a>
                                    <div class=\"progress\">
                                        <div style=\"width: ";
                // line 70
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "count", array()) . "%"), "html", null, true);
                echo "\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"40\" role=\"progressbar\" class=\"progress-bar progress-bar-success\"><span class=\"sr-only\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "count", array()), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                            </div>
                        </div>
            <!-- /.col-lg-12 -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['q'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </div>
                </div>
            </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-support fa-fw\"></i> نظرات</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-striped\">
                            <thead>
                                <tr>
                                    <th>متن اظهار نظر</th>
                                    <th>تاریخ ایجاد</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["votes"]) || array_key_exists("votes", $context) ? $context["votes"] : (function () { throw new Twig_Error_Runtime('Variable "votes" does not exist.', 98, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
            // line 99
            echo "                                    <tr>
                                        <td>";
            // line 100
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["vote"], "note", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["vote"], "note", array())) : ("نظری ثیت نشده است.")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 101
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pd_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["vote"], "createAt", array()))), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </tbody>
                        </table>
                    </div>
                    ";
        // line 107
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["votes"]) || array_key_exists("votes", $context) ? $context["votes"] : (function () { throw new Twig_Error_Runtime('Variable "votes" does not exist.', 107, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_e3f4b3d63ee10ab51c4b31645a813eb27eaec3a80e269c40c0cea992c661256f->leave($__internal_e3f4b3d63ee10ab51c4b31645a813eb27eaec3a80e269c40c0cea992c661256f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Dashboard:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 107,  193 => 104,  184 => 101,  180 => 100,  177 => 99,  173 => 98,  151 => 78,  142 => 74,  130 => 70,  124 => 68,  120 => 67,  116 => 66,  112 => 64,  108 => 63,  79 => 37,  54 => 15,  48 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            {#                            <i class=\"fa fa-tree fa-5x\"></i>#}
                            <i class=\"fa fa-ticket fa-5x\" aria-hidden=\"true\"></i>

                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{countOfVote}}</div>
                            <div>نظرسنجی</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">جزئیات</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comment fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{CountOfNoteVote}}</div>
                            <div>نظر</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">جزئیات</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- /.row -->
    <!-- Content Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> پاسخ ها</h3>
                    </div>
                    <div class=\"panel-body\">
        {%for q,questions in questionAnswerss%}
                        <div class=\"col-lg-4\">
                            <div class=\"list-group\">
                                <a class=\"list-group-item active\" href=\"#\">{{q}}</a>
                                {%for key,question in questions%}
                                    <a class=\"list-group-item\" href=\"#\">{{question.answer ~ \" ( \" ~ question.count ~ \" )\"}} </a>
                                    <div class=\"progress\">
                                        <div style=\"width: {{question.count ~ \"%\"}}\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"40\" role=\"progressbar\" class=\"progress-bar progress-bar-success\"><span class=\"sr-only\">{{question.count}}</span>
                                        </div>
                                    </div>
                                {%endfor%}
                            </div>
                        </div>
            <!-- /.col-lg-12 -->
        {%endfor%}
                    </div>
                </div>
            </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-support fa-fw\"></i> نظرات</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-striped\">
                            <thead>
                                <tr>
                                    <th>متن اظهار نظر</th>
                                    <th>تاریخ ایجاد</th>
                                </tr>
                            </thead>
                            <tbody>
                                {%for vote in votes%}
                                    <tr>
                                        <td>{{(vote.note is not null) ? vote.note : \"نظری ثیت نشده است.\"}}</td>
                                        <td>{{vote.createAt|pd_format}}</td>
                                    </tr>
                                {%endfor%}
                            </tbody>
                        </table>
                    </div>
                    {{ knp_pagination_render(votes) }}
                </div>
            </div>
        </div>

    </div>
{% endblock %}

", "AppBundle:Dashboard:dashboard.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Dashboard/dashboard.html.twig");
    }
}
