<?php

/* AppBundle:Admin:menu.html.twig */
class __TwigTemplate_45c69a6dcce1e67148f0c8a5c2f8a251c9cc185f51249d677b066228923a4d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AppBundle:Admin:menu.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f41b6b05377aad224188a3ea6a180f2baf6b27d0271f19cb677734d06c796030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41b6b05377aad224188a3ea6a180f2baf6b27d0271f19cb677734d06c796030->enter($__internal_f41b6b05377aad224188a3ea6a180f2baf6b27d0271f19cb677734d06c796030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41b6b05377aad224188a3ea6a180f2baf6b27d0271f19cb677734d06c796030->leave($__internal_f41b6b05377aad224188a3ea6a180f2baf6b27d0271f19cb677734d06c796030_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_87c0db6aa61c1bf7f8f73238062ce7aad1cb83a5de5864ef3cd4afc380f81dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c0db6aa61c1bf7f8f73238062ce7aad1cb83a5de5864ef3cd4afc380f81dbb->enter($__internal_87c0db6aa61c1bf7f8f73238062ce7aad1cb83a5de5864ef3cd4afc380f81dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 4
        echo "    
<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\" style=\"height: auto;\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Alexander Pierce</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">MAIN NAVIGATION</li>
        <li class=\"active treeview\">
          <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
            <li><a href=\"index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>Layout Options</span>
            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/layout/top-nav.html\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
            <li><a href=\"pages/layout/boxed.html\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
            <li><a href=\"pages/layout/fixed.html\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
            <li><a href=\"pages/layout/collapsed-sidebar.html\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href=\"pages/widgets.html\">
            <i class=\"fa fa-th\"></i> <span>Widgets</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">new</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Charts</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
            <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
            <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
            <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-laptop\"></i>
            <span>UI Elements</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
            <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
            <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
            <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
            <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
            <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Forms</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
            <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
            <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-table\"></i> <span>Tables</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
            <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href=\"pages/calendar.html\">
            <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href=\"pages/mailbox/mailbox.html\">
            <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-folder\"></i> <span>Examples</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
            <li><a href=\"pages/examples/profile.html\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
            <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
            <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
            <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
            <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
            <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
            <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
            <li><a href=\"pages/examples/pace.html\"><i class=\"fa fa-circle-o\"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
            <li>
              <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One
                <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two
                    <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href=\"documentation/index.html\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
        <li class=\"header\">LABELS</li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
";
        
        $__internal_87c0db6aa61c1bf7f8f73238062ce7aad1cb83a5de5864ef3cd4afc380f81dbb->leave($__internal_87c0db6aa61c1bf7f8f73238062ce7aad1cb83a5de5864ef3cd4afc380f81dbb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{%block aside %}
    
<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\" style=\"height: auto;\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Alexander Pierce</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">MAIN NAVIGATION</li>
        <li class=\"active treeview\">
          <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
            <li><a href=\"index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>Layout Options</span>
            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/layout/top-nav.html\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
            <li><a href=\"pages/layout/boxed.html\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
            <li><a href=\"pages/layout/fixed.html\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
            <li><a href=\"pages/layout/collapsed-sidebar.html\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href=\"pages/widgets.html\">
            <i class=\"fa fa-th\"></i> <span>Widgets</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">new</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Charts</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
            <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
            <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
            <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-laptop\"></i>
            <span>UI Elements</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
            <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
            <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
            <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
            <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
            <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Forms</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
            <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
            <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-table\"></i> <span>Tables</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
            <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href=\"pages/calendar.html\">
            <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-red\">3</small>
              <small class=\"label pull-right bg-blue\">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href=\"pages/mailbox/mailbox.html\">
            <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
            <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-yellow\">12</small>
              <small class=\"label pull-right bg-green\">16</small>
              <small class=\"label pull-right bg-red\">5</small>
            </span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-folder\"></i> <span>Examples</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
            <li><a href=\"pages/examples/profile.html\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
            <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
            <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
            <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
            <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
            <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
            <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
            <li><a href=\"pages/examples/pace.html\"><i class=\"fa fa-circle-o\"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-share\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
            <li>
              <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One
                <span class=\"pull-right-container\">
                  <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two
                    <span class=\"pull-right-container\">
                      <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                  </a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href=\"documentation/index.html\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
        <li class=\"header\">LABELS</li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
{%endblock%}
", "AppBundle:Admin:menu.html.twig", "/var/www/vote/src/AppBundle/Resources/views/Admin/menu.html.twig");
    }
}
