<?php

/* AppBundle:User:user_display.html.twig */
class __TwigTemplate_a667cbb1ff529630a594d8a5128563bbbb1d0596db2098a78c7b5cfeb7bca558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:User:user_display.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49750bdee49d8d8592a8b526c1cbb25e208668810569949e3551e9731f4883a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49750bdee49d8d8592a8b526c1cbb25e208668810569949e3551e9731f4883a5->enter($__internal_49750bdee49d8d8592a8b526c1cbb25e208668810569949e3551e9731f4883a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:user_display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49750bdee49d8d8592a8b526c1cbb25e208668810569949e3551e9731f4883a5->leave($__internal_49750bdee49d8d8592a8b526c1cbb25e208668810569949e3551e9731f4883a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a77db2172c8a68b5965c7f2c30b8febad90b2763e3084b185066cf7651a35f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77db2172c8a68b5965c7f2c30b8febad90b2763e3084b185066cf7651a35f7f->enter($__internal_a77db2172c8a68b5965c7f2c30b8febad90b2763e3084b185066cf7651a35f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("کاربران"), "html", null, true);
        
        $__internal_a77db2172c8a68b5965c7f2c30b8febad90b2763e3084b185066cf7651a35f7f->leave($__internal_a77db2172c8a68b5965c7f2c30b8febad90b2763e3084b185066cf7651a35f7f_prof);

    }

    // line 4
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_382a18ea3ffa7af0b69fb0842fa2ad811810a44a75dd335e1f14489a0b2610fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382a18ea3ffa7af0b69fb0842fa2ad811810a44a75dd335e1f14489a0b2610fa->enter($__internal_382a18ea3ffa7af0b69fb0842fa2ad811810a44a75dd335e1f14489a0b2610fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "کاربران";
        
        $__internal_382a18ea3ffa7af0b69fb0842fa2ad811810a44a75dd335e1f14489a0b2610fa->leave($__internal_382a18ea3ffa7af0b69fb0842fa2ad811810a44a75dd335e1f14489a0b2610fa_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cb01c409c571f8edd2a051acb9790d6f248dc5501e1401aa655ada2defd94654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb01c409c571f8edd2a051acb9790d6f248dc5501e1401aa655ada2defd94654->enter($__internal_cb01c409c571f8edd2a051acb9790d6f248dc5501e1401aa655ada2defd94654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li>
        <i class=\"fa fa-dashboard\"></i> کاربر
    </li>
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> نمایش
    </li>
";
        
        $__internal_cb01c409c571f8edd2a051acb9790d6f248dc5501e1401aa655ada2defd94654->leave($__internal_cb01c409c571f8edd2a051acb9790d6f248dc5501e1401aa655ada2defd94654_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_2588183b316f3314ab506799335034d3e327017a2780c1e672bd7159f7e80035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2588183b316f3314ab506799335034d3e327017a2780c1e672bd7159f7e80035->enter($__internal_2588183b316f3314ab506799335034d3e327017a2780c1e672bd7159f7e80035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div>
        <!-- start: page -->
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <div class=\"panel-actions\">
                    <a data-panel-toggle=\"\" class=\"panel-action panel-action-toggle\" href=\"#\"></a>
                    <a data-panel-dismiss=\"\" class=\"panel-action panel-action-dismiss\" href=\"#\"></a>
                </div>
                ";
        // line 22
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
            </header>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"mb-md\">
                            <a class=\"btn btn-primary\" id=\"addToTable\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                                <i class=\"fa fa-plus\"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div id=\"datatable-editable_wrapper\" class=\"dataTables_wrapper no-footer\">


                    <div class=\"table-responsive\">

                        <table id=\"datatable-editable\" class=\"table table-bordered table-striped mb-none dataTable no-footer\" role=\"grid\" aria-describedby=\"datatable-editable_info\">
                            <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 226px;\" aria-sort=\"ascending\" aria-label=\"Rendering engine: activate to sort column descending\">#";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("شناسه"), "html", null, true);
        echo "</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("نام کاربری"), "html", null, true);
        echo "</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ایمیل"), "html", null, true);
        echo "</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("نقش"), "html", null, true);
        echo "</th>
";
        // line 48
        echo "                                    <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 105px;\" aria-label=\"Actions\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("اقدامات"), "html", null, true);
        echo "</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 53, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td class=\"sorting_1\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                           
                                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 61
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["role"]), "html", null, true);
                echo " -
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                                        </td>
                                  ";
            // line 72
            echo "                                        <td class=\"actions\">
                                            <a class=\"on-default edit-row\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                                ";
            // line 75
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        </table></div>


                    <div class=\"dataTables_paginate paging_bs_normal\" id=\"datatable-editable_paginate\">
                        ";
        // line 83
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 83, $this->getSourceContext()); })()));
        echo "
                    </div>
                    </section>   
                </div>

            ";
        
        $__internal_2588183b316f3314ab506799335034d3e327017a2780c1e672bd7159f7e80035->leave($__internal_2588183b316f3314ab506799335034d3e327017a2780c1e672bd7159f7e80035_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:user_display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 83,  201 => 78,  193 => 75,  189 => 73,  186 => 72,  182 => 63,  173 => 61,  169 => 60,  163 => 57,  159 => 56,  155 => 55,  152 => 54,  148 => 53,  139 => 48,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  105 => 28,  96 => 22,  86 => 14,  80 => 13,  61 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin.html.twig\" %}

{% block title %}{{ 'کاربران'|trans }}{% endblock %}
{%block toolbarTitle %}کاربران{%endblock%}
{%block breadcrumb %} 
    <li>
        <i class=\"fa fa-dashboard\"></i> کاربر
    </li>
    <li class=\"active\">
        <i class=\"fa fa-barcode\"></i> نمایش
    </li>
{%endblock%}
{% block content %}
    <div>
        <!-- start: page -->
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <div class=\"panel-actions\">
                    <a data-panel-toggle=\"\" class=\"panel-action panel-action-toggle\" href=\"#\"></a>
                    <a data-panel-dismiss=\"\" class=\"panel-action panel-action-dismiss\" href=\"#\"></a>
                </div>
                {{ knp_pagination_render(users) }}
            </header>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"mb-md\">
                            <a class=\"btn btn-primary\" id=\"addToTable\" href=\"{{path(\"fos_user_registration_register\")}}\">
                                <i class=\"fa fa-plus\"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div id=\"datatable-editable_wrapper\" class=\"dataTables_wrapper no-footer\">


                    <div class=\"table-responsive\">

                        <table id=\"datatable-editable\" class=\"table table-bordered table-striped mb-none dataTable no-footer\" role=\"grid\" aria-describedby=\"datatable-editable_info\">
                            <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 226px;\" aria-sort=\"ascending\" aria-label=\"Rendering engine: activate to sort column descending\">#{{'شناسه'|trans}}</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">{{ 'نام کاربری'|trans }}</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">{{ 'ایمیل'|trans }}</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 290px;\" aria-label=\"Browser: activate to sort column ascending\">{{ 'نقش'|trans }}</th>
{#                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-editable\" rowspan=\"1\" colspan=\"1\" style=\"width: 272px;\" aria-label=\"Platform(s): activate to sort column ascending\">{{ 'گروه'|trans }}</th>#}
                                    <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 105px;\" aria-label=\"Actions\">{{ 'اقدامات'|trans }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                {%for user in users %}
                                    <tr class=\"gradeA odd\" role=\"row\">
                                        <td class=\"sorting_1\">{{user.id}}</td>
                                        <td>{{user.username}}</td>
                                        <td>{{user.email}}</td>
                                        <td>
                                           
                                            {% for role in user.roles %}
                                                {{ role|trans }} -
                                            {% endfor %}

                                        </td>
                                  {#      <td>

                                            {% for group in user.groups %}
                                                {{ group.name }}
                                            {% endfor %}

                                        </td>#}
                                        <td class=\"actions\">
                                            <a class=\"on-default edit-row\" href=\"{{path(\"app_user_update\",{\"id\":user.id})}}\"><i class=\"fa fa-pencil\"></i></a>
                                                {#                                            <a class=\"on-default remove-row\" href=\"{{path(\"app_palette_delete\",{\"id\":user.id})}}\"><i class=\"fa fa-trash-o\"></i></a>#}
                                        </td>
                                    </tr>
                                {%endfor%}
                            </tbody>
                        </table></div>


                    <div class=\"dataTables_paginate paging_bs_normal\" id=\"datatable-editable_paginate\">
                        {{ knp_pagination_render(users) }}
                    </div>
                    </section>   
                </div>

            {% endblock %}
", "AppBundle:User:user_display.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/user_display.html.twig");
    }
}
