<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_55eff35cdb10b16b8eed8d6fb98f9f3ebf744b39d933009873c11d9be7294b8c extends Twig_Template
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
        $__internal_ec413739285ef346fdb43d9273f6ed49b08f5dd5968f90532b83cfaa56fad377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec413739285ef346fdb43d9273f6ed49b08f5dd5968f90532b83cfaa56fad377->enter($__internal_ec413739285ef346fdb43d9273f6ed49b08f5dd5968f90532b83cfaa56fad377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec413739285ef346fdb43d9273f6ed49b08f5dd5968f90532b83cfaa56fad377->leave($__internal_ec413739285ef346fdb43d9273f6ed49b08f5dd5968f90532b83cfaa56fad377_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2f1d7efdcfe862d4c746d73c78887c1be5ca2e678208cd3d1b2f1a5151fba83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f1d7efdcfe862d4c746d73c78887c1be5ca2e678208cd3d1b2f1a5151fba83->enter($__internal_a2f1d7efdcfe862d4c746d73c78887c1be5ca2e678208cd3d1b2f1a5151fba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a2f1d7efdcfe862d4c746d73c78887c1be5ca2e678208cd3d1b2f1a5151fba83->leave($__internal_a2f1d7efdcfe862d4c746d73c78887c1be5ca2e678208cd3d1b2f1a5151fba83_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ca8d6b4a463ba0d59822f2a82f4bf2fb9f094afd94ac556ceca973be30406fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca8d6b4a463ba0d59822f2a82f4bf2fb9f094afd94ac556ceca973be30406fc->enter($__internal_7ca8d6b4a463ba0d59822f2a82f4bf2fb9f094afd94ac556ceca973be30406fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    ";
        // line 11
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "
    <section class=\"container\">
        <section class=\"login-form\">
            <form role=\"login\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                ";
        // line 18
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 21
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
        
        $__internal_7ca8d6b4a463ba0d59822f2a82f4bf2fb9f094afd94ac556ceca973be30406fc->leave($__internal_7ca8d6b4a463ba0d59822f2a82f4bf2fb9f094afd94ac556ceca973be30406fc_prof);

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
        return array (  93 => 21,  87 => 19,  85 => 18,  81 => 17,  76 => 14,  70 => 12,  67 => 11,  65 => 10,  59 => 9,  50 => 7,  46 => 6,  41 => 5,  35 => 4,  11 => 1,);
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
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <section class=\"container\">
        <section class=\"login-form\">
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
