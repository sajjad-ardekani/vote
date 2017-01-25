<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_2b48e2ac42252a5b2e9e75aaca953904234b76a1f96987020e7ea26b9805cb34 extends Twig_Template
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
        $__internal_d5fe1bbf3e0dbafd6c06bae9ded1423b07e33f7ffa7e675737dcc33d10bd2cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fe1bbf3e0dbafd6c06bae9ded1423b07e33f7ffa7e675737dcc33d10bd2cef->enter($__internal_d5fe1bbf3e0dbafd6c06bae9ded1423b07e33f7ffa7e675737dcc33d10bd2cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d5fe1bbf3e0dbafd6c06bae9ded1423b07e33f7ffa7e675737dcc33d10bd2cef->leave($__internal_d5fe1bbf3e0dbafd6c06bae9ded1423b07e33f7ffa7e675737dcc33d10bd2cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
