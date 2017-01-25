<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81a93b63431253ed0bc0c390174aafa9cc02adcbbabd27d44db8feb32f15967e extends Twig_Template
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
        $__internal_f754e0f93d26ec0bbefc86fc1bf2f04f3b1a40b17b69360df8dc49bf50c48b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f754e0f93d26ec0bbefc86fc1bf2f04f3b1a40b17b69360df8dc49bf50c48b7d->enter($__internal_f754e0f93d26ec0bbefc86fc1bf2f04f3b1a40b17b69360df8dc49bf50c48b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f754e0f93d26ec0bbefc86fc1bf2f04f3b1a40b17b69360df8dc49bf50c48b7d->leave($__internal_f754e0f93d26ec0bbefc86fc1bf2f04f3b1a40b17b69360df8dc49bf50c48b7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
