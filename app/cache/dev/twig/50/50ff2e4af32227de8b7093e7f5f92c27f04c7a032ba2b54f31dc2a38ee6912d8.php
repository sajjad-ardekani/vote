<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_10c7b9edb4aaa22f6f25840902f6af739da26ded9a6784c50aa825342b70a684 extends Twig_Template
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
        $__internal_823ebadd7d4c702dd85328372b5aaef3206b1540d0480b1def746384792c0289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823ebadd7d4c702dd85328372b5aaef3206b1540d0480b1def746384792c0289->enter($__internal_823ebadd7d4c702dd85328372b5aaef3206b1540d0480b1def746384792c0289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_823ebadd7d4c702dd85328372b5aaef3206b1540d0480b1def746384792c0289->leave($__internal_823ebadd7d4c702dd85328372b5aaef3206b1540d0480b1def746384792c0289_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
