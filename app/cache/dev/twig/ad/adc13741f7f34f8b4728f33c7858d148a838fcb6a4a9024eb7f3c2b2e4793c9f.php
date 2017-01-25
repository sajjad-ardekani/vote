<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e0d97dc9ae61e0cd72fbc5fc3e94c3c610f9d9541edfe765663a1f4d44d0bb24 extends Twig_Template
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
        $__internal_344946f4b45f278462ed97143d062dc700efe660fdb4e8a0675adc6548dfdc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344946f4b45f278462ed97143d062dc700efe660fdb4e8a0675adc6548dfdc03->enter($__internal_344946f4b45f278462ed97143d062dc700efe660fdb4e8a0675adc6548dfdc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_344946f4b45f278462ed97143d062dc700efe660fdb4e8a0675adc6548dfdc03->leave($__internal_344946f4b45f278462ed97143d062dc700efe660fdb4e8a0675adc6548dfdc03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
