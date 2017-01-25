<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e7f29181df1aae4a5ddcd411ad94abe79fff2eaa26b41a1ad746ff8c039c3b2f extends Twig_Template
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
        $__internal_200d7586e8e2f3e2fc407427263b0cbde38732e28afc437dda7188fb46c65bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200d7586e8e2f3e2fc407427263b0cbde38732e28afc437dda7188fb46c65bfe->enter($__internal_200d7586e8e2f3e2fc407427263b0cbde38732e28afc437dda7188fb46c65bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_200d7586e8e2f3e2fc407427263b0cbde38732e28afc437dda7188fb46c65bfe->leave($__internal_200d7586e8e2f3e2fc407427263b0cbde38732e28afc437dda7188fb46c65bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
