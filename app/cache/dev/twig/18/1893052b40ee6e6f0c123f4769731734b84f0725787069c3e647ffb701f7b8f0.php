<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7f85dc46211ef26762da250cb5552f1997f8f01513a86642949df6631db7eb9a extends Twig_Template
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
        $__internal_137e441b5d355d479c9cb2dbbf220db3f635d893dc1c9aefad9df3b328a00801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137e441b5d355d479c9cb2dbbf220db3f635d893dc1c9aefad9df3b328a00801->enter($__internal_137e441b5d355d479c9cb2dbbf220db3f635d893dc1c9aefad9df3b328a00801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_137e441b5d355d479c9cb2dbbf220db3f635d893dc1c9aefad9df3b328a00801->leave($__internal_137e441b5d355d479c9cb2dbbf220db3f635d893dc1c9aefad9df3b328a00801_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
