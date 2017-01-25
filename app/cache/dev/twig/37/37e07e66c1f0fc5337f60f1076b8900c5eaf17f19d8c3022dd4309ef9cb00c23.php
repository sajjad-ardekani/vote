<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5450bb734be2ee7de25ff9f1ae1c78652ec8226d708ca50e5aaa958b863dece7 extends Twig_Template
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
        $__internal_8e0da2cb7184c90dac3438fb91a2b1a6744650579f098d13f3c1aba2d9ebe50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0da2cb7184c90dac3438fb91a2b1a6744650579f098d13f3c1aba2d9ebe50f->enter($__internal_8e0da2cb7184c90dac3438fb91a2b1a6744650579f098d13f3c1aba2d9ebe50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8e0da2cb7184c90dac3438fb91a2b1a6744650579f098d13f3c1aba2d9ebe50f->leave($__internal_8e0da2cb7184c90dac3438fb91a2b1a6744650579f098d13f3c1aba2d9ebe50f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
