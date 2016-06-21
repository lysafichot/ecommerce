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
        $__internal_ee1c0c87add1940dd777a9fe62e85d090fbc0f77a472fc98abaab01c646b567b = $this->env->getExtension("native_profiler");
        $__internal_ee1c0c87add1940dd777a9fe62e85d090fbc0f77a472fc98abaab01c646b567b->enter($__internal_ee1c0c87add1940dd777a9fe62e85d090fbc0f77a472fc98abaab01c646b567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1c0c87add1940dd777a9fe62e85d090fbc0f77a472fc98abaab01c646b567b->leave($__internal_ee1c0c87add1940dd777a9fe62e85d090fbc0f77a472fc98abaab01c646b567b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3afe595c3650460b040b5bf259fa15f336aed04ea9485600f56950946036c77f = $this->env->getExtension("native_profiler");
        $__internal_3afe595c3650460b040b5bf259fa15f336aed04ea9485600f56950946036c77f->enter($__internal_3afe595c3650460b040b5bf259fa15f336aed04ea9485600f56950946036c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3afe595c3650460b040b5bf259fa15f336aed04ea9485600f56950946036c77f->leave($__internal_3afe595c3650460b040b5bf259fa15f336aed04ea9485600f56950946036c77f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81860e6869ae10a57e6179f7e058fd26431b65301a02f798d79ab8d02f0a48ba = $this->env->getExtension("native_profiler");
        $__internal_81860e6869ae10a57e6179f7e058fd26431b65301a02f798d79ab8d02f0a48ba->enter($__internal_81860e6869ae10a57e6179f7e058fd26431b65301a02f798d79ab8d02f0a48ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81860e6869ae10a57e6179f7e058fd26431b65301a02f798d79ab8d02f0a48ba->leave($__internal_81860e6869ae10a57e6179f7e058fd26431b65301a02f798d79ab8d02f0a48ba_prof);

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
