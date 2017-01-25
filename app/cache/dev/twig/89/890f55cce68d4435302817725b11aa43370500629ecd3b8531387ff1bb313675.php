<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_456efa34b87aca0e6fc488f95030e65057744d5eded4b5b3d68fc1ef2074bad7 extends Twig_Template
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
        $__internal_356fe4d800dcf2ed1bb71ba2674aabc609da2891d7245dc437c9da2338640459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356fe4d800dcf2ed1bb71ba2674aabc609da2891d7245dc437c9da2338640459->enter($__internal_356fe4d800dcf2ed1bb71ba2674aabc609da2891d7245dc437c9da2338640459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_356fe4d800dcf2ed1bb71ba2674aabc609da2891d7245dc437c9da2338640459->leave($__internal_356fe4d800dcf2ed1bb71ba2674aabc609da2891d7245dc437c9da2338640459_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
