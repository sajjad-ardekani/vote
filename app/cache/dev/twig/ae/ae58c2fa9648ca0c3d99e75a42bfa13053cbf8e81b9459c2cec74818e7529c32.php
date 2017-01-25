<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_35e3f9a350e9c908b6cc074a74c6e64c8173a22c19562ad9534abfae8e44d814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdfe10b421a559ec8d4c3154eab18af1e7691a3fd37453339628ac3e435a5f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfe10b421a559ec8d4c3154eab18af1e7691a3fd37453339628ac3e435a5f88->enter($__internal_cdfe10b421a559ec8d4c3154eab18af1e7691a3fd37453339628ac3e435a5f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/morris/morris.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/plugins/login.css"), "html", null, true);
        echo "\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    </head>

    <body class=\"hold-transition login-page\">


        ";
        // line 47
        echo "

        ";
        // line 49
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 52
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 53
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        }
        // line 58
        echo "
        <div>
            ";
        // line 60
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 62
        echo "        </div>


        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Morris.js charts -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
        <!-- daterangepicker -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slimscroll -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/login/login.js"), "html", null, true);
        echo "\"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>

</html>
";
        
        $__internal_cdfe10b421a559ec8d4c3154eab18af1e7691a3fd37453339628ac3e435a5f88->leave($__internal_cdfe10b421a559ec8d4c3154eab18af1e7691a3fd37453339628ac3e435a5f88_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fdaf4d3a01c6efb90e08971dc3e4ace9a60a907d34628d2fc941bd07861fd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdaf4d3a01c6efb90e08971dc3e4ace9a60a907d34628d2fc941bd07861fd10->enter($__internal_3fdaf4d3a01c6efb90e08971dc3e4ace9a60a907d34628d2fc941bd07861fd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fdaf4d3a01c6efb90e08971dc3e4ace9a60a907d34628d2fc941bd07861fd10->leave($__internal_3fdaf4d3a01c6efb90e08971dc3e4ace9a60a907d34628d2fc941bd07861fd10_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03138aaec4695fe41df8f9c0302d0a860932fc087720201b23d6c86b36570083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03138aaec4695fe41df8f9c0302d0a860932fc087720201b23d6c86b36570083->enter($__internal_03138aaec4695fe41df8f9c0302d0a860932fc087720201b23d6c86b36570083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "           
        ";
        
        $__internal_03138aaec4695fe41df8f9c0302d0a860932fc087720201b23d6c86b36570083->leave($__internal_03138aaec4695fe41df8f9c0302d0a860932fc087720201b23d6c86b36570083_prof);

    }

    // line 60
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ea172199240c40e3cc4d49b06140882e9389d635c41fc73b2105b3b2e37af3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea172199240c40e3cc4d49b06140882e9389d635c41fc73b2105b3b2e37af3f->enter($__internal_9ea172199240c40e3cc4d49b06140882e9389d635c41fc73b2105b3b2e37af3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 61
        echo "            ";
        
        $__internal_9ea172199240c40e3cc4d49b06140882e9389d635c41fc73b2105b3b2e37af3f->leave($__internal_9ea172199240c40e3cc4d49b06140882e9389d635c41fc73b2105b3b2e37af3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 61,  269 => 60,  261 => 32,  255 => 31,  243 => 6,  230 => 101,  226 => 100,  221 => 98,  216 => 96,  211 => 94,  206 => 92,  201 => 90,  196 => 88,  191 => 86,  185 => 83,  180 => 81,  176 => 80,  171 => 78,  166 => 76,  160 => 73,  149 => 65,  144 => 62,  142 => 60,  138 => 58,  135 => 57,  129 => 56,  120 => 53,  115 => 52,  110 => 51,  105 => 50,  103 => 49,  99 => 47,  92 => 34,  90 => 31,  86 => 30,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  62 => 21,  57 => 19,  52 => 17,  46 => 14,  37 => 8,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap/css/bootstrap.min.css')}}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/dist/css/AdminLTE.min.css')}}\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/dist/css/skins/_all-skins.min.css')}}\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/iCheck/flat/blue.css')}}\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/morris/morris.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/plugins/login.css')}}\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/datepicker/datepicker3.css')}}\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}\">
        {% block stylesheets %}
           
        {% endblock %}
    </head>

    <body class=\"hold-transition login-page\">


        {#                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                            </a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                        {% endif %}#}


        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>


        <script src=\"{{asset('assets/plugins/jQuery/jquery-2.2.3.min.js')}}\"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js')}}\"></script>
        <!-- Morris.js charts -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"{{asset('assets/plugins/morris/morris.min.js')}}\"></script>
        <!-- Sparkline -->
        <script src=\"{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}\"></script>
        <!-- jvectormap -->
        <script src=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"{{asset('assets/plugins/knob/jquery.knob.js')}}\"></script>
        <!-- daterangepicker -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
        <script src=\"{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}\"></script>
        <!-- datepicker -->
        <script src=\"{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
        <!-- Slimscroll -->
        <script src=\"{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}\"></script>
        <!-- FastClick -->
        <script src=\"{{asset('assets/plugins/fastclick/fastclick.js')}}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{asset('assets/dist/js/app.min.js')}}\"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"{{asset('assets/dist/js/pages/dashboard.js')}}\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"{{asset('assets/dist/js/demo.js')}}\"></script>
        <script src=\"{{asset('assets/js/login/login.js')}}\"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>

</html>
", "FOSUserBundle::layout.html.twig", "/var/www/vote/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
