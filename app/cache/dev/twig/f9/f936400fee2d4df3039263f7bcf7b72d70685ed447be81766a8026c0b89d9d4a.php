<?php

/* base.html.twig */
class __TwigTemplate_f3e6f878960cd66fa42633722cf08ee4062a186cf66a39bd729488c76a403503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_667e831a43e1e87b0027eea8fb52d810245da96a83a6b722dc63fddbe91832ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667e831a43e1e87b0027eea8fb52d810245da96a83a6b722dc63fddbe91832ab->enter($__internal_667e831a43e1e87b0027eea8fb52d810245da96a83a6b722dc63fddbe91832ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
            <![endif]-->
        <title>سامانه نظرسنجی استاید</title>
        <!-- BOOTSTRAP STYLE SHEET -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/menu/css/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/menu/css/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/menu/css/component1.css"), "html", null, true);
        echo "\" />
        ";
        // line 21
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modern-business.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets"), "html", null, true);
        echo "/webfonts/css/style.css\" />
        ";
        // line 27
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color.css"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            .navbar {
                margin-bottom: 0px;  /*THIS IS IMPOTANT TO HIDE THE SPACE BETWEEN NAVBAR AND CAROUSEL*/
            }
            body{
                color: #000;
                padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
            }
            .font-sans {
                font-family: IRANSans;
            }

        </style>
    ";
        // line 42
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">نظرسنجی اساتید دانشگاه آزاد واحد مرودشت</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
";
        // line 128
        echo "            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">
        ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "
        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 1 ";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 153
        echo "</body>
</html>
";
        
        $__internal_667e831a43e1e87b0027eea8fb52d810245da96a83a6b722dc63fddbe91832ab->leave($__internal_667e831a43e1e87b0027eea8fb52d810245da96a83a6b722dc63fddbe91832ab_prof);

    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bd1888a658889f631169d01bef60e9f491d00ad8e48cda5ab3c09b6316a0024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd1888a658889f631169d01bef60e9f491d00ad8e48cda5ab3c09b6316a0024->enter($__internal_3bd1888a658889f631169d01bef60e9f491d00ad8e48cda5ab3c09b6316a0024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3bd1888a658889f631169d01bef60e9f491d00ad8e48cda5ab3c09b6316a0024->leave($__internal_3bd1888a658889f631169d01bef60e9f491d00ad8e48cda5ab3c09b6316a0024_prof);

    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d2201e71ad38e6e44e6c60821d7d7a9baaa130b06c8b0632749fcdb86f2e395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2201e71ad38e6e44e6c60821d7d7a9baaa130b06c8b0632749fcdb86f2e395->enter($__internal_8d2201e71ad38e6e44e6c60821d7d7a9baaa130b06c8b0632749fcdb86f2e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 44
        echo "    ";
        
        $__internal_8d2201e71ad38e6e44e6c60821d7d7a9baaa130b06c8b0632749fcdb86f2e395->leave($__internal_8d2201e71ad38e6e44e6c60821d7d7a9baaa130b06c8b0632749fcdb86f2e395_prof);

    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        $__internal_10ccb400a049664977c25e98bd2b61471d9d8a1ae49f0f4d502e86ff51847424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ccb400a049664977c25e98bd2b61471d9d8a1ae49f0f4d502e86ff51847424->enter($__internal_10ccb400a049664977c25e98bd2b61471d9d8a1ae49f0f4d502e86ff51847424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "        ";
        
        $__internal_10ccb400a049664977c25e98bd2b61471d9d8a1ae49f0f4d502e86ff51847424->leave($__internal_10ccb400a049664977c25e98bd2b61471d9d8a1ae49f0f4d502e86ff51847424_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c1641861afe7ee250cdf81ff953c7ec5dd9850cac6d55b952b5ae038492511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1641861afe7ee250cdf81ff953c7ec5dd9850cac6d55b952b5ae038492511b->enter($__internal_4c1641861afe7ee250cdf81ff953c7ec5dd9850cac6d55b952b5ae038492511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c1641861afe7ee250cdf81ff953c7ec5dd9850cac6d55b952b5ae038492511b->leave($__internal_4c1641861afe7ee250cdf81ff953c7ec5dd9850cac6d55b952b5ae038492511b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 152,  201 => 136,  195 => 135,  188 => 44,  182 => 43,  171 => 42,  162 => 153,  160 => 152,  149 => 144,  140 => 137,  138 => 135,  129 => 128,  123 => 58,  108 => 45,  105 => 43,  103 => 42,  86 => 28,  81 => 27,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 19,  54 => 18,  50 => 17,  45 => 15,  41 => 14,  26 => 1,);
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
        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
            <![endif]-->
        <title>سامانه نظرسنجی استاید</title>
        <!-- BOOTSTRAP STYLE SHEET -->
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('assets/css/bootstrap-rtl.css')}}\" rel=\"stylesheet\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/menu/css/normalize.css')}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/menu/css/demo.css')}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/menu/css/component1.css')}}\" />
        {#        <link href=\"{{asset('assets/css/thumbnail-gallery.css')}}\" rel=\"stylesheet\">#}

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/modern-business.css')}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/demo.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('/assets')}}/webfonts/css/style.css\" />
        {#        <link href=\"{{asset('assets/css/chat.css')}}\" rel=\"stylesheet\">#}
        <link rel=\"stylesheet\" href=\"{{asset('assets/font-awesome/css/font-awesome.min.css')}}\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/color.css')}}\" />
        <style type=\"text/css\">
            .navbar {
                margin-bottom: 0px;  /*THIS IS IMPOTANT TO HIDE THE SPACE BETWEEN NAVBAR AND CAROUSEL*/
            }
            body{
                color: #000;
                padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
            }
            .font-sans {
                font-family: IRANSans;
            }

        </style>
    {% block stylesheets %}{% endblock %}
    {% block head %}
    {% endblock %}
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path(\"homepage\")}}\">نظرسنجی اساتید دانشگاه آزاد واحد مرودشت</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
{#            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\">
                        <a href=\"about.html\">About</a>
                    </li>
                    <li>
                        <a href=\"services.html\">Services</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"blog-home-1.html\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"blog-home-2.html\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"blog-post.html\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"full-width.html\">Full Width Page</a>
                            </li>
                            <li>
                                <a href=\"sidebar.html\">Sidebar Page</a>
                            </li>
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>#}
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">
        {% block content %}
        {% endblock %}

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 1 {{ \"now\"|date(\"Y\") }}
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/vote/app/Resources/views/base.html.twig");
    }
}
