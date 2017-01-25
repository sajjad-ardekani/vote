<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8726933d527435e7c3f984ac902550633257e8ca443a14f9714718a3ec23f326 extends Twig_Template
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
        $__internal_45cb204eea3f75fbb45575f627047bfe1814a229913cabc7eaff2c4d0b0b169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cb204eea3f75fbb45575f627047bfe1814a229913cabc7eaff2c4d0b0b169b->enter($__internal_45cb204eea3f75fbb45575f627047bfe1814a229913cabc7eaff2c4d0b0b169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_45cb204eea3f75fbb45575f627047bfe1814a229913cabc7eaff2c4d0b0b169b->leave($__internal_45cb204eea3f75fbb45575f627047bfe1814a229913cabc7eaff2c4d0b0b169b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
