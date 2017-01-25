<?php

/* BraincraftedBootstrapBundle:Form:bootstrap.html.twig */
class __TwigTemplate_591d244a1effa55e9302b7b6408f9213583b108178f1a901e975e6bfe9c0b7b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "BraincraftedBootstrapBundle:Form:bootstrap.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'integer_widget' => array($this, 'block_integer_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'url_widget' => array($this, 'block_url_widget'),
                'search_widget' => array($this, 'block_search_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'password_widget' => array($this, 'block_password_widget'),
                'hidden_widget' => array($this, 'block_hidden_widget'),
                'email_widget' => array($this, 'block_email_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'bs_static_widget' => array($this, 'block_bs_static_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db6c6926d9cbac2475f0e1d0bba75d944c81d48e50f1df118308048989256b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db6c6926d9cbac2475f0e1d0bba75d944c81d48e50f1df118308048989256b6->enter($__internal_3db6c6926d9cbac2475f0e1d0bba75d944c81d48e50f1df118308048989256b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle:Form:bootstrap.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('file_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('radio_row', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 375
        echo "
";
        // line 376
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('date_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('time_widget', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('number_widget', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 445
        echo "
";
        // line 446
        $this->displayBlock('money_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('url_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('search_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('password_widget', $context, $blocks);
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('email_widget', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('button_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 528
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('bs_static_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 547
        echo "
";
        // line 548
        $this->displayBlock('form_label', $context, $blocks);
        // line 590
        echo "
";
        // line 591
        $this->displayBlock('button_label', $context, $blocks);
        // line 592
        echo "
";
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_row', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 683
        echo "
";
        // line 684
        $this->displayBlock('form_help', $context, $blocks);
        // line 695
        echo "
";
        // line 696
        $this->displayBlock('button_row', $context, $blocks);
        // line 730
        echo "
";
        // line 731
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 738
        echo "
";
        // line 740
        echo "
";
        // line 741
        $this->displayBlock('form', $context, $blocks);
        // line 748
        echo "
";
        // line 749
        $this->displayBlock('form_start', $context, $blocks);
        // line 794
        echo "
";
        // line 795
        $this->displayBlock('form_end', $context, $blocks);
        // line 819
        echo "
";
        // line 820
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 825
        echo "
";
        // line 826
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 832
        echo "
";
        // line 833
        $this->displayBlock('form_errors', $context, $blocks);
        // line 857
        echo "
";
        // line 858
        $this->displayBlock('form_rest', $context, $blocks);
        // line 867
        echo "
";
        // line 869
        echo "
";
        // line 870
        $this->displayBlock('form_rows', $context, $blocks);
        // line 893
        echo "
";
        // line 894
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 900
        echo "
";
        // line 901
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 911
        echo "
";
        // line 912
        $this->displayBlock('button_attributes', $context, $blocks);
        
        $__internal_3db6c6926d9cbac2475f0e1d0bba75d944c81d48e50f1df118308048989256b6->leave($__internal_3db6c6926d9cbac2475f0e1d0bba75d944c81d48e50f1df118308048989256b6_prof);

    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_36dfd027d89ef0b8abf0d9ecaea019ffb4daac65014c8451c3a5db1e003e9ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dfd027d89ef0b8abf0d9ecaea019ffb4daac65014c8451c3a5db1e003e9ce6->enter($__internal_36dfd027d89ef0b8abf0d9ecaea019ffb4daac65014c8451c3a5db1e003e9ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 12
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_36dfd027d89ef0b8abf0d9ecaea019ffb4daac65014c8451c3a5db1e003e9ce6->leave($__internal_36dfd027d89ef0b8abf0d9ecaea019ffb4daac65014c8451c3a5db1e003e9ce6_prof);

    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f7636e19de02d9fec5da71f5ef4f3f545dfcdb8b071ab06e6ecfe53e9dd045dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7636e19de02d9fec5da71f5ef4f3f545dfcdb8b071ab06e6ecfe53e9dd045dc->enter($__internal_f7636e19de02d9fec5da71f5ef4f3f545dfcdb8b071ab06e6ecfe53e9dd045dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 17, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 18
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 18, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 19
        echo "
        ";
        // line 20
        if (( !array_key_exists("simple_col", $context) && $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getSimpleCol())) {
            // line 21
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getSimpleCol();
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 23, $this->getSourceContext()); })()), "simple_col", array())))) {
            // line 24
            echo "            ";
            $context["simple_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 24, $this->getSourceContext()); })()), "simple_col", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 26, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 27
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 27, $this->getSourceContext()); })()), "col_size", array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 29, $this->getSourceContext()); })()), "style", array())))) {
            // line 30
            echo "            ";
            $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 30, $this->getSourceContext()); })()), "style", array());
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ((array_key_exists("simple_col", $context) && (isset($context["simple_col"]) || array_key_exists("simple_col", $context) ? $context["simple_col"] : (function () { throw new Twig_Error_Runtime('Variable "simple_col" does not exist.', 33, $this->getSourceContext()); })()))) {
            // line 34
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) || array_key_exists("simple_col", $context) ? $context["simple_col"] : (function () { throw new Twig_Error_Runtime('Variable "simple_col" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 37, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 38
        echo "
        ";
        // line 39
        if (((((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 39, $this->getSourceContext()); })()) == "inline") && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "placeholder", array(), "any", true, true) || twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), "placeholder", array())))) &&  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 39, $this->getSourceContext()); })()) === false))) {
            // line 40
            echo "            ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 40, $this->getSourceContext()); })()))) {
                // line 41
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 41, $this->getSourceContext()); })()), array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 41, $this->getSourceContext()); })()))));
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 43, $this->getSourceContext()); })()), array("placeholder" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 43, $this->getSourceContext()); })())));
                // line 44
                echo "            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ((array_key_exists("static_control", $context) && ((isset($context["static_control"]) || array_key_exists("static_control", $context) ? $context["static_control"] : (function () { throw new Twig_Error_Runtime('Variable "static_control" does not exist.', 47, $this->getSourceContext()); })()) == true))) {
            // line 48
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control-static"))));
            // line 49
            echo "            <p id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 49, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "</p>";
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "            <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 52, $this->getSourceContext()); })()))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
            }
            echo ">";
        }
        // line 54
        echo "        ";
        if (array_key_exists("simple_col", $context)) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f7636e19de02d9fec5da71f5ef4f3f545dfcdb8b071ab06e6ecfe53e9dd045dc->leave($__internal_f7636e19de02d9fec5da71f5ef4f3f545dfcdb8b071ab06e6ecfe53e9dd045dc_prof);

    }

    // line 60
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_218124ce224694f129130e58d286ca02e064ef6e59fdfaccac1f58d9007f6d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218124ce224694f129130e58d286ca02e064ef6e59fdfaccac1f58d9007f6d98->enter($__internal_218124ce224694f129130e58d286ca02e064ef6e59fdfaccac1f58d9007f6d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 63
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "parent", array()))) {
            // line 64
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 66
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_218124ce224694f129130e58d286ca02e064ef6e59fdfaccac1f58d9007f6d98->leave($__internal_218124ce224694f129130e58d286ca02e064ef6e59fdfaccac1f58d9007f6d98_prof);

    }

    // line 72
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f923afbe65b47041d5f20ee41f9d594862b91d5336e6f2712b2cfb32d5868446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f923afbe65b47041d5f20ee41f9d594862b91d5336e6f2712b2cfb32d5868446->enter($__internal_f923afbe65b47041d5f20ee41f9d594862b91d5336e6f2712b2cfb32d5868446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 75
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 75, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 75, $this->getSourceContext()); })()), 'row')));
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f923afbe65b47041d5f20ee41f9d594862b91d5336e6f2712b2cfb32d5868446->leave($__internal_f923afbe65b47041d5f20ee41f9d594862b91d5336e6f2712b2cfb32d5868446_prof);

    }

    // line 81
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        $__internal_94d39117d009df362c3d447fadc39f8bb3ce1b724b0a3ec8054b2d02b2378004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d39117d009df362c3d447fadc39f8bb3ce1b724b0a3ec8054b2d02b2378004->enter($__internal_94d39117d009df362c3d447fadc39f8bb3ce1b724b0a3ec8054b2d02b2378004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_collection_widget"));

        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 84
            echo "            ";
            $context["prototype_vars"] = array();
            // line 85
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 86
                echo "                ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) || array_key_exists("prototype_vars", $context) ? $context["prototype_vars"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_vars" does not exist.', 86, $this->getSourceContext()); })()), array("style" => (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 86, $this->getSourceContext()); })())));
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 88, $this->getSourceContext()); })()), 'widget', (isset($context["prototype_vars"]) || array_key_exists("prototype_vars", $context) ? $context["prototype_vars"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_vars" does not exist.', 88, $this->getSourceContext()); })()))) . "</div>");
            // line 89
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), "vars", array()), "allow_delete", array())) {
                // line 90
                echo "                ";
                $context["prototype_html"] = ((((((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_html" does not exist.', 90, $this->getSourceContext()); })()) . "<div class=\"col-xs-") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 90, $this->getSourceContext()); })())), "html", null, true))) . "</a></div>");
                // line 91
                echo "            ";
            }
            // line 92
            echo "            ";
            $context["prototype_html"] = (("<div class=\"row\">" . (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_html" does not exist.', 92, $this->getSourceContext()); })())) . "</div>");
            // line 93
            echo "
            ";
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("data-prototype" => (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_html" does not exist.', 94, $this->getSourceContext()); })())));
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 95, $this->getSourceContext()); })()), array("data-prototype-name" => (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_name" does not exist.', 95, $this->getSourceContext()); })())));
            // line 96
            echo "        ";
        }
        // line 97
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
                                ";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                            </div>
                            ";
            // line 106
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "vars", array()), "allow_delete", array())) {
                // line 107
                echo "                                <div class=\"col-xs-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 108, $this->getSourceContext()); })())), "html", null, true));
                echo "</a>
                                </div>
                            ";
            }
            // line 111
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </ul>
            ";
        // line 115
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "vars", array()), "allow_add", array())) {
            // line 116
            echo "                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_name" does not exist.', 116, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "vars", array()), "add_button_text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 116, $this->getSourceContext()); })())), "html", null, true));
            echo "</a>
            ";
        }
        // line 118
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_94d39117d009df362c3d447fadc39f8bb3ce1b724b0a3ec8054b2d02b2378004->leave($__internal_94d39117d009df362c3d447fadc39f8bb3ce1b724b0a3ec8054b2d02b2378004_prof);

    }

    // line 122
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_194600a9f6bf39ac82e038b22504266ff2fa5f82edb350422448e17bfdacbc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194600a9f6bf39ac82e038b22504266ff2fa5f82edb350422448e17bfdacbc8d->enter($__internal_194600a9f6bf39ac82e038b22504266ff2fa5f82edb350422448e17bfdacbc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 123
        echo "    ";
        ob_start();
        // line 124
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 124, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 125
        echo "
        ";
        // line 126
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 126, $this->getSourceContext()); })()), "simple_col", array())))) {
            // line 127
            echo "            ";
            $context["simple_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 127, $this->getSourceContext()); })()), "simple_col", array());
            // line 128
            echo "        ";
        }
        // line 129
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 129, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 130
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 130, $this->getSourceContext()); })()), "col_size", array());
            // line 131
            echo "        ";
        }
        // line 132
        echo "
        ";
        // line 133
        if (array_key_exists("simple_col", $context)) {
            // line 134
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 134, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) || array_key_exists("simple_col", $context) ? $context["simple_col"] : (function () { throw new Twig_Error_Runtime('Variable "simple_col" does not exist.', 134, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 137, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 138
        echo "
        <textarea ";
        // line 139
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>

        ";
        // line 141
        if (array_key_exists("simple_col", $context)) {
            // line 142
            echo "            </div>
        ";
        }
        // line 144
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_194600a9f6bf39ac82e038b22504266ff2fa5f82edb350422448e17bfdacbc8d->leave($__internal_194600a9f6bf39ac82e038b22504266ff2fa5f82edb350422448e17bfdacbc8d_prof);

    }

    // line 147
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_c17abafc10a9d323543e30575c6100d67cdc1aedcb307c9b2bd29022653edbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17abafc10a9d323543e30575c6100d67cdc1aedcb307c9b2bd29022653edbe4->enter($__internal_c17abafc10a9d323543e30575c6100d67cdc1aedcb307c9b2bd29022653edbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 148
        echo "    ";
        ob_start();
        // line 149
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 149, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 150
        echo "
        ";
        // line 151
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 151, $this->getSourceContext()); })()), "simple_col", array())))) {
            // line 152
            echo "            ";
            $context["simple_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 152, $this->getSourceContext()); })()), "simple_col", array());
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 155, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 156
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 156, $this->getSourceContext()); })()), "col_size", array());
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 159
        if (array_key_exists("simple_col", $context)) {
            // line 160
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 160, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) || array_key_exists("simple_col", $context) ? $context["simple_col"] : (function () { throw new Twig_Error_Runtime('Variable "simple_col" does not exist.', 160, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 162
        echo "
        <input type=\"file\" ";
        // line 163
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">

        ";
        // line 165
        if (array_key_exists("simple_col", $context)) {
            // line 166
            echo "            </div>
        ";
        }
        // line 168
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c17abafc10a9d323543e30575c6100d67cdc1aedcb307c9b2bd29022653edbe4->leave($__internal_c17abafc10a9d323543e30575c6100d67cdc1aedcb307c9b2bd29022653edbe4_prof);

    }

    // line 171
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_4660834c9f61bdf08914b4fae15637a85c97e5c96818a189855f4fc04144f985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4660834c9f61bdf08914b4fae15637a85c97e5c96818a189855f4fc04144f985->enter($__internal_4660834c9f61bdf08914b4fae15637a85c97e5c96818a189855f4fc04144f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 172
        echo "    ";
        ob_start();
        // line 173
        echo "        ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 173, $this->getSourceContext()); })())) {
            // line 174
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 176
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 178
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4660834c9f61bdf08914b4fae15637a85c97e5c96818a189855f4fc04144f985->leave($__internal_4660834c9f61bdf08914b4fae15637a85c97e5c96818a189855f4fc04144f985_prof);

    }

    // line 181
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ef0e643621945cba406aa2cc96dbd9dc9907664a811d65942553bd9e5971545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0e643621945cba406aa2cc96dbd9dc9907664a811d65942553bd9e5971545a->enter($__internal_ef0e643621945cba406aa2cc96dbd9dc9907664a811d65942553bd9e5971545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 182
        echo "    ";
        ob_start();
        // line 183
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "                ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 185, $this->getSourceContext()); })())) {
                // line 186
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "inline", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 186, $this->getSourceContext()); })()), "inline", array())), "label_attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 186, $this->getSourceContext()); })())));
                echo "
                ";
            } else {
                // line 188
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "inline", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 188, $this->getSourceContext()); })()), "inline", array())), "label_attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 188, $this->getSourceContext()); })())));
                echo "
                ";
            }
            // line 190
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef0e643621945cba406aa2cc96dbd9dc9907664a811d65942553bd9e5971545a->leave($__internal_ef0e643621945cba406aa2cc96dbd9dc9907664a811d65942553bd9e5971545a_prof);

    }

    // line 195
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dc8a2791df2f319c290f5e11f681cb68453b0b52e9c70d7e34e0b54e16a64483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a2791df2f319c290f5e11f681cb68453b0b52e9c70d7e34e0b54e16a64483->enter($__internal_dc8a2791df2f319c290f5e11f681cb68453b0b52e9c70d7e34e0b54e16a64483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 196
        echo "    ";
        ob_start();
        // line 197
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 197, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 198
        echo "
        <select ";
        // line 199
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 199, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 200
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 200, $this->getSourceContext()); })()))) {
            // line 201
            echo "                <option ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 201, $this->getSourceContext()); })())) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 201, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 201, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 201, $this->getSourceContext()); })())), "html", null, true);
            echo "</option>
            ";
        }
        // line 203
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 203, $this->getSourceContext()); })())) > 0)) {
            // line 204
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 204, $this->getSourceContext()); })());
            // line 205
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 206
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 206, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 206, $this->getSourceContext()); })())))) {
                // line 207
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 207, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>
                ";
            }
            // line 209
            echo "            ";
        }
        // line 210
        echo "            ";
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 210, $this->getSourceContext()); })());
        // line 211
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc8a2791df2f319c290f5e11f681cb68453b0b52e9c70d7e34e0b54e16a64483->leave($__internal_dc8a2791df2f319c290f5e11f681cb68453b0b52e9c70d7e34e0b54e16a64483_prof);

    }

    // line 216
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_1842369bdec0bf0fc346731ca672b0928680115bd0142d113fd6eccc702809a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842369bdec0bf0fc346731ca672b0928680115bd0142d113fd6eccc702809a3->enter($__internal_1842369bdec0bf0fc346731ca672b0928680115bd0142d113fd6eccc702809a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 217
        echo "    ";
        ob_start();
        // line 218
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 218, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 219
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 220
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("choice_translation_domain", $context)) ? (((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 220, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 220, $this->getSourceContext()); })()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 220, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                    ";
                // line 221
                $context["options"] = $context["choice"];
                // line 222
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 225
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 225, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((array_key_exists("choice_translation_domain", $context)) ? (((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 225, $this->getSourceContext()); })()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>
            ";
            }
            // line 227
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1842369bdec0bf0fc346731ca672b0928680115bd0142d113fd6eccc702809a3->leave($__internal_1842369bdec0bf0fc346731ca672b0928680115bd0142d113fd6eccc702809a3_prof);

    }

    // line 231
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bd03dbd6995dcc347bb030ef9f114fc84b08efcedf81edd44b42da7c251c40ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd03dbd6995dcc347bb030ef9f114fc84b08efcedf81edd44b42da7c251c40ed->enter($__internal_bd03dbd6995dcc347bb030ef9f114fc84b08efcedf81edd44b42da7c251c40ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 232
        echo "    ";
        ob_start();
        // line 233
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 233, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 234
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 234, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 235
        echo "
        ";
        // line 236
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 236, $this->getSourceContext()); })()), "label_col", array())))) {
            // line 237
            echo "            ";
            $context["label_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 237, $this->getSourceContext()); })()), "label_col", array());
            // line 238
            echo "        ";
        }
        // line 239
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 239, $this->getSourceContext()); })()), "widget_col", array())))) {
            // line 240
            echo "            ";
            $context["widget_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 240, $this->getSourceContext()); })()), "widget_col", array());
            // line 241
            echo "        ";
        }
        // line 242
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 242, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 243
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 243, $this->getSourceContext()); })()), "col_size", array());
            // line 244
            echo "        ";
        }
        // line 245
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 245, $this->getSourceContext()); })()), "style", array())))) {
            // line 246
            echo "            ";
            $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 246, $this->getSourceContext()); })()), "style", array());
            // line 247
            echo "        ";
        }
        // line 248
        echo "
        ";
        // line 249
        $context["class"] = "";
        // line 250
        echo "        ";
        if ((array_key_exists("align_with_widget", $context) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 251
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 251, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
            // line 252
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 252, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 253
            echo "            ";
            $context["class"] = ((((((("col-" . (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 253, $this->getSourceContext()); })())) . "-") . (isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 253, $this->getSourceContext()); })())) . " col-") . (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 253, $this->getSourceContext()); })())) . "-offset-") . (isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 253, $this->getSourceContext()); })()));
            // line 254
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 254, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 255
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 255, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 256
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) || array_key_exists("no_form_group", $context) ? $context["no_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "no_form_group" does not exist.', 256, $this->getSourceContext()); })()) == false))) {
            // line 257
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 257, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        ob_start();
        // line 261
        echo "        ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 261, $this->getSourceContext()); })()) === false)) {
            // line 262
            echo "            ";
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 262, $this->getSourceContext()); })())) {
                // line 263
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 263, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 263, $this->getSourceContext()); })())));
                // line 264
                echo "            ";
            }
            // line 265
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 265, $this->getSourceContext()); })()))) {
                // line 266
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 266, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " checkbox-inline"))));
                // line 267
                echo "            ";
            }
            // line 268
            echo "            ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 268, $this->getSourceContext()); })())) {
                // line 269
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 269, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 270
                echo "            ";
            }
            // line 271
            echo "            ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 271, $this->getSourceContext()); })()))) {
                // line 272
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 272, $this->getSourceContext()); })()));
                // line 273
                echo "            ";
            }
            // line 274
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 275
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
            // line 276
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 276, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 276, $this->getSourceContext()); })()));
            // line 277
            echo "</label>
        ";
        } else {
            // line 279
            echo "            ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
        }
        // line 281
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 281, $this->getSourceContext()); })()), 'errors');
        echo "
        ";
        $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 283
        echo "
        ";
        // line 284
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 284, $this->getSourceContext()); })()))) {
            // line 285
            echo "            ";
            echo (isset($context["checkboxdata"]) || array_key_exists("checkboxdata", $context) ? $context["checkboxdata"] : (function () { throw new Twig_Error_Runtime('Variable "checkboxdata" does not exist.', 285, $this->getSourceContext()); })());
            echo "
        ";
        } else {
            // line 287
            echo "            <div class=\"checkbox\">";
            echo (isset($context["checkboxdata"]) || array_key_exists("checkboxdata", $context) ? $context["checkboxdata"] : (function () { throw new Twig_Error_Runtime('Variable "checkboxdata" does not exist.', 287, $this->getSourceContext()); })());
            echo "</div>
        ";
        }
        // line 289
        echo "
        ";
        // line 290
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 292
        if ((array_key_exists("align_with_widget", $context) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 293
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 295
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) || array_key_exists("no_form_group", $context) ? $context["no_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "no_form_group" does not exist.', 295, $this->getSourceContext()); })()) == false))) {
            // line 296
            echo "            </div>
        ";
        }
        // line 298
        echo "
        ";
        // line 299
        if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 299, $this->getSourceContext()); })()) == "inline")) {
            echo "&nbsp;";
        }
        // line 300
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd03dbd6995dcc347bb030ef9f114fc84b08efcedf81edd44b42da7c251c40ed->leave($__internal_bd03dbd6995dcc347bb030ef9f114fc84b08efcedf81edd44b42da7c251c40ed_prof);

    }

    // line 303
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e8010b9b77386fc6a41778b7e3d31be0b3c15847a40cefa33773c65c14d56236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8010b9b77386fc6a41778b7e3d31be0b3c15847a40cefa33773c65c14d56236->enter($__internal_e8010b9b77386fc6a41778b7e3d31be0b3c15847a40cefa33773c65c14d56236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 304
        echo "    ";
        ob_start();
        // line 305
        echo "        ";
        $context["class"] = "";
        // line 306
        echo "
        ";
        // line 307
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 307, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 308
        echo "
        ";
        // line 309
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 309, $this->getSourceContext()); })()), "label_col", array())))) {
            // line 310
            echo "            ";
            $context["label_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 310, $this->getSourceContext()); })()), "label_col", array());
            // line 311
            echo "        ";
        }
        // line 312
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 312, $this->getSourceContext()); })()), "widget_col", array())))) {
            // line 313
            echo "            ";
            $context["widget_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 313, $this->getSourceContext()); })()), "widget_col", array());
            // line 314
            echo "        ";
        }
        // line 315
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 315, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 316
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 316, $this->getSourceContext()); })()), "col_size", array());
            // line 317
            echo "        ";
        }
        // line 318
        echo "
        ";
        // line 319
        if ((array_key_exists("align_with_widget", $context) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 320
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 320, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
            // line 321
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 321, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 322
            echo "            ";
            $context["class"] = (((((((" col-" . (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 322, $this->getSourceContext()); })())) . "-") . (isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 322, $this->getSourceContext()); })())) . " col-") . (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 322, $this->getSourceContext()); })())) . "-offset-") . (isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 322, $this->getSourceContext()); })()));
            // line 323
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 323, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 324
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 325
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) || array_key_exists("no_form_group", $context) ? $context["no_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "no_form_group" does not exist.', 325, $this->getSourceContext()); })()) == false))) {
            // line 326
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 328
        echo "
        ";
        // line 329
        ob_start();
        // line 330
        echo "        ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 330, $this->getSourceContext()); })()) === false)) {
            // line 331
            echo "            ";
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 331, $this->getSourceContext()); })())) {
                // line 332
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 332, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 332, $this->getSourceContext()); })())));
                // line 333
                echo "            ";
            }
            // line 334
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 334, $this->getSourceContext()); })()))) {
                // line 335
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 335, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " radio-inline"))));
                // line 336
                echo "            ";
            }
            // line 337
            echo "            ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 337, $this->getSourceContext()); })())) {
                // line 338
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 338, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 339
                echo "            ";
            }
            // line 340
            echo "            ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 340, $this->getSourceContext()); })()))) {
                // line 341
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 341, $this->getSourceContext()); })()));
                // line 342
                echo "            ";
            }
            // line 343
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 343, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 344
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 345
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 345, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 345, $this->getSourceContext()); })()));
            // line 346
            echo "</label>
        ";
        } else {
            // line 348
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 350
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 350, $this->getSourceContext()); })()), 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 352
        echo "
        ";
        // line 353
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 353, $this->getSourceContext()); })()))) {
            // line 354
            echo "            ";
            echo (isset($context["radiodata"]) || array_key_exists("radiodata", $context) ? $context["radiodata"] : (function () { throw new Twig_Error_Runtime('Variable "radiodata" does not exist.', 354, $this->getSourceContext()); })());
            echo "
        ";
        } else {
            // line 356
            echo "            <div class=\"radio\">";
            echo (isset($context["radiodata"]) || array_key_exists("radiodata", $context) ? $context["radiodata"] : (function () { throw new Twig_Error_Runtime('Variable "radiodata" does not exist.', 356, $this->getSourceContext()); })());
            echo "</div>
        ";
        }
        // line 358
        echo "
        ";
        // line 359
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 361
        if ((array_key_exists("align_with_widget", $context) || twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 362
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 364
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) || array_key_exists("no_form_group", $context) ? $context["no_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "no_form_group" does not exist.', 364, $this->getSourceContext()); })()) == false))) {
            // line 365
            echo "            </div>
        ";
        }
        // line 367
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e8010b9b77386fc6a41778b7e3d31be0b3c15847a40cefa33773c65c14d56236->leave($__internal_e8010b9b77386fc6a41778b7e3d31be0b3c15847a40cefa33773c65c14d56236_prof);

    }

    // line 370
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_103436751f51924ebb6c8dec45d5b4527a589091a1f355d5898bf2fbed7a75d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103436751f51924ebb6c8dec45d5b4527a589091a1f355d5898bf2fbed7a75d9->enter($__internal_103436751f51924ebb6c8dec45d5b4527a589091a1f355d5898bf2fbed7a75d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 371
        echo "    ";
        ob_start();
        // line 372
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 372, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 372, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_103436751f51924ebb6c8dec45d5b4527a589091a1f355d5898bf2fbed7a75d9->leave($__internal_103436751f51924ebb6c8dec45d5b4527a589091a1f355d5898bf2fbed7a75d9_prof);

    }

    // line 376
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c4f72a6551c4caf4a6af0235167c7077eb5f30501b8a5c1c093df3353b57c5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f72a6551c4caf4a6af0235167c7077eb5f30501b8a5c1c093df3353b57c5ff->enter($__internal_c4f72a6551c4caf4a6af0235167c7077eb5f30501b8a5c1c093df3353b57c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 377
        echo "    ";
        ob_start();
        // line 378
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4f72a6551c4caf4a6af0235167c7077eb5f30501b8a5c1c093df3353b57c5ff->leave($__internal_c4f72a6551c4caf4a6af0235167c7077eb5f30501b8a5c1c093df3353b57c5ff_prof);

    }

    // line 382
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_26b64ebb28e9150bca0fb2046477cdec37afe69e7560b9d727308355a598c2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b64ebb28e9150bca0fb2046477cdec37afe69e7560b9d727308355a598c2bb->enter($__internal_26b64ebb28e9150bca0fb2046477cdec37afe69e7560b9d727308355a598c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 383
        echo "    ";
        ob_start();
        // line 384
        echo "        ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 384, $this->getSourceContext()); })()) == "single_text")) {
            // line 385
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 387
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 387, $this->getSourceContext()); })()), array("class" => "bootstrap-datetime"));
            // line 388
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 389
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 389, $this->getSourceContext()); })()), "date", array()), 'widget');
            echo "
                ";
            // line 390
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 390, $this->getSourceContext()); })()), "time", array()), 'widget');
            echo "
                ";
            // line 391
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 391, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "
                ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 392, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 395
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_26b64ebb28e9150bca0fb2046477cdec37afe69e7560b9d727308355a598c2bb->leave($__internal_26b64ebb28e9150bca0fb2046477cdec37afe69e7560b9d727308355a598c2bb_prof);

    }

    // line 398
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9a0bc655e8ffd84b31c9f8c42c666634711664bad602077c4a425ccc4a6627bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0bc655e8ffd84b31c9f8c42c666634711664bad602077c4a425ccc4a6627bd->enter($__internal_9a0bc655e8ffd84b31c9f8c42c666634711664bad602077c4a425ccc4a6627bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 399
        echo "    ";
        ob_start();
        // line 400
        echo "        ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 400, $this->getSourceContext()); })()) == "single_text")) {
            // line 401
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 403
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 403, $this->getSourceContext()); })()), array("class" => "bootstrap-date"));
            // line 404
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 405
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 405, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 406
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 406, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 407
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 407, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 408
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 408, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 409
            echo "
            </div>
        ";
        }
        // line 412
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9a0bc655e8ffd84b31c9f8c42c666634711664bad602077c4a425ccc4a6627bd->leave($__internal_9a0bc655e8ffd84b31c9f8c42c666634711664bad602077c4a425ccc4a6627bd_prof);

    }

    // line 415
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_eb6b7c4880a05facf31ba29b7b2a82594cc1d0200416f817fa7e0e50a51559db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b7c4880a05facf31ba29b7b2a82594cc1d0200416f817fa7e0e50a51559db->enter($__internal_eb6b7c4880a05facf31ba29b7b2a82594cc1d0200416f817fa7e0e50a51559db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 416
        echo "    ";
        ob_start();
        // line 417
        echo "        ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 417, $this->getSourceContext()); })()) == "single_text")) {
            // line 418
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 420
            echo "            ";
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 420, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 421
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 421, $this->getSourceContext()); })()), array("class" => "bootstrap-time"));
            // line 422
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 423
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 423, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 423, $this->getSourceContext()); })()));
            echo "
                ";
            // line 424
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 424, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 424, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 424, $this->getSourceContext()); })()));
            }
            // line 425
            echo "                ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 425, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 425, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 425, $this->getSourceContext()); })()));
            }
            // line 426
            echo "            </div>
        ";
        }
        // line 428
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb6b7c4880a05facf31ba29b7b2a82594cc1d0200416f817fa7e0e50a51559db->leave($__internal_eb6b7c4880a05facf31ba29b7b2a82594cc1d0200416f817fa7e0e50a51559db_prof);

    }

    // line 431
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_9d709b908597c5100706467a2ada4ea89b520bfdaabf0f6551cb4ae1957f4306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d709b908597c5100706467a2ada4ea89b520bfdaabf0f6551cb4ae1957f4306->enter($__internal_9d709b908597c5100706467a2ada4ea89b520bfdaabf0f6551cb4ae1957f4306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 432
        echo "    ";
        ob_start();
        // line 433
        echo "        ";
        // line 434
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 434, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 435
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9d709b908597c5100706467a2ada4ea89b520bfdaabf0f6551cb4ae1957f4306->leave($__internal_9d709b908597c5100706467a2ada4ea89b520bfdaabf0f6551cb4ae1957f4306_prof);

    }

    // line 439
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_fb90d830dd62661ab55cf95f52b3b512b200dfcf676c52b9280ff53d1e04832a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb90d830dd62661ab55cf95f52b3b512b200dfcf676c52b9280ff53d1e04832a->enter($__internal_fb90d830dd62661ab55cf95f52b3b512b200dfcf676c52b9280ff53d1e04832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 440
        echo "    ";
        ob_start();
        // line 441
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 441, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 442
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fb90d830dd62661ab55cf95f52b3b512b200dfcf676c52b9280ff53d1e04832a->leave($__internal_fb90d830dd62661ab55cf95f52b3b512b200dfcf676c52b9280ff53d1e04832a_prof);

    }

    // line 446
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ea1490c90886f1eec233b971c16b203f115ffb15b6088e732fca884370343f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1490c90886f1eec233b971c16b203f115ffb15b6088e732fca884370343f34->enter($__internal_ea1490c90886f1eec233b971c16b203f115ffb15b6088e732fca884370343f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 447
        echo "    ";
        ob_start();
        // line 448
        echo "        <div class=\"input-group\">
            ";
        // line 449
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 449, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 453
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ea1490c90886f1eec233b971c16b203f115ffb15b6088e732fca884370343f34->leave($__internal_ea1490c90886f1eec233b971c16b203f115ffb15b6088e732fca884370343f34_prof);

    }

    // line 458
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_db9bd628caf67e8f096b2807b38b52a9df3605151ee3da392774813f37815801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9bd628caf67e8f096b2807b38b52a9df3605151ee3da392774813f37815801->enter($__internal_db9bd628caf67e8f096b2807b38b52a9df3605151ee3da392774813f37815801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 459
        echo "    ";
        ob_start();
        // line 460
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 460, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 461
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db9bd628caf67e8f096b2807b38b52a9df3605151ee3da392774813f37815801->leave($__internal_db9bd628caf67e8f096b2807b38b52a9df3605151ee3da392774813f37815801_prof);

    }

    // line 465
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_481e7a978ae7435aa805c931c27f43e659f125678d4bb6e0ee4163fe8287245c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481e7a978ae7435aa805c931c27f43e659f125678d4bb6e0ee4163fe8287245c->enter($__internal_481e7a978ae7435aa805c931c27f43e659f125678d4bb6e0ee4163fe8287245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 466
        echo "    ";
        ob_start();
        // line 467
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 467, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 468
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_481e7a978ae7435aa805c931c27f43e659f125678d4bb6e0ee4163fe8287245c->leave($__internal_481e7a978ae7435aa805c931c27f43e659f125678d4bb6e0ee4163fe8287245c_prof);

    }

    // line 472
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_58281daea3aab4da943dc2ec4eac17ac30ec6d866d5567bccad2da36b30a738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58281daea3aab4da943dc2ec4eac17ac30ec6d866d5567bccad2da36b30a738b->enter($__internal_58281daea3aab4da943dc2ec4eac17ac30ec6d866d5567bccad2da36b30a738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 473
        echo "    ";
        ob_start();
        // line 474
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 474, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 475
        echo "        <div class=\"input-group\">
            ";
        // line 476
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58281daea3aab4da943dc2ec4eac17ac30ec6d866d5567bccad2da36b30a738b->leave($__internal_58281daea3aab4da943dc2ec4eac17ac30ec6d866d5567bccad2da36b30a738b_prof);

    }

    // line 482
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_0a496647c13474e21fa1567cb9eb4b26cf852ce155f56f3d892c0162389f45e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a496647c13474e21fa1567cb9eb4b26cf852ce155f56f3d892c0162389f45e1->enter($__internal_0a496647c13474e21fa1567cb9eb4b26cf852ce155f56f3d892c0162389f45e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 483
        echo "    ";
        ob_start();
        // line 484
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 484, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 485
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0a496647c13474e21fa1567cb9eb4b26cf852ce155f56f3d892c0162389f45e1->leave($__internal_0a496647c13474e21fa1567cb9eb4b26cf852ce155f56f3d892c0162389f45e1_prof);

    }

    // line 489
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_750257b76686cf904b571e6590b0b89414db91e883b61c68c4b8cfb93cf3c588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750257b76686cf904b571e6590b0b89414db91e883b61c68c4b8cfb93cf3c588->enter($__internal_750257b76686cf904b571e6590b0b89414db91e883b61c68c4b8cfb93cf3c588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 490
        echo "    ";
        ob_start();
        // line 491
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 491, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 492
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_750257b76686cf904b571e6590b0b89414db91e883b61c68c4b8cfb93cf3c588->leave($__internal_750257b76686cf904b571e6590b0b89414db91e883b61c68c4b8cfb93cf3c588_prof);

    }

    // line 496
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_7aeea2e90ee48d0923031194ba8be29b5892f4e2573adfec3ff60899b483fb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeea2e90ee48d0923031194ba8be29b5892f4e2573adfec3ff60899b483fb02->enter($__internal_7aeea2e90ee48d0923031194ba8be29b5892f4e2573adfec3ff60899b483fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 497
        echo "    ";
        ob_start();
        // line 498
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 498, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 499
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7aeea2e90ee48d0923031194ba8be29b5892f4e2573adfec3ff60899b483fb02->leave($__internal_7aeea2e90ee48d0923031194ba8be29b5892f4e2573adfec3ff60899b483fb02_prof);

    }

    // line 503
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ed583ef6030f55573bcce63c10c6c84ef20a3bcedd98cd100872354b67eddbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed583ef6030f55573bcce63c10c6c84ef20a3bcedd98cd100872354b67eddbeb->enter($__internal_ed583ef6030f55573bcce63c10c6c84ef20a3bcedd98cd100872354b67eddbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 504
        echo "    ";
        ob_start();
        // line 505
        echo "        ";
        if ((twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 505, $this->getSourceContext()); })())) &&  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 505, $this->getSourceContext()); })()) === false))) {
            // line 506
            echo "            ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 506, $this->getSourceContext()); })()));
            // line 507
            echo "        ";
        }
        // line 508
        echo "        ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 508, $this->getSourceContext()); })()) == "submit"))) {
            // line 509
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 509, $this->getSourceContext()); })()), array("class" => trim(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new Twig_Error_Runtime('Variable "button_class" does not exist.', 509, $this->getSourceContext()); })()), "primary")) : ("primary"))))));
            // line 510
            echo "        ";
        } else {
            // line 511
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 511, $this->getSourceContext()); })()), array("class" => trim(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new Twig_Error_Runtime('Variable "button_class" does not exist.', 511, $this->getSourceContext()); })()), "default")) : ("default"))))));
            // line 512
            echo "        ";
        }
        // line 513
        echo "        ";
        if ((array_key_exists("as_link", $context) && ((isset($context["as_link"]) || array_key_exists("as_link", $context) ? $context["as_link"] : (function () { throw new Twig_Error_Runtime('Variable "as_link" does not exist.', 513, $this->getSourceContext()); })()) == true))) {
            // line 514
            echo "            <a ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "icon", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 514, $this->getSourceContext()); })()), "icon", array()) != ""))) {
                echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->iconFunction(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 514, $this->getSourceContext()); })()), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 514, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 514, $this->getSourceContext()); })())), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 516
            echo "            <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 516, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "icon", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 516, $this->getSourceContext()); })()), "icon", array()) != ""))) {
                echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->iconFunction(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 516, $this->getSourceContext()); })()), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 516, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 516, $this->getSourceContext()); })())), "html", null, true);
            echo "</button>
        ";
        }
        // line 518
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed583ef6030f55573bcce63c10c6c84ef20a3bcedd98cd100872354b67eddbeb->leave($__internal_ed583ef6030f55573bcce63c10c6c84ef20a3bcedd98cd100872354b67eddbeb_prof);

    }

    // line 521
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_f1e7d5a03ff49f0f4e496ef19633098c727032eeab8eb75786d4ce9312195180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e7d5a03ff49f0f4e496ef19633098c727032eeab8eb75786d4ce9312195180->enter($__internal_f1e7d5a03ff49f0f4e496ef19633098c727032eeab8eb75786d4ce9312195180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 522
        echo "    ";
        ob_start();
        // line 523
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 523, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 524
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f1e7d5a03ff49f0f4e496ef19633098c727032eeab8eb75786d4ce9312195180->leave($__internal_f1e7d5a03ff49f0f4e496ef19633098c727032eeab8eb75786d4ce9312195180_prof);

    }

    // line 528
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_98ecdf7d1549c6e36772f895f76cd850b8844ac80f02a44d5456e441b7ee8507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ecdf7d1549c6e36772f895f76cd850b8844ac80f02a44d5456e441b7ee8507->enter($__internal_98ecdf7d1549c6e36772f895f76cd850b8844ac80f02a44d5456e441b7ee8507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 529
        echo "    ";
        ob_start();
        // line 530
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 530, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 531
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_98ecdf7d1549c6e36772f895f76cd850b8844ac80f02a44d5456e441b7ee8507->leave($__internal_98ecdf7d1549c6e36772f895f76cd850b8844ac80f02a44d5456e441b7ee8507_prof);

    }

    // line 535
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_9c9dfe089e4a9b0644eb1793152471a5f37ce46c0c022229ed7aa659ebcc253e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9dfe089e4a9b0644eb1793152471a5f37ce46c0c022229ed7aa659ebcc253e->enter($__internal_9c9dfe089e4a9b0644eb1793152471a5f37ce46c0c022229ed7aa659ebcc253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 536
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 536, $this->getSourceContext()); })()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 537
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 538
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9c9dfe089e4a9b0644eb1793152471a5f37ce46c0c022229ed7aa659ebcc253e->leave($__internal_9c9dfe089e4a9b0644eb1793152471a5f37ce46c0c022229ed7aa659ebcc253e_prof);

    }

    // line 541
    public function block_bs_static_widget($context, array $blocks = array())
    {
        $__internal_0e81d5780045a695e6c38afe3d43577a4421732c334f161a083ce994b74fc546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e81d5780045a695e6c38afe3d43577a4421732c334f161a083ce994b74fc546->enter($__internal_0e81d5780045a695e6c38afe3d43577a4421732c334f161a083ce994b74fc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bs_static_widget"));

        // line 542
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 542, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control-static"))));
        // line 543
        echo "    <p id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 543, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 543, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 543, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
";
        
        $__internal_0e81d5780045a695e6c38afe3d43577a4421732c334f161a083ce994b74fc546->leave($__internal_0e81d5780045a695e6c38afe3d43577a4421732c334f161a083ce994b74fc546_prof);

    }

    // line 548
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e94e71d51e2e831532ff4e8806503b09178a29361db2ba021efec3ec8d86b969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94e71d51e2e831532ff4e8806503b09178a29361db2ba021efec3ec8d86b969->enter($__internal_e94e71d51e2e831532ff4e8806503b09178a29361db2ba021efec3ec8d86b969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 549
        echo "    ";
        ob_start();
        // line 550
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 550, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 551
        echo "
        ";
        // line 552
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 552, $this->getSourceContext()); })()), "label_col", array())))) {
            // line 553
            echo "            ";
            $context["label_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 553, $this->getSourceContext()); })()), "label_col", array());
            // line 554
            echo "        ";
        }
        // line 555
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 555, $this->getSourceContext()); })()), "widget_col", array())))) {
            // line 556
            echo "            ";
            $context["widget_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 556, $this->getSourceContext()); })()), "widget_col", array());
            // line 557
            echo "        ";
        }
        // line 558
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 558, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 559
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 559, $this->getSourceContext()); })()), "col_size", array());
            // line 560
            echo "        ";
        }
        // line 561
        echo "
        ";
        // line 562
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 562, $this->getSourceContext()); })()) === false)) {
            // line 563
            echo "            ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 563, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
            // line 564
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 564, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 565
            echo "
            ";
            // line 566
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 566, $this->getSourceContext()); })()), "style", array())))) {
                // line 567
                echo "                ";
                $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 567, $this->getSourceContext()); })()), "style", array());
                // line 568
                echo "            ";
            }
            // line 569
            echo "
            ";
            // line 570
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 570, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
            // line 571
            echo "            ";
            if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 571, $this->getSourceContext()); })()) == "horizontal")) {
                // line 572
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 572, $this->getSourceContext()); })()), array("class" => trim(((((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-") . (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 572, $this->getSourceContext()); })())) . "-") . (isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 572, $this->getSourceContext()); })())))));
                // line 573
                echo "            ";
            } elseif (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 573, $this->getSourceContext()); })()) == "inline")) {
                // line 574
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 574, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " sr-only"))));
                // line 575
                echo "            ";
            }
            // line 576
            echo "
            ";
            // line 577
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 577, $this->getSourceContext()); })())) {
                // line 578
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 578, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 578, $this->getSourceContext()); })())));
                // line 579
                echo "            ";
            }
            // line 580
            echo "            ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 580, $this->getSourceContext()); })())) {
                // line 581
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 581, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 582
                echo "            ";
            }
            // line 583
            echo "            ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 583, $this->getSourceContext()); })()))) {
                // line 584
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 584, $this->getSourceContext()); })()));
                // line 585
                echo "            ";
            }
            // line 586
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 586, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 586, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 586, $this->getSourceContext()); })()));
            echo "</label>
        ";
        }
        // line 588
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e94e71d51e2e831532ff4e8806503b09178a29361db2ba021efec3ec8d86b969->leave($__internal_e94e71d51e2e831532ff4e8806503b09178a29361db2ba021efec3ec8d86b969_prof);

    }

    // line 591
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_49750f4f7a94f0253f09ab53880c6364f6ad09cad9b4d2d5517a550bc196826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49750f4f7a94f0253f09ab53880c6364f6ad09cad9b4d2d5517a550bc196826a->enter($__internal_49750f4f7a94f0253f09ab53880c6364f6ad09cad9b4d2d5517a550bc196826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_49750f4f7a94f0253f09ab53880c6364f6ad09cad9b4d2d5517a550bc196826a->leave($__internal_49750f4f7a94f0253f09ab53880c6364f6ad09cad9b4d2d5517a550bc196826a_prof);

    }

    // line 595
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_32536727dd3730124246c54a6fcda956006784b6a5f6eb6aede558190bdbc86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32536727dd3730124246c54a6fcda956006784b6a5f6eb6aede558190bdbc86d->enter($__internal_32536727dd3730124246c54a6fcda956006784b6a5f6eb6aede558190bdbc86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 596
        echo "    ";
        ob_start();
        // line 597
        echo "        ";
        // line 601
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_32536727dd3730124246c54a6fcda956006784b6a5f6eb6aede558190bdbc86d->leave($__internal_32536727dd3730124246c54a6fcda956006784b6a5f6eb6aede558190bdbc86d_prof);

    }

    // line 605
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bba39b5c70dfbcbd4c1901856f9c55279bd31817bee57c4f45fd23a97a0545ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba39b5c70dfbcbd4c1901856f9c55279bd31817bee57c4f45fd23a97a0545ec->enter($__internal_bba39b5c70dfbcbd4c1901856f9c55279bd31817bee57c4f45fd23a97a0545ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 606
        echo "    ";
        ob_start();
        // line 607
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 607, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 608
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 608, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 609
        echo "
        ";
        // line 610
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 610, $this->getSourceContext()); })()), "label_col", array())))) {
            // line 611
            echo "            ";
            $context["label_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 611, $this->getSourceContext()); })()), "label_col", array());
            // line 612
            echo "        ";
        }
        // line 613
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 613, $this->getSourceContext()); })()), "widget_col", array())))) {
            // line 614
            echo "            ";
            $context["widget_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 614, $this->getSourceContext()); })()), "widget_col", array());
            // line 615
            echo "            ";
            if ((((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 615, $this->getSourceContext()); })()) === false) && array_key_exists("label_col", $context))) {
                // line 616
                echo "                ";
                $context["widget_col"] = ((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 616, $this->getSourceContext()); })()) + (isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 616, $this->getSourceContext()); })()));
                // line 617
                echo "            ";
            }
            // line 618
            echo "        ";
        }
        // line 619
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 619, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 620
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 620, $this->getSourceContext()); })()), "col_size", array());
            // line 621
            echo "        ";
        }
        // line 622
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 622, $this->getSourceContext()); })()), "style", array())))) {
            // line 623
            echo "            ";
            $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 623, $this->getSourceContext()); })()), "style", array());
            // line 624
            echo "        ";
        }
        // line 625
        echo "
        ";
        // line 626
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 626, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()));
        // line 627
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 627, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
        // line 628
        echo "
        <div class=\"form-group";
        // line 629
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 629, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 630
        if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 630, $this->getSourceContext()); })()) == "horizontal")) {
            // line 631
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 631, $this->getSourceContext()); })()), 'label');
            echo "
                <div class=\"col-";
            // line 632
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 632, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 632, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    ";
            // line 633
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 634
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 635
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 635, $this->getSourceContext()); })()), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 638
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 638, $this->getSourceContext()); })()), 'label');
            echo "
                ";
            // line 639
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 640
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 641
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 641, $this->getSourceContext()); })()), 'errors');
            echo "
            ";
        }
        // line 643
        echo "        </div>

        ";
        // line 645
        if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 645, $this->getSourceContext()); })()) == "inline")) {
            echo "&nbsp;";
        }
        // line 646
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bba39b5c70dfbcbd4c1901856f9c55279bd31817bee57c4f45fd23a97a0545ec->leave($__internal_bba39b5c70dfbcbd4c1901856f9c55279bd31817bee57c4f45fd23a97a0545ec_prof);

    }

    // line 649
    public function block_form_input_group($context, array $blocks = array())
    {
        $__internal_5fd6a9e8a54b9323beff26dfcb7436e08c9decbe624173d306e39b5d4cdfd782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd6a9e8a54b9323beff26dfcb7436e08c9decbe624173d306e39b5d4cdfd782->enter($__internal_5fd6a9e8a54b9323beff26dfcb7436e08c9decbe624173d306e39b5d4cdfd782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_input_group"));

        // line 650
        echo "    ";
        ob_start();
        // line 651
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "input_group", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 651, $this->getSourceContext()); })()), "input_group", array())))) {
            // line 652
            echo "            ";
            $context["input_group"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 652, $this->getSourceContext()); })()), "input_group", array());
            // line 653
            echo "        ";
        }
        // line 654
        echo "        ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter((isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 654, $this->getSourceContext()); })()), array())) : (array()));
        // line 655
        echo "        ";
        if ( !twig_test_empty((isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 655, $this->getSourceContext()); })()))) {
            // line 656
            echo "            ";
            $context["ig_size_class"] = "";
            // line 657
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "size", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 657, $this->getSourceContext()); })()), "size", array()) == "large"))) {
                // line 658
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 659
                echo "            ";
            }
            // line 660
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "size", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 660, $this->getSourceContext()); })()), "size", array()) == "small"))) {
                // line 661
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 662
                echo "            ";
            }
            // line 663
            echo "            <div class=\"input-group";
            echo twig_escape_filter($this->env, (isset($context["ig_size_class"]) || array_key_exists("ig_size_class", $context) ? $context["ig_size_class"] : (function () { throw new Twig_Error_Runtime('Variable "ig_size_class" does not exist.', 663, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                ";
            // line 664
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "prepend", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 664, $this->getSourceContext()); })()), "prepend", array())))) {
                // line 665
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 665, $this->getSourceContext()); })()), "prepend", array()));
                echo "</span>
                ";
            }
            // line 667
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "button_prepend", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 667, $this->getSourceContext()); })()), "button_prepend", array())))) {
                // line 668
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["input_group_button_prepend"]) || array_key_exists("input_group_button_prepend", $context) ? $context["input_group_button_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "input_group_button_prepend" does not exist.', 668, $this->getSourceContext()); })()), 'widget');
                echo "</span>
                ";
            }
            // line 670
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 670, $this->getSourceContext()); })()), 'widget');
            echo "
                ";
            // line 671
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "button_append", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 671, $this->getSourceContext()); })()), "button_append", array())))) {
                // line 672
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["input_group_button_append"]) || array_key_exists("input_group_button_append", $context) ? $context["input_group_button_append"] : (function () { throw new Twig_Error_Runtime('Variable "input_group_button_append" does not exist.', 672, $this->getSourceContext()); })()), 'widget');
                echo "</span>
                ";
            }
            // line 674
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["input_group"] ?? null), "append", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 674, $this->getSourceContext()); })()), "append", array())))) {
                // line 675
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["input_group"]) || array_key_exists("input_group", $context) ? $context["input_group"] : (function () { throw new Twig_Error_Runtime('Variable "input_group" does not exist.', 675, $this->getSourceContext()); })()), "append", array()));
                echo "</span>
                ";
            }
            // line 677
            echo "            </div>
        ";
        } else {
            // line 679
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 679, $this->getSourceContext()); })()), 'widget');
            echo "
        ";
        }
        // line 681
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5fd6a9e8a54b9323beff26dfcb7436e08c9decbe624173d306e39b5d4cdfd782->leave($__internal_5fd6a9e8a54b9323beff26dfcb7436e08c9decbe624173d306e39b5d4cdfd782_prof);

    }

    // line 684
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_18d544657b988b8f1dc1a97bb092918b26d1049352652b1524d83aa9cb122308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d544657b988b8f1dc1a97bb092918b26d1049352652b1524d83aa9cb122308->enter($__internal_18d544657b988b8f1dc1a97bb092918b26d1049352652b1524d83aa9cb122308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 685
        echo "    ";
        ob_start();
        // line 686
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "help_text", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 686, $this->getSourceContext()); })()), "help_text", array())))) {
            // line 687
            echo "            ";
            $context["help_text"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 687, $this->getSourceContext()); })()), "help_text", array());
            // line 688
            echo "        ";
        }
        // line 689
        echo "        ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 689, $this->getSourceContext()); })()), "")) : (""));
        // line 690
        echo "        ";
        if ( !twig_test_empty((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 690, $this->getSourceContext()); })()))) {
            // line 691
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["help_text"]) || array_key_exists("help_text", $context) ? $context["help_text"] : (function () { throw new Twig_Error_Runtime('Variable "help_text" does not exist.', 691, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 691, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
        ";
        }
        // line 693
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_18d544657b988b8f1dc1a97bb092918b26d1049352652b1524d83aa9cb122308->leave($__internal_18d544657b988b8f1dc1a97bb092918b26d1049352652b1524d83aa9cb122308_prof);

    }

    // line 696
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f20a263937121243c5679560f0961c96fab9bec98d3aad034de3085b10cbf1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20a263937121243c5679560f0961c96fab9bec98d3aad034de3085b10cbf1c7->enter($__internal_f20a263937121243c5679560f0961c96fab9bec98d3aad034de3085b10cbf1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 697
        echo "    ";
        ob_start();
        // line 698
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 698, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 699
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 699, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 700
        echo "
        ";
        // line 701
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 701, $this->getSourceContext()); })()), "label_col", array())))) {
            // line 702
            echo "            ";
            $context["label_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 702, $this->getSourceContext()); })()), "label_col", array());
            // line 703
            echo "        ";
        }
        // line 704
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 704, $this->getSourceContext()); })()), "widget_col", array())))) {
            // line 705
            echo "            ";
            $context["widget_col"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 705, $this->getSourceContext()); })()), "widget_col", array());
            // line 706
            echo "        ";
        }
        // line 707
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 707, $this->getSourceContext()); })()), "col_size", array())))) {
            // line 708
            echo "            ";
            $context["col_size"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 708, $this->getSourceContext()); })()), "col_size", array());
            // line 709
            echo "        ";
        }
        // line 710
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 710, $this->getSourceContext()); })()), "style", array())))) {
            // line 711
            echo "            ";
            $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 711, $this->getSourceContext()); })()), "style", array());
            // line 712
            echo "        ";
        }
        // line 713
        echo "
        ";
        // line 714
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 714, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()));
        // line 715
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 715, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
        // line 716
        echo "
        <div class=\"form-group\">
            ";
        // line 718
        if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 718, $this->getSourceContext()); })()) == "horizontal")) {
            // line 719
            echo "                <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 719, $this->getSourceContext()); })()), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, (isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 719, $this->getSourceContext()); })()), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 719, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 719, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
        }
        // line 721
        echo "
            ";
        // line 722
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 722, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 724
        if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 724, $this->getSourceContext()); })()) == "horizontal")) {
            // line 725
            echo "                </div>
            ";
        }
        // line 727
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f20a263937121243c5679560f0961c96fab9bec98d3aad034de3085b10cbf1c7->leave($__internal_f20a263937121243c5679560f0961c96fab9bec98d3aad034de3085b10cbf1c7_prof);

    }

    // line 731
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3c5a90a02bd1153270fb41ce90fbdd0e22ec301caf61a3a4cf9673e8e5faed62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5a90a02bd1153270fb41ce90fbdd0e22ec301caf61a3a4cf9673e8e5faed62->enter($__internal_3c5a90a02bd1153270fb41ce90fbdd0e22ec301caf61a3a4cf9673e8e5faed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 732
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 732, $this->getSourceContext()); })()), 'widget');
        echo "
";
        
        $__internal_3c5a90a02bd1153270fb41ce90fbdd0e22ec301caf61a3a4cf9673e8e5faed62->leave($__internal_3c5a90a02bd1153270fb41ce90fbdd0e22ec301caf61a3a4cf9673e8e5faed62_prof);

    }

    // line 735
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_08d777a2e017029d58f61dd0de5a9c4c0e33c2b661fe0bf03da5a4b4f166584c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d777a2e017029d58f61dd0de5a9c4c0e33c2b661fe0bf03da5a4b4f166584c->enter($__internal_08d777a2e017029d58f61dd0de5a9c4c0e33c2b661fe0bf03da5a4b4f166584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 736
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_08d777a2e017029d58f61dd0de5a9c4c0e33c2b661fe0bf03da5a4b4f166584c->leave($__internal_08d777a2e017029d58f61dd0de5a9c4c0e33c2b661fe0bf03da5a4b4f166584c_prof);

    }

    // line 741
    public function block_form($context, array $blocks = array())
    {
        $__internal_3fa1ace720e4290a8cc31c93ef93f1eba644496a066c111dd6f761b280b6cc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa1ace720e4290a8cc31c93ef93f1eba644496a066c111dd6f761b280b6cc8d->enter($__internal_3fa1ace720e4290a8cc31c93ef93f1eba644496a066c111dd6f761b280b6cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 742
        echo "    ";
        ob_start();
        // line 743
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 743, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 744
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 744, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 745
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 745, $this->getSourceContext()); })()), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3fa1ace720e4290a8cc31c93ef93f1eba644496a066c111dd6f761b280b6cc8d->leave($__internal_3fa1ace720e4290a8cc31c93ef93f1eba644496a066c111dd6f761b280b6cc8d_prof);

    }

    // line 749
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8f9b8dad992189b8f0018351cd3aca3efd10523566d9c1c6f712db97f73fb684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9b8dad992189b8f0018351cd3aca3efd10523566d9c1c6f712db97f73fb684->enter($__internal_8f9b8dad992189b8f0018351cd3aca3efd10523566d9c1c6f712db97f73fb684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 750
        echo "    ";
        ob_start();
        // line 751
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->backupFormSettings(), "html", null, true);
        echo "
        ";
        // line 752
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 752, $this->getSourceContext()); })()));
        // line 753
        echo "        ";
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 753, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 754
            echo "            ";
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 754, $this->getSourceContext()); })());
            // line 755
            echo "        ";
        } else {
            // line 756
            echo "            ";
            $context["form_method"] = "POST";
            // line 757
            echo "        ";
        }
        // line 758
        echo "
        ";
        // line 759
        if (array_key_exists("style", $context)) {
            // line 760
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 760, $this->getSourceContext()); })()), array("class" => trim(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-") . (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 760, $this->getSourceContext()); })())))));
            // line 761
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setStyle((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 761, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        }
        // line 763
        echo "
        ";
        // line 764
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 764, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 765
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 765, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 766
            echo "        ";
        }
        // line 767
        echo "
        ";
        // line 768
        if (array_key_exists("col_size", $context)) {
            // line 769
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setColSize((isset($context["col_size"]) || array_key_exists("col_size", $context) ? $context["col_size"] : (function () { throw new Twig_Error_Runtime('Variable "col_size" does not exist.', 769, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        }
        // line 771
        echo "
        ";
        // line 772
        if (array_key_exists("widget_col", $context)) {
            // line 773
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setWidgetCol((isset($context["widget_col"]) || array_key_exists("widget_col", $context) ? $context["widget_col"] : (function () { throw new Twig_Error_Runtime('Variable "widget_col" does not exist.', 773, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        }
        // line 775
        echo "
        ";
        // line 776
        if (array_key_exists("label_col", $context)) {
            // line 777
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setLabelCol((isset($context["label_col"]) || array_key_exists("label_col", $context) ? $context["label_col"] : (function () { throw new Twig_Error_Runtime('Variable "label_col" does not exist.', 777, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        }
        // line 779
        echo "
        ";
        // line 780
        if (array_key_exists("simple_col", $context)) {
            // line 781
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setSimpleCol((isset($context["simple_col"]) || array_key_exists("simple_col", $context) ? $context["simple_col"] : (function () { throw new Twig_Error_Runtime('Variable "simple_col" does not exist.', 781, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        }
        // line 783
        echo "
        ";
        // line 784
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "role", array(), "any", true, true) || twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 784, $this->getSourceContext()); })()), "role", array())))) {
            // line 785
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 785, $this->getSourceContext()); })()), array("role" => "form"));
            // line 786
            echo "        ";
        }
        // line 787
        echo "
        <form  name=\"";
        // line 788
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 788, $this->getSourceContext()); })()), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 788, $this->getSourceContext()); })())), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 788, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 788, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 788, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 789
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 789, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 789, $this->getSourceContext()); })()))) {
            // line 790
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 790, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        // line 792
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8f9b8dad992189b8f0018351cd3aca3efd10523566d9c1c6f712db97f73fb684->leave($__internal_8f9b8dad992189b8f0018351cd3aca3efd10523566d9c1c6f712db97f73fb684_prof);

    }

    // line 795
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_e96b3818e693888f9e4eb24090b9fa78116f38037f4993923e914abf01b8f8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96b3818e693888f9e4eb24090b9fa78116f38037f4993923e914abf01b8f8fe->enter($__internal_e96b3818e693888f9e4eb24090b9fa78116f38037f4993923e914abf01b8f8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 796
        echo "    ";
        ob_start();
        // line 797
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 797, $this->getSourceContext()); })()))) {
            // line 798
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 798, $this->getSourceContext()); })()), 'rest');
            echo "
        ";
        }
        // line 800
        echo "        </form>
        ";
        // line 801
        if ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()) {
            // line 802
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 804
        echo "        ";
        if ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getColSize()) {
            // line 805
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 807
        echo "        ";
        if ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getWidgetCol()) {
            // line 808
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 810
        echo "        ";
        if ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getLabelCol()) {
            // line 811
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 813
        echo "        ";
        if ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getSimpleCol()) {
            // line 814
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 816
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->restoreFormSettings(), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e96b3818e693888f9e4eb24090b9fa78116f38037f4993923e914abf01b8f8fe->leave($__internal_e96b3818e693888f9e4eb24090b9fa78116f38037f4993923e914abf01b8f8fe_prof);

    }

    // line 820
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_962fc40c9523d1d4293a5091c9ed78e4541f03fb3be3c1995e13139526b1b577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962fc40c9523d1d4293a5091c9ed78e4541f03fb3be3c1995e13139526b1b577->enter($__internal_962fc40c9523d1d4293a5091c9ed78e4541f03fb3be3c1995e13139526b1b577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 821
        echo "    ";
        ob_start();
        // line 822
        echo "        ";
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 822, $this->getSourceContext()); })())) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 823
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_962fc40c9523d1d4293a5091c9ed78e4541f03fb3be3c1995e13139526b1b577->leave($__internal_962fc40c9523d1d4293a5091c9ed78e4541f03fb3be3c1995e13139526b1b577_prof);

    }

    // line 826
    public function block_global_form_errors($context, array $blocks = array())
    {
        $__internal_a6a70b163ab1cc7f5805eaf411282149a6faff281403de2eee6915292cc95b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a70b163ab1cc7f5805eaf411282149a6faff281403de2eee6915292cc95b20->enter($__internal_a6a70b163ab1cc7f5805eaf411282149a6faff281403de2eee6915292cc95b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_form_errors"));

        // line 827
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 827, $this->getSourceContext()); })())) > 0)) {
            // line 828
            echo "        ";
            $context["global_errors"] = true;
            // line 829
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a6a70b163ab1cc7f5805eaf411282149a6faff281403de2eee6915292cc95b20->leave($__internal_a6a70b163ab1cc7f5805eaf411282149a6faff281403de2eee6915292cc95b20_prof);

    }

    // line 833
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_64758c44edcfbb8e16a379948fb5b3691bba37e216761d57f3255dd8c3195672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64758c44edcfbb8e16a379948fb5b3691bba37e216761d57f3255dd8c3195672->enter($__internal_64758c44edcfbb8e16a379948fb5b3691bba37e216761d57f3255dd8c3195672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 834
        echo "    ";
        ob_start();
        // line 835
        echo "        ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter((isset($context["global_errors"]) || array_key_exists("global_errors", $context) ? $context["global_errors"] : (function () { throw new Twig_Error_Runtime('Variable "global_errors" does not exist.', 835, $this->getSourceContext()); })()), false)) : (false));
        // line 836
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new Twig_Error_Runtime('Variable "style" does not exist.', 836, $this->getSourceContext()); })()), $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 837
        echo "
        ";
        // line 838
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 838, $this->getSourceContext()); })()), "style", array())))) {
            // line 839
            echo "            ";
            $context["style"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 839, $this->getSourceContext()); })()), "style", array());
            // line 840
            echo "        ";
        }
        // line 841
        echo "
        ";
        // line 842
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 842, $this->getSourceContext()); })())) > 0)) {
            // line 843
            echo "            ";
            if ((isset($context["global_errors"]) || array_key_exists("global_errors", $context) ? $context["global_errors"] : (function () { throw new Twig_Error_Runtime('Variable "global_errors" does not exist.', 843, $this->getSourceContext()); })())) {
                // line 844
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 846
            echo "            <ul";
            if ( !(isset($context["global_errors"]) || array_key_exists("global_errors", $context) ? $context["global_errors"] : (function () { throw new Twig_Error_Runtime('Variable "global_errors" does not exist.', 846, $this->getSourceContext()); })())) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 847, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 848
                echo "                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 850
            echo "            </ul>
            ";
            // line 851
            if (((isset($context["global_errors"]) || array_key_exists("global_errors", $context) ? $context["global_errors"] : (function () { throw new Twig_Error_Runtime('Variable "global_errors" does not exist.', 851, $this->getSourceContext()); })()) == true)) {
                // line 852
                echo "                </div>
            ";
            }
            // line 854
            echo "        ";
        }
        // line 855
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64758c44edcfbb8e16a379948fb5b3691bba37e216761d57f3255dd8c3195672->leave($__internal_64758c44edcfbb8e16a379948fb5b3691bba37e216761d57f3255dd8c3195672_prof);

    }

    // line 858
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_3b2425951fea40f2255959e0849cd9b2fd3d95196fb6886e64fa390c338b71ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2425951fea40f2255959e0849cd9b2fd3d95196fb6886e64fa390c338b71ce->enter($__internal_3b2425951fea40f2255959e0849cd9b2fd3d95196fb6886e64fa390c338b71ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 859
        echo "    ";
        ob_start();
        // line 860
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 860, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 861
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 862
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 864
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3b2425951fea40f2255959e0849cd9b2fd3d95196fb6886e64fa390c338b71ce->leave($__internal_3b2425951fea40f2255959e0849cd9b2fd3d95196fb6886e64fa390c338b71ce_prof);

    }

    // line 870
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_c278e05eb977c578cb5fa5332edf0f5fd3e3e05bf055d77d67a95a2c85c55e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c278e05eb977c578cb5fa5332edf0f5fd3e3e05bf055d77d67a95a2c85c55e39->enter($__internal_c278e05eb977c578cb5fa5332edf0f5fd3e3e05bf055d77d67a95a2c85c55e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 871
        echo "    ";
        ob_start();
        // line 872
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 872, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 873
            echo "            ";
            $context["childAttr"] = array();
            // line 874
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "col_size", array(), "any", true, true)) {
                // line 875
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 875, $this->getSourceContext()); })()), array("col_size" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 875, $this->getSourceContext()); })()), "col_size", array())));
                // line 876
                echo "            ";
            }
            // line 877
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_col", array(), "any", true, true)) {
                // line 878
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 878, $this->getSourceContext()); })()), array("widget_col" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 878, $this->getSourceContext()); })()), "widget_col", array())));
                // line 879
                echo "            ";
            }
            // line 880
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "label_col", array(), "any", true, true)) {
                // line 881
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 881, $this->getSourceContext()); })()), array("label_col" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 881, $this->getSourceContext()); })()), "label_col", array())));
                // line 882
                echo "            ";
            }
            // line 883
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "simple_col", array(), "any", true, true)) {
                // line 884
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 884, $this->getSourceContext()); })()), array("simple_col" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 884, $this->getSourceContext()); })()), "simple_col", array())));
                // line 885
                echo "            ";
            }
            // line 886
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true)) {
                // line 887
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 887, $this->getSourceContext()); })()), array("style" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 887, $this->getSourceContext()); })()), "style", array())));
                // line 888
                echo "            ";
            }
            // line 889
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', (isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new Twig_Error_Runtime('Variable "childAttr" does not exist.', 889, $this->getSourceContext()); })()));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c278e05eb977c578cb5fa5332edf0f5fd3e3e05bf055d77d67a95a2c85c55e39->leave($__internal_c278e05eb977c578cb5fa5332edf0f5fd3e3e05bf055d77d67a95a2c85c55e39_prof);

    }

    // line 894
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_ba2d81e99bd03517b7c2bdfc1e51247e5f081ce9799580407360d030c6ee077b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2d81e99bd03517b7c2bdfc1e51247e5f081ce9799580407360d030c6ee077b->enter($__internal_ba2d81e99bd03517b7c2bdfc1e51247e5f081ce9799580407360d030c6ee077b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 895
        echo "    ";
        ob_start();
        // line 896
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 896, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 896, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 896, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 896, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 897
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 897, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 897, $this->getSourceContext()); })())), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($context["attrname"], array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ba2d81e99bd03517b7c2bdfc1e51247e5f081ce9799580407360d030c6ee077b->leave($__internal_ba2d81e99bd03517b7c2bdfc1e51247e5f081ce9799580407360d030c6ee077b_prof);

    }

    // line 901
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_b63725ff680ab61f51299b58ca080a974bc2856281942f9ba5dcb0438e08c789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63725ff680ab61f51299b58ca080a974bc2856281942f9ba5dcb0438e08c789->enter($__internal_b63725ff680ab61f51299b58ca080a974bc2856281942f9ba5dcb0438e08c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 902
        echo "    ";
        ob_start();
        // line 903
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true) && ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 903, $this->getSourceContext()); })()), "style", array()) == "inline") || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 903, $this->getSourceContext()); })()), "style", array()) == "horizontal")))) {
            // line 904
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 904, $this->getSourceContext()); })()), array("class" => trim(((("form-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 904, $this->getSourceContext()); })()), "style", array())) . " ") . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))))));
            // line 905
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 905, $this->getSourceContext()); })()), array("style" => null));
            // line 906
            echo "        ";
        }
        // line 907
        echo "        ";
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 907, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 907, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        // line 908
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 908, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (( !(null === $context["attrvalue"]) &&  !twig_test_iterable($context["attrvalue"]))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b63725ff680ab61f51299b58ca080a974bc2856281942f9ba5dcb0438e08c789->leave($__internal_b63725ff680ab61f51299b58ca080a974bc2856281942f9ba5dcb0438e08c789_prof);

    }

    // line 912
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_cef5b02d88620a2e5f40d9ff1fd7c94453ec31c848ad5da61eabcc4e0bd48577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef5b02d88620a2e5f40d9ff1fd7c94453ec31c848ad5da61eabcc4e0bd48577->enter($__internal_cef5b02d88620a2e5f40d9ff1fd7c94453ec31c848ad5da61eabcc4e0bd48577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 913
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 913, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 913, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 913, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 914
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 914, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cef5b02d88620a2e5f40d9ff1fd7c94453ec31c848ad5da61eabcc4e0bd48577->leave($__internal_cef5b02d88620a2e5f40d9ff1fd7c94453ec31c848ad5da61eabcc4e0bd48577_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3349 => 914,  3340 => 913,  3334 => 912,  3326 => 909,  3311 => 908,  3304 => 907,  3301 => 906,  3298 => 905,  3295 => 904,  3292 => 903,  3289 => 902,  3283 => 901,  3275 => 898,  3254 => 897,  3242 => 896,  3239 => 895,  3233 => 894,  3225 => 891,  3216 => 889,  3213 => 888,  3210 => 887,  3207 => 886,  3204 => 885,  3201 => 884,  3198 => 883,  3195 => 882,  3192 => 881,  3189 => 880,  3186 => 879,  3183 => 878,  3180 => 877,  3177 => 876,  3174 => 875,  3171 => 874,  3168 => 873,  3163 => 872,  3160 => 871,  3154 => 870,  3146 => 865,  3140 => 864,  3134 => 862,  3131 => 861,  3126 => 860,  3123 => 859,  3117 => 858,  3109 => 855,  3106 => 854,  3102 => 852,  3100 => 851,  3097 => 850,  3088 => 848,  3084 => 847,  3077 => 846,  3073 => 844,  3070 => 843,  3068 => 842,  3065 => 841,  3062 => 840,  3059 => 839,  3057 => 838,  3054 => 837,  3051 => 836,  3048 => 835,  3045 => 834,  3039 => 833,  3028 => 829,  3025 => 828,  3022 => 827,  3016 => 826,  3008 => 823,  3003 => 822,  3000 => 821,  2994 => 820,  2983 => 816,  2977 => 814,  2974 => 813,  2968 => 811,  2965 => 810,  2959 => 808,  2956 => 807,  2950 => 805,  2947 => 804,  2941 => 802,  2939 => 801,  2936 => 800,  2930 => 798,  2927 => 797,  2924 => 796,  2918 => 795,  2910 => 792,  2904 => 790,  2902 => 789,  2878 => 788,  2875 => 787,  2872 => 786,  2869 => 785,  2867 => 784,  2864 => 783,  2858 => 781,  2856 => 780,  2853 => 779,  2847 => 777,  2845 => 776,  2842 => 775,  2836 => 773,  2834 => 772,  2831 => 771,  2825 => 769,  2823 => 768,  2820 => 767,  2817 => 766,  2814 => 765,  2812 => 764,  2809 => 763,  2803 => 761,  2800 => 760,  2798 => 759,  2795 => 758,  2792 => 757,  2789 => 756,  2786 => 755,  2783 => 754,  2780 => 753,  2778 => 752,  2773 => 751,  2770 => 750,  2764 => 749,  2754 => 745,  2750 => 744,  2745 => 743,  2742 => 742,  2736 => 741,  2726 => 736,  2720 => 735,  2710 => 732,  2704 => 731,  2695 => 727,  2691 => 725,  2689 => 724,  2684 => 722,  2681 => 721,  2669 => 719,  2667 => 718,  2663 => 716,  2660 => 715,  2658 => 714,  2655 => 713,  2652 => 712,  2649 => 711,  2646 => 710,  2643 => 709,  2640 => 708,  2637 => 707,  2634 => 706,  2631 => 705,  2628 => 704,  2625 => 703,  2622 => 702,  2620 => 701,  2617 => 700,  2614 => 699,  2611 => 698,  2608 => 697,  2602 => 696,  2594 => 693,  2588 => 691,  2585 => 690,  2582 => 689,  2579 => 688,  2576 => 687,  2573 => 686,  2570 => 685,  2564 => 684,  2556 => 681,  2550 => 679,  2546 => 677,  2540 => 675,  2537 => 674,  2531 => 672,  2529 => 671,  2524 => 670,  2518 => 668,  2515 => 667,  2509 => 665,  2507 => 664,  2502 => 663,  2499 => 662,  2496 => 661,  2493 => 660,  2490 => 659,  2487 => 658,  2484 => 657,  2481 => 656,  2478 => 655,  2475 => 654,  2472 => 653,  2469 => 652,  2466 => 651,  2463 => 650,  2457 => 649,  2449 => 646,  2445 => 645,  2441 => 643,  2436 => 641,  2432 => 640,  2428 => 639,  2423 => 638,  2417 => 635,  2413 => 634,  2409 => 633,  2403 => 632,  2398 => 631,  2396 => 630,  2390 => 629,  2387 => 628,  2384 => 627,  2382 => 626,  2379 => 625,  2376 => 624,  2373 => 623,  2370 => 622,  2367 => 621,  2364 => 620,  2361 => 619,  2358 => 618,  2355 => 617,  2352 => 616,  2349 => 615,  2346 => 614,  2343 => 613,  2340 => 612,  2337 => 611,  2335 => 610,  2332 => 609,  2329 => 608,  2326 => 607,  2323 => 606,  2317 => 605,  2306 => 601,  2304 => 597,  2301 => 596,  2295 => 595,  2284 => 591,  2276 => 588,  2257 => 586,  2254 => 585,  2251 => 584,  2248 => 583,  2245 => 582,  2242 => 581,  2239 => 580,  2236 => 579,  2233 => 578,  2231 => 577,  2228 => 576,  2225 => 575,  2222 => 574,  2219 => 573,  2216 => 572,  2213 => 571,  2211 => 570,  2208 => 569,  2205 => 568,  2202 => 567,  2200 => 566,  2197 => 565,  2194 => 564,  2191 => 563,  2189 => 562,  2186 => 561,  2183 => 560,  2180 => 559,  2177 => 558,  2174 => 557,  2171 => 556,  2168 => 555,  2165 => 554,  2162 => 553,  2160 => 552,  2157 => 551,  2154 => 550,  2151 => 549,  2145 => 548,  2120 => 543,  2117 => 542,  2111 => 541,  2100 => 538,  2096 => 537,  2091 => 536,  2085 => 535,  2074 => 531,  2071 => 530,  2068 => 529,  2062 => 528,  2051 => 524,  2048 => 523,  2045 => 522,  2039 => 521,  2031 => 518,  2018 => 516,  2007 => 514,  2004 => 513,  2001 => 512,  1998 => 511,  1995 => 510,  1992 => 509,  1989 => 508,  1986 => 507,  1983 => 506,  1980 => 505,  1977 => 504,  1971 => 503,  1960 => 499,  1957 => 498,  1954 => 497,  1948 => 496,  1937 => 492,  1934 => 491,  1931 => 490,  1925 => 489,  1914 => 485,  1911 => 484,  1908 => 483,  1902 => 482,  1890 => 476,  1887 => 475,  1884 => 474,  1881 => 473,  1875 => 472,  1864 => 468,  1861 => 467,  1858 => 466,  1852 => 465,  1841 => 461,  1838 => 460,  1835 => 459,  1829 => 458,  1819 => 453,  1817 => 449,  1814 => 448,  1811 => 447,  1805 => 446,  1794 => 442,  1791 => 441,  1788 => 440,  1782 => 439,  1771 => 435,  1768 => 434,  1766 => 433,  1763 => 432,  1757 => 431,  1749 => 428,  1745 => 426,  1739 => 425,  1734 => 424,  1730 => 423,  1725 => 422,  1722 => 421,  1719 => 420,  1713 => 418,  1710 => 417,  1707 => 416,  1701 => 415,  1693 => 412,  1688 => 409,  1686 => 408,  1685 => 407,  1684 => 406,  1683 => 405,  1678 => 404,  1675 => 403,  1669 => 401,  1666 => 400,  1663 => 399,  1657 => 398,  1649 => 395,  1643 => 392,  1639 => 391,  1635 => 390,  1631 => 389,  1626 => 388,  1623 => 387,  1617 => 385,  1614 => 384,  1611 => 383,  1605 => 382,  1586 => 378,  1583 => 377,  1577 => 376,  1558 => 372,  1555 => 371,  1549 => 370,  1541 => 367,  1537 => 365,  1535 => 364,  1531 => 362,  1529 => 361,  1524 => 359,  1521 => 358,  1515 => 356,  1509 => 354,  1507 => 353,  1504 => 352,  1498 => 350,  1492 => 348,  1488 => 346,  1486 => 345,  1482 => 344,  1466 => 343,  1463 => 342,  1460 => 341,  1457 => 340,  1454 => 339,  1451 => 338,  1448 => 337,  1445 => 336,  1442 => 335,  1439 => 334,  1436 => 333,  1433 => 332,  1430 => 331,  1427 => 330,  1425 => 329,  1422 => 328,  1414 => 326,  1412 => 325,  1408 => 324,  1401 => 323,  1398 => 322,  1395 => 321,  1392 => 320,  1390 => 319,  1387 => 318,  1384 => 317,  1381 => 316,  1378 => 315,  1375 => 314,  1372 => 313,  1369 => 312,  1366 => 311,  1363 => 310,  1361 => 309,  1358 => 308,  1356 => 307,  1353 => 306,  1350 => 305,  1347 => 304,  1341 => 303,  1333 => 300,  1329 => 299,  1326 => 298,  1322 => 296,  1320 => 295,  1316 => 293,  1314 => 292,  1309 => 290,  1306 => 289,  1300 => 287,  1294 => 285,  1292 => 284,  1289 => 283,  1283 => 281,  1277 => 279,  1273 => 277,  1271 => 276,  1267 => 275,  1251 => 274,  1248 => 273,  1245 => 272,  1242 => 271,  1239 => 270,  1236 => 269,  1233 => 268,  1230 => 267,  1227 => 266,  1224 => 265,  1221 => 264,  1218 => 263,  1215 => 262,  1212 => 261,  1210 => 260,  1207 => 259,  1199 => 257,  1197 => 256,  1193 => 255,  1186 => 254,  1183 => 253,  1180 => 252,  1177 => 251,  1174 => 250,  1172 => 249,  1169 => 248,  1166 => 247,  1163 => 246,  1160 => 245,  1157 => 244,  1154 => 243,  1151 => 242,  1148 => 241,  1145 => 240,  1142 => 239,  1139 => 238,  1136 => 237,  1134 => 236,  1131 => 235,  1128 => 234,  1125 => 233,  1122 => 232,  1116 => 231,  1108 => 228,  1094 => 227,  1082 => 225,  1075 => 222,  1073 => 221,  1068 => 220,  1065 => 219,  1047 => 218,  1044 => 217,  1038 => 216,  1026 => 211,  1023 => 210,  1020 => 209,  1014 => 207,  1012 => 206,  1007 => 205,  1004 => 204,  1001 => 203,  988 => 201,  986 => 200,  979 => 199,  976 => 198,  973 => 197,  970 => 196,  964 => 195,  955 => 191,  949 => 190,  943 => 188,  937 => 186,  934 => 185,  930 => 184,  925 => 183,  922 => 182,  916 => 181,  908 => 178,  902 => 176,  896 => 174,  893 => 173,  890 => 172,  884 => 171,  876 => 168,  872 => 166,  870 => 165,  865 => 163,  862 => 162,  854 => 160,  852 => 159,  849 => 158,  846 => 157,  843 => 156,  841 => 155,  838 => 154,  835 => 153,  832 => 152,  830 => 151,  827 => 150,  824 => 149,  821 => 148,  815 => 147,  807 => 144,  803 => 142,  801 => 141,  794 => 139,  791 => 138,  789 => 137,  786 => 136,  778 => 134,  776 => 133,  773 => 132,  770 => 131,  767 => 130,  764 => 129,  761 => 128,  758 => 127,  756 => 126,  753 => 125,  750 => 124,  747 => 123,  741 => 122,  732 => 118,  722 => 116,  720 => 115,  717 => 114,  709 => 111,  701 => 108,  696 => 107,  694 => 106,  689 => 104,  685 => 103,  681 => 102,  677 => 100,  673 => 99,  667 => 97,  664 => 96,  661 => 95,  659 => 94,  656 => 93,  653 => 92,  650 => 91,  647 => 90,  644 => 89,  641 => 88,  638 => 87,  635 => 86,  632 => 85,  629 => 84,  626 => 83,  623 => 82,  617 => 81,  606 => 77,  603 => 76,  600 => 75,  597 => 74,  594 => 73,  588 => 72,  577 => 67,  572 => 66,  566 => 64,  564 => 63,  559 => 62,  556 => 61,  550 => 60,  542 => 57,  538 => 55,  535 => 54,  522 => 52,  520 => 51,  500 => 49,  497 => 48,  495 => 47,  492 => 46,  489 => 45,  486 => 44,  483 => 43,  480 => 42,  477 => 41,  474 => 40,  472 => 39,  469 => 38,  467 => 37,  464 => 36,  456 => 34,  454 => 33,  451 => 32,  448 => 31,  445 => 30,  442 => 29,  439 => 28,  436 => 27,  433 => 26,  430 => 25,  427 => 24,  424 => 23,  421 => 22,  418 => 21,  416 => 20,  413 => 19,  410 => 18,  407 => 17,  404 => 16,  398 => 15,  390 => 12,  384 => 10,  378 => 8,  375 => 7,  372 => 6,  366 => 5,  359 => 912,  356 => 911,  354 => 901,  351 => 900,  349 => 894,  346 => 893,  344 => 870,  341 => 869,  338 => 867,  336 => 858,  333 => 857,  331 => 833,  328 => 832,  326 => 826,  323 => 825,  321 => 820,  318 => 819,  316 => 795,  313 => 794,  311 => 749,  308 => 748,  306 => 741,  303 => 740,  300 => 738,  298 => 735,  295 => 734,  293 => 731,  290 => 730,  288 => 696,  285 => 695,  283 => 684,  280 => 683,  278 => 649,  275 => 648,  273 => 605,  270 => 604,  268 => 595,  265 => 594,  262 => 592,  260 => 591,  257 => 590,  255 => 548,  252 => 547,  249 => 545,  247 => 541,  244 => 540,  242 => 535,  239 => 534,  237 => 528,  234 => 527,  232 => 521,  229 => 520,  227 => 503,  224 => 502,  222 => 496,  219 => 495,  217 => 489,  214 => 488,  212 => 482,  209 => 481,  207 => 472,  204 => 471,  202 => 465,  199 => 464,  197 => 458,  194 => 457,  192 => 446,  189 => 445,  187 => 439,  184 => 438,  182 => 431,  179 => 430,  177 => 415,  174 => 414,  172 => 398,  169 => 397,  167 => 382,  164 => 381,  162 => 376,  159 => 375,  157 => 370,  154 => 369,  152 => 303,  149 => 302,  147 => 231,  144 => 230,  142 => 216,  139 => 215,  137 => 195,  134 => 194,  132 => 181,  129 => 180,  127 => 171,  124 => 170,  122 => 147,  119 => 146,  117 => 122,  114 => 121,  112 => 81,  109 => 80,  107 => 72,  104 => 71,  102 => 60,  99 => 59,  97 => 15,  94 => 14,  92 => 5,  89 => 4,  86 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget %}
    {% spaceless %}
        {% if compound %}
            {{ block('form_widget_compound') }}
        {% else %}
            {{ block('form_widget_simple') }}
        {% endif %}
    {% endspaceless %}
{% endblock form_widget %}

{% block form_widget_simple %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if simple_col is not defined and bootstrap_get_simple_col() %}
            {% set simple_col = bootstrap_get_simple_col() %}
        {% endif %}
        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% if simple_col is defined and simple_col %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        {% set type = type|default('text') %}

        {% if style == 'inline' and (attr.placeholder is not defined or attr.placeholder is empty)  and label is not same as (false) %}
            {% if label is empty %}
                {% set attr = attr|merge({ 'placeholder': name|humanize }) %}
            {% else %}
                {% set attr = attr|merge({ 'placeholder': label}) %}
            {% endif %}
        {% endif %}

        {% if static_control is defined and static_control == true %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}
            <p id=\"{{ id }}\" {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ value }}</p>
        {%- else -%}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}
            <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
        {%- endif %}
        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% if form.parent is empty %}
                {{ block('global_form_errors') }}
            {% endif %}
            {{ block('form_rows') }}
            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock form_widget_compound %}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype) }) %}
        {% endif %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}

{% block bootstrap_collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set prototype_vars = {} %}
            {% if style is defined %}
                {% set prototype_vars = prototype_vars|merge({'style': style}) %}
            {% endif %}
            {% set prototype_html = '<div class=\"col-xs-' ~ form.vars.sub_widget_col ~ '\">' ~ form_widget(prototype, prototype_vars) ~ '</div>' %}
            {% if form.vars.allow_delete %}
                {% set prototype_html = prototype_html ~ '<div class=\"col-xs-' ~ form.vars.button_col ~ '\"><a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"__id__\">' ~ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw ~ '</a></div>' %}
            {% endif %}
            {% set prototype_html = '<div class=\"row\">' ~ prototype_html ~ '</div>' %}

            {% set attr = attr|merge({'data-prototype': prototype_html }) %}
            {% set attr = attr|merge({'data-prototype-name': prototype_name }) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }}>
            <ul class=\"bc-collection list-unstyled\">
                {% for field in form %}
                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-{{ form.vars.sub_widget_col }}\">
                                {{ form_widget(field) }}
                                {{ form_errors(field) }}
                            </div>
                            {% if form.vars.allow_delete %}
                                <div class=\"col-xs-{{ form.vars.button_col }}\">
                                    <a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"{{ field.vars.id }}\">{{ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>
                                </div>
                            {% endif %}
                        </div>
                    </li>
                {% endfor %}
            </ul>
            {% if form.vars.allow_add %}
                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-addfield=\"collection\" data-collection=\"{{ form.vars.id }}\" data-prototype-name=\"{{ prototype_name }}\">{{ form.vars.add_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock bootstrap_collection_widget %}

{% block textarea_widget %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if simple_col is defined %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}

        <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock textarea_widget %}

{% block file_widget %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}

        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if simple_col is defined %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        <input type=\"file\" {{ block('widget_attributes') }}>

        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock file_widget %}

{% block choice_widget %}
    {% spaceless %}
        {% if expanded %}
            {{ block('choice_widget_expanded') }}
        {% else %}
            {{ block('choice_widget_collapsed') }}
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {% if multiple %}
                    {{ checkbox_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr }) }}
                {% else %}
                    {{ radio_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr  }) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
    {% spaceless %}
        {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}

        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {% if placeholder is not none %}
                <option {% if required %} disabled=\"disabled\"{% if value is empty %} selected=\"selected\"{% endif %}{% endif %} value=\"\">{{ placeholder|trans({}, translation_domain) }}</option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 and separator is not none %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block choice_widget_options %}
    {% spaceless %}
        {% for group_label, choice in options %}
            {% if choice is iterable %}
                <optgroup label=\"{{ choice_translation_domain is defined ? (choice_translation_domain is same as (false) ? group_label : group_label|trans({}, choice_translation_domain)) : group_label|trans({}, translation_domain) }}\">
                    {% set options = choice %}
                    {{ block('choice_widget_options') }}
                </optgroup>
            {% else %}
                <option value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is defined ? (choice_translation_domain is same as (false) ? choice.label : choice.label|trans({}, choice_translation_domain)) : choice.label|trans({}, translation_domain) }}</option>
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endblock choice_widget_options %}

{% block checkbox_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set class = '' %}
        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}
            {% set class = 'col-' ~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}
            <div class=\"form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            <div class=\"{{ class }}\">
        {% elseif no_form_group is not defined or no_form_group == false %}
            <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
        {% endif %}

        {%set checkboxdata %}
        {% if label is not same as (false) %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if inline is defined and inline %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' checkbox-inline')|trim}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ block('checkbox_widget') }}
            {{ label|trans({}, translation_domain)|raw -}}
            </label>
        {% else %}
            {{ block('checkbox_widget') }}
        {% endif %}
        {{ form_errors(form) }}
        {% endset %}

        {% if inline is defined and inline %}
            {{ checkboxdata|raw }}
        {% else%}
            <div class=\"checkbox\">{{ checkboxdata|raw }}</div>
        {% endif %}

        {{ block('form_help') }}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            </div>
            </div>
        {% elseif no_form_group is not defined or no_form_group == false %}
            </div>
        {% endif %}

        {% if style == 'inline' %}&nbsp;{% endif %}
    {% endspaceless %}
{% endblock checkbox_row %}

{% block radio_row %}
    {% spaceless %}
        {% set class = '' %}

        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}
            {% set class = ' col-'~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}
            <div class=\"form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            <div class=\"{{ class }}\">
        {% elseif no_form_group is not defined or no_form_group == false %}
            <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
        {% endif %}

        {%set radiodata %}
        {% if label is not same as (false) %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if inline is defined and inline %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' radio-inline')|trim}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ block('radio_widget') }}
            {{ label|trans({}, translation_domain)|raw -}}
            </label>
        {% else %}
            {{ block('radio_widget') }}
        {% endif %}
        {{ form_errors(form) }}
        {% endset %}

        {% if inline is defined and inline %}
            {{ radiodata|raw }}
        {% else%}
            <div class=\"radio\">{{ radiodata|raw }}</div>
        {% endif %}

        {{ block('form_help') }}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            </div>
            </div>
        {% elseif no_form_group is not defined or no_form_group == false %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock radio_row %}

{% block checkbox_widget %}
    {% spaceless %}
        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block radio_widget %}
    {% spaceless %}
        <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    {% endspaceless %}
{% endblock radio_widget %}

{% block datetime_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set attr = attr|merge({ 'class': 'bootstrap-datetime' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_widget(form.date) }}
                {{ form_widget(form.time) }}
                {{ form_errors(form.date) }}
                {{ form_errors(form.time) }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock datetime_widget %}

{% block date_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set attr = attr|merge({ 'class': 'bootstrap-date' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
                })|raw }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} %}
            {% set attr = attr|merge({ 'class': 'bootstrap-time' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_widget(form.hour, vars) }}
                {% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}
                {% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock time_widget %}

{% block number_widget %}
    {% spaceless %}
        {# type=\"number\" doesn't work with floats #}
        {% set type = type|default('text') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock number_widget %}

{% block integer_widget %}
    {% spaceless %}
        {% set type = type|default('number') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock integer_widget %}

{% block money_widget %}
    {% spaceless %}
        <div class=\"input-group\">
            {{ money_pattern|replace({
            '{{ widget }}': block('form_widget_simple'),
            '{{ tag_start }}': '<span class=\"input-group-addon\">',
            '{{ tag_end }}': '</span>'
            })|raw }}
        </div>
    {% endspaceless %}
{% endblock money_widget %}

{% block url_widget %}
    {% spaceless %}
        {% set type = type|default('url') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock url_widget %}

{% block search_widget %}
    {% spaceless %}
        {% set type = type|default('search') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock search_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block password_widget %}
    {% spaceless %}
        {% set type = type|default('password') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock password_widget %}

{% block hidden_widget %}
    {% spaceless %}
        {% set type = type|default('hidden') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock hidden_widget %}

{% block email_widget %}
    {% spaceless %}
        {% set type = type|default('email') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock email_widget %}

{% block button_widget %}
    {% spaceless %}
        {% if label is empty and label is not same as (false) %}
            {% set label = name|humanize %}
        {% endif %}
        {% if type is defined and type == 'submit' %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('primary'))|trim }) %}
        {% else %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('default'))|trim }) %}
        {% endif %}
        {% if as_link is defined and as_link == true %}
            <a {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}{% endif %}{{ label|trans({}, translation_domain) }}</a>
        {% else %}
            <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}{% endif %}{{ label|trans({}, translation_domain) }}</button>
        {% endif %}
    {% endspaceless %}
{% endblock button_widget %}

{% block submit_widget %}
    {% spaceless %}
        {% set type = type|default('submit') %}
        {{ block('button_widget') }}
    {% endspaceless %}
{% endblock submit_widget %}

{% block reset_widget %}
    {% spaceless %}
        {% set type = type|default('reset') %}
        {{ block('button_widget') }}
    {% endspaceless %}
{% endblock reset_widget %}

{% block form_actions_widget %}
    {% for button in form.children %}
        {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}
    {% endfor  %}
{% endblock %}

{% block bs_static_widget %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}
    <p id=\"{{ id }}\" {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ value }}</p>
{% endblock %}

{# Labels #}

{% block form_label %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if label is not same as (false) %}
            {% set style = style|default(bootstrap_get_style()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}

            {% if attr.style is defined and attr.style is not empty %}
                {% set style = attr.style %}
            {% endif %}

            {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' control-label')|trim }) %}
            {% if style == 'horizontal' %}
                {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' col-' ~ col_size ~ '-' ~ label_col)|trim }) %}
            {% elseif style == 'inline' %}
                {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' sr-only')|trim }) %}
            {% endif %}

            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain)|raw }}</label>
        {% endif %}
    {% endspaceless %}
{% endblock form_label %}

{% block button_label %}{% endblock %}

{# Rows #}

{% block repeated_row %}
    {% spaceless %}
        {#
        No need to render the errors here, as all errors are mapped
        to the first child (see RepeatedTypeValidatorExtension).
        #}
        {{ block('form_rows') }}
    {% endspaceless %}
{% endblock repeated_row %}

{% block form_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
            {% if label is same as (false) and label_col is defined %}
                {% set widget_col = widget_col + label_col %}
            {% endif %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set label_col = label_col|default(bootstrap_get_label_col()) %}
        {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}

        <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            {% if style == 'horizontal' %}
                {{ form_label(form) }}
                <div class=\"col-{{ col_size }}-{{ widget_col }}\">
                    {{ block('form_input_group') }}
                    {{ block('form_help') }}
                    {{ form_errors(form) }}
                </div>
            {% else %}
                {{ form_label(form) }}
                {{ block('form_input_group') }}
                {{ block('form_help') }}
                {{ form_errors(form) }}
            {% endif %}
        </div>

        {% if style == 'inline' %}&nbsp;{% endif %}
    {% endspaceless %}
{% endblock form_row %}

{% block form_input_group %}
    {% spaceless %}
        {% if attr.input_group is defined and attr.input_group is not empty %}
            {% set input_group = attr.input_group %}
        {% endif %}
        {% set input_group = input_group|default({}) %}
        {% if input_group is not empty %}
            {% set ig_size_class = '' %}
            {% if input_group.size is defined and input_group.size == 'large' %}
                {% set ig_size_class = ' input-group-lg' %}
            {% endif  %}
            {% if input_group.size is defined and input_group.size == 'small' %}
                {% set ig_size_class = ' input-group-sm' %}
            {% endif  %}
            <div class=\"input-group{{ ig_size_class }}\">
                {% if input_group.prepend is defined and input_group.prepend is not empty %}
                    <span class=\"input-group-addon\">{{ input_group.prepend|raw|parse_icons }}</span>
                {% endif %}
                {% if input_group.button_prepend is defined and input_group.button_prepend is not empty %}
                    <span class=\"input-group-btn\">{{ form_widget(input_group_button_prepend) }}</span>
                {% endif %}
                {{ form_widget(form) }}
                {% if input_group.button_append is defined and input_group.button_append is not empty %}
                    <span class=\"input-group-btn\">{{ form_widget(input_group_button_append) }}</span>
                {% endif %}
                {% if input_group.append is defined and input_group.append is not empty %}
                    <span class=\"input-group-addon\">{{ input_group.append|raw|parse_icons }}</span>
                {% endif %}
            </div>
        {% else %}
            {{ form_widget(form) }}
        {% endif %}
    {% endspaceless %}
{% endblock form_input_group %}

{% block form_help %}
    {% spaceless %}
        {% if attr.help_text is defined and attr.help_text is not empty %}
            {% set help_text = attr.help_text %}
        {% endif %}
        {% set help_text = help_text|default('') %}
        {% if help_text is not empty %}
            <span class=\"help-block\">{{ help_text|trans({}, translation_domain) }}</span>
        {% endif %}
    {% endspaceless %}
{% endblock form_help %}

{% block button_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set label_col = label_col|default(bootstrap_get_label_col()) %}
        {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}

        <div class=\"form-group\">
            {% if style == 'horizontal' %}
                <div class=\"col-{{ col_size }}-offset-{{ label_col }} col-{{ col_size }}-{{ widget_col }}\">
            {% endif %}

            {{ form_widget(form) }}

            {% if style == 'horizontal' %}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock button_row %}

{% block hidden_row %}
    {{ form_widget(form) }}
{% endblock hidden_row %}

{% block form_actions_row %}
    {{ block('button_row')  }}
{% endblock %}

{# Misc #}

{% block form %}
    {% spaceless %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endspaceless %}
{% endblock form %}

{% block form_start %}
    {% spaceless %}
        {{ bootstrap_backup_form_settings() }}
        {% set method = method|upper %}
        {% if method in [\"GET\", \"POST\"] %}
            {% set form_method = method %}
        {% else %}
            {% set form_method = \"POST\" %}
        {% endif %}

        {% if style is defined %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-' ~ style)|trim }) %}
            {{ bootstrap_set_style(style) }}
        {% endif %}

        {% if form.vars.errors|length > 0 %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' has-global-errors')|trim }) %}
        {% endif %}

        {% if col_size is defined %}
            {{ bootstrap_set_col_size(col_size) }}
        {% endif %}

        {% if widget_col is defined %}
            {{ bootstrap_set_widget_col(widget_col) }}
        {% endif %}

        {% if label_col is defined %}
            {{ bootstrap_set_label_col(label_col) }}
        {% endif %}

        {% if simple_col is defined %}
            {{ bootstrap_set_simple_col(simple_col) }}
        {% endif %}

        {% if attr.role is not defined or attr.role is empty %}
            {% set attr = attr|merge({ 'role': 'form' }) %}
        {% endif %}

        <form  name=\"{{ form.vars.name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
        {% if form_method != method %}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {% endif %}
    {% endspaceless %}
{% endblock form_start %}

{% block form_end %}
    {% spaceless %}
        {% if not render_rest is defined or render_rest %}
            {{ form_rest(form) }}
        {% endif %}
        </form>
        {% if bootstrap_get_style() %}
            {{ bootstrap_set_style('') }}
        {% endif %}
        {% if bootstrap_get_col_size() %}
            {{ bootstrap_set_col_size('lg') }}
        {% endif %}
        {% if bootstrap_get_widget_col() %}
            {{ bootstrap_set_widget_col(10) }}
        {% endif %}
        {% if bootstrap_get_label_col() %}
            {{ bootstrap_set_label_col(2) }}
        {% endif %}
        {% if bootstrap_get_simple_col() %}
            {{ bootstrap_set_simple_col(false) }}
        {% endif %}
    {{ bootstrap_restore_form_settings() }}
    {% endspaceless %}
{% endblock form_end %}

{% block form_enctype %}
    {% spaceless %}
        {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
    {% endspaceless %}
{% endblock form_enctype %}

{% block global_form_errors %}
    {% if errors|length > 0 %}
        {% set global_errors = true %}
        {{ block('form_errors') }}
    {% endif %}
{% endblock global_form_errors %}

{% block form_errors %}
    {% spaceless %}
        {% set global_errors = global_errors|default(false) %}
        {% set style = style|default(bootstrap_get_style()) %}

        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% if errors|length > 0 %}
            {% if global_errors %}
                <div class=\"alert alert-danger\">
            {% endif %}
            <ul{% if not global_errors %} class=\"help-block\"{% endif %}>
                {% for error in errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
            {% if global_errors == true %}
                </div>
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{% block form_rest %}
    {% spaceless %}
        {% for child in form %}
            {% if not child.rendered %}
                {{ form_row(child) }}
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endblock form_rest %}

{# Support #}

{% block form_rows %}
    {% spaceless %}
        {% for child in form %}
            {% set childAttr = {} %}
            {% if attr.col_size is defined %}
                {% set childAttr = childAttr|merge({ 'col_size': attr.col_size }) %}
            {% endif %}
            {% if attr.widget_col is defined %}
                {% set childAttr = childAttr|merge({ 'widget_col': attr.widget_col }) %}
            {% endif %}
            {% if attr.label_col is defined %}
                {% set childAttr = childAttr|merge({ 'label_col': attr.label_col }) %}
            {% endif %}
            {% if attr.simple_col is defined %}
                {% set childAttr = childAttr|merge({ 'simple_col': attr.simple_col }) %}
            {% endif %}
            {% if attr.style is defined %}
                {% set childAttr = childAttr|merge({ 'style': attr.style }) %}
            {% endif %}
            {{ form_row(child, childAttr) }}
        {% endfor %}
    {% endspaceless %}
{% endblock form_rows %}

{% block widget_attributes %}
    {% spaceless %}
        id=\"{{ id }}\" name=\"{{ full_name }}\" {% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}
        {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\" {% elseif attrname in ['input_group'] %}{% else %}{{ attrname }}=\"{{ attrvalue }}\" {% endif %}{% endfor %}
    {% endspaceless %}
{% endblock widget_attributes %}

{% block widget_container_attributes %}
    {% spaceless %}
        {% if attr.style is defined and (attr.style == 'inline' or attr.style == 'horizontal') %}
            {% set attr = attr|merge({ 'class': ('form-'~attr.style~' '~attr.class|default(''))|trim }) %}
            {% set attr = attr|merge({ 'style': null }) %}
        {% endif %}
        {% if id is not empty %}id=\"{{ id }}\" {% endif %}
        {% for attrname, attrvalue in attr %}{% if attrvalue is not null and (attrvalue is not iterable) %}{{ attrname }}=\"{{ attrvalue }}\" {% endif %}{% endfor %}
    {% endspaceless %}
{% endblock widget_container_attributes %}

{% block button_attributes -%}
        id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif %}
        {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}
{% endblock button_attributes %}
", "BraincraftedBootstrapBundle:Form:bootstrap.html.twig", "/var/www/vote/vendor/braincrafted/bootstrap-bundle/Braincrafted/Bundle/BootstrapBundle/Resources/views/Form/bootstrap.html.twig");
    }
}
