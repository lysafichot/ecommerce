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
        $__internal_734ccb09b0a663f1ca42975957d127f8e6f1101ba561d8e13db6e27a351b94b6 = $this->env->getExtension("native_profiler");
        $__internal_734ccb09b0a663f1ca42975957d127f8e6f1101ba561d8e13db6e27a351b94b6->enter($__internal_734ccb09b0a663f1ca42975957d127f8e6f1101ba561d8e13db6e27a351b94b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734ccb09b0a663f1ca42975957d127f8e6f1101ba561d8e13db6e27a351b94b6->leave($__internal_734ccb09b0a663f1ca42975957d127f8e6f1101ba561d8e13db6e27a351b94b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4959b329c8d1dad52fef69c4c02971ebba5c09ad64ce5dda155dbbffd542f4b = $this->env->getExtension("native_profiler");
        $__internal_f4959b329c8d1dad52fef69c4c02971ebba5c09ad64ce5dda155dbbffd542f4b->enter($__internal_f4959b329c8d1dad52fef69c4c02971ebba5c09ad64ce5dda155dbbffd542f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f4959b329c8d1dad52fef69c4c02971ebba5c09ad64ce5dda155dbbffd542f4b->leave($__internal_f4959b329c8d1dad52fef69c4c02971ebba5c09ad64ce5dda155dbbffd542f4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11783369fc6752acd8ec59112c2c05312896f1554cf4c902d63ccd10d9eab4f1 = $this->env->getExtension("native_profiler");
        $__internal_11783369fc6752acd8ec59112c2c05312896f1554cf4c902d63ccd10d9eab4f1->enter($__internal_11783369fc6752acd8ec59112c2c05312896f1554cf4c902d63ccd10d9eab4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11783369fc6752acd8ec59112c2c05312896f1554cf4c902d63ccd10d9eab4f1->leave($__internal_11783369fc6752acd8ec59112c2c05312896f1554cf4c902d63ccd10d9eab4f1_prof);

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
