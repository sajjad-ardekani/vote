<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ee78cf69a453a84100e68d9500e60582dccb1ec8cc30ad75e482d61ebdf1cdb9 extends Twig_Template
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
        $__internal_e3230470ac6bcce3dd03f9688d406fcf1db00d95d2c502f857f11486bb61934d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3230470ac6bcce3dd03f9688d406fcf1db00d95d2c502f857f11486bb61934d->enter($__internal_e3230470ac6bcce3dd03f9688d406fcf1db00d95d2c502f857f11486bb61934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e3230470ac6bcce3dd03f9688d406fcf1db00d95d2c502f857f11486bb61934d->leave($__internal_e3230470ac6bcce3dd03f9688d406fcf1db00d95d2c502f857f11486bb61934d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
