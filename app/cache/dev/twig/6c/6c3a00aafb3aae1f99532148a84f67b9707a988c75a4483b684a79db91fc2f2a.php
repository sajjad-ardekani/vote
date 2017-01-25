<?php

/* AppBundle:User/TreeCertificate:certificateReport.html.twig */
class __TwigTemplate_dc63d0bef6cd0aeae935ea7a91784666a6bfec04d96ed7f0895c1c6430477c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:User/TreeCertificate:certificateReport.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00c0b84f17d1842dcc0e5e86fc73dab98090f83bc8bab33477376fd7482aeadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c0b84f17d1842dcc0e5e86fc73dab98090f83bc8bab33477376fd7482aeadd->enter($__internal_00c0b84f17d1842dcc0e5e86fc73dab98090f83bc8bab33477376fd7482aeadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/TreeCertificate:certificateReport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c0b84f17d1842dcc0e5e86fc73dab98090f83bc8bab33477376fd7482aeadd->leave($__internal_00c0b84f17d1842dcc0e5e86fc73dab98090f83bc8bab33477376fd7482aeadd_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_24e1e75315f926035a76ee539d69c24a0548be31de4ec31fd237ae8046ba8ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e1e75315f926035a76ee539d69c24a0548be31de4ec31fd237ae8046ba8ba1->enter($__internal_24e1e75315f926035a76ee539d69c24a0548be31de4ec31fd237ae8046ba8ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <script type=\"text/template\" id=\"qq-template-gallery\">
        <div class=\"qq-uploader-selector qq-uploader qq-gallery\" qq-drop-area-text=\"گزارش تصویری\">
        <div class=\"qq-total-progress-bar-container-selector qq-total-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar\"></div>
        </div>
        <div class=\"qq-upload-drop-area-selector qq-upload-drop-area\" qq-hide-dropzone>
        <span class=\"qq-upload-drop-area-text-selector\"></span>
        </div>
        <div class=\"qq-upload-button-selector qq-upload-button\">
        <div>بارگزاری عکس</div>
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
        
        $__internal_24e1e75315f926035a76ee539d69c24a0548be31de4ec31fd237ae8046ba8ba1->leave($__internal_24e1e75315f926035a76ee539d69c24a0548be31de4ec31fd237ae8046ba8ba1_prof);

    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4814f6584ba6f8b71fa007783727987680390fa16c2e562c37520c9ced7fbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4814f6584ba6f8b71fa007783727987680390fa16c2e562c37520c9ced7fbfc->enter($__internal_a4814f6584ba6f8b71fa007783727987680390fa16c2e562c37520c9ced7fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 78
        echo "    <div style=\"margin-top: 40px;\" class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">جست و جو
                    <small>درخت</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">صفحه اصلی</a>
                    </li>
                    <li class=\"active\">ثبت گزارش</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-lg-4 col-md-4\">
                <div style=\"border: 2px solid #666666; border-bottom: none;\" class=\"card\">
                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 96, $this->getSourceContext()); })()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 97
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("upload/certificate/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 97, $this->getSourceContext()); })()), "id", array())) . "/") . "thumb-") . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array())) . ".jpeg")), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
                    <div class=\"about\">
                        <h3 class=\"name\"><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_tree_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 101, $this->getSourceContext()); })()), "tree", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 101, $this->getSourceContext()); })()), "tree", array()), "name", array()), "html", null, true);
        echo "</h3></a>
                        <h5 class=\"username\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 102, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h5>
                        <label id=\"location\"><i class=\"fa fa-map-marker\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 103, $this->getSourceContext()); })()), "address", array()), "html", null, true);
        echo "</label>
                    </div>
                </div>
                <table style=\"border: 2px solid #666666; border-top: none;\" style=\"text-align: center;\" class=\"table table-bordered table-hover table-striped\">
                    <tbody>
                        <tr>
                            <th style=\"text-align: center;\">کد پلاک درخت</th>
                            <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 110, $this->getSourceContext()); })()), "unicId", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">نام درخت</th>
                            <td><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_tree_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 114, $this->getSourceContext()); })()), "tree", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 114, $this->getSourceContext()); })()), "tree", array()), "name", array()), "html", null, true);
        echo "</a></td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">موقعیت درخت</th>
                            <td>";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 118, $this->getSourceContext()); })()), "treeLocation", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 118, $this->getSourceContext()); })()), "treeLocation", array()), "name", array())) : ("")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">وضعیت درخت</th>
                            <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 122, $this->getSourceContext()); })()), "treeStatus", array()), "name", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">خالی شدگی تنه</th>
                                ";
        // line 126
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 126, $this->getSourceContext()); })()), "khaliShodegiTaneh", array()) == 1)) {
            // line 127
            echo "                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            ";
        } else {
            // line 131
            echo "                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            ";
        }
        // line 135
        echo "                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">وجود مصالح در آبخور</th>
                                ";
        // line 138
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 138, $this->getSourceContext()); })()), "masalehDarAbkhor", array()) == 1)) {
            // line 139
            echo "                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            ";
        } else {
            // line 143
            echo "                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            ";
        }
        // line 147
        echo "                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">سرگیر بودن شاخه های زیر ۲ متر</th>
                                ";
        // line 150
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 150, $this->getSourceContext()); })()), "sargirBodanShakheh", array()) == 1)) {
            // line 151
            echo "                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            ";
        } else {
            // line 155
            echo "                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            ";
        }
        // line 159
        echo "                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">کج بودن بیشتر از سی درجه</th>
                                ";
        // line 162
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 162, $this->getSourceContext()); })()), "kajBodan", array()) == 1)) {
            // line 163
            echo "                                <td style=\"text-align: center;\">
                                    بله
                                </td> 
                            ";
        } else {
            // line 167
            echo "                                <td style=\"text-align: center;\">
                                    خیر
                                </td>
                            ";
        }
        // line 171
        echo "                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">نوع آبیاری</th>
                            <td>";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 174, $this->getSourceContext()); })()), "irrigation", array()), "name", array()), "html", null, true);
        echo "</td>    
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">وضعیت آبخور</th>
                                ";
        // line 178
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 178, $this->getSourceContext()); })()), "abkhor", array()) == 1)) {
            // line 179
            echo "                                <td style=\"text-align: center;\">
                                    نامناسب
                                </td> 
                            ";
        } else {
            // line 183
            echo "                                <td style=\"text-align: center;\">
                                    مناسب
                                </td>
                            ";
        }
        // line 187
        echo "                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">درگیر بودن با تاسیسات</th>
                            <td>";
        // line 190
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 190, $this->getSourceContext()); })()), "dargiriBaTasisat", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 190, $this->getSourceContext()); })()), "dargiriBaTasisat", array()), "name", array())) : ("ندارد")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">محیط سینه</th>
                            <td>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 194, $this->getSourceContext()); })()), "mohit1", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">‫بن محیط</th>
                            <td>";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 198, $this->getSourceContext()); })()), "mohit2", array()), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 208
        echo "                        <tr>
                            <th style=\"text-align: center;\">‫توضیحات ویژه‬</th>
                            <td>";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 210, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">تاریخ ثبت</th>
                            <td>";
        // line 214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pd_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 214, $this->getSourceContext()); })()), "createAt", array()))), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                ";
        // line 219
        echo "                ";
        // line 220
        echo "            </div>
            ";
        // line 235
        echo "            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-default\">
                    <div id=\"new-micropost\" class=\"panel-body\">
                        ";
        // line 238
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), 'form_start');
        echo "

                        ";
        // line 243
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 243, $this->getSourceContext()); })()), 'widget');
        echo "


                        <div id=\"uploader\"></div>
                        <button style=\"margin-top: 10px;\" id=\"share\" class=\"btn btn-success\">
                            <i class=\"fa fa-send-o\"></i> <b>ارسال</b>
                        </button>
                        ";
        // line 250
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 250, $this->getSourceContext()); })()), 'form_end');
        echo "

                    </div>
                </div>
                ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["certificate"]) || array_key_exists("certificate", $context) ? $context["certificate"] : (function () { throw new Twig_Error_Runtime('Variable "certificate" does not exist.', 254, $this->getSourceContext()); })()), "reports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 255
            echo "                    <div class=\"media\">
                        <a href=\"#\" class=\"pull-left\">
                            ";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 258
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("upload/certificate/report/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "id", array())) . "/") . "thumb-") . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array())) . ".jpeg")), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\" style=\"height:auto; width: 150px;\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "                        </a>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">";
            // line 262
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "user", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "user", array()), "username", array())) : ("شهروند")), "html", null, true);
            echo "
                            </h4>
                            <small>";
            // line 264
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pd_format')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "createAt", array()))), "html", null, true);
            echo "</small>
                            <p>";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "comment", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "            </div>
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> درخت روی روی نقشه</h3>
                    </div>
                    <div class=\"panel-body\">

                        <div id=\"map\"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_a4814f6584ba6f8b71fa007783727987680390fa16c2e562c37520c9ced7fbfc->leave($__internal_a4814f6584ba6f8b71fa007783727987680390fa16c2e562c37520c9ced7fbfc_prof);

    }

    // line 287
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04d2ac7c6eedea2b310d6f3cef6f79eced48c1d9e4cbdc93b125ecc0cba1aae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d2ac7c6eedea2b310d6f3cef6f79eced48c1d9e4cbdc93b125ecc0cba1aae9->enter($__internal_04d2ac7c6eedea2b310d6f3cef6f79eced48c1d9e4cbdc93b125ecc0cba1aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 288
        echo "    ";
        // line 289
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fine-uploader/fine-uploader-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/timeline.css"), "html", null, true);
        echo "\">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            ";
        // line 298
        echo "            ";
        // line 299
        echo "            ";
        // line 300
        echo "            padding: 100% 0 100% 0;
            ";
        // line 302
        echo "        }
        .test{

        }
    </style>

";
        
        $__internal_04d2ac7c6eedea2b310d6f3cef6f79eced48c1d9e4cbdc93b125ecc0cba1aae9->leave($__internal_04d2ac7c6eedea2b310d6f3cef6f79eced48c1d9e4cbdc93b125ecc0cba1aae9_prof);

    }

    // line 310
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2700efd50954025d66ed0e87175df720b01f1387d341b046c7a542955c8ea1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2700efd50954025d66ed0e87175df720b01f1387d341b046c7a542955c8ea1e4->enter($__internal_2700efd50954025d66ed0e87175df720b01f1387d341b046c7a542955c8ea1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 311
        echo "
    ";
        // line 312
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fine-uploader/jquery.fine-uploader.js"), "html", null, true);
        echo "\"></script>
    <script>
        var url = \"";
        // line 315
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
        ";
        // line 337
        echo "            var myLatLng = {lat: 29.627801, lng: 52.519015};

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 17
            });

        ";
        // line 349
        echo "
            var infoWindow = new google.maps.InfoWindow({map: map});
        }

    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAPsJRskGHX6M4BjWK1w20FgujkRNEyj2U&callback=initMap\">
    </script>


    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/paper.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/handlebars-v2.0.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeline.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_2700efd50954025d66ed0e87175df720b01f1387d341b046c7a542955c8ea1e4->leave($__internal_2700efd50954025d66ed0e87175df720b01f1387d341b046c7a542955c8ea1e4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/TreeCertificate:certificateReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 363,  580 => 362,  576 => 361,  571 => 359,  559 => 349,  550 => 337,  526 => 315,  521 => 313,  517 => 312,  514 => 311,  508 => 310,  495 => 302,  492 => 300,  490 => 299,  488 => 298,  480 => 292,  476 => 291,  472 => 290,  467 => 289,  465 => 288,  459 => 287,  435 => 269,  425 => 265,  421 => 264,  416 => 262,  412 => 260,  403 => 258,  399 => 257,  395 => 255,  391 => 254,  384 => 250,  373 => 243,  368 => 238,  363 => 235,  360 => 220,  358 => 219,  351 => 214,  344 => 210,  340 => 208,  335 => 198,  328 => 194,  321 => 190,  316 => 187,  310 => 183,  304 => 179,  302 => 178,  295 => 174,  290 => 171,  284 => 167,  278 => 163,  276 => 162,  271 => 159,  265 => 155,  259 => 151,  257 => 150,  252 => 147,  246 => 143,  240 => 139,  238 => 138,  233 => 135,  227 => 131,  221 => 127,  219 => 126,  212 => 122,  205 => 118,  196 => 114,  189 => 110,  179 => 103,  175 => 102,  169 => 101,  165 => 99,  156 => 97,  152 => 96,  139 => 86,  129 => 78,  123 => 77,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block head %}
    <script type=\"text/template\" id=\"qq-template-gallery\">
        <div class=\"qq-uploader-selector qq-uploader qq-gallery\" qq-drop-area-text=\"گزارش تصویری\">
        <div class=\"qq-total-progress-bar-container-selector qq-total-progress-bar-container\">
        <div role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar\"></div>
        </div>
        <div class=\"qq-upload-drop-area-selector qq-upload-drop-area\" qq-hide-dropzone>
        <span class=\"qq-upload-drop-area-text-selector\"></span>
        </div>
        <div class=\"qq-upload-button-selector qq-upload-button\">
        <div>بارگزاری عکس</div>
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
    <div style=\"margin-top: 40px;\" class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">جست و جو
                    <small>درخت</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{path(\"homepage\")}}\">صفحه اصلی</a>
                    </li>
                    <li class=\"active\">ثبت گزارش</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-lg-4 col-md-4\">
                <div style=\"border: 2px solid #666666; border-bottom: none;\" class=\"card\">
                    {%for image in certificate.images%}
                        <img src=\"{{asset('upload/certificate/' ~ certificate.id ~ \"/\"~ \"thumb-\" ~ image.name ~ \".jpeg\")}}\" class=\"img-thumbnail\" alt=\"\">
                    {%endfor%}

                    <div class=\"about\">
                        <h3 class=\"name\"><a href=\"{{path('app_tree_show',{'id':certificate.tree.id})}}\">{{certificate.tree.name}}</h3></a>
                        <h5 class=\"username\">{{certificate.id}}</h5>
                        <label id=\"location\"><i class=\"fa fa-map-marker\"></i> {{certificate.address}}</label>
                    </div>
                </div>
                <table style=\"border: 2px solid #666666; border-top: none;\" style=\"text-align: center;\" class=\"table table-bordered table-hover table-striped\">
                    <tbody>
                        <tr>
                            <th style=\"text-align: center;\">کد پلاک درخت</th>
                            <td>{{certificate.unicId}}</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">نام درخت</th>
                            <td><a href=\"{{path('app_tree_show',{'id':certificate.tree.id})}}\">{{certificate.tree.name}}</a></td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">موقعیت درخت</th>
                            <td>{{certificate.treeLocation ? certificate.treeLocation.name : \"\"}}</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">وضعیت درخت</th>
                            <td>{{certificate.treeStatus.name}}</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">خالی شدگی تنه</th>
                                {%if certificate.khaliShodegiTaneh == 1%}
                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            {%else%}
                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            {%endif%}
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">وجود مصالح در آبخور</th>
                                {%if certificate.masalehDarAbkhor == 1%}
                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            {%else%}
                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            {%endif%}
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">سرگیر بودن شاخه های زیر ۲ متر</th>
                                {%if certificate.sargirBodanShakheh == 1%}
                                <td style=\"text-align: center;\">
                                    دارد
                                </td> 
                            {%else%}
                                <td style=\"text-align: center;\">
                                    ندارد
                                </td>
                            {%endif%}
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">کج بودن بیشتر از سی درجه</th>
                                {%if certificate.kajBodan == 1%}
                                <td style=\"text-align: center;\">
                                    بله
                                </td> 
                            {%else%}
                                <td style=\"text-align: center;\">
                                    خیر
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
                            <th style=\"text-align: center;\">محیط سینه</th>
                            <td>{{certificate.mohit1}}</td>
                        </tr>
                        <tr>
                            <th style=\"text-align: center;\">‫بن محیط</th>
                            <td>{{certificate.mohit2}}</td>
                        </tr>
                        {#                        <tr>
                                                    <th style=\"text-align: center;\">نام و نام خانوادگی سرپرست</th>
                                                    <td>{{certificate.supervisor}}</td>
                                                </tr>
                                                <tr>
                                                    <th style=\"text-align: center;\">شماره موبایل</th>
                                                    <td>{{certificate.phoneNumber}}</td>
                                                </tr>#}
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
            {#            <div class=\"col-lg-3 col-md-3\">
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
            
                        </div>#}
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-default\">
                    <div id=\"new-micropost\" class=\"panel-body\">
                        {{form_start(form)}}

                        {# <div class=\"form-group\">
                             <textarea rows=\"1\" cols=\"10\" class=\"form-control\" placeholder=\"Compose Micropost\"></textarea>
                         </div>#}
                        {{form_widget(form)}}


                        <div id=\"uploader\"></div>
                        <button style=\"margin-top: 10px;\" id=\"share\" class=\"btn btn-success\">
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
                            <h4 class=\"media-heading\">{{report.user ? report.user.username : \"شهروند\"}}
                            </h4>
                            <small>{{report.createAt|pd_format}}</small>
                            <p>{{report.comment}}</p>
                        </div>
                    </div>
                {%endfor%}
            </div>
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> درخت روی روی نقشه</h3>
                    </div>
                    <div class=\"panel-body\">

                        <div id=\"map\"></div>

                    </div>
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
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            {#   height: 35%;#}
            {#            width: 35%;#}
            {#            z-index: 1000000;#}
            padding: 100% 0 100% 0;
            {#            display: block;#}
        }
        .test{

        }
    </style>

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
        {#            var myTree = {lat:{{certificate.lat}}, lng:{{certificate.lng}} };#}
            var myLatLng = {lat: 29.627801, lng: 52.519015};

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 17
            });

        {#            var marker = new google.maps.Marker({
                        position: myTree,
                        map: map,
                        title: 'Hello World!'
                    });#}

            var infoWindow = new google.maps.InfoWindow({map: map});
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

", "AppBundle:User/TreeCertificate:certificateReport.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/TreeCertificate/certificateReport.html.twig");
    }
}
