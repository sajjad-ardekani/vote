<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9315dd3e2039ed9e91219c7aaefc665456d6b2296076d376b8f796d0406c1c16 extends Twig_Template
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
        $__internal_eb3ff1aaabe915d4823ec346a31973809b12d742537f45125edabeb21f48ed94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3ff1aaabe915d4823ec346a31973809b12d742537f45125edabeb21f48ed94->enter($__internal_eb3ff1aaabe915d4823ec346a31973809b12d742537f45125edabeb21f48ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_eb3ff1aaabe915d4823ec346a31973809b12d742537f45125edabeb21f48ed94->leave($__internal_eb3ff1aaabe915d4823ec346a31973809b12d742537f45125edabeb21f48ed94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
