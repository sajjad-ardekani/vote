<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_61cc472cde5cd2e31995f497f7fa7515e71c5e7a1560de8614f259cbb8fb25e3 extends Twig_Template
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
        $__internal_abd5f3c2b7b92a73c7b1a37308656ee725ea765e3d7b5d9b58d54c20040684c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd5f3c2b7b92a73c7b1a37308656ee725ea765e3d7b5d9b58d54c20040684c3->enter($__internal_abd5f3c2b7b92a73c7b1a37308656ee725ea765e3d7b5d9b58d54c20040684c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_abd5f3c2b7b92a73c7b1a37308656ee725ea765e3d7b5d9b58d54c20040684c3->leave($__internal_abd5f3c2b7b92a73c7b1a37308656ee725ea765e3d7b5d9b58d54c20040684c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
