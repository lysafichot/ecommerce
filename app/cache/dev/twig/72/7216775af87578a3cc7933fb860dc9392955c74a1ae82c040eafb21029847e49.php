<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ee1f4406f13152271d2ff52491fab07d2d33879e000e979044f1500b5d754a0b extends Twig_Template
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
        $__internal_de0053d918a83e2bc52c7d69fe14af987fbda1244f0d72d56bf84e39a74e18b3 = $this->env->getExtension("native_profiler");
        $__internal_de0053d918a83e2bc52c7d69fe14af987fbda1244f0d72d56bf84e39a74e18b3->enter($__internal_de0053d918a83e2bc52c7d69fe14af987fbda1244f0d72d56bf84e39a74e18b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0053d918a83e2bc52c7d69fe14af987fbda1244f0d72d56bf84e39a74e18b3->leave($__internal_de0053d918a83e2bc52c7d69fe14af987fbda1244f0d72d56bf84e39a74e18b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_045a46d09cbc943e27842c25c74f270ebb9796f5d7cb21949f363d65d2fc1633 = $this->env->getExtension("native_profiler");
        $__internal_045a46d09cbc943e27842c25c74f270ebb9796f5d7cb21949f363d65d2fc1633->enter($__internal_045a46d09cbc943e27842c25c74f270ebb9796f5d7cb21949f363d65d2fc1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_045a46d09cbc943e27842c25c74f270ebb9796f5d7cb21949f363d65d2fc1633->leave($__internal_045a46d09cbc943e27842c25c74f270ebb9796f5d7cb21949f363d65d2fc1633_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1d8cc7eb98d490d9ca1f894049e6dcf26fe0459bd9358895aa0f6ebe52ea4db = $this->env->getExtension("native_profiler");
        $__internal_c1d8cc7eb98d490d9ca1f894049e6dcf26fe0459bd9358895aa0f6ebe52ea4db->enter($__internal_c1d8cc7eb98d490d9ca1f894049e6dcf26fe0459bd9358895aa0f6ebe52ea4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1d8cc7eb98d490d9ca1f894049e6dcf26fe0459bd9358895aa0f6ebe52ea4db->leave($__internal_c1d8cc7eb98d490d9ca1f894049e6dcf26fe0459bd9358895aa0f6ebe52ea4db_prof);

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
