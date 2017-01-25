<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3d0e3409f1a39ad63aadbbcc463938315de0293f75a7e519c0051e8c2f5e2b0d extends Twig_Template
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
        $__internal_fa281462ef5a1c0b88fff701a327efa4d69e92b06dff1c0d52ee0a573fe6d32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa281462ef5a1c0b88fff701a327efa4d69e92b06dff1c0d52ee0a573fe6d32a->enter($__internal_fa281462ef5a1c0b88fff701a327efa4d69e92b06dff1c0d52ee0a573fe6d32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fa281462ef5a1c0b88fff701a327efa4d69e92b06dff1c0d52ee0a573fe6d32a->leave($__internal_fa281462ef5a1c0b88fff701a327efa4d69e92b06dff1c0d52ee0a573fe6d32a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
