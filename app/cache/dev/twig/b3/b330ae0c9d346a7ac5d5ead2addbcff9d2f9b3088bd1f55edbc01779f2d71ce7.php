<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0902627dc06bdd1a5264746bda1cf795ed381e5c2be5199c99cce1170852d285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_203432881ee1d52b8aa9d9cc741009e2bd75d649f3f86a93d66636b8c10aa4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203432881ee1d52b8aa9d9cc741009e2bd75d649f3f86a93d66636b8c10aa4e4->enter($__internal_203432881ee1d52b8aa9d9cc741009e2bd75d649f3f86a93d66636b8c10aa4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_203432881ee1d52b8aa9d9cc741009e2bd75d649f3f86a93d66636b8c10aa4e4->leave($__internal_203432881ee1d52b8aa9d9cc741009e2bd75d649f3f86a93d66636b8c10aa4e4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cde7b8e4a5b8c092bb43d7cd23ceef339818cdefbae732fd031523670b8c10d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde7b8e4a5b8c092bb43d7cd23ceef339818cdefbae732fd031523670b8c10d1->enter($__internal_cde7b8e4a5b8c092bb43d7cd23ceef339818cdefbae732fd031523670b8c10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cde7b8e4a5b8c092bb43d7cd23ceef339818cdefbae732fd031523670b8c10d1->leave($__internal_cde7b8e4a5b8c092bb43d7cd23ceef339818cdefbae732fd031523670b8c10d1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0f8122576c97fe4e19d73eb4281b5e3a048fa7d8f58ce60326925e57aba56fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f8122576c97fe4e19d73eb4281b5e3a048fa7d8f58ce60326925e57aba56fe->enter($__internal_f0f8122576c97fe4e19d73eb4281b5e3a048fa7d8f58ce60326925e57aba56fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 9, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f0f8122576c97fe4e19d73eb4281b5e3a048fa7d8f58ce60326925e57aba56fe->leave($__internal_f0f8122576c97fe4e19d73eb4281b5e3a048fa7d8f58ce60326925e57aba56fe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e29d69e584bd012c3fba8ce8d106880d488bd5d4deaf26112247c19aee0cbeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29d69e584bd012c3fba8ce8d106880d488bd5d4deaf26112247c19aee0cbeb9->enter($__internal_e29d69e584bd012c3fba8ce8d106880d488bd5d4deaf26112247c19aee0cbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e29d69e584bd012c3fba8ce8d106880d488bd5d4deaf26112247c19aee0cbeb9->leave($__internal_e29d69e584bd012c3fba8ce8d106880d488bd5d4deaf26112247c19aee0cbeb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
