<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9f95b1774dcd9529154b1101ef0e790c6095e56a28cc2aa0db5b9d4ccc2b1585 extends Twig_Template
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
        $__internal_a6699cf2829a3235fe8a5f541fa37f646edc281a47e44b59de1f181680c98f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6699cf2829a3235fe8a5f541fa37f646edc281a47e44b59de1f181680c98f6e->enter($__internal_a6699cf2829a3235fe8a5f541fa37f646edc281a47e44b59de1f181680c98f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a6699cf2829a3235fe8a5f541fa37f646edc281a47e44b59de1f181680c98f6e->leave($__internal_a6699cf2829a3235fe8a5f541fa37f646edc281a47e44b59de1f181680c98f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
