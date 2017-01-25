<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_93f94d4edc096f31a107e8dc7cc6d7884750f2d484270ff3d62d0bc1b48ac02a extends Twig_Template
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
        $__internal_712c61c9d0d9f75e0d28b009aef6bd494875c84c08eb85750721e787218ac247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712c61c9d0d9f75e0d28b009aef6bd494875c84c08eb85750721e787218ac247->enter($__internal_712c61c9d0d9f75e0d28b009aef6bd494875c84c08eb85750721e787218ac247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_712c61c9d0d9f75e0d28b009aef6bd494875c84c08eb85750721e787218ac247->leave($__internal_712c61c9d0d9f75e0d28b009aef6bd494875c84c08eb85750721e787218ac247_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
