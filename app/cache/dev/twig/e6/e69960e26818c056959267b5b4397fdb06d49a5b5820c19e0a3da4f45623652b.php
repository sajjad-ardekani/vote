<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0d21928a7ac5d74e4d4f81825a8cbd66a7f20a91a53dc44a3da8cec7f33b4993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ef49b0e19cae4a77b04a1541a86382c205349819d59a116fc815db86109fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ef49b0e19cae4a77b04a1541a86382c205349819d59a116fc815db86109fa2->enter($__internal_40ef49b0e19cae4a77b04a1541a86382c205349819d59a116fc815db86109fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ef49b0e19cae4a77b04a1541a86382c205349819d59a116fc815db86109fa2->leave($__internal_40ef49b0e19cae4a77b04a1541a86382c205349819d59a116fc815db86109fa2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3ddd05e001308744485ce524a15176947230adb5749113f98166a9749236f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ddd05e001308744485ce524a15176947230adb5749113f98166a9749236f25->enter($__internal_d3ddd05e001308744485ce524a15176947230adb5749113f98166a9749236f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/login/styles.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets"), "html", null, true);
        echo "/webfonts/css/style.css\" />
";
        
        $__internal_d3ddd05e001308744485ce524a15176947230adb5749113f98166a9749236f25->leave($__internal_d3ddd05e001308744485ce524a15176947230adb5749113f98166a9749236f25_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0c639cd2d331c414b5231c7b609c8c9f8491afcffa9cf951bf57841e7fb4665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c639cd2d331c414b5231c7b609c8c9f8491afcffa9cf951bf57841e7fb4665->enter($__internal_b0c639cd2d331c414b5231c7b609c8c9f8491afcffa9cf951bf57841e7fb4665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    ";
        // line 11
        echo "

    <section class=\"container\">
        <section class=\"login-form\">
            ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 15, $this->getSourceContext()); })())) {
            // line 16
            echo "                <div style=\"direction: rtl\" class=\"alert alert-danger\">
                    <div>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->getSourceContext()); })()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 20
        echo "            <form role=\"login\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                ";
        // line 21
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 21, $this->getSourceContext()); })())) {
            // line 22
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 24
        echo "                <div style=\"padding: 10px;\" class=\"caption\">
                    <h3>ورود به سیستم</h3>
                </div>
                <input type=\"text\" name=\"_username\" placeholder=\"Username\" required class=\"form-control input-lg\" />
                <input type=\"password\" name=\"_password\" placeholder=\"Password\" required class=\"form-control input-lg\" />
                <button type=\"submit\"  name=\"_submit\" class=\"btn btn-lg btn-primary btn-block\">ورود</button>
            </form>
        </section>
    </section>

";
        
        $__internal_b0c639cd2d331c414b5231c7b609c8c9f8491afcffa9cf951bf57841e7fb4665->leave($__internal_b0c639cd2d331c414b5231c7b609c8c9f8491afcffa9cf951bf57841e7fb4665_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  91 => 22,  89 => 21,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  67 => 11,  65 => 10,  59 => 9,  50 => 7,  46 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/bootstrap.min.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/login/styles.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('/assets')}}/webfonts/css/style.css\" />
{% endblock %}
{% block fos_user_content %}
    {#    {{ include('FOSUserBundle:Security:login_content.html.twig') }}#}


    <section class=\"container\">
        <section class=\"login-form\">
            {% if error %}
                <div style=\"direction: rtl\" class=\"alert alert-danger\">
                    <div>{{ error|trans }}</div>
                </div>
            {% endif %}
            <form role=\"login\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <div style=\"padding: 10px;\" class=\"caption\">
                    <h3>ورود به سیستم</h3>
                </div>
                <input type=\"text\" name=\"_username\" placeholder=\"Username\" required class=\"form-control input-lg\" />
                <input type=\"password\" name=\"_password\" placeholder=\"Password\" required class=\"form-control input-lg\" />
                <button type=\"submit\"  name=\"_submit\" class=\"btn btn-lg btn-primary btn-block\">ورود</button>
            </form>
        </section>
    </section>

{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
