<?php

/* AppBundle:User/TreeCertificate:certificateReport.html_1.twig */
class __TwigTemplate_deca624e1ac3516c704148bde51eced73cf3c63e8bfeb3229870a3860fab51cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:User/TreeCertificate:certificateReport.html_1.twig", 1);
        $this->blocks = array(
            'toolbarTitle' => array($this, 'block_toolbarTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0c30d6c391733fb1d909229e55af8082e88dd64098730bc1260773d743fb2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c30d6c391733fb1d909229e55af8082e88dd64098730bc1260773d743fb2dc->enter($__internal_b0c30d6c391733fb1d909229e55af8082e88dd64098730bc1260773d743fb2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/TreeCertificate:certificateReport.html_1.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c30d6c391733fb1d909229e55af8082e88dd64098730bc1260773d743fb2dc->leave($__internal_b0c30d6c391733fb1d909229e55af8082e88dd64098730bc1260773d743fb2dc_prof);

    }

    // line 2
    public function block_toolbarTitle($context, array $blocks = array())
    {
        $__internal_27dd4b48abbfb0674f1db40c19e40ef852fc1e570d8269fa73fe453cbc58dc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dd4b48abbfb0674f1db40c19e40ef852fc1e570d8269fa73fe453cbc58dc89->enter($__internal_27dd4b48abbfb0674f1db40c19e40ef852fc1e570d8269fa73fe453cbc58dc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbarTitle"));

        echo "شناسنامه";
        
        $__internal_27dd4b48abbfb0674f1db40c19e40ef852fc1e570d8269fa73fe453cbc58dc89->leave($__internal_27dd4b48abbfb0674f1db40c19e40ef852fc1e570d8269fa73fe453cbc58dc89_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_72ceabeecd55183f099c50ffc716aeafe93527e7fa3a0bb10224e19a8f39dbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ceabeecd55183f099c50ffc716aeafe93527e7fa3a0bb10224e19a8f39dbbe->enter($__internal_72ceabeecd55183f099c50ffc716aeafe93527e7fa3a0bb10224e19a8f39dbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " 
    <li>
        <i class=\"fa fa-dashboard\"></i> داشبورد
    </li>
    <li>
        <i class=\"fa fa-barcode\"></i> یافتن شناسنامه
    </li>
    <li class=\"active\">
        <i class=\"fa fa-comments\"></i> نظرات
    </li>
";
        
        $__internal_72ceabeecd55183f099c50ffc716aeafe93527e7fa3a0bb10224e19a8f39dbbe->leave($__internal_72ceabeecd55183f099c50ffc716aeafe93527e7fa3a0bb10224e19a8f39dbbe_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_7aaaf7b572fe6a63312c6d7d0a12a85852b51addc0f0b9195c1813f81eec6962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaaf7b572fe6a63312c6d7d0a12a85852b51addc0f0b9195c1813f81eec6962->enter($__internal_7aaaf7b572fe6a63312c6d7d0a12a85852b51addc0f0b9195c1813f81eec6962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 15
        echo "
    <script type=\"text/template\" id=\"qq-template-gallery\">
        <div class=\"qq-uploader-selector qq-uploader qq-gallery\" qq-drop-area-text=\"Drop files here\">
        <div class=\"qq-total-progress-bar-container-selector qq-total-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar\"></div>
        </div>
        <div class=\"qq-upload-drop-area-selector qq-upload-drop-area\" qq-hide-dropzone>
        <span class=\"qq-upload-drop-area-text-selector\"></span>
        </div>
        <div class=\"qq-upload-button-selector qq-upload-button\">
        <div>Upload a file</div>
        </div>
        <span class=\"qq-drop-processing-selector qq-drop-processing\">
        <span>Processing dropped files...</span>
        <span class=\"qq-drop-processing-spinner-selector qq-drop-processing-spinner\"></span>
        </span>
        <ul class=\"qq-upload-list-selector qq-upload-list\" role=\"region\" aria-live=\"polite\" aria-relevant=\"additions removals\">
        <li>
        <span role=\"status\" class=\"qq-upload-status-text-selector qq-upload-status-text\"></span>
        <div class=\"qq-progress-bar-container-selector qq-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-progress-bar-selector qq-progress-bar\"></div>
        </div>
        <span class=\"qq-upload-spinner-selector qq-upload-spinner\"></span>
        <div class=\"qq-thumbnail-wrapper\">
        <img class=\"qq-thumbnail-selector\" qq-max-size=\"120\" qq-server-scale>
        </div>
        <button type=\"button\" class=\"qq-upload-cancel-selector qq-upload-cancel\">X</button>
        <button type=\"button\" class=\"qq-upload-retry-selector qq-upload-retry\">
        <span class=\"qq-btn qq-retry-icon\" aria-label=\"Retry\"></span>
        Retry
        </button>
        <div class=\"qq-file-info\">
        <div class=\"qq-file-name\">
        <span class=\"qq-upload-file-selector qq-upload-file\"></span>
        <span class=\"qq-edit-filename-icon-selector qq-edit-filename-icon\" aria-label=\"Edit filename\"></span>
        </div>
        <input class=\"qq-edit-filename-selector qq-edit-filename\" tabindex=\"0\" type=\"text\">
        <span class=\"qq-upload-size-selector qq-upload-size\"></span>
        <button type=\"button\" class=\"qq-btn qq-upload-delete-selector qq-upload-delete\">
        <span class=\"qq-btn qq-delete-icon\" aria-label=\"Delete\"></span>
        </button>
        <button type=\"button\" class=\"qq-btn qq-upload-pause-selector qq-upload-pause\">
        <span class=\"qq-btn qq-pause-icon\" aria-label=\"Pause\"></span>
        </button>
        <button type=\"button\" class=\"qq-btn qq-upload-continue-selector qq-upload-continue\">
        <span class=\"qq-btn qq-continue-icon\" aria-label=\"Continue\"></span>
        </button>
        </div>
        </li>
        </ul>
        <dialog class=\"qq-alert-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">Close</button>
        </div>
        </dialog>
        <dialog class=\"qq-confirm-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">No</button>
        <button type=\"button\" class=\"qq-ok-button-selector\">Yes</button>
        </div>
        </dialog>
        <dialog class=\"qq-prompt-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <input type=\"text\">
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">Cancel</button>
        <button type=\"button\" class=\"qq-ok-button-selector\">Ok</button>
        </div>
        </dialog>
        </div>
    </script>

";
        
        $__internal_7aaaf7b572fe6a63312c6d7d0a12a85852b51addc0f0b9195c1813f81eec6962->leave($__internal_7aaaf7b572fe6a63312c6d7d0a12a85852b51addc0f0b9195c1813f81eec6962_prof);

    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a701246a299da5a78a1e9d1738e894e3336c0183aa7715cae078940ecc37ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a701246a299da5a78a1e9d1738e894e3336c0183aa7715cae078940ecc37ab4->enter($__internal_7a701246a299da5a78a1e9d1738e894e3336c0183aa7715cae078940ecc37ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 91
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">

            ";
        // line 95
        echo "
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover table-striped\">
                    <tbody>
                        <tr>
                            <td><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_certificate_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 100, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">ویرایش</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"row\">

        <div class=\"col-lg-3 col-md-4\">
            <table style=\"text-align: center;\" class=\"table table-bordered table-hover table-striped\">
                <tbody>
                    <tr>
                        <th style=\"text-align: center;\">شناسه درخت</th>
                        <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 114, $this->getSourceContext()); })()), "unicId", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">نام و نام خانوادگی سرپرست</th>
                        <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 118, $this->getSourceContext()); })()), "supervisor", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">شماره موبایل</th>
                        <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 122, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">موقعیت درخت</th>
                        <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 126, $this->getSourceContext()); })()), "treeLocation", array()), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وضعیت درخت</th>
                        <td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 130, $this->getSourceContext()); })()), "treeStatus", array()), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">خالی شدگی تنه</th>
                            ";
        // line 134
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 134, $this->getSourceContext()); })()), "khaliShodegiTaneh", array()) == 1)) {
            // line 135
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        ";
        } else {
            // line 139
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        ";
        }
        // line 143
        echo "                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وجود مصالح در آبخور</th>
                            ";
        // line 146
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 146, $this->getSourceContext()); })()), "masalehDarAbkhor", array()) == 1)) {
            // line 147
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        ";
        } else {
            // line 151
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        ";
        }
        // line 155
        echo "                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">سرگیر بودن شاخه های زیر ۲ متر</th>
                            ";
        // line 158
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 158, $this->getSourceContext()); })()), "sargirBodanShakheh", array()) == 1)) {
            // line 159
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        ";
        } else {
            // line 163
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        ";
        }
        // line 167
        echo "                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">کج بودن ۳۰ درجه</th>
                            ";
        // line 170
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 170, $this->getSourceContext()); })()), "kajBodan", array()) == 1)) {
            // line 171
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        ";
        } else {
            // line 175
            echo "                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        ";
        }
        // line 179
        echo "                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">نوع آبیاری</th>
                        <td>";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 182, $this->getSourceContext()); })()), "irrigation", array()), "name", array()), "html", null, true);
        echo "</td>    
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وضعیت آبخور</th>
                            ";
        // line 186
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 186, $this->getSourceContext()); })()), "abkhor", array()) == 1)) {
            // line 187
            echo "                            <td style=\"text-align: center;\">
                                نامناسب
                            </td> 
                        ";
        } else {
            // line 191
            echo "                            <td style=\"text-align: center;\">
                                مناسب
                            </td>
                        ";
        }
        // line 195
        echo "                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">درگیر بودن با تاسیسات</th>
                        <td>";
        // line 198
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 198, $this->getSourceContext()); })()), "dargiriBaTasisat", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 198, $this->getSourceContext()); })()), "dargiriBaTasisat", array()), "name", array())) : ("ندارد")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫سینھ‬ ‫برابر‬ ‫محیط‬
                            ‫(‬ ‫متر‬ ‫سانتي‬ ‫)‬
                            ‫سانتي‬ ‫‪۱۳۰‬‬ ‫ارتفاع‬ ‫در‬ ‫اصلي‬ ‫تنھ‬ ‫محیط‬</th>
                        <td>";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 204, $this->getSourceContext()); })()), "mohit1", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫بن‬ ‫محیط‬
                            ‫(‬ ‫متر‬ ‫سانتي‬ ‫)‬
                            ‫زمین‬ ‫از‬ ‫اصلي‬ ‫تنھ‬ ‫شدن‬ ‫جدا‬ ‫محل‬</th>
                        <td>";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 210, $this->getSourceContext()); })()), "mohit2", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫توضیحات ویژه‬</th>
                        <td>";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 214, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">تاریخ ثبت</th>
                        <td>";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pd_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 218, $this->getSourceContext()); })()), "createAt", array()))), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            ";
        // line 223
        echo "            ";
        // line 224
        echo "        </div>

        <div class=\"col-lg-6 col-md-5\">
            <div class=\"panel panel-default\">
                <div id=\"new-micropost\" class=\"panel-body\">
                    ";
        // line 229
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->getSourceContext()); })()), 'form_start');
        echo "

                    ";
        // line 234
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), 'widget');
        echo "


                    <div id=\"uploader\"></div>
                    <button id=\"share\" class=\"btn btn-success\">
                        <i class=\"fa fa-send-o\"></i> <b>ارسال</b>
                    </button>
                    ";
        // line 241
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>
            </div>
            ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 245, $this->getSourceContext()); })()), "reports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 246
            echo "                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 249
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("upload/certificate/report/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "id", array())) . "/") . "thumb-") . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array())) . ".jpeg")), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\" style=\"height:auto; width: 150px;\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">";
            // line 253
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "user", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "user", array()), "username", array())) : ("ندارد")), "html", null, true);
            echo "
                        </h4>
                            <small>";
            // line 255
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pd_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "createAt", array()))), "html", null, true);
            echo "</small>
                        <p>";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "comment", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "        </div>




        <div class=\"col-lg-3 col-md-3\">
            <div class=\"card\">
                ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 267, $this->getSourceContext()); })()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 268
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("upload/certificate/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 268, $this->getSourceContext()); })()), "id", array())) . "/") . "thumb-") . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array())) . ".jpeg")), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "
                <div class=\"about\">
                    <h3 class=\"name\">";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 272, $this->getSourceContext()); })()), "tree", array()), "name", array()), "html", null, true);
        echo "</h3>
                    <h5 class=\"username\">";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 273, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h5>
                    <label id=\"location\"><i class=\"fa fa-map-marker\"></i> ";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 274, $this->getSourceContext()); })()), "address", array()), "html", null, true);
        echo "</label>
                </div>
            </div>

        </div>

    </div>


";
        
        $__internal_7a701246a299da5a78a1e9d1738e894e3336c0183aa7715cae078940ecc37ab4->leave($__internal_7a701246a299da5a78a1e9d1738e894e3336c0183aa7715cae078940ecc37ab4_prof);

    }

    // line 284
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77f33bdb93882c4b3143295d0c0e0465ef7fddc774d94306078099ce9ddb3ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f33bdb93882c4b3143295d0c0e0465ef7fddc774d94306078099ce9ddb3ff3->enter($__internal_77f33bdb93882c4b3143295d0c0e0465ef7fddc774d94306078099ce9ddb3ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 286
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fine-uploader/fine-uploader-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/timeline.css"), "html", null, true);
        echo "\">

";
        
        $__internal_77f33bdb93882c4b3143295d0c0e0465ef7fddc774d94306078099ce9ddb3ff3->leave($__internal_77f33bdb93882c4b3143295d0c0e0465ef7fddc774d94306078099ce9ddb3ff3_prof);

    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ae7eba781d022fdb2defdbe8962181672f3e41716ac846d6618780596d7dfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae7eba781d022fdb2defdbe8962181672f3e41716ac846d6618780596d7dfcd->enter($__internal_8ae7eba781d022fdb2defdbe8962181672f3e41716ac846d6618780596d7dfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
        echo "
    ";
        // line 295
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fine-uploader/jquery.fine-uploader.js"), "html", null, true);
        echo "\"></script>
    <script>
        var url = \"";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_image_upload", array("key" => "key"));
        echo "\";
        url = url.replace('key', 1);
        var uploader = new qq.FineUploader({
            element: \$('#uploader')[0],
            template: 'qq-template-gallery',
            request: {
                endpoint: url,
                params: {
                    id: 1
                }
            }
        });
    </script>


    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error \"The Geolocation service
        // failed.\", it means you probably did not give permission for the browser to
        // locate you.

        function initMap() {

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
        ";
        // line 331
        echo "                    \$('#appbundle_certificate_report_lat').val(pos.lat);
                    \$('#appbundle_certificate_report_lng').val(pos.lng);
                }
                , function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }


        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
        }

    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAPsJRskGHX6M4BjWK1w20FgujkRNEyj2U&callback=initMap\">
    </script>


    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/paper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/handlebars-v2.0.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeline.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8ae7eba781d022fdb2defdbe8962181672f3e41716ac846d6618780596d7dfcd->leave($__internal_8ae7eba781d022fdb2defdbe8962181672f3e41716ac846d6618780596d7dfcd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/TreeCertificate:certificateReport.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 362,  616 => 361,  612 => 360,  607 => 358,  578 => 331,  545 => 298,  540 => 296,  536 => 295,  533 => 294,  527 => 293,  517 => 289,  513 => 288,  509 => 287,  504 => 286,  498 => 284,  481 => 274,  477 => 273,  473 => 272,  469 => 270,  460 => 268,  456 => 267,  447 => 260,  437 => 256,  433 => 255,  428 => 253,  424 => 251,  415 => 249,  411 => 248,  407 => 246,  403 => 245,  396 => 241,  385 => 234,  380 => 229,  373 => 224,  371 => 223,  364 => 218,  357 => 214,  350 => 210,  341 => 204,  332 => 198,  327 => 195,  321 => 191,  315 => 187,  313 => 186,  306 => 182,  301 => 179,  295 => 175,  289 => 171,  287 => 170,  282 => 167,  276 => 163,  270 => 159,  268 => 158,  263 => 155,  257 => 151,  251 => 147,  249 => 146,  244 => 143,  238 => 139,  232 => 135,  230 => 134,  223 => 130,  216 => 126,  209 => 122,  202 => 118,  195 => 114,  178 => 100,  171 => 95,  166 => 91,  160 => 90,  79 => 15,  73 => 14,  51 => 3,  39 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{%block toolbarTitle %}شناسنامه{%endblock%}
{%block breadcrumb %} 
    <li>
        <i class=\"fa fa-dashboard\"></i> داشبورد
    </li>
    <li>
        <i class=\"fa fa-barcode\"></i> یافتن شناسنامه
    </li>
    <li class=\"active\">
        <i class=\"fa fa-comments\"></i> نظرات
    </li>
{%endblock%}
{% block head %}

    <script type=\"text/template\" id=\"qq-template-gallery\">
        <div class=\"qq-uploader-selector qq-uploader qq-gallery\" qq-drop-area-text=\"Drop files here\">
        <div class=\"qq-total-progress-bar-container-selector qq-total-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar\"></div>
        </div>
        <div class=\"qq-upload-drop-area-selector qq-upload-drop-area\" qq-hide-dropzone>
        <span class=\"qq-upload-drop-area-text-selector\"></span>
        </div>
        <div class=\"qq-upload-button-selector qq-upload-button\">
        <div>Upload a file</div>
        </div>
        <span class=\"qq-drop-processing-selector qq-drop-processing\">
        <span>Processing dropped files...</span>
        <span class=\"qq-drop-processing-spinner-selector qq-drop-processing-spinner\"></span>
        </span>
        <ul class=\"qq-upload-list-selector qq-upload-list\" role=\"region\" aria-live=\"polite\" aria-relevant=\"additions removals\">
        <li>
        <span role=\"status\" class=\"qq-upload-status-text-selector qq-upload-status-text\"></span>
        <div class=\"qq-progress-bar-container-selector qq-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-progress-bar-selector qq-progress-bar\"></div>
        </div>
        <span class=\"qq-upload-spinner-selector qq-upload-spinner\"></span>
        <div class=\"qq-thumbnail-wrapper\">
        <img class=\"qq-thumbnail-selector\" qq-max-size=\"120\" qq-server-scale>
        </div>
        <button type=\"button\" class=\"qq-upload-cancel-selector qq-upload-cancel\">X</button>
        <button type=\"button\" class=\"qq-upload-retry-selector qq-upload-retry\">
        <span class=\"qq-btn qq-retry-icon\" aria-label=\"Retry\"></span>
        Retry
        </button>
        <div class=\"qq-file-info\">
        <div class=\"qq-file-name\">
        <span class=\"qq-upload-file-selector qq-upload-file\"></span>
        <span class=\"qq-edit-filename-icon-selector qq-edit-filename-icon\" aria-label=\"Edit filename\"></span>
        </div>
        <input class=\"qq-edit-filename-selector qq-edit-filename\" tabindex=\"0\" type=\"text\">
        <span class=\"qq-upload-size-selector qq-upload-size\"></span>
        <button type=\"button\" class=\"qq-btn qq-upload-delete-selector qq-upload-delete\">
        <span class=\"qq-btn qq-delete-icon\" aria-label=\"Delete\"></span>
        </button>
        <button type=\"button\" class=\"qq-btn qq-upload-pause-selector qq-upload-pause\">
        <span class=\"qq-btn qq-pause-icon\" aria-label=\"Pause\"></span>
        </button>
        <button type=\"button\" class=\"qq-btn qq-upload-continue-selector qq-upload-continue\">
        <span class=\"qq-btn qq-continue-icon\" aria-label=\"Continue\"></span>
        </button>
        </div>
        </li>
        </ul>
        <dialog class=\"qq-alert-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">Close</button>
        </div>
        </dialog>
        <dialog class=\"qq-confirm-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">No</button>
        <button type=\"button\" class=\"qq-ok-button-selector\">Yes</button>
        </div>
        </dialog>
        <dialog class=\"qq-prompt-dialog-selector\">
        <div class=\"qq-dialog-message-selector\"></div>
        <input type=\"text\">
        <div class=\"qq-dialog-buttons\">
        <button type=\"button\" class=\"qq-cancel-button-selector\">Cancel</button>
        <button type=\"button\" class=\"qq-ok-button-selector\">Ok</button>
        </div>
        </dialog>
        </div>
    </script>

{% endblock %}
{%block content %}
    <div class=\"row\">
        <div class=\"col-lg-12\">

            {#            <a style=\"margin-bottom: 20px;\" class=\"btn btn-lg btn-primary\" href=\"{{path('app_certificate_add')}}\">شناسنامه جدید</a>#}

            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover table-striped\">
                    <tbody>
                        <tr>
                            <td><a href=\"{{path(\"app_certificate_update\",{'id':certificate.id})}}\">ویرایش</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"row\">

        <div class=\"col-lg-3 col-md-4\">
            <table style=\"text-align: center;\" class=\"table table-bordered table-hover table-striped\">
                <tbody>
                    <tr>
                        <th style=\"text-align: center;\">شناسه درخت</th>
                        <td>{{certificate.unicId}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">نام و نام خانوادگی سرپرست</th>
                        <td>{{certificate.supervisor}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">شماره موبایل</th>
                        <td>{{certificate.phoneNumber}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">موقعیت درخت</th>
                        <td>{{certificate.treeLocation.name}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وضعیت درخت</th>
                        <td>{{certificate.treeStatus.name}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">خالی شدگی تنه</th>
                            {%if certificate.khaliShodegiTaneh == 1%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        {%else%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        {%endif%}
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وجود مصالح در آبخور</th>
                            {%if certificate.masalehDarAbkhor == 1%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        {%else%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        {%endif%}
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">سرگیر بودن شاخه های زیر ۲ متر</th>
                            {%if certificate.sargirBodanShakheh == 1%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        {%else%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        {%endif%}
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">کج بودن ۳۰ درجه</th>
                            {%if certificate.kajBodan == 1%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </td> 
                        {%else%}
                            <td style=\"text-align: center;\">
                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                            </td>
                        {%endif%}
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">نوع آبیاری</th>
                        <td>{{certificate.irrigation.name}}</td>    
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">وضعیت آبخور</th>
                            {%if certificate.abkhor == 1%}
                            <td style=\"text-align: center;\">
                                نامناسب
                            </td> 
                        {%else%}
                            <td style=\"text-align: center;\">
                                مناسب
                            </td>
                        {%endif%}
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">درگیر بودن با تاسیسات</th>
                        <td>{{certificate.dargiriBaTasisat ? certificate.dargiriBaTasisat.name : \"ندارد\"}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫سینھ‬ ‫برابر‬ ‫محیط‬
                            ‫(‬ ‫متر‬ ‫سانتي‬ ‫)‬
                            ‫سانتي‬ ‫‪۱۳۰‬‬ ‫ارتفاع‬ ‫در‬ ‫اصلي‬ ‫تنھ‬ ‫محیط‬</th>
                        <td>{{certificate.mohit1}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫بن‬ ‫محیط‬
                            ‫(‬ ‫متر‬ ‫سانتي‬ ‫)‬
                            ‫زمین‬ ‫از‬ ‫اصلي‬ ‫تنھ‬ ‫شدن‬ ‫جدا‬ ‫محل‬</th>
                        <td>{{certificate.mohit2}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">‫توضیحات ویژه‬</th>
                        <td>{{certificate.description}}</td>
                    </tr>
                    <tr>
                        <th style=\"text-align: center;\">تاریخ ثبت</th>
                        <td>{{certificate.createAt|pd_format}}</td>
                    </tr>
                </tbody>
            </table>
            {#                </div>#}
            {#            </div>#}
        </div>

        <div class=\"col-lg-6 col-md-5\">
            <div class=\"panel panel-default\">
                <div id=\"new-micropost\" class=\"panel-body\">
                    {{form_start(form)}}

                    {# <div class=\"form-group\">
                         <textarea rows=\"1\" cols=\"10\" class=\"form-control\" placeholder=\"Compose Micropost\"></textarea>
                     </div>#}
                    {{form_widget(form)}}


                    <div id=\"uploader\"></div>
                    <button id=\"share\" class=\"btn btn-success\">
                        <i class=\"fa fa-send-o\"></i> <b>ارسال</b>
                    </button>
                    {{form_end(form)}}

                </div>
            </div>
            {%for report in certificate.reports%}
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        {%for image in report.images%}
                            <img src=\"{{asset('upload/certificate/report/' ~ report.id ~ \"/\"~ \"thumb-\" ~ image.name ~ \".jpeg\")}}\" class=\"img-responsive\" alt=\"\" style=\"height:auto; width: 150px;\">
                        {%endfor%}
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">{{report.user ? report.user.username : \"ندارد\"}}
                        </h4>
                            <small>{{report.createAt|pd_format}}</small>
                        <p>{{report.comment}}</p>
                    </div>
                </div>
            {%endfor%}
        </div>




        <div class=\"col-lg-3 col-md-3\">
            <div class=\"card\">
                {%for image in certificate.images%}
                    <img src=\"{{asset('upload/certificate/' ~ certificate.id ~ \"/\"~ \"thumb-\" ~ image.name ~ \".jpeg\")}}\" class=\"img-thumbnail\" alt=\"\">
                {%endfor%}

                <div class=\"about\">
                    <h3 class=\"name\">{{certificate.tree.name}}</h3>
                    <h5 class=\"username\">{{certificate.id}}</h5>
                    <label id=\"location\"><i class=\"fa fa-map-marker\"></i> {{certificate.address}}</label>
                </div>
            </div>

        </div>

    </div>


{%endblock%}
{% block stylesheets %}
{#        <link rel=\"stylesheet\" href=\"{{asset('assets/css/paper.min.css')}}\">#}
    {{parent()}}
    <link href=\"{{asset('fine-uploader/fine-uploader-gallery.css')}}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/demo.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/timeline.css')}}\">

{% endblock %}

{% block javascripts %}

    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{asset('fine-uploader/jquery.fine-uploader.js')}}\"></script>
    <script>
        var url = \"{{path(\"app_image_upload\",{ 'key' : 'key'})}}\";
        url = url.replace('key', 1);
        var uploader = new qq.FineUploader({
            element: \$('#uploader')[0],
            template: 'qq-template-gallery',
            request: {
                endpoint: url,
                params: {
                    id: 1
                }
            }
        });
    </script>


    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error \"The Geolocation service
        // failed.\", it means you probably did not give permission for the browser to
        // locate you.

        function initMap() {

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
        {#                infoWindow.setPosition(pos);
                        infoWindow.setContent('Location found.');
                        map.setCenter(pos);#}
                    \$('#appbundle_certificate_report_lat').val(pos.lat);
                    \$('#appbundle_certificate_report_lng').val(pos.lng);
                }
                , function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }


        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
        }

    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAPsJRskGHX6M4BjWK1w20FgujkRNEyj2U&callback=initMap\">
    </script>


    <script src=\"{{asset('assets/js/paper.min.js')}}\"></script>

    <script src=\"{{asset('assets/js/handlebars-v2.0.0.js')}}\"></script>
    <script src=\"{{asset('assets/js/jquery.autosize.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/timeline.js')}}\"></script>

{% endblock %}

", "AppBundle:User/TreeCertificate:certificateReport.html_1.twig", "/var/www/vote/src/AppBundle/Resources/views/User/TreeCertificate/certificateReport.html_1.twig");
    }
}
