<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4844f5344b73e585e7f96723a1b82f7f393a9d52a8dcbcb88171f1a40671d311 extends Twig_Template
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
        $__internal_caa9ef355f89f4abd69272654748766b1d07a13823af7908c39df8e8d10ca6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa9ef355f89f4abd69272654748766b1d07a13823af7908c39df8e8d10ca6a3->enter($__internal_caa9ef355f89f4abd69272654748766b1d07a13823af7908c39df8e8d10ca6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_caa9ef355f89f4abd69272654748766b1d07a13823af7908c39df8e8d10ca6a3->leave($__internal_caa9ef355f89f4abd69272654748766b1d07a13823af7908c39df8e8d10ca6a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
