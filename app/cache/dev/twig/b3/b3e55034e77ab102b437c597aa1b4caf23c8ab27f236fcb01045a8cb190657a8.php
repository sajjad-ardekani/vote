<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d9a0531ae5055101cb8d937f3da6d0ae868704c639f3f16eb033117e415fc6bd extends Twig_Template
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
        $__internal_bda6d37e060052821528cd2c4c22b212cbbad23dc25359d8b37f9df9b44c09e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda6d37e060052821528cd2c4c22b212cbbad23dc25359d8b37f9df9b44c09e9->enter($__internal_bda6d37e060052821528cd2c4c22b212cbbad23dc25359d8b37f9df9b44c09e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bda6d37e060052821528cd2c4c22b212cbbad23dc25359d8b37f9df9b44c09e9->leave($__internal_bda6d37e060052821528cd2c4c22b212cbbad23dc25359d8b37f9df9b44c09e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
