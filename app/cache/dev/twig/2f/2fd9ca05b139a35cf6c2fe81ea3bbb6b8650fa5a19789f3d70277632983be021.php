<?php

/* admin.html.twig */
class __TwigTemplate_81c2303be119f639e098f8e09507191d8098ed6babeee74ac69fbf5dfe2fcd9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b8a4771c296158e053ac5fd41e6d1112e1c03159eac7acb39a0fec50671d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b8a4771c296158e053ac5fd41e6d1112e1c03159eac7acb39a0fec50671d7c->enter($__internal_14b8a4771c296158e053ac5fd41e6d1112e1c03159eac7acb39a0fec50671d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-rtl.min.css"), "html", null, true);
        echo "\">

        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/sb-admin.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/sb-admin-rtl.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/plugins/morris.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/thumbnail-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

";
        // line 23
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets"), "html", null, true);
        echo "/webfonts/css/style.css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 35
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "</head>
<body>
    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_dashboard");
        echo "\">درختان</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav pull-left\">
                ";
        // line 135
        echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 136
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 136, $this->getSourceContext()); })()), "user", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 136, $this->getSourceContext()); })()), "user", array()), "username", array())) : ("")), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a  href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"fa fa-fw fa-user\"></i>پروفایل </a>
                        </li>
                        <li>
                            ";
        // line 143
        echo "                        </li>
                        <li>
                            <a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-fw fa-gear\"></i> تنظیمات</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> خروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">



";
        // line 161
        echo "                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#user\"><i class=\"fa fa-user\"></i> کاربران <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"user\" class=\"collapse\">
                                <li>
                                    <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_display");
        echo "\">کاربران سیستم</a>
                                </li>
                            </ul>
                        </li>
";
        // line 170
        echo "                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            ";
        // line 183
        $this->displayBlock('toolbarTitle', $context, $blocks);
        // line 184
        echo "                        </h1>
                        <ol class=\"breadcrumb\">
                            ";
        // line 186
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 191
        echo "                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 197
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 197, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 198
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 199, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 200
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                            </div>
                        ";
        }
        // line 204
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 204, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 205
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 206, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 207
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                            </div>
                        ";
        }
        // line 211
        echo "                    </div>
                </div>
                ";
        // line 213
        $this->displayBlock('content', $context, $blocks);
        // line 216
        echo "            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
";
        // line 231
        $this->displayBlock('javascripts', $context, $blocks);
        // line 232
        echo "</body>
</html>
";
        
        $__internal_14b8a4771c296158e053ac5fd41e6d1112e1c03159eac7acb39a0fec50671d7c->leave($__internal_14b8a4771c296158e053ac5fd41e6d1112e1c03159eac7acb39a0fec50671d7c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a0587a93091ee098ac0c93e4165c5a43534ec5f7aa39ce01743c2b95e78d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a0587a93091ee098ac0c93e4165c5a43534ec5f7aa39ce01743c2b95e78d61->enter($__internal_b1a0587a93091ee098ac0c93e4165c5a43534ec5f7aa39ce01743c2b95e78d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_b1a0587a93091ee098ac0c93e4165c5a43534ec5f7aa39ce01743c2b95e78d61->leave($__internal_b1a0587a93091ee098ac0c93e4165c5a43534ec5f7aa39ce01743c2b95e78d61_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f2b2d827972b52d64d724be3abfe3e33ef7ad8ba3090572b3166e3a21d6e626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2b2d827972b52d64d724be3abfe3e33ef7ad8ba3090572b3166e3a21d6e626->enter($__internal_7f2b2d827972b52d64d724be3abfe3e33ef7ad8ba3090572b3166e3a21d6e626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f2b2d827972b52d64d724be3abfe3e33ef7ad8ba3090572b3166e3a21d6e626->leave($__internal_7f2b2d827972b52d64d724be3abfe3e33ef7ad8ba3090572b3166e3a21d6e626_prof);

    }

    // line 35
    public function block_head($context, array $blocks = array())
    {
        $__internal_54c04ea4c7856c165bb273332bcb0e2241a3340f8cdfe458c524e67132d1761c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c04ea4c7856c165bb273332bcb0e2241a3340f8cdfe458c524e67132d1761c->enter($__internal_54c04ea4c7856c165bb273332bcb0e2241a3340f8cdfe458c524e67132d1761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 36
        echo "    ";
        
        $__internal_54c04ea4c7856c165bb273332bcb0e2241a3340f8cdfe458c524e67132d1761c->leave($__internal_54c04ea4c7856c165bb273332bcb0e2241a3340f8cdfe458c524e67132d1761c_prof);

    }

    // line 183
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_2cc0b8d34daa66cab6fd2f098e5c420c99c6816c4ac875fe3655d8e3a1ce5978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc0b8d34daa66cab6fd2f098e5c420c99c6816c4ac875fe3655d8e3a1ce5978->enter($__internal_2cc0b8d34daa66cab6fd2f098e5c420c99c6816c4ac875fe3655d8e3a1ce5978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "داشبورد <small>آمار و بررسی اجمالی</small> ";
        
        $__internal_2cc0b8d34daa66cab6fd2f098e5c420c99c6816c4ac875fe3655d8e3a1ce5978->leave($__internal_2cc0b8d34daa66cab6fd2f098e5c420c99c6816c4ac875fe3655d8e3a1ce5978_prof);

    }

    // line 186
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_019ad921f8d9e74867dddbf0a3a753aecb57e16157110f512dba2db94b65c7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019ad921f8d9e74867dddbf0a3a753aecb57e16157110f512dba2db94b65c7db->enter($__internal_019ad921f8d9e74867dddbf0a3a753aecb57e16157110f512dba2db94b65c7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
                                <li class=\"active\">
                                    <i class=\"fa fa-dashboard\"></i> داشبورد
                                </li>
                            ";
        
        $__internal_019ad921f8d9e74867dddbf0a3a753aecb57e16157110f512dba2db94b65c7db->leave($__internal_019ad921f8d9e74867dddbf0a3a753aecb57e16157110f512dba2db94b65c7db_prof);

    }

    // line 213
    public function block_content($context, array $blocks = array())
    {
        $__internal_815f8f7ad5e5de4b2ea73892efcb25909d7cb5862af667b2f7853faaaa75e7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815f8f7ad5e5de4b2ea73892efcb25909d7cb5862af667b2f7853faaaa75e7d2->enter($__internal_815f8f7ad5e5de4b2ea73892efcb25909d7cb5862af667b2f7853faaaa75e7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 214
        echo "
                ";
        
        $__internal_815f8f7ad5e5de4b2ea73892efcb25909d7cb5862af667b2f7853faaaa75e7d2->leave($__internal_815f8f7ad5e5de4b2ea73892efcb25909d7cb5862af667b2f7853faaaa75e7d2_prof);

    }

    // line 231
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98dd4c1c574498218ab97c1d29260dcc932621e2490795f9bba421d3c095ce85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd4c1c574498218ab97c1d29260dcc932621e2490795f9bba421d3c095ce85->enter($__internal_98dd4c1c574498218ab97c1d29260dcc932621e2490795f9bba421d3c095ce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_98dd4c1c574498218ab97c1d29260dcc932621e2490795f9bba421d3c095ce85->leave($__internal_98dd4c1c574498218ab97c1d29260dcc932621e2490795f9bba421d3c095ce85_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 231,  371 => 214,  365 => 213,  349 => 186,  337 => 183,  330 => 36,  324 => 35,  313 => 32,  301 => 10,  292 => 232,  290 => 231,  286 => 230,  282 => 229,  278 => 228,  274 => 227,  270 => 226,  258 => 216,  256 => 213,  252 => 211,  248 => 209,  239 => 207,  235 => 206,  232 => 205,  229 => 204,  225 => 202,  216 => 200,  212 => 199,  209 => 198,  207 => 197,  199 => 191,  197 => 186,  193 => 184,  191 => 183,  176 => 170,  169 => 165,  163 => 161,  149 => 149,  142 => 145,  138 => 143,  132 => 139,  126 => 136,  123 => 135,  116 => 51,  100 => 37,  98 => 35,  92 => 33,  90 => 32,  79 => 24,  76 => 23,  71 => 20,  67 => 19,  63 => 18,  58 => 16,  54 => 15,  48 => 12,  44 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{%block title %} {%endblock%}</title>
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap-rtl.min.css')}}\">

        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/sb-admin.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/sb-admin-rtl.css')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('assets/css/plugins/morris.css')}}\">
        <link href=\"{{asset('assets/css/thumbnail-gallery.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" type=\"text/css\">

{#        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">#}

        <link rel=\"stylesheet\" href=\"{{asset('/assets')}}/webfonts/css/style.css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {% block head %}
    {% endblock %}
</head>
<body>
    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path('app_admin_dashboard')}}\">درختان</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav pull-left\">
                {#   <li class=\"dropdown\">
                       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                       <ul class=\"dropdown-menu message-dropdown\">
                           <li class=\"message-preview\">
                               <a href=\"#\">
                                   <div class=\"media\">
                                       <span class=\"pull-left\">
                                           <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                       </span>
                                       <div class=\"media-body\">
                                           <h5 class=\"media-heading\"><strong>{{app.user ? app.user.username : \"\"}}</strong>
                                           </h5>
                                           <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                           <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li class=\"message-preview\">
                               <a href=\"#\">
                                   <div class=\"media\">
                                       <span class=\"pull-left\">
                                           <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                       </span>
                                       <div class=\"media-body\">
                                           <h5 class=\"media-heading\"><strong>{{app.user ? app.user.username : \"\"}}</strong>
                                           </h5>
                                           <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                           <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li class=\"message-preview\">
                               <a href=\"#\">
                                   <div class=\"media\">
                                       <span class=\"pull-left\">
                                           <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                       </span>
                                       <div class=\"media-body\">
                                           <h5 class=\"media-heading\"><strong>John Smith</strong>
                                           </h5>
                                           <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                           <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                       </div>
                                   </div>
                               </a>
                           </li>
                           <li class=\"message-footer\">
                               <a href=\"#\">Read All New Messages</a>
                           </li>
                       </ul>
                   </li>
                   <li class=\"dropdown\">
                       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                       <ul class=\"dropdown-menu alert-dropdown\">
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                           </li>
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                           </li>
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                           </li>
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                           </li>
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                           </li>
                           <li>
                               <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                           </li>
                           <li class=\"divider\"></li>
                           <li>
                               <a href=\"#\">View All</a>
                           </li>
                       </ul>
                   </li>#}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> {{app.user ? app.user.username : \"\"}} <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a  href=\"{{path('fos_user_profile_show')}}\"><i class=\"fa fa-fw fa-user\"></i>پروفایل </a>
                        </li>
                        <li>
                            {#                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>#}
                        </li>
                        <li>
                            <a href=\"{{path('fos_user_profile_edit')}}\"><i class=\"fa fa-fw fa-gear\"></i> تنظیمات</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-fw fa-power-off\"></i> خروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">



{#                    {% if is_granted('ROLE_ADMIN') %}#}
                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#user\"><i class=\"fa fa-user\"></i> کاربران <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"user\" class=\"collapse\">
                                <li>
                                    <a href=\"{{path('app_user_display')}}\">کاربران سیستم</a>
                                </li>
                            </ul>
                        </li>
{#                    {%endif%}#}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            {%block toolbarTitle %}داشبورد <small>آمار و بررسی اجمالی</small> {%endblock%}
                        </h1>
                        <ol class=\"breadcrumb\">
                            {%block breadcrumb %} 
                                <li class=\"active\">
                                    <i class=\"fa fa-dashboard\"></i> داشبورد
                                </li>
                            {%endblock%}
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% if app.session.flashBag.has('success') %}
                            <div class=\"alert alert-success\">
                                {% for msg in app.session.flashBag.get('success') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}
                        {% if app.session.flashBag.has('error') %}
                            <div class=\"alert alert-danger\">
                                {% for msg in app.session.flashBag.get('error') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
                {%block content %}

                {%endblock%}
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"{{asset('assets/js/jquery.js')}}\"></script>
    <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/plugins/morris/raphael.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/plugins/morris/morris.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/plugins/morris/morris-data.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "admin.html.twig", "/var/www/vote/app/Resources/views/admin.html.twig");
    }
}
