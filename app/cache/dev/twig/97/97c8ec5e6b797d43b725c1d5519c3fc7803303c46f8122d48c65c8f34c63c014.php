<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9e1952efc04bf8439cda36f95ea194b2f984a9041cec8f163d13d2b4163d27af extends Twig_Template
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
        $__internal_b99f810dba9b1b25dcdbcb9e30118600fad51c9c59ee9078b0c1d1b5c984d982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99f810dba9b1b25dcdbcb9e30118600fad51c9c59ee9078b0c1d1b5c984d982->enter($__internal_b99f810dba9b1b25dcdbcb9e30118600fad51c9c59ee9078b0c1d1b5c984d982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b99f810dba9b1b25dcdbcb9e30118600fad51c9c59ee9078b0c1d1b5c984d982->leave($__internal_b99f810dba9b1b25dcdbcb9e30118600fad51c9c59ee9078b0c1d1b5c984d982_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
