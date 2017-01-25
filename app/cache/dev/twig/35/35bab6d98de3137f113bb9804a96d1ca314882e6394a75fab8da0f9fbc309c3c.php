<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0ecd75b31ac5a00af9fa444e2cabcd7341da8abec6169b44c6df28c0a7dc5d42 extends Twig_Template
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
        $__internal_7f1fa3c89d689482cc758351b3f67408852cccaf14317aa94689112b5562d6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1fa3c89d689482cc758351b3f67408852cccaf14317aa94689112b5562d6d8->enter($__internal_7f1fa3c89d689482cc758351b3f67408852cccaf14317aa94689112b5562d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7f1fa3c89d689482cc758351b3f67408852cccaf14317aa94689112b5562d6d8->leave($__internal_7f1fa3c89d689482cc758351b3f67408852cccaf14317aa94689112b5562d6d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
