<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c6dc2c336f9792837e47126fbc1477774595fd0ef5b984abfe9e1daca0a8a914 extends Twig_Template
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
        $__internal_46a7e9ac0a0442d6759a0b85dfdb1e127c3a1ca364323cadf239672a4d408962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a7e9ac0a0442d6759a0b85dfdb1e127c3a1ca364323cadf239672a4d408962->enter($__internal_46a7e9ac0a0442d6759a0b85dfdb1e127c3a1ca364323cadf239672a4d408962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_46a7e9ac0a0442d6759a0b85dfdb1e127c3a1ca364323cadf239672a4d408962->leave($__internal_46a7e9ac0a0442d6759a0b85dfdb1e127c3a1ca364323cadf239672a4d408962_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b81912dc0f6aef3834d04850e97c56216aae19cc0fb3dff94e994c06fe976ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81912dc0f6aef3834d04850e97c56216aae19cc0fb3dff94e994c06fe976ee1->enter($__internal_b81912dc0f6aef3834d04850e97c56216aae19cc0fb3dff94e994c06fe976ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_b81912dc0f6aef3834d04850e97c56216aae19cc0fb3dff94e994c06fe976ee1->leave($__internal_b81912dc0f6aef3834d04850e97c56216aae19cc0fb3dff94e994c06fe976ee1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21def79c1b95b0dd3ebe627c00a300b40ceb0d57acff4b7e511088db41566377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21def79c1b95b0dd3ebe627c00a300b40ceb0d57acff4b7e511088db41566377->enter($__internal_21def79c1b95b0dd3ebe627c00a300b40ceb0d57acff4b7e511088db41566377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 9, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_21def79c1b95b0dd3ebe627c00a300b40ceb0d57acff4b7e511088db41566377->leave($__internal_21def79c1b95b0dd3ebe627c00a300b40ceb0d57acff4b7e511088db41566377_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6aac39b48206c6db8cbbffb925b558a4f8af2d733085ff39718cfec3da0585fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aac39b48206c6db8cbbffb925b558a4f8af2d733085ff39718cfec3da0585fc->enter($__internal_6aac39b48206c6db8cbbffb925b558a4f8af2d733085ff39718cfec3da0585fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6aac39b48206c6db8cbbffb925b558a4f8af2d733085ff39718cfec3da0585fc->leave($__internal_6aac39b48206c6db8cbbffb925b558a4f8af2d733085ff39718cfec3da0585fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
