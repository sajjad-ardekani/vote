<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5739cb3633a5f16442d1e0a85d3e90092422fd3e48e5db760149394cbe2158e9 extends Twig_Template
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
        $__internal_0cf1260dbf5b7205d9794f038d2f910ebf84ee1a34b5ec6904dfab01eca2b64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf1260dbf5b7205d9794f038d2f910ebf84ee1a34b5ec6904dfab01eca2b64b->enter($__internal_0cf1260dbf5b7205d9794f038d2f910ebf84ee1a34b5ec6904dfab01eca2b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0cf1260dbf5b7205d9794f038d2f910ebf84ee1a34b5ec6904dfab01eca2b64b->leave($__internal_0cf1260dbf5b7205d9794f038d2f910ebf84ee1a34b5ec6904dfab01eca2b64b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
