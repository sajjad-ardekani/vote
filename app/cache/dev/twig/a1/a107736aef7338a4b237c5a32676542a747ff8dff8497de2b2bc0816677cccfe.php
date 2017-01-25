<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bb9ab1f48530ebbc98e76c356bdeed13539e63951a0937bf2d6e6ee4bcc8e1c2 extends Twig_Template
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
        $__internal_2f253e747a8f647cbd88fc3730b4c3a13e1e976b9254428b99e2d35719902922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f253e747a8f647cbd88fc3730b4c3a13e1e976b9254428b99e2d35719902922->enter($__internal_2f253e747a8f647cbd88fc3730b4c3a13e1e976b9254428b99e2d35719902922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2f253e747a8f647cbd88fc3730b4c3a13e1e976b9254428b99e2d35719902922->leave($__internal_2f253e747a8f647cbd88fc3730b4c3a13e1e976b9254428b99e2d35719902922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/vote/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
