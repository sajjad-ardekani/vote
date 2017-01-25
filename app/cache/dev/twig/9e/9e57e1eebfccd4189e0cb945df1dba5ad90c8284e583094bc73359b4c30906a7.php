<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3e49e51cb093cf74fb86f37cf00ed2b81aaf17d8b429cfc226b088db81d92748 extends Twig_Template
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
        $__internal_1d5a9ffecf0b82a0e8bbf58240321bbd53425184f8dffb032cc94701a1098591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5a9ffecf0b82a0e8bbf58240321bbd53425184f8dffb032cc94701a1098591->enter($__internal_1d5a9ffecf0b82a0e8bbf58240321bbd53425184f8dffb032cc94701a1098591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1d5a9ffecf0b82a0e8bbf58240321bbd53425184f8dffb032cc94701a1098591->leave($__internal_1d5a9ffecf0b82a0e8bbf58240321bbd53425184f8dffb032cc94701a1098591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
