<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_29f2827a75aa2e09dd0b5e680bd75de721339b13b886a9db1fbc1e017d02d203 extends Twig_Template
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
        $__internal_c30ed79a6224d9686ca9cb47bb4c0c2d1d95e4465bd5a94faa7f1e20eb13da3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30ed79a6224d9686ca9cb47bb4c0c2d1d95e4465bd5a94faa7f1e20eb13da3a->enter($__internal_c30ed79a6224d9686ca9cb47bb4c0c2d1d95e4465bd5a94faa7f1e20eb13da3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c30ed79a6224d9686ca9cb47bb4c0c2d1d95e4465bd5a94faa7f1e20eb13da3a->leave($__internal_c30ed79a6224d9686ca9cb47bb4c0c2d1d95e4465bd5a94faa7f1e20eb13da3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
