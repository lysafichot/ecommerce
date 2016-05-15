<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9a3ace4f1e8411b4427a45be398628168c22e48ff19f208ccf415b8402968cfb extends Twig_Template
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
        $__internal_9f60658a0255d1bd7b35a0ba2a08b82eda62dec7687bff7d0495bf98640c95f2 = $this->env->getExtension("native_profiler");
        $__internal_9f60658a0255d1bd7b35a0ba2a08b82eda62dec7687bff7d0495bf98640c95f2->enter($__internal_9f60658a0255d1bd7b35a0ba2a08b82eda62dec7687bff7d0495bf98640c95f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f60658a0255d1bd7b35a0ba2a08b82eda62dec7687bff7d0495bf98640c95f2->leave($__internal_9f60658a0255d1bd7b35a0ba2a08b82eda62dec7687bff7d0495bf98640c95f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a468b53ff1376527c64f406131efd26872ff5d91d19e6205d5a4c1e1354fe9a = $this->env->getExtension("native_profiler");
        $__internal_3a468b53ff1376527c64f406131efd26872ff5d91d19e6205d5a4c1e1354fe9a->enter($__internal_3a468b53ff1376527c64f406131efd26872ff5d91d19e6205d5a4c1e1354fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3a468b53ff1376527c64f406131efd26872ff5d91d19e6205d5a4c1e1354fe9a->leave($__internal_3a468b53ff1376527c64f406131efd26872ff5d91d19e6205d5a4c1e1354fe9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f2890e03f1da91bed10ed46f6c1d0308b84c047e2bda17673cf24358bd4da4 = $this->env->getExtension("native_profiler");
        $__internal_91f2890e03f1da91bed10ed46f6c1d0308b84c047e2bda17673cf24358bd4da4->enter($__internal_91f2890e03f1da91bed10ed46f6c1d0308b84c047e2bda17673cf24358bd4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91f2890e03f1da91bed10ed46f6c1d0308b84c047e2bda17673cf24358bd4da4->leave($__internal_91f2890e03f1da91bed10ed46f6c1d0308b84c047e2bda17673cf24358bd4da4_prof);

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
