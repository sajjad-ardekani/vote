<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_4ed9703f869c7db84559e36258784360f1701fcc9e1f3c603628d12090a87734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_784cd7a2ee7112986b2150a82e42ccdd42074fb42560136e0b58c9dde99880ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784cd7a2ee7112986b2150a82e42ccdd42074fb42560136e0b58c9dde99880ef->enter($__internal_784cd7a2ee7112986b2150a82e42ccdd42074fb42560136e0b58c9dde99880ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig"));

        // line 11
        $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_784cd7a2ee7112986b2150a82e42ccdd42074fb42560136e0b58c9dde99880ef->leave($__internal_784cd7a2ee7112986b2150a82e42ccdd42074fb42560136e0b58c9dde99880ef_prof);

    }

    // line 13
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_d01644fadbe3b042b53bcbbd19dccc513ea403cd1eaf6d40d2a71fec2a202a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01644fadbe3b042b53bcbbd19dccc513ea403cd1eaf6d40d2a71fec2a202a35->enter($__internal_d01644fadbe3b042b53bcbbd19dccc513ea403cd1eaf6d40d2a71fec2a202a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 14
        ob_start();
        // line 15
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d01644fadbe3b042b53bcbbd19dccc513ea403cd1eaf6d40d2a71fec2a202a35->leave($__internal_d01644fadbe3b042b53bcbbd19dccc513ea403cd1eaf6d40d2a71fec2a202a35_prof);

    }

    // line 19
    public function block_root($context, array $blocks = array())
    {
        $__internal_c83612eb2ea616d1562150891eb5ede4153678579d840081e41a37290cb34374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83612eb2ea616d1562150891eb5ede4153678579d840081e41a37290cb34374->enter($__internal_c83612eb2ea616d1562150891eb5ede4153678579d840081e41a37290cb34374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 24
        $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 24, $this->getSourceContext()); })()), array("currentDepth" => 0));
        // line 25
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "currentClass", array(), "any", true, true)) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 25, $this->getSourceContext()); })()), "currentClass", array()) == "current"))) {
            // line 26
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 26, $this->getSourceContext()); })()), array("currentClass" => "active"));
            // line 27
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 27, $this->getSourceContext()); })()), array("ancestorClass" => "active"));
        }
        // line 29
        $context["listAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "childrenAttributes", array());
        // line 30
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_c83612eb2ea616d1562150891eb5ede4153678579d840081e41a37290cb34374->leave($__internal_c83612eb2ea616d1562150891eb5ede4153678579d840081e41a37290cb34374_prof);

    }

    // line 33
    public function block_list($context, array $blocks = array())
    {
        $__internal_a0b75807b2375ec6922bf29dcb4d16c24a640b9c9dcd14203f8eebd034ee3ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b75807b2375ec6922bf29dcb4d16c24a640b9c9dcd14203f8eebd034ee3ea1->enter($__internal_a0b75807b2375ec6922bf29dcb4d16c24a640b9c9dcd14203f8eebd034ee3ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 34
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 34, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 35
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 35, $this->getSourceContext()); })()), array("class" => trim(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array()), "")) : ("")))));
            // line 36
            echo "
    ";
            // line 37
            $context["listClass"] = "";
            // line 38
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 38, $this->getSourceContext()); })()), "style", array()) == "tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 40
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "style", array()) == "stacked-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 42
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 42, $this->getSourceContext()); })()), "style", array()) == "justified-tabs"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 44
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 44, $this->getSourceContext()); })()), "style", array()) == "pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 46
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 46, $this->getSourceContext()); })()), "style", array()) == "justified-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 48
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 48, $this->getSourceContext()); })()), "style", array()) == "stacked-pills"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 50
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 50, $this->getSourceContext()); })()), "style", array()) == "list"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 52
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 52, $this->getSourceContext()); })()), "style", array()) == "navbar"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 54
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 54, $this->getSourceContext()); })()), "style", array()) == "navbar-right"))) {
                // line 55
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 56
                echo "    ";
            }
            // line 57
            echo "
    ";
            // line 58
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "pull", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 58, $this->getSourceContext()); })()), "pull", array()) == "right"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 59, $this->getSourceContext()); })()), "")) : ("")) . " pull-right"));
                // line 60
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "pull", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 60, $this->getSourceContext()); })()), "pull", array()) == "left"))) {
                // line 61
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 61, $this->getSourceContext()); })()), "")) : ("")) . "pull-left"));
                // line 62
                echo "    ";
            }
            // line 63
            echo "    
    ";
            // line 64
            $context["listClass"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 64, $this->getSourceContext()); })()), "currentDepth", array()) == 0)) ? (((isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 64, $this->getSourceContext()); })()) . " nav")) : ((isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 64, $this->getSourceContext()); })())));
            // line 65
            echo "
    ";
            // line 66
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 66, $this->getSourceContext()); })()), array("class" => trim(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 66, $this->getSourceContext()); })())))));
            // line 67
            echo "
    <ul";
            // line 68
            echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 68, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 69
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_a0b75807b2375ec6922bf29dcb4d16c24a640b9c9dcd14203f8eebd034ee3ea1->leave($__internal_a0b75807b2375ec6922bf29dcb4d16c24a640b9c9dcd14203f8eebd034ee3ea1_prof);

    }

    // line 74
    public function block_dropdownList($context, array $blocks = array())
    {
        $__internal_0ff889f7e0a9a8ce27ecb56d51e72ce9413ed8a20939d9cfef2038510b0bf847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff889f7e0a9a8ce27ecb56d51e72ce9413ed8a20939d9cfef2038510b0bf847->enter($__internal_0ff889f7e0a9a8ce27ecb56d51e72ce9413ed8a20939d9cfef2038510b0bf847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownList"));

        // line 75
        ob_start();
        // line 76
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 76, $this->getSourceContext()); })()), "depth", array()) === 0)) && (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "displayChildren", array()) === true)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "extras", array()), "dropdown", array()) === true)) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "displayChildren", array()) === true))))) {
            // line 77
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 77, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listAttributes"] ?? null), "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 78
            echo "        <ul";
            echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 78, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 79
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ff889f7e0a9a8ce27ecb56d51e72ce9413ed8a20939d9cfef2038510b0bf847->leave($__internal_0ff889f7e0a9a8ce27ecb56d51e72ce9413ed8a20939d9cfef2038510b0bf847_prof);

    }

    // line 85
    public function block_listList($context, array $blocks = array())
    {
        $__internal_4190acad15623202e4abc981a29a1161d7e2b0695bfb67fdf3333cfbbb1b66d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4190acad15623202e4abc981a29a1161d7e2b0695bfb67fdf3333cfbbb1b66d7->enter($__internal_4190acad15623202e4abc981a29a1161d7e2b0695bfb67fdf3333cfbbb1b66d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listList"));

        // line 86
        ob_start();
        // line 87
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 87, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 87, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 88
            echo "        <ul";
            echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 88, $this->getSourceContext()); })()));
            echo ">
            ";
            // line 89
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4190acad15623202e4abc981a29a1161d7e2b0695bfb67fdf3333cfbbb1b66d7->leave($__internal_4190acad15623202e4abc981a29a1161d7e2b0695bfb67fdf3333cfbbb1b66d7_prof);

    }

    // line 95
    public function block_children($context, array $blocks = array())
    {
        $__internal_445077a9863ec5462a2c44b54769bc2da9b79803f592128a15a93d6bf8281df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445077a9863ec5462a2c44b54769bc2da9b79803f592128a15a93d6bf8281df1->enter($__internal_445077a9863ec5462a2c44b54769bc2da9b79803f592128a15a93d6bf8281df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 97
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 97, $this->getSourceContext()); })());
        // line 98
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 98, $this->getSourceContext()); })());
        // line 100
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 100, $this->getSourceContext()); })()), "depth", array()))) {
            // line 101
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 101, $this->getSourceContext()); })()), array("depth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 101, $this->getSourceContext()); })()), "depth", array()) - 1)));
        }
        // line 103
        $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 103, $this->getSourceContext()); })()), array("currentDepth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 103, $this->getSourceContext()); })()), "currentDepth", array()) + 1)));
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 104, $this->getSourceContext()); })()), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 108, $this->getSourceContext()); })());
        // line 109
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 109, $this->getSourceContext()); })());
        
        $__internal_445077a9863ec5462a2c44b54769bc2da9b79803f592128a15a93d6bf8281df1->leave($__internal_445077a9863ec5462a2c44b54769bc2da9b79803f592128a15a93d6bf8281df1_prof);

    }

    // line 112
    public function block_item($context, array $blocks = array())
    {
        $__internal_478b4cf81e59179a7ab730dee439827adc6f8d90192bca0a8d1940421deb7ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478b4cf81e59179a7ab730dee439827adc6f8d90192bca0a8d1940421deb7ecb->enter($__internal_478b4cf81e59179a7ab730dee439827adc6f8d90192bca0a8d1940421deb7ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 113
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 113, $this->getSourceContext()); })()), "displayed", array())) {
            // line 115
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 116
            if (((array_key_exists("matcher", $context) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 116, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 116, $this->getSourceContext()); })())), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "current", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 116, $this->getSourceContext()); })()), "current", array())))) {
                // line 117
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 117, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 117, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (((            // line 118
array_key_exists("matcher", $context) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 118, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 118, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 118, $this->getSourceContext()); })()), "depth", array())), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "currentAncestor", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 118, $this->getSourceContext()); })()), "currentAncestor", array())))) {
                // line 119
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 119, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 119, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 121
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 121, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 122
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 122, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 122, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 124
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 124, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 125
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 125, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 125, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 127
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 127, $this->getSourceContext()); })()), "hasChildren", array()) && ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 127, $this->getSourceContext()); })()), "style", array()) == "list")) ||  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 127, $this->getSourceContext()); })()), "currentDepth", array()) === 1)))) {
                // line 128
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 128, $this->getSourceContext()); })()), array(0 => "nav-header"));
            } elseif ((((twig_get_attribute($this->env, $this->getSourceContext(),             // line 129
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 129, $this->getSourceContext()); })()), "hasChildren", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true)) && twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 129, $this->getSourceContext()); })()), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 129, $this->getSourceContext()); })()), "displayChildren", array()) === true)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 129, $this->getSourceContext()); })()), "extras", array()), "dropdown", array()) === true)) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 129, $this->getSourceContext()); })()), "displayChildren", array()) === true))))) {
                // line 130
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 130, $this->getSourceContext()); })()), array(0 => "dropdown"));
            }
            // line 133
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 133, $this->getSourceContext()); })()), "attributes", array());
            // line 135
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 135, $this->getSourceContext()); })()), "style", array()) == "navbar")) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider", array(), "any", true, true)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 135, $this->getSourceContext()); })()), "divider", array()))) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 135, $this->getSourceContext()); })()), "currentDepth", array()) === 1))) {
                // line 136
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 136, $this->getSourceContext()); })()), array(0 => "divider-vertical"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 137
($context["attributes"] ?? null), "divider", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 137, $this->getSourceContext()); })()), "divider", array())))) {
                // line 138
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 138, $this->getSourceContext()); })()), array(0 => "divider"));
            }
            // line 141
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 141, $this->getSourceContext()); })()))) {
                // line 142
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 142, $this->getSourceContext()); })()), " ")));
            }
            // line 145
            echo "    <li";
            echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 145, $this->getSourceContext()); })()));
            echo ">";
            // line 146
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "divider", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 146, $this->getSourceContext()); })()), "divider", array())))) {
            } elseif (((((twig_get_attribute($this->env, $this->getSourceContext(),             // line 147
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->getSourceContext()); })()), "hasChildren", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true)) && twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 147, $this->getSourceContext()); })()), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 147, $this->getSourceContext()); })()), "currentDepth", array()) === 1)) && (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->getSourceContext()); })()), "displayChildren", array()) === true)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->getSourceContext()); })()), "extras", array()), "dropdown", array()) === true)) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 147, $this->getSourceContext()); })()), "displayChildren", array()) === true))))) {
                // line 148
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (((((twig_get_attribute($this->env, $this->getSourceContext(),             // line 149
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 149, $this->getSourceContext()); })()), "hasChildren", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true)) && twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 149, $this->getSourceContext()); })()), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 149, $this->getSourceContext()); })()), "currentDepth", array()) === 1)) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 149, $this->getSourceContext()); })()), "extras", array()), "dropdown", array()) === false)) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 149, $this->getSourceContext()); })()), "displayChildren", array(0 => false), "method")))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(),             // line 151
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 151, $this->getSourceContext()); })()), "uri", array())) && ((array_key_exists("matcher", $context) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 151, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 151, $this->getSourceContext()); })())), "method")) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 151, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 152
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(),             // line 153
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 153, $this->getSourceContext()); })()), "uri", array())) && ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "current", array(), "any", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 153, $this->getSourceContext()); })()), "current", array())) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 153, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 154
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 156
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 159
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 159, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 159, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 160
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 160, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 160, $this->getSourceContext()); })()), "level", array()))));
            // line 161
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 161, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 161, $this->getSourceContext()); })()), " ")));
            // line 162
            if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 162, $this->getSourceContext()); })()), "hasChildren", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true)) && ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 162, $this->getSourceContext()); })()), "style", array()) == "list") ||  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 162, $this->getSourceContext()); })()), "currentDepth", array()) === 1)))) {
                // line 163
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),             // line 164
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 164, $this->getSourceContext()); })()), "hasChildren", array()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "style", array(), "any", true, true)) && twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 164, $this->getSourceContext()); })()), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 165
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 167
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 169
            echo "    </li>
";
        }
        
        $__internal_478b4cf81e59179a7ab730dee439827adc6f8d90192bca0a8d1940421deb7ecb->leave($__internal_478b4cf81e59179a7ab730dee439827adc6f8d90192bca0a8d1940421deb7ecb_prof);

    }

    // line 173
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_a24f7e7e6b30264478c3ca303b6c423dde5fe9b4b47e4d155a16e02f98cde1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24f7e7e6b30264478c3ca303b6c423dde5fe9b4b47e4d155a16e02f98cde1a9->enter($__internal_a24f7e7e6b30264478c3ca303b6c423dde5fe9b4b47e4d155a16e02f98cde1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 173, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 173, $this->getSourceContext()); })()), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a24f7e7e6b30264478c3ca303b6c423dde5fe9b4b47e4d155a16e02f98cde1a9->leave($__internal_a24f7e7e6b30264478c3ca303b6c423dde5fe9b4b47e4d155a16e02f98cde1a9_prof);

    }

    // line 175
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_93ab8e12e250c72344c95bda3371bae5f3c6fc601007d2381814335ac9fdf81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ab8e12e250c72344c95bda3371bae5f3c6fc601007d2381814335ac9fdf81b->enter($__internal_93ab8e12e250c72344c95bda3371bae5f3c6fc601007d2381814335ac9fdf81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["labelAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 177, $this->getSourceContext()); })()), "labelAttributes", array());
        // line 178
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "labelAttributes" does not exist.', 178, $this->getSourceContext()); })()), array("class" => trim((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["labelAttributes"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["labelAttributes"] ?? null), "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 179
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "labelAttributes" does not exist.', 179, $this->getSourceContext()); })()), array("data-toggle" => "dropdown"));
        // line 180
        echo "    <a href=\"#\"";
        echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "labelAttributes" does not exist.', 180, $this->getSourceContext()); })()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_93ab8e12e250c72344c95bda3371bae5f3c6fc601007d2381814335ac9fdf81b->leave($__internal_93ab8e12e250c72344c95bda3371bae5f3c6fc601007d2381814335ac9fdf81b_prof);

    }

    // line 184
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_dc77f7fda37941844384770e94da2340da30b7e01fd0d3c0f93bf5efec4ab9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc77f7fda37941844384770e94da2340da30b7e01fd0d3c0f93bf5efec4ab9fb->enter($__internal_dc77f7fda37941844384770e94da2340da30b7e01fd0d3c0f93bf5efec4ab9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 185
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc77f7fda37941844384770e94da2340da30b7e01fd0d3c0f93bf5efec4ab9fb->leave($__internal_dc77f7fda37941844384770e94da2340da30b7e01fd0d3c0f93bf5efec4ab9fb_prof);

    }

    // line 189
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_343e94f5724f8b2b73c05c7ce6365d418dfada95cad2b4537ca46421925ea6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343e94f5724f8b2b73c05c7ce6365d418dfada95cad2b4537ca46421925ea6f3->enter($__internal_343e94f5724f8b2b73c05c7ce6365d418dfada95cad2b4537ca46421925ea6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<span";
        echo $context["__internal_18d6b107e0a8fa89967de7095aaa5d3ecaa359f5101c7beeb176f5d2343519e7"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 189, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_343e94f5724f8b2b73c05c7ce6365d418dfada95cad2b4537ca46421925ea6f3->leave($__internal_343e94f5724f8b2b73c05c7ce6365d418dfada95cad2b4537ca46421925ea6f3_prof);

    }

    // line 191
    public function block_label($context, array $blocks = array())
    {
        $__internal_c51e5033bf3c349a59ecfdb7e89b8f9fbbf07cee9b4a43b6517cddc3ce93ba67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51e5033bf3c349a59ecfdb7e89b8f9fbbf07cee9b4a43b6517cddc3ce93ba67->enter($__internal_c51e5033bf3c349a59ecfdb7e89b8f9fbbf07cee9b4a43b6517cddc3ce93ba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 191, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "label", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_params", 1 => array()), "method"), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")));
        } else {
            echo $this->env->getExtension('Braincrafted\Bundle\BootstrapBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "label", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_params", 1 => array()), "method"), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 191, $this->getSourceContext()); })()), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")), "html", null, true));
        }
        
        $__internal_c51e5033bf3c349a59ecfdb7e89b8f9fbbf07cee9b4a43b6517cddc3ce93ba67->leave($__internal_c51e5033bf3c349a59ecfdb7e89b8f9fbbf07cee9b4a43b6517cddc3ce93ba67_prof);

    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bf1434f0a80d4fddb5a58191fa00f860acce9d904cead042627323111f88eaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bf1434f0a80d4fddb5a58191fa00f860acce9d904cead042627323111f88eaf4->enter($__internal_bf1434f0a80d4fddb5a58191fa00f860acce9d904cead042627323111f88eaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_bf1434f0a80d4fddb5a58191fa00f860acce9d904cead042627323111f88eaf4->leave($__internal_bf1434f0a80d4fddb5a58191fa00f860acce9d904cead042627323111f88eaf4_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 6,  557 => 5,  553 => 4,  538 => 3,  522 => 191,  506 => 189,  498 => 185,  492 => 184,  479 => 180,  476 => 179,  473 => 178,  470 => 177,  468 => 176,  462 => 175,  444 => 173,  435 => 169,  431 => 167,  427 => 165,  425 => 164,  422 => 163,  420 => 162,  418 => 161,  416 => 160,  414 => 159,  410 => 156,  406 => 154,  404 => 153,  401 => 152,  399 => 151,  396 => 150,  394 => 149,  391 => 148,  389 => 147,  387 => 146,  383 => 145,  380 => 142,  378 => 141,  375 => 138,  373 => 137,  371 => 136,  369 => 135,  367 => 133,  364 => 130,  362 => 129,  360 => 128,  358 => 127,  355 => 125,  353 => 124,  350 => 122,  348 => 121,  345 => 119,  343 => 118,  341 => 117,  339 => 116,  337 => 115,  335 => 113,  329 => 112,  322 => 109,  320 => 108,  303 => 105,  286 => 104,  284 => 103,  281 => 101,  279 => 100,  277 => 98,  275 => 97,  269 => 95,  257 => 89,  252 => 88,  249 => 87,  247 => 86,  241 => 85,  229 => 79,  224 => 78,  221 => 77,  218 => 76,  216 => 75,  210 => 74,  199 => 69,  195 => 68,  192 => 67,  190 => 66,  187 => 65,  185 => 64,  182 => 63,  179 => 62,  176 => 61,  173 => 60,  170 => 59,  168 => 58,  165 => 57,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  114 => 40,  111 => 39,  108 => 38,  106 => 37,  103 => 36,  100 => 35,  98 => 34,  92 => 33,  85 => 30,  83 => 29,  79 => 27,  76 => 26,  74 => 25,  72 => 24,  66 => 19,  56 => 15,  54 => 14,  48 => 13,  41 => 1,  39 => 11,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as (false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as (true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% from _self import attributes as attributes %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{#
    Twitter Bootstrap uses the CSS class \"active\" to indicate
    the current item, so lets change that.
#}
{% set options = options|merge({'currentDepth': 0}) %}
{% if options.style is defined and options.currentClass is defined and options.currentClass == 'current' %}
    {% set options = options|merge({'currentClass': 'active'}) %}
    {% set options = options|merge({'ancestorClass': 'active'}) %}
{% endif %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}
    {% set listAttributes = listAttributes|merge({'class': listAttributes.class|default('')|trim}) %}

    {% set listClass = '' %}
    {% if options.style is defined and options.style == 'tabs' %}
        {% set listClass = 'nav-tabs' %}
    {% elseif options.style is defined and options.style == 'stacked-tabs' %}
        {% set listClass = 'nav-tabs nav-stacked' %}
    {% elseif options.style is defined and options.style == 'justified-tabs' %}
        {% set listClass = 'nav-tabs nav-justified' %}
    {% elseif options.style is defined and options.style == 'pills' %}
        {% set listClass = 'nav-pills' %}
    {% elseif options.style is defined and options.style == 'justified-pills' %}
        {% set listClass = 'nav-pills nav-justified' %}
    {% elseif options.style is defined and options.style == 'stacked-pills' %}
        {% set listClass = 'nav-pills nav-stacked' %}
    {% elseif options.style is defined and options.style == 'list' %}
        {% set listClass = 'nav-list' %}
    {% elseif options.style is defined and options.style == 'navbar' %}
        {% set listClass = 'navbar-nav' %}
    {% elseif options.style is defined and options.style == 'navbar-right' %}
        {% set listClass = 'navbar-nav navbar-right' %}
    {% endif %}

    {% if options.pull is defined and options.pull == 'right' %}
        {% set listClass = (listClass|default('') ~ ' pull-right')|trim %}
    {% elseif options.pull is defined and options.pull == 'left' %}
        {% set listClass = (listClass|default('') ~ 'pull-left')|trim %}
    {% endif %}
    
    {% set listClass = (options.currentDepth == 0) ? listClass ~ ' nav' : listClass %}

    {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' ' ~ listClass)|trim}) %}

    <ul{{ attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block dropdownList %}
{% spaceless %}
    {% if item.hasChildren and options.depth is not same as (0) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}
        {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' dropdown-menu')|trim}) %}
        <ul{{ attributes(listAttributes) }}>
        {{ block('children') }}
        </ul>
    {% endif %}
{% endspaceless %}
{% endblock dropdownList %}

{% block listList %}
{% spaceless %}
    {% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}
        <ul{{ attributes(listAttributes) }}>
            {{ block('children') }}
        </ul>
    {% endif %}
{% endspaceless %}
{% endblock listList %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{% set options = options|merge({'currentDepth': options.currentDepth + 1}) %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if (matcher is defined and matcher.isCurrent(item)) or (item.current is defined and item.current) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif (matcher is defined and matcher.isAncestor(item, options.depth)) or (item.currentAncestor is defined and item.currentAncestor) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}
    {%- if item.hasChildren and ((options.style is defined and options.style == 'list') or options.currentDepth is not same as (1)) %}
        {%- set classes = classes|merge(['nav-header']) %}
    {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}
        {%- set classes = classes|merge(['dropdown']) %}
    {%- endif %}

    {%- set attributes = item.attributes %}

    {%- if options.style is defined and options.style == 'navbar' and attributes.divider is defined and attributes.divider is not empty and options.currentDepth is same as (1) %}
        {%- set classes = classes|merge(['divider-vertical']) %}
    {%- elseif attributes.divider is defined and attributes.divider is not empty %}
        {%- set classes = classes|merge(['divider']) %}
    {%- endif %}

    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    <li{{ attributes(attributes) }}>
        {%- if attributes.divider is defined and attributes.divider is not empty %}
        {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}
            {{ block('dropdownElement') }}
        {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is defined and item.extras.dropdown is same as (false) or item.displayChildren(false) )) %}
            {{ block('linkElement') }}
        {%- elseif item.uri is not empty and ((matcher is defined and not matcher.isCurrent(item)) or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- elseif item.uri is not empty and ((item.current is defined and not item.current) or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {%- if item.hasChildren and options.style is defined and (options.style == 'list' or options.currentDepth is not same as (1)) %}
            {{ block('listList') }}
        {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] %}
            {{ block('dropdownList') }}
        {%- else %}
            {{ block('list') }}
        {%- endif %}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block dropdownElement %}
{% spaceless %}
    {% set labelAttributes = item.labelAttributes %}
    {% set labelAttributes = labelAttributes|merge({'class': (labelAttributes.class|default('') ~ ' dropdown-toggle')|trim}) %}
    {% set labelAttributes = labelAttributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ attributes(labelAttributes) }}>{{ block('label') }} <b class=\"caret\"></b></a>
{% endspaceless %}
{% endblock dropdownElement %}

{% block dividerElement %}
{% spaceless %}
{% endspaceless %}
{% endblock dividerElement %}

{% block spanElement %}<span{{ attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|raw|parse_icons }}{% else %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|parse_icons }}{% endif %}{% endblock %}", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig", "/var/www/vote/vendor/braincrafted/bootstrap-bundle/Braincrafted/Bundle/BootstrapBundle/Resources/views/Menu/bootstrap.html.twig");
    }
}
