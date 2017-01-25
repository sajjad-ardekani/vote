<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_011eeb9bd15c329760aa96221cd7c3ea1c291e15517d06d2b4945145128b8a3e extends Twig_Template
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
        $__internal_c31d5fb99cb6e1e80743323e5c7f8d0074e63ec3c39a78b12d177d21fc3391e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31d5fb99cb6e1e80743323e5c7f8d0074e63ec3c39a78b12d177d21fc3391e3->enter($__internal_c31d5fb99cb6e1e80743323e5c7f8d0074e63ec3c39a78b12d177d21fc3391e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c31d5fb99cb6e1e80743323e5c7f8d0074e63ec3c39a78b12d177d21fc3391e3->leave($__internal_c31d5fb99cb6e1e80743323e5c7f8d0074e63ec3c39a78b12d177d21fc3391e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
