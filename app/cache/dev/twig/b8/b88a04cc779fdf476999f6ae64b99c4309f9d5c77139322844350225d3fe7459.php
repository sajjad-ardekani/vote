<?php

/* AppBundle:Default:vote.html.twig */
class __TwigTemplate_a7b3d02bb55cecaf5f6317ff0daeea549857bc28b0eaa234bafbdb2743882fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:vote.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1403356ccaf7257cd26da2ef8a90f40a79436cdf9baf64a774bd7beb86be0d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1403356ccaf7257cd26da2ef8a90f40a79436cdf9baf64a774bd7beb86be0d08->enter($__internal_1403356ccaf7257cd26da2ef8a90f40a79436cdf9baf64a774bd7beb86be0d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:vote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1403356ccaf7257cd26da2ef8a90f40a79436cdf9baf64a774bd7beb86be0d08->leave($__internal_1403356ccaf7257cd26da2ef8a90f40a79436cdf9baf64a774bd7beb86be0d08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da90db7f064df3ad3275c08c8fea5db8294d6e5c7022e16317c9f15ee61de536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da90db7f064df3ad3275c08c8fea5db8294d6e5c7022e16317c9f15ee61de536->enter($__internal_da90db7f064df3ad3275c08c8fea5db8294d6e5c7022e16317c9f15ee61de536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "firstname", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "lastname", array())), "html", null, true);
        echo "
    <form action=\"\" method=\"post\" id=\"quiz\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            // line 7
            echo "
            <li>
                <h3><";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Question", array(), "array"), "html", null, true);
            echo "</h3>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Answers", array(), "array"));
            foreach ($context['_seq'] as $context["letter"] => $context["answer"]) {
                // line 11
                echo "                    <div>
                        <input type=\"radio\" name=\"answers[";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "Question", array(), "array"), "id", array()), "html", null, true);
                echo "]\" id=\"";
                echo twig_escape_filter($this->env, ((("question-" . $context["key"]) . "-answers-") . $context["letter"]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["answer"], "id", array()), "html", null, true);
                echo "\" />
                        <label for=\"";
                // line 13
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
            // line 16
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <li>
            <input type=\"text\" name=\"app_note\" id=\"app_note\" placeholder=\"لطفا پیشنهاد یا نظر خود را بنویسید\" />
            <label for=\"app_note\">پیشنهاد و انتقاد</label>
        </li>
        <input type=\"submit\" value=\"ثبت\" />
    </form>
";
        
        $__internal_da90db7f064df3ad3275c08c8fea5db8294d6e5c7022e16317c9f15ee61de536->leave($__internal_da90db7f064df3ad3275c08c8fea5db8294d6e5c7022e16317c9f15ee61de536_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5fa1c2045f31f91d3fcd6fa2343f4ac809c36e052901c9912fe37e2f26f3f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fa1c2045f31f91d3fcd6fa2343f4ac809c36e052901c9912fe37e2f26f3f17->enter($__internal_c5fa1c2045f31f91d3fcd6fa2343f4ac809c36e052901c9912fe37e2f26f3f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "
";
        
        $__internal_c5fa1c2045f31f91d3fcd6fa2343f4ac809c36e052901c9912fe37e2f26f3f17->leave($__internal_c5fa1c2045f31f91d3fcd6fa2343f4ac809c36e052901c9912fe37e2f26f3f17_prof);

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
        return array (  111 => 27,  105 => 26,  92 => 18,  85 => 16,  74 => 13,  66 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{user.firstname ~ user.lastname}}
    <form action=\"\" method=\"post\" id=\"quiz\">
        {%for key,question in questions%}

            <li>
                <h3><{{question['Question']}}</h3>
                {%for letter,answer in question['Answers']%}
                    <div>
                        <input type=\"radio\" name=\"answers[{{question['Question'].id}}]\" id=\"{{'question-'~key~'-answers-'~letter}}\" value=\"{{answer.id}}\" />
                        <label for=\"{{'question-'~key~'-answers-'~letter}}\">{{answer}} </label>
                    </div>
                {%endfor%}
            </li>
        {%endfor%}
        <li>
            <input type=\"text\" name=\"app_note\" id=\"app_note\" placeholder=\"لطفا پیشنهاد یا نظر خود را بنویسید\" />
            <label for=\"app_note\">پیشنهاد و انتقاد</label>
        </li>
        <input type=\"submit\" value=\"ثبت\" />
    </form>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AppBundle:Default:vote.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Default/vote.html.twig");
    }
}
