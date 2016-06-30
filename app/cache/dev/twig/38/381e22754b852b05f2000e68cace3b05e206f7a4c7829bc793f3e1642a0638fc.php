<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fedfffa6dcc4f9c6dc198cb39b9fb20e5e20b69279334b526b45d9714dfdcd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_0fd7d5c3c14feaedab5419253b0fc30c2c76f515614386f67ecd7dc8c7ffd8e0 = $this->env->getExtension("native_profiler");
        $__internal_0fd7d5c3c14feaedab5419253b0fc30c2c76f515614386f67ecd7dc8c7ffd8e0->enter($__internal_0fd7d5c3c14feaedab5419253b0fc30c2c76f515614386f67ecd7dc8c7ffd8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd7d5c3c14feaedab5419253b0fc30c2c76f515614386f67ecd7dc8c7ffd8e0->leave($__internal_0fd7d5c3c14feaedab5419253b0fc30c2c76f515614386f67ecd7dc8c7ffd8e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba8c900edc4329a55ab9a14a9efaeeb8c10744e10cdb0fbf0665d0c512b7a38 = $this->env->getExtension("native_profiler");
        $__internal_2ba8c900edc4329a55ab9a14a9efaeeb8c10744e10cdb0fbf0665d0c512b7a38->enter($__internal_2ba8c900edc4329a55ab9a14a9efaeeb8c10744e10cdb0fbf0665d0c512b7a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ba8c900edc4329a55ab9a14a9efaeeb8c10744e10cdb0fbf0665d0c512b7a38->leave($__internal_2ba8c900edc4329a55ab9a14a9efaeeb8c10744e10cdb0fbf0665d0c512b7a38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9114c69bba8209879b97c23cfdb4dce00dcc8d41680c3c5039fa10b59ef624 = $this->env->getExtension("native_profiler");
        $__internal_bb9114c69bba8209879b97c23cfdb4dce00dcc8d41680c3c5039fa10b59ef624->enter($__internal_bb9114c69bba8209879b97c23cfdb4dce00dcc8d41680c3c5039fa10b59ef624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb9114c69bba8209879b97c23cfdb4dce00dcc8d41680c3c5039fa10b59ef624->leave($__internal_bb9114c69bba8209879b97c23cfdb4dce00dcc8d41680c3c5039fa10b59ef624_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
