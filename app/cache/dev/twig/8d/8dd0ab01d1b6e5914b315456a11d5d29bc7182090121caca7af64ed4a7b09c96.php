<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a0337208c42b125ae66b8898ec02d16f2dc719d1eea5f8dafc8303dcd0ae322a extends Twig_Template
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
        $__internal_fddb0e14bc038193e55c593ad83c905c60b7119ce620bd3cb047c8c51f4c0d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddb0e14bc038193e55c593ad83c905c60b7119ce620bd3cb047c8c51f4c0d30->enter($__internal_fddb0e14bc038193e55c593ad83c905c60b7119ce620bd3cb047c8c51f4c0d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fddb0e14bc038193e55c593ad83c905c60b7119ce620bd3cb047c8c51f4c0d30->leave($__internal_fddb0e14bc038193e55c593ad83c905c60b7119ce620bd3cb047c8c51f4c0d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
