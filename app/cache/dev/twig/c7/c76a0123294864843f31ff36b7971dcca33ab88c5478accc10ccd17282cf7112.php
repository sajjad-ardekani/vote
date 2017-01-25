<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8d9cade4067495c5b08b74df936d4fa278be1a15075fb9e63779e81b5e23dbf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03c85cdf6a4c7bd039117698e3dfab3d40d4182d0dd6932afa7f31598d7d69c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c85cdf6a4c7bd039117698e3dfab3d40d4182d0dd6932afa7f31598d7d69c8->enter($__internal_03c85cdf6a4c7bd039117698e3dfab3d40d4182d0dd6932afa7f31598d7d69c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_03c85cdf6a4c7bd039117698e3dfab3d40d4182d0dd6932afa7f31598d7d69c8->leave($__internal_03c85cdf6a4c7bd039117698e3dfab3d40d4182d0dd6932afa7f31598d7d69c8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a8519cd1f24d11c7fdd3fdfab2993b909fac08c239fd377021c56adf41df6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a8519cd1f24d11c7fdd3fdfab2993b909fac08c239fd377021c56adf41df6a->enter($__internal_60a8519cd1f24d11c7fdd3fdfab2993b909fac08c239fd377021c56adf41df6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_60a8519cd1f24d11c7fdd3fdfab2993b909fac08c239fd377021c56adf41df6a->leave($__internal_60a8519cd1f24d11c7fdd3fdfab2993b909fac08c239fd377021c56adf41df6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
