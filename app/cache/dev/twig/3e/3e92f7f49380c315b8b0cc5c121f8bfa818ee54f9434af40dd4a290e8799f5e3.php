<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_37e27ba7ec524b866b494fe9b6d472db413d47437acce45a39af28d813777a55 extends Twig_Template
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
        $__internal_dde4d50e92829e7045a0b4a409ececa4ba8b5c79bff7abc484fa413ed6af79cb = $this->env->getExtension("native_profiler");
        $__internal_dde4d50e92829e7045a0b4a409ececa4ba8b5c79bff7abc484fa413ed6af79cb->enter($__internal_dde4d50e92829e7045a0b4a409ececa4ba8b5c79bff7abc484fa413ed6af79cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde4d50e92829e7045a0b4a409ececa4ba8b5c79bff7abc484fa413ed6af79cb->leave($__internal_dde4d50e92829e7045a0b4a409ececa4ba8b5c79bff7abc484fa413ed6af79cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec7c388a5c09e19645d434a6cba8d58d66ff4ffda77a2402fd8e8d4f7a099645 = $this->env->getExtension("native_profiler");
        $__internal_ec7c388a5c09e19645d434a6cba8d58d66ff4ffda77a2402fd8e8d4f7a099645->enter($__internal_ec7c388a5c09e19645d434a6cba8d58d66ff4ffda77a2402fd8e8d4f7a099645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec7c388a5c09e19645d434a6cba8d58d66ff4ffda77a2402fd8e8d4f7a099645->leave($__internal_ec7c388a5c09e19645d434a6cba8d58d66ff4ffda77a2402fd8e8d4f7a099645_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db57d8e5f47d86aec1f36771915f04f3fdf5c10417d3652fa3a3cf9bf4565fcc = $this->env->getExtension("native_profiler");
        $__internal_db57d8e5f47d86aec1f36771915f04f3fdf5c10417d3652fa3a3cf9bf4565fcc->enter($__internal_db57d8e5f47d86aec1f36771915f04f3fdf5c10417d3652fa3a3cf9bf4565fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db57d8e5f47d86aec1f36771915f04f3fdf5c10417d3652fa3a3cf9bf4565fcc->leave($__internal_db57d8e5f47d86aec1f36771915f04f3fdf5c10417d3652fa3a3cf9bf4565fcc_prof);

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
