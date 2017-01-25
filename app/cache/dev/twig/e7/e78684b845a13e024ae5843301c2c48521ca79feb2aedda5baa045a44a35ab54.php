<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5b24bdb2c6531cbcd423bf0cde732b7ccf2c71e2398e5626985562b7597d71d6 extends Twig_Template
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
        $__internal_564f3f513e8bbddef5e65400a15f7b94dc8422ba78800b46f5863dcc3ad68cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564f3f513e8bbddef5e65400a15f7b94dc8422ba78800b46f5863dcc3ad68cf1->enter($__internal_564f3f513e8bbddef5e65400a15f7b94dc8422ba78800b46f5863dcc3ad68cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_564f3f513e8bbddef5e65400a15f7b94dc8422ba78800b46f5863dcc3ad68cf1->leave($__internal_564f3f513e8bbddef5e65400a15f7b94dc8422ba78800b46f5863dcc3ad68cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
