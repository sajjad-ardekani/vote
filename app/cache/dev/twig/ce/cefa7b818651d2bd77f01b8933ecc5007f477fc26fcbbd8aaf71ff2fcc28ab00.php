<?php

/* base.html.twig */
class __TwigTemplate_e4455cb7b2e1a83a11986a79c7822ca798206841f1dda770df693a2d6ca02a85 extends Twig_Template
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
        $__internal_8e1c5cd34eb25e7781ef9e8fc8cd3ca6935f4a59105f02e9476d5073c8a2318b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1c5cd34eb25e7781ef9e8fc8cd3ca6935f4a59105f02e9476d5073c8a2318b->enter($__internal_8e1c5cd34eb25e7781ef9e8fc8cd3ca6935f4a59105f02e9476d5073c8a2318b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <title>درختان</title>
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
                <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
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
            </div>
            <!-- /.navbar-collapse -->
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
        
        $__internal_8e1c5cd34eb25e7781ef9e8fc8cd3ca6935f4a59105f02e9476d5073c8a2318b->leave($__internal_8e1c5cd34eb25e7781ef9e8fc8cd3ca6935f4a59105f02e9476d5073c8a2318b_prof);

    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d78dc4762769ee963a4f86ade075a76f9e00d9572169d95e0e1d2b2d2041e939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78dc4762769ee963a4f86ade075a76f9e00d9572169d95e0e1d2b2d2041e939->enter($__internal_d78dc4762769ee963a4f86ade075a76f9e00d9572169d95e0e1d2b2d2041e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d78dc4762769ee963a4f86ade075a76f9e00d9572169d95e0e1d2b2d2041e939->leave($__internal_d78dc4762769ee963a4f86ade075a76f9e00d9572169d95e0e1d2b2d2041e939_prof);

    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4ee803b7304321c678f20794e8959b100983ec4fce5b278da9175f4a8b60cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ee803b7304321c678f20794e8959b100983ec4fce5b278da9175f4a8b60cf8->enter($__internal_b4ee803b7304321c678f20794e8959b100983ec4fce5b278da9175f4a8b60cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 44
        echo "    ";
        
        $__internal_b4ee803b7304321c678f20794e8959b100983ec4fce5b278da9175f4a8b60cf8->leave($__internal_b4ee803b7304321c678f20794e8959b100983ec4fce5b278da9175f4a8b60cf8_prof);

    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8a79d7914527390a43efa41d33d2160994dda4ea8697a76f39ea42f2827dc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a79d7914527390a43efa41d33d2160994dda4ea8697a76f39ea42f2827dc0c->enter($__internal_b8a79d7914527390a43efa41d33d2160994dda4ea8697a76f39ea42f2827dc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "        ";
        
        $__internal_b8a79d7914527390a43efa41d33d2160994dda4ea8697a76f39ea42f2827dc0c->leave($__internal_b8a79d7914527390a43efa41d33d2160994dda4ea8697a76f39ea42f2827dc0c_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_262c0929594df647337211f6148c855126013c26983edc7aa0f64c2555036b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262c0929594df647337211f6148c855126013c26983edc7aa0f64c2555036b72->enter($__internal_262c0929594df647337211f6148c855126013c26983edc7aa0f64c2555036b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_262c0929594df647337211f6148c855126013c26983edc7aa0f64c2555036b72->leave($__internal_262c0929594df647337211f6148c855126013c26983edc7aa0f64c2555036b72_prof);

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
        return array (  270 => 152,  263 => 136,  257 => 135,  250 => 44,  244 => 43,  233 => 42,  224 => 153,  222 => 152,  211 => 144,  202 => 137,  200 => 135,  108 => 45,  105 => 43,  103 => 42,  86 => 28,  81 => 27,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 19,  54 => 18,  50 => 17,  45 => 15,  41 => 14,  26 => 1,);
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
        <title>درختان</title>
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
                <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
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
            </div>
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
