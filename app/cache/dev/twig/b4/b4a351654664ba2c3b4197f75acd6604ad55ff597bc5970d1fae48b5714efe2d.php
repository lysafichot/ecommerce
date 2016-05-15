<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b7e90f7aec53a0a40ddd13a22f65b1a675cb1f9b38daca029d47a7fac6eddd3 extends Twig_Template
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
        $__internal_5ded68c82bdb1e5a31d67f7760d00d729046214b2e0f5119933f252410a60f3b = $this->env->getExtension("native_profiler");
        $__internal_5ded68c82bdb1e5a31d67f7760d00d729046214b2e0f5119933f252410a60f3b->enter($__internal_5ded68c82bdb1e5a31d67f7760d00d729046214b2e0f5119933f252410a60f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ded68c82bdb1e5a31d67f7760d00d729046214b2e0f5119933f252410a60f3b->leave($__internal_5ded68c82bdb1e5a31d67f7760d00d729046214b2e0f5119933f252410a60f3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1734db223fb17beb8db7a7306821a755a68fcaa3646050a13114560f288f8d3c = $this->env->getExtension("native_profiler");
        $__internal_1734db223fb17beb8db7a7306821a755a68fcaa3646050a13114560f288f8d3c->enter($__internal_1734db223fb17beb8db7a7306821a755a68fcaa3646050a13114560f288f8d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1734db223fb17beb8db7a7306821a755a68fcaa3646050a13114560f288f8d3c->leave($__internal_1734db223fb17beb8db7a7306821a755a68fcaa3646050a13114560f288f8d3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12880f70358a04287a83c79b49a06d400e65baf72c768d09b9b6c4795095ac0 = $this->env->getExtension("native_profiler");
        $__internal_e12880f70358a04287a83c79b49a06d400e65baf72c768d09b9b6c4795095ac0->enter($__internal_e12880f70358a04287a83c79b49a06d400e65baf72c768d09b9b6c4795095ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e12880f70358a04287a83c79b49a06d400e65baf72c768d09b9b6c4795095ac0->leave($__internal_e12880f70358a04287a83c79b49a06d400e65baf72c768d09b9b6c4795095ac0_prof);

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
