<?php

/* AppBundle:Default:vote.html.twig */
class __TwigTemplate_bacddbe200c21708ca708775d4c22ecb83de43f07ad4e6544ce05eab32aa4b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:vote.html.twig", 1);
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
        $__internal_11007ac1e35f767c5c55a85f01f653bcaf190f7c9e72945e5f110e213b092ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11007ac1e35f767c5c55a85f01f653bcaf190f7c9e72945e5f110e213b092ebb->enter($__internal_11007ac1e35f767c5c55a85f01f653bcaf190f7c9e72945e5f110e213b092ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:vote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11007ac1e35f767c5c55a85f01f653bcaf190f7c9e72945e5f110e213b092ebb->leave($__internal_11007ac1e35f767c5c55a85f01f653bcaf190f7c9e72945e5f110e213b092ebb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c911c24448d3c8c95ca960a6a9c6d0c141ad0dac5bc3f12341cf907ad5f7fea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c911c24448d3c8c95ca960a6a9c6d0c141ad0dac5bc3f12341cf907ad5f7fea9->enter($__internal_c911c24448d3c8c95ca960a6a9c6d0c141ad0dac5bc3f12341cf907ad5f7fea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">صفحه
                <small>نظرسنجی</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">صفحه اصلی</a>
                </li>
                <li class=\"active\">نظرسنجی</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">
        <div class=\"col-md-12 text-center\">
            <div class=\"thumbnail\">
                ";
        // line 24
        echo "                <div style=\"background-color: #d9edf7;\" class=\"caption\">
                    <h3>";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->getSourceContext()); })()), "person", array())) ? (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->getSourceContext()); })()), "person", array()), "firstname", array()) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->getSourceContext()); })()), "person", array()), "lastname", array()))) : ("")), "html", null, true);
        echo "
                        <br>
                        <br>
                        <small>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->getSourceContext()); })()), "person", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->getSourceContext()); })()), "person", array()), "jobTitle", array())) : ("")), "html", null, true);
        echo "</small>
                    </h3>
                    <p>";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "person", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "person", array()), "description", array())) : ("")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
    <form action=\"\" method=\"post\" id=\"quiz\">
        <div class=\"row\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 37, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            // line 38
            echo "                <div class=\"col-md-4\">

                    <h5>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Question", array(), "array"), "text", array()), "html", null, true);
            echo " ؟</h5>
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Answers", array(), "array"));
            foreach ($context['_seq'] as $context["letter"] => $context["answer"]) {
                // line 42
                echo "                        <div>
                            <input required type=\"radio\" name=\"answers[";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Question", array(), "array"), "id", array()), "html", null, true);
                echo "]\" id=\"";
                echo twig_escape_filter($this->env, ((("question-" . $context["key"]) . "-answers-") . $context["letter"]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["answer"], "id", array()), "html", null, true);
                echo "\" />
                            <label for=\"";
                // line 44
                echo twig_escape_filter($this->env, ((("question-" . $context["key"]) . "-answers-") . $context["letter"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo " </label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['letter'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

        </div>
        <hr>
        <div class=\"row\">
            <div class=\"form-group\">
                <div class=\"col-md-4\">
                    <label for=\"app_note\">پیشنهاد و انتقاد از استاد: </label>
                    <textarea placeholder=\"لطفا پیشنهاد یا نظر خود را بنویسید\" name=\"app_note\" rows=\"4\" cols=\"50\"></textarea>                    
                </div>
            </div>
        </div>
        <div style=\"margin-top: 10px;\" class=\"form-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"ثبت\" />
        </div>
    </form>
";
        
        $__internal_c911c24448d3c8c95ca960a6a9c6d0c141ad0dac5bc3f12341cf907ad5f7fea9->leave($__internal_c911c24448d3c8c95ca960a6a9c6d0c141ad0dac5bc3f12341cf907ad5f7fea9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  126 => 47,  115 => 44,  107 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 38,  88 => 37,  78 => 30,  73 => 28,  67 => 25,  64 => 24,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">صفحه
                <small>نظرسنجی</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{path(\"homepage\")}}\">صفحه اصلی</a>
                </li>
                <li class=\"active\">نظرسنجی</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class=\"row\">
        <div class=\"col-md-12 text-center\">
            <div class=\"thumbnail\">
                {#                <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">#}
                <div style=\"background-color: #d9edf7;\" class=\"caption\">
                    <h3>{{user.person ? user.person.firstname ~ \" \" ~ user.person.lastname : \"\"}}
                        <br>
                        <br>
                        <small>{{user.person ? user.person.jobTitle : \"\"}}</small>
                    </h3>
                    <p>{{user.person ? user.person.description : \"\"}}</p>
                </div>
            </div>
        </div>
    </div>
    <form action=\"\" method=\"post\" id=\"quiz\">
        <div class=\"row\">
            {%for key,question in questions%}
                <div class=\"col-md-4\">

                    <h5>{{question['Question'].text}} ؟</h5>
                    {%for letter,answer in question['Answers']%}
                        <div>
                            <input required type=\"radio\" name=\"answers[{{question['Question'].id}}]\" id=\"{{'question-'~key~'-answers-'~letter}}\" value=\"{{answer.id}}\" />
                            <label for=\"{{'question-'~key~'-answers-'~letter}}\">{{answer}} </label>
                        </div>
                    {%endfor%}

                </div>
            {%endfor%}


        </div>
        <hr>
        <div class=\"row\">
            <div class=\"form-group\">
                <div class=\"col-md-4\">
                    <label for=\"app_note\">پیشنهاد و انتقاد از استاد: </label>
                    <textarea placeholder=\"لطفا پیشنهاد یا نظر خود را بنویسید\" name=\"app_note\" rows=\"4\" cols=\"50\"></textarea>                    
                </div>
            </div>
        </div>
        <div style=\"margin-top: 10px;\" class=\"form-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"ثبت\" />
        </div>
    </form>
{% endblock %}", "AppBundle:Default:vote.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Default/vote.html.twig");
    }
}
