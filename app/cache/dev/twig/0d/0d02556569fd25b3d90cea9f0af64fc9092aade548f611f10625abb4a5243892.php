<?php

/* AppBundle:Admin:dashboard.html.twig */
class __TwigTemplate_5c24de684a4641f5d135e502b501b16d7810a780281b50daebe98c66c0851d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:dashboard.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfe252d38d99ef8828c08fcf3bfae17cbf46efd280514f1358db72b130e4837f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe252d38d99ef8828c08fcf3bfae17cbf46efd280514f1358db72b130e4837f->enter($__internal_cfe252d38d99ef8828c08fcf3bfae17cbf46efd280514f1358db72b130e4837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe252d38d99ef8828c08fcf3bfae17cbf46efd280514f1358db72b130e4837f->leave($__internal_cfe252d38d99ef8828c08fcf3bfae17cbf46efd280514f1358db72b130e4837f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_213b1eb2ab14eed07ae01290cd8f4a4a1363019466b72bf224c48b1ca69e91cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b1eb2ab14eed07ae01290cd8f4a4a1363019466b72bf224c48b1ca69e91cc->enter($__internal_213b1eb2ab14eed07ae01290cd8f4a4a1363019466b72bf224c48b1ca69e91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_213b1eb2ab14eed07ae01290cd8f4a4a1363019466b72bf224c48b1ca69e91cc->leave($__internal_213b1eb2ab14eed07ae01290cd8f4a4a1363019466b72bf224c48b1ca69e91cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block content %}
{#    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-tree fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{countOfTree}}</div>
                            <div>درخت</div>
                        </div>
                    </div>
                </div>
                <a href=\"{{path(\"app_tree_list\")}}\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">لیست درختان</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-barcode fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{countOfCertificat}}</div>
                            <div>شناسنامه</div>
                        </div>
                    </div>
                </div>
                <a href=\"{{path(\"app_certificate_list\")}}\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">لیست شناسنامه ها</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-support fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{countOfCertificatReport}}</div>
                            <div>گزارش</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">لیست گزارش ها</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comments fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{countOfContact}}</div>
                            <div>گفت و گو</div>
                        </div>
                    </div>
                </div>
                <a href=\"{{path('app_contact_list')}}\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">لیست گفت و گوها</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> درختان روی نقشه</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"test\">
                        <div id=\"map\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-support fa-fw\"></i> آخرین گزارش ها</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-striped\">
                            <thead>
                                <tr>
                                    <th>شماره پلاک</th>
                                    <th>تاریخ ایجاد</th>
                                    <th>آدرس</th>
                                    <th>متن گزارش</th>
                                </tr>
                            </thead>
                            <tbody>
                                {%for certificatReport in certificatReports%}
                                    <tr>
                                        <td>{{certificatReport.certificate.unicId}}</td>
                                        <td>{{certificatReport.createAt|pd_format}}</td>
                                        <td>{{certificatReport.certificate.address}}</td>
                                        <td>{{certificatReport.comment}}</td>
                                        <td><a href=\"{{path(\"app_certificate_report\",{'id':certificatReport.certificate.id})}}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                                    </tr>
                                {%endfor%}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
#}
{% endblock %}
", "AppBundle:Admin:dashboard.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/dashboard.html.twig");
    }
}
