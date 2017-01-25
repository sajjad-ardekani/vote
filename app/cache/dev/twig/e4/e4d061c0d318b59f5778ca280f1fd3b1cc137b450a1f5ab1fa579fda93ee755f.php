<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_62bfa1a5a14d7d6d53aa61f49c2a1da4b3640036bf0044b2c759fae116ec84a6 extends Twig_Template
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
        $__internal_6e1d493d73596b8ae9de2eb6f0dab2f02f36acc0a774a857eb8c192622f9673d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1d493d73596b8ae9de2eb6f0dab2f02f36acc0a774a857eb8c192622f9673d->enter($__internal_6e1d493d73596b8ae9de2eb6f0dab2f02f36acc0a774a857eb8c192622f9673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6e1d493d73596b8ae9de2eb6f0dab2f02f36acc0a774a857eb8c192622f9673d->leave($__internal_6e1d493d73596b8ae9de2eb6f0dab2f02f36acc0a774a857eb8c192622f9673d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
