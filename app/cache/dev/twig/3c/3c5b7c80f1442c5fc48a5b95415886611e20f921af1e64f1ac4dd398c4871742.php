<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_abcf6640b09cd01a6a763d1eb0931250ff119404150aff9d10e309997e98885b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d63da0fd36ce0c7e3e0a5b5e4cb7f2c0b9284dbec7e9b9eb4500aec35fd495cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63da0fd36ce0c7e3e0a5b5e4cb7f2c0b9284dbec7e9b9eb4500aec35fd495cb->enter($__internal_d63da0fd36ce0c7e3e0a5b5e4cb7f2c0b9284dbec7e9b9eb4500aec35fd495cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_d63da0fd36ce0c7e3e0a5b5e4cb7f2c0b9284dbec7e9b9eb4500aec35fd495cb->leave($__internal_d63da0fd36ce0c7e3e0a5b5e4cb7f2c0b9284dbec7e9b9eb4500aec35fd495cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
