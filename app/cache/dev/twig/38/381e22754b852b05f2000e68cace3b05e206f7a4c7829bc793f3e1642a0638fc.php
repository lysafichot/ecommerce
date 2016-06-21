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
        $__internal_0f70a609032f7ee1e3a6547d952c54fe4e60ebf487732a89421d8bef7533f0ce = $this->env->getExtension("native_profiler");
        $__internal_0f70a609032f7ee1e3a6547d952c54fe4e60ebf487732a89421d8bef7533f0ce->enter($__internal_0f70a609032f7ee1e3a6547d952c54fe4e60ebf487732a89421d8bef7533f0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f70a609032f7ee1e3a6547d952c54fe4e60ebf487732a89421d8bef7533f0ce->leave($__internal_0f70a609032f7ee1e3a6547d952c54fe4e60ebf487732a89421d8bef7533f0ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f648708826179d91af9330e9c642984744ae688fc45f477a8d73c7f91881f4b = $this->env->getExtension("native_profiler");
        $__internal_2f648708826179d91af9330e9c642984744ae688fc45f477a8d73c7f91881f4b->enter($__internal_2f648708826179d91af9330e9c642984744ae688fc45f477a8d73c7f91881f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f648708826179d91af9330e9c642984744ae688fc45f477a8d73c7f91881f4b->leave($__internal_2f648708826179d91af9330e9c642984744ae688fc45f477a8d73c7f91881f4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea96db442d426a0e5451d716be0f2de509eb9720e13c4d349f60e968d52da7e0 = $this->env->getExtension("native_profiler");
        $__internal_ea96db442d426a0e5451d716be0f2de509eb9720e13c4d349f60e968d52da7e0->enter($__internal_ea96db442d426a0e5451d716be0f2de509eb9720e13c4d349f60e968d52da7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea96db442d426a0e5451d716be0f2de509eb9720e13c4d349f60e968d52da7e0->leave($__internal_ea96db442d426a0e5451d716be0f2de509eb9720e13c4d349f60e968d52da7e0_prof);

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
