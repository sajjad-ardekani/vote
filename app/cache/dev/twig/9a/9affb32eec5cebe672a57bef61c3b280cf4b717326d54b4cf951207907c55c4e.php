<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_00cf297e594e76bfb4582748b1cab4e749c945a0c72febf3467a72d1806225b1 extends Twig_Template
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
        $__internal_a52b9a012e45487d75b4a13a567d07476f6f10e009a078ff466cf1a6c081b710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b9a012e45487d75b4a13a567d07476f6f10e009a078ff466cf1a6c081b710->enter($__internal_a52b9a012e45487d75b4a13a567d07476f6f10e009a078ff466cf1a6c081b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a52b9a012e45487d75b4a13a567d07476f6f10e009a078ff466cf1a6c081b710->leave($__internal_a52b9a012e45487d75b4a13a567d07476f6f10e009a078ff466cf1a6c081b710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
