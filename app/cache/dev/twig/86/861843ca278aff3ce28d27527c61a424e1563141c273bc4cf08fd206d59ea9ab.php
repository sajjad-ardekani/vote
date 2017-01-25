<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_33b7fde24b13863aa25d73a5387c2b8390fa560afed2fdb0073efdf4fc9ad963 extends Twig_Template
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
        $__internal_1fa121b4d1edcf5c5235403919b60cd34567f86c0a0a4767a017ee50170c27fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa121b4d1edcf5c5235403919b60cd34567f86c0a0a4767a017ee50170c27fb->enter($__internal_1fa121b4d1edcf5c5235403919b60cd34567f86c0a0a4767a017ee50170c27fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1fa121b4d1edcf5c5235403919b60cd34567f86c0a0a4767a017ee50170c27fb->leave($__internal_1fa121b4d1edcf5c5235403919b60cd34567f86c0a0a4767a017ee50170c27fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
