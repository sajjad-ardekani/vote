<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_cd705ab5a6af44b66ad2993827c4ec41407ff48c2cc797f2dfa59db9ff929b01 extends Twig_Template
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
        $__internal_dc385bdf0ded89b631a63f4ef74c4366b32f4c2e5ccadf168018bd274b88f442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc385bdf0ded89b631a63f4ef74c4366b32f4c2e5ccadf168018bd274b88f442->enter($__internal_dc385bdf0ded89b631a63f4ef74c4366b32f4c2e5ccadf168018bd274b88f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dc385bdf0ded89b631a63f4ef74c4366b32f4c2e5ccadf168018bd274b88f442->leave($__internal_dc385bdf0ded89b631a63f4ef74c4366b32f4c2e5ccadf168018bd274b88f442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
