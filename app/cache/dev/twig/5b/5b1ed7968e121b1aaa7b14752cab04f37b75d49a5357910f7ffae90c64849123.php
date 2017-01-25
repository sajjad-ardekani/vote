<?php

/* AppBundle:User/Chat:chat.html.twig */
class __TwigTemplate_3d1fd6a371eb54b91c3a70a2efac0efb37b5fff0a1febf7e9c09a04d090b625c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:User/Chat:chat.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a1a6360a74da4eb2e0f939264f067b9c0bababdfe8bcaf795828dc9cde04439b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a6360a74da4eb2e0f939264f067b9c0bababdfe8bcaf795828dc9cde04439b->enter($__internal_a1a6360a74da4eb2e0f939264f067b9c0bababdfe8bcaf795828dc9cde04439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/Chat:chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a6360a74da4eb2e0f939264f067b9c0bababdfe8bcaf795828dc9cde04439b->leave($__internal_a1a6360a74da4eb2e0f939264f067b9c0bababdfe8bcaf795828dc9cde04439b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_03bf19b2bfba0fb67828128f0192b0758d673691d861ec176d5e8049a4916f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bf19b2bfba0fb67828128f0192b0758d673691d861ec176d5e8049a4916f62->enter($__internal_03bf19b2bfba0fb67828128f0192b0758d673691d861ec176d5e8049a4916f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row chat-window col-xs-5 col-md-3\" id=\"chat_window_1\" style=\"margin-left:10px;\">
            <div class=\"col-xs-12 col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading top-bar\">
                        <div class=\"col-md-8 col-xs-8\">
                            <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-comment\"></span> Chat - Miguel</h3>
                        </div>
                        <div class=\"col-md-4 col-xs-4\" style=\"text-align: right;\">
                            <a href=\"#\"><span id=\"minim_chat_window\" class=\"glyphicon glyphicon-minus icon_minim\"></span></a>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-remove icon_close\" data-id=\"chat_window_1\"></span></a>
                        </div>
                    </div>
                    <div class=\"panel-body msg_container_base\">
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-md-10 col-xs-10\">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-md-10 col-xs-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-md-10 col-xs-10 \">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm chat_input\" placeholder=\"Write your message here...\" />
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-sm\" id=\"btn-chat\">Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"btn-group dropup\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"glyphicon glyphicon-cog\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" id=\"new_chat\"><span class=\"glyphicon glyphicon-plus\"></span> Novo</a></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-list\"></span> Ver outras</a></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-remove\"></span> Fechar Tudo</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-eye-close\"></span> Invisivel</a></li>
            </ul>
        </div>
    </div>
";
        
        $__internal_03bf19b2bfba0fb67828128f0192b0758d673691d861ec176d5e8049a4916f62->leave($__internal_03bf19b2bfba0fb67828128f0192b0758d673691d861ec176d5e8049a4916f62_prof);

    }

    // line 117
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26ae44adeb2201c4cf0f92bbbd167ccf6e21cdc992bc2d80f30f187cd72370f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ae44adeb2201c4cf0f92bbbd167ccf6e21cdc992bc2d80f30f187cd72370f6->enter($__internal_26ae44adeb2201c4cf0f92bbbd167ccf6e21cdc992bc2d80f30f187cd72370f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 118
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_26ae44adeb2201c4cf0f92bbbd167ccf6e21cdc992bc2d80f30f187cd72370f6->leave($__internal_26ae44adeb2201c4cf0f92bbbd167ccf6e21cdc992bc2d80f30f187cd72370f6_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44da24d7fceb16caffb45125c41a4bd7a264232be79ee9fa89c4bbf3e0d187c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da24d7fceb16caffb45125c41a4bd7a264232be79ee9fa89c4bbf3e0d187c0->enter($__internal_44da24d7fceb16caffb45125c41a4bd7a264232be79ee9fa89c4bbf3e0d187c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "
    ";
        // line 124
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/chat.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_44da24d7fceb16caffb45125c41a4bd7a264232be79ee9fa89c4bbf3e0d187c0->leave($__internal_44da24d7fceb16caffb45125c41a4bd7a264232be79ee9fa89c4bbf3e0d187c0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/Chat:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 126,  191 => 124,  188 => 123,  182 => 122,  173 => 119,  168 => 118,  162 => 117,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{%block content %}
    <div class=\"container\">
        <div class=\"row chat-window col-xs-5 col-md-3\" id=\"chat_window_1\" style=\"margin-left:10px;\">
            <div class=\"col-xs-12 col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading top-bar\">
                        <div class=\"col-md-8 col-xs-8\">
                            <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-comment\"></span> Chat - Miguel</h3>
                        </div>
                        <div class=\"col-md-4 col-xs-4\" style=\"text-align: right;\">
                            <a href=\"#\"><span id=\"minim_chat_window\" class=\"glyphicon glyphicon-minus icon_minim\"></span></a>
                            <a href=\"#\"><span class=\"glyphicon glyphicon-remove icon_close\" data-id=\"chat_window_1\"></span></a>
                        </div>
                    </div>
                    <div class=\"panel-body msg_container_base\">
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-md-10 col-xs-10\">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-md-10 col-xs-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                        <div class=\"row msg_container base_receive\">
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                            <div class=\"col-xs-10 col-md-10\">
                                <div class=\"messages msg_receive\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <div class=\"row msg_container base_sent\">
                            <div class=\"col-md-10 col-xs-10 \">
                                <div class=\"messages msg_sent\">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime=\"2009-11-13T20:00\">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-2 avatar\">
                                <img src=\"http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm chat_input\" placeholder=\"Write your message here...\" />
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-sm\" id=\"btn-chat\">Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"btn-group dropup\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"glyphicon glyphicon-cog\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" id=\"new_chat\"><span class=\"glyphicon glyphicon-plus\"></span> Novo</a></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-list\"></span> Ver outras</a></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-remove\"></span> Fechar Tudo</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-eye-close\"></span> Invisivel</a></li>
            </ul>
        </div>
    </div>
{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('assets/css/chat.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}

    {{ parent() }}

    <script src=\"{{asset('assets/js/chat.js')}}\"></script>

{% endblock %}", "AppBundle:User/Chat:chat.html.twig", "/var/www/vote/src/AppBundle/Resources/views/User/Chat/chat.html.twig");
    }
}
