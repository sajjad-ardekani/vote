<?php

/* admin.html.twig */
class __TwigTemplate_ca7db7d4d5daa91754927bf1988cdc5c28c6a88a621f2c941ac4bb4e8cfe5af6 extends Twig_Template
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
        $__internal_74ca526636fef6e8842068f7c7afcf91c61ded4638f24d0c5a5237472060eff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ca526636fef6e8842068f7c7afcf91c61ded4638f24d0c5a5237472060eff7->enter($__internal_74ca526636fef6e8842068f7c7afcf91c61ded4638f24d0c5a5237472060eff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

        ";
        // line 22
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets"), "html", null, true);
        echo "/webfonts/css/style.css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <style>
            .radio input[type=\"radio\"], .radio-inline input[type=\"radio\"], .checkbox input[type=\"checkbox\"], .checkbox-inline input[type=\"checkbox\"]{
                margin-right: -25px;
            }
        </style>
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 38
        $this->displayBlock('head', $context, $blocks);
        // line 40
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
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_dashboard");
        echo "\"> نظرسنجی</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav pull-left\">
                ";
        // line 138
        echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 139
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->getSourceContext()); })()), "user", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->getSourceContext()); })()), "user", array()), "username", array())) : ("")), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a  href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"fa fa-fw fa-user\"></i>پروفایل </a>
                        </li>
                        <li>
                            ";
        // line 146
        echo "                        </li>
                        <li>
                            <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-fw fa-gear\"></i> تنظیمات</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> خروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">


                    <li>
                        <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_dashboard");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> داشبورد</a>
                    </li>

                    ";
        // line 166
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 167
            echo "                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#user\"><i class=\"fa fa-user\"></i> کاربران <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"user\" class=\"collapse\">
                                <li>
                                    <a href=\"";
            // line 171
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_display");
            echo "\">کاربران سیستم</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#question\"><i class=\"fa fa-user\"></i> سوالات <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"question\" class=\"collapse\">
                                ";
            // line 181
            echo "                                <li>
                                    <a href=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_question_list");
            echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> لیست سوالات</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_question_add");
            echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> طراحی سوال جدید</a>
                                </li>
                            </ul>
                        </li>

                    ";
        }
        // line 191
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
        // line 204
        $this->displayBlock('toolbarTitle', $context, $blocks);
        // line 205
        echo "                        </h1>
                        <ol class=\"breadcrumb\">
                            ";
        // line 207
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 212
        echo "                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 218
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 218, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 219
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 220, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 221
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                            </div>
                        ";
        }
        // line 225
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 225, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 226
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 227, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 228
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "                            </div>
                        ";
        }
        // line 232
        echo "                    </div>
                </div>
                ";
        // line 234
        $this->displayBlock('content', $context, $blocks);
        // line 237
        echo "            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 252
        $this->displayBlock('javascripts', $context, $blocks);
        // line 255
        echo "</body>
</html>
";
        
        $__internal_74ca526636fef6e8842068f7c7afcf91c61ded4638f24d0c5a5237472060eff7->leave($__internal_74ca526636fef6e8842068f7c7afcf91c61ded4638f24d0c5a5237472060eff7_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c14451d11a45c71f42586672f72e96afe8adfc90d172ddcffc714d7dc843d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c14451d11a45c71f42586672f72e96afe8adfc90d172ddcffc714d7dc843d80->enter($__internal_5c14451d11a45c71f42586672f72e96afe8adfc90d172ddcffc714d7dc843d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_5c14451d11a45c71f42586672f72e96afe8adfc90d172ddcffc714d7dc843d80->leave($__internal_5c14451d11a45c71f42586672f72e96afe8adfc90d172ddcffc714d7dc843d80_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dce534a5fb02f0f9a1691b8a564009cb5390797878c83cc01fd4e14230134310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce534a5fb02f0f9a1691b8a564009cb5390797878c83cc01fd4e14230134310->enter($__internal_dce534a5fb02f0f9a1691b8a564009cb5390797878c83cc01fd4e14230134310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dce534a5fb02f0f9a1691b8a564009cb5390797878c83cc01fd4e14230134310->leave($__internal_dce534a5fb02f0f9a1691b8a564009cb5390797878c83cc01fd4e14230134310_prof);

    }

    // line 38
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c110c986b9f8af4b0651c97845ef9d3fd3175fea35e9a331271304c63465e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c110c986b9f8af4b0651c97845ef9d3fd3175fea35e9a331271304c63465e11->enter($__internal_4c110c986b9f8af4b0651c97845ef9d3fd3175fea35e9a331271304c63465e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 39
        echo "    ";
        
        $__internal_4c110c986b9f8af4b0651c97845ef9d3fd3175fea35e9a331271304c63465e11->leave($__internal_4c110c986b9f8af4b0651c97845ef9d3fd3175fea35e9a331271304c63465e11_prof);

    }

    // line 204
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_de016c22247d1122aa8d14587422d7a2f6532624d7f781e7f97dbb5ae0c97dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de016c22247d1122aa8d14587422d7a2f6532624d7f781e7f97dbb5ae0c97dcf->enter($__internal_de016c22247d1122aa8d14587422d7a2f6532624d7f781e7f97dbb5ae0c97dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "داشبورد <small>آمار و بررسی اجمالی</small> ";
        
        $__internal_de016c22247d1122aa8d14587422d7a2f6532624d7f781e7f97dbb5ae0c97dcf->leave($__internal_de016c22247d1122aa8d14587422d7a2f6532624d7f781e7f97dbb5ae0c97dcf_prof);

    }

    // line 207
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1fae500a2271cffee15a4a0bf541380b76fcc9bdda2effae9829df62e64e3648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fae500a2271cffee15a4a0bf541380b76fcc9bdda2effae9829df62e64e3648->enter($__internal_1fae500a2271cffee15a4a0bf541380b76fcc9bdda2effae9829df62e64e3648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
                                <li class=\"active\">
                                    <i class=\"fa fa-dashboard\"></i> داشبورد
                                </li>
                            ";
        
        $__internal_1fae500a2271cffee15a4a0bf541380b76fcc9bdda2effae9829df62e64e3648->leave($__internal_1fae500a2271cffee15a4a0bf541380b76fcc9bdda2effae9829df62e64e3648_prof);

    }

    // line 234
    public function block_content($context, array $blocks = array())
    {
        $__internal_7aaae28febe1bf69a372aec949285946f67327ddac34ed44412a48b15fb9eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaae28febe1bf69a372aec949285946f67327ddac34ed44412a48b15fb9eaa5->enter($__internal_7aaae28febe1bf69a372aec949285946f67327ddac34ed44412a48b15fb9eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 235
        echo "
                ";
        
        $__internal_7aaae28febe1bf69a372aec949285946f67327ddac34ed44412a48b15fb9eaa5->leave($__internal_7aaae28febe1bf69a372aec949285946f67327ddac34ed44412a48b15fb9eaa5_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da9cbff6a5c499277c9faf13404474e1f1f8d3381e45e92ea07a56baea793e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9cbff6a5c499277c9faf13404474e1f1f8d3381e45e92ea07a56baea793e75->enter($__internal_da9cbff6a5c499277c9faf13404474e1f1f8d3381e45e92ea07a56baea793e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
        echo "
    ";
        
        $__internal_da9cbff6a5c499277c9faf13404474e1f1f8d3381e45e92ea07a56baea793e75->leave($__internal_da9cbff6a5c499277c9faf13404474e1f1f8d3381e45e92ea07a56baea793e75_prof);

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
        return array (  414 => 253,  408 => 252,  400 => 235,  394 => 234,  378 => 207,  366 => 204,  359 => 39,  353 => 38,  342 => 35,  330 => 10,  321 => 255,  319 => 252,  315 => 251,  311 => 250,  307 => 249,  303 => 248,  299 => 247,  287 => 237,  285 => 234,  281 => 232,  277 => 230,  268 => 228,  264 => 227,  261 => 226,  258 => 225,  254 => 223,  245 => 221,  241 => 220,  238 => 219,  236 => 218,  228 => 212,  226 => 207,  222 => 205,  220 => 204,  205 => 191,  196 => 185,  190 => 182,  187 => 181,  177 => 171,  171 => 167,  169 => 166,  163 => 163,  149 => 152,  142 => 148,  138 => 146,  132 => 142,  126 => 139,  123 => 138,  116 => 54,  100 => 40,  98 => 38,  92 => 36,  90 => 35,  75 => 23,  72 => 22,  67 => 19,  63 => 18,  58 => 16,  54 => 15,  48 => 12,  44 => 11,  40 => 10,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" type=\"text/css\">

        {#        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">#}

        <link rel=\"stylesheet\" href=\"{{asset('/assets')}}/webfonts/css/style.css\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <style>
            .radio input[type=\"radio\"], .radio-inline input[type=\"radio\"], .checkbox input[type=\"checkbox\"], .checkbox-inline input[type=\"checkbox\"]{
                margin-right: -25px;
            }
        </style>
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
                <a class=\"navbar-brand\" href=\"{{path('app_admin_dashboard')}}\"> نظرسنجی</a>
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


                    <li>
                        <a href=\"{{path('app_admin_dashboard')}}\"><i class=\"fa fa-fw fa-dashboard\"></i> داشبورد</a>
                    </li>

                    {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#user\"><i class=\"fa fa-user\"></i> کاربران <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"user\" class=\"collapse\">
                                <li>
                                    <a href=\"{{path('app_user_display')}}\">کاربران سیستم</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#question\"><i class=\"fa fa-user\"></i> سوالات <i class=\"fa fa-fw fa-caret-down\"></i></a>
                            <ul id=\"question\" class=\"collapse\">
                                {#  <li>
                                      <a href=\"{{path('app_answer_add')}}\"><i class=\"fa fa-fw fa-dashboard\"></i> جواب ها</a>
                                  </li>#}
                                <li>
                                    <a href=\"{{path('app_question_list')}}\"><i class=\"fa fa-fw fa-dashboard\"></i> لیست سوالات</a>
                                </li>
                                <li>
                                    <a href=\"{{path('app_question_add')}}\"><i class=\"fa fa-fw fa-dashboard\"></i> طراحی سوال جدید</a>
                                </li>
                            </ul>
                        </li>

                    {%endif%}
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
    {% block javascripts %}

    {% endblock %}
</body>
</html>
", "admin.html.twig", "/var/www/vote/app/Resources/views/admin.html.twig");
    }
}
