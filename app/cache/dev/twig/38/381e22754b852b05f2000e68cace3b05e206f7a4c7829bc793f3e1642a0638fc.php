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
        $__internal_16c0b77da6d95dcdd7bc8866f50b2b43a0151e90da811c15027fa87a4fe1f2aa = $this->env->getExtension("native_profiler");
        $__internal_16c0b77da6d95dcdd7bc8866f50b2b43a0151e90da811c15027fa87a4fe1f2aa->enter($__internal_16c0b77da6d95dcdd7bc8866f50b2b43a0151e90da811c15027fa87a4fe1f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c0b77da6d95dcdd7bc8866f50b2b43a0151e90da811c15027fa87a4fe1f2aa->leave($__internal_16c0b77da6d95dcdd7bc8866f50b2b43a0151e90da811c15027fa87a4fe1f2aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fcf67cbf3d1518ce85649747919d8ac44b0243a5fb02ae8e1d687ac4e91d33a = $this->env->getExtension("native_profiler");
        $__internal_7fcf67cbf3d1518ce85649747919d8ac44b0243a5fb02ae8e1d687ac4e91d33a->enter($__internal_7fcf67cbf3d1518ce85649747919d8ac44b0243a5fb02ae8e1d687ac4e91d33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7fcf67cbf3d1518ce85649747919d8ac44b0243a5fb02ae8e1d687ac4e91d33a->leave($__internal_7fcf67cbf3d1518ce85649747919d8ac44b0243a5fb02ae8e1d687ac4e91d33a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62ed00ed408ed58cc7963f2440422f8e2d88a17a1c346a5419032d7aea5a78ce = $this->env->getExtension("native_profiler");
        $__internal_62ed00ed408ed58cc7963f2440422f8e2d88a17a1c346a5419032d7aea5a78ce->enter($__internal_62ed00ed408ed58cc7963f2440422f8e2d88a17a1c346a5419032d7aea5a78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62ed00ed408ed58cc7963f2440422f8e2d88a17a1c346a5419032d7aea5a78ce->leave($__internal_62ed00ed408ed58cc7963f2440422f8e2d88a17a1c346a5419032d7aea5a78ce_prof);

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
