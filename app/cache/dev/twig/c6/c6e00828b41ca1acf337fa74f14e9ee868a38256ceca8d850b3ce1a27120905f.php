<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_2970cd47bc21b119bc64f122685912191145f1218219172ce2883d32191cabc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_295ad9993fd0e219f5653e21ec31ae702316960a4af55d771cdc4046325d636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295ad9993fd0e219f5653e21ec31ae702316960a4af55d771cdc4046325d636f->enter($__internal_295ad9993fd0e219f5653e21ec31ae702316960a4af55d771cdc4046325d636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
";
        
        $__internal_295ad9993fd0e219f5653e21ec31ae702316960a4af55d771cdc4046325d636f->leave($__internal_295ad9993fd0e219f5653e21ec31ae702316960a4af55d771cdc4046325d636f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0d11fd6ac6b3d8feebdf6d051350b6047f4823f8ee5286acfc45c5c4516ffa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d11fd6ac6b3d8feebdf6d051350b6047f4823f8ee5286acfc45c5c4516ffa7->enter($__internal_a0d11fd6ac6b3d8feebdf6d051350b6047f4823f8ee5286acfc45c5c4516ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_a0d11fd6ac6b3d8feebdf6d051350b6047f4823f8ee5286acfc45c5c4516ffa7->leave($__internal_a0d11fd6ac6b3d8feebdf6d051350b6047f4823f8ee5286acfc45c5c4516ffa7_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_d92b2678123ca178001e8db56519fc86044d6206c27b9759781f3ae17f2208d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92b2678123ca178001e8db56519fc86044d6206c27b9759781f3ae17f2208d5->enter($__internal_d92b2678123ca178001e8db56519fc86044d6206c27b9759781f3ae17f2208d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d92b2678123ca178001e8db56519fc86044d6206c27b9759781f3ae17f2208d5->leave($__internal_d92b2678123ca178001e8db56519fc86044d6206c27b9759781f3ae17f2208d5_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce23fbc0a35403c2e639fa87249f80039ec85c85935fe82432f16eababe50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce23fbc0a35403c2e639fa87249f80039ec85c85935fe82432f16eababe50bb->enter($__internal_6ce23fbc0a35403c2e639fa87249f80039ec85c85935fe82432f16eababe50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ce23fbc0a35403c2e639fa87249f80039ec85c85935fe82432f16eababe50bb->leave($__internal_6ce23fbc0a35403c2e639fa87249f80039ec85c85935fe82432f16eababe50bb_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  88 => 12,  76 => 6,  61 => 23,  55 => 19,  53 => 18,  46 => 13,  44 => 12,  39 => 10,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>

<title>{% block title %}BraincraftedBootstrapBundle by Florian Eckerstorfer{% endblock title %}</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"{{ asset('/css/bootstrap.css') }}\" rel=\"stylesheet\" media=\"screen\">

{% block head %}{% endblock %}

</head>

<body>

{% block body %}{% endblock body %}

<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"{{ asset('/js/bootstrap.js') }}\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
", "BraincraftedBootstrapBundle::layout.html.twig", "/var/www/vote/vendor/braincrafted/bootstrap-bundle/Braincrafted/Bundle/BootstrapBundle/Resources/views/layout.html.twig");
    }
}
