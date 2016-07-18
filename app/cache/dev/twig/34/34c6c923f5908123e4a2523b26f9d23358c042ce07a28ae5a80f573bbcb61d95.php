<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3570b779cfa48dcc4a93fa47fc2e84361e4001f64ab274e9818cc2ea38f1c185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0c4d15f8a6adb2d98b877a75a03fe9b2c4da64e07b54d178480d25a47ccb1db = $this->env->getExtension("native_profiler");
        $__internal_f0c4d15f8a6adb2d98b877a75a03fe9b2c4da64e07b54d178480d25a47ccb1db->enter($__internal_f0c4d15f8a6adb2d98b877a75a03fe9b2c4da64e07b54d178480d25a47ccb1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c4d15f8a6adb2d98b877a75a03fe9b2c4da64e07b54d178480d25a47ccb1db->leave($__internal_f0c4d15f8a6adb2d98b877a75a03fe9b2c4da64e07b54d178480d25a47ccb1db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03d3035fd581cc6846f87acbb82ccd0c72618768307d714bf1b2605e453bb9e = $this->env->getExtension("native_profiler");
        $__internal_b03d3035fd581cc6846f87acbb82ccd0c72618768307d714bf1b2605e453bb9e->enter($__internal_b03d3035fd581cc6846f87acbb82ccd0c72618768307d714bf1b2605e453bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b03d3035fd581cc6846f87acbb82ccd0c72618768307d714bf1b2605e453bb9e->leave($__internal_b03d3035fd581cc6846f87acbb82ccd0c72618768307d714bf1b2605e453bb9e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a53ba6d8cbba9ebd1574f7ef372a4be98528961ec89991fe8899a60b9503bc84 = $this->env->getExtension("native_profiler");
        $__internal_a53ba6d8cbba9ebd1574f7ef372a4be98528961ec89991fe8899a60b9503bc84->enter($__internal_a53ba6d8cbba9ebd1574f7ef372a4be98528961ec89991fe8899a60b9503bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a53ba6d8cbba9ebd1574f7ef372a4be98528961ec89991fe8899a60b9503bc84->leave($__internal_a53ba6d8cbba9ebd1574f7ef372a4be98528961ec89991fe8899a60b9503bc84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
