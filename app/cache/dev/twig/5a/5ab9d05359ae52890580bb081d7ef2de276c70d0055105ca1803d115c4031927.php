<?php

/* AppBundle:User/TreeCertificate:certificateFind.html.twig */
class __TwigTemplate_72fa62669fe31495cbb7a2e55c2619f1e4fe6678cb513d3873f4e6c3919fd246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:User/TreeCertificate:certificateFind.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c55be43acfd93689535fad09e17388089844831ef895ffb3e5897fd92bc80e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55be43acfd93689535fad09e17388089844831ef895ffb3e5897fd92bc80e35->enter($__internal_c55be43acfd93689535fad09e17388089844831ef895ffb3e5897fd92bc80e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/TreeCertificate:certificateFind.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55be43acfd93689535fad09e17388089844831ef895ffb3e5897fd92bc80e35->leave($__internal_c55be43acfd93689535fad09e17388089844831ef895ffb3e5897fd92bc80e35_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_529abb20e8cd6d7fb5c05f95130c5eb77ab70f6ed1c385725711524a7d782997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529abb20e8cd6d7fb5c05f95130c5eb77ab70f6ed1c385725711524a7d782997->enter($__internal_529abb20e8cd6d7fb5c05f95130c5eb77ab70f6ed1c385725711524a7d782997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">جست و جو
                        <small>درخت</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">صفحه اصلی</a>
                        </li>
                        <li class=\"active\">یافتن شناسنامه</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- Image Header -->
            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slider/img/chaman.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <!-- /.row -->

            <!-- Service Panels -->
            <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

            ";
        // line 36
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">یافتن شناسنامه</h2>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">

                        <p>.لطفا کد هشت رقمی پلاک درخت را در فیلد زیر وارد کنید</p>
                        ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_start');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "unicId", array()), 'row', array("attr" => array("placeholder" => "کد هشت رقمی پلاک درخت")));
        echo "
                        <input type=\"submit\" value=\"بیاب\" class=\"mb-xs mt-xs mr-xs btn btn-primary\"/>
                        ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </footer>

    ";
        
        $__internal_529abb20e8cd6d7fb5c05f95130c5eb77ab70f6ed1c385725711524a7d782997->leave($__internal_529abb20e8cd6d7fb5c05f95130c5eb77ab70f6ed1c385725711524a7d782997_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/TreeCertificate:certificateFind.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  99 => 53,  95 => 52,  77 => 36,  66 => 25,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{%block content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">جست و جو
                        <small>درخت</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"{{path(\"homepage\")}}\">صفحه اصلی</a>
                        </li>
                        <li class=\"active\">یافتن شناسنامه</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- Image Header -->
            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"{{asset('assets/slider/img/chaman.jpg')}}\" alt=\"\">
                </div>
            </div>
            <!-- /.row -->

            <!-- Service Panels -->
            <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

            {#   <div class=\"col-lg-12\">
                   <h2 class=\"page-header\">یافتن شناسنامه</h2>
               </div>#}
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">یافتن شناسنامه</h2>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">

                        <p>.لطفا کد هشت رقمی پلاک درخت را در فیلد زیر وارد کنید</p>
                        {{form_start(form)}}
                        {{form_row(form.unicId,{ 'attr': {'placeholder':'کد هشت رقمی پلاک درخت'} })}}
                        <input type=\"submit\" value=\"بیاب\" class=\"mb-xs mt-xs mr-xs btn btn-primary\"/>
                        {{form_end(form,{'render_rest' : false})}}
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </footer>

    {%endblock%}", "AppBundle:User/TreeCertificate:certificateFind.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/TreeCertificate/certificateFind.html.twig");
    }
}
