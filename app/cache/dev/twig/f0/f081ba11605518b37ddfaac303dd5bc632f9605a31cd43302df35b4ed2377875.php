<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b207887cc7e3ce3c4d8712c5889e2d4b464eb0100031fb494debacb879f1747b extends Twig_Template
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
        $__internal_588ff19fc56badfce6bb2d682a2ec76f3808021392e8be4079bb47d0f8fff374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588ff19fc56badfce6bb2d682a2ec76f3808021392e8be4079bb47d0f8fff374->enter($__internal_588ff19fc56badfce6bb2d682a2ec76f3808021392e8be4079bb47d0f8fff374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_588ff19fc56badfce6bb2d682a2ec76f3808021392e8be4079bb47d0f8fff374->leave($__internal_588ff19fc56badfce6bb2d682a2ec76f3808021392e8be4079bb47d0f8fff374_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
