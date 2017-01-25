<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_68ba0a6fc38873b065bbb7fe65d7d593848071dfce8d1e95ca6907470df00dfd extends Twig_Template
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
        $__internal_d26575aa0b7501c87d44d975d1edc5f34cdcb25cda14fc60298aef00347f384d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26575aa0b7501c87d44d975d1edc5f34cdcb25cda14fc60298aef00347f384d->enter($__internal_d26575aa0b7501c87d44d975d1edc5f34cdcb25cda14fc60298aef00347f384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d26575aa0b7501c87d44d975d1edc5f34cdcb25cda14fc60298aef00347f384d->leave($__internal_d26575aa0b7501c87d44d975d1edc5f34cdcb25cda14fc60298aef00347f384d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
