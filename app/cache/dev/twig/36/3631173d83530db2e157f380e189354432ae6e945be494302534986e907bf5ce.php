<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3d283b1f2255b35ceb5805133e11b8e8b005b64e7e27a18a9fa2aaaf1fb71c78 extends Twig_Template
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
        $__internal_b96f69a13e74d46301200c92003a092d2200090306648a90423a3d9170ff2298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96f69a13e74d46301200c92003a092d2200090306648a90423a3d9170ff2298->enter($__internal_b96f69a13e74d46301200c92003a092d2200090306648a90423a3d9170ff2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b96f69a13e74d46301200c92003a092d2200090306648a90423a3d9170ff2298->leave($__internal_b96f69a13e74d46301200c92003a092d2200090306648a90423a3d9170ff2298_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
