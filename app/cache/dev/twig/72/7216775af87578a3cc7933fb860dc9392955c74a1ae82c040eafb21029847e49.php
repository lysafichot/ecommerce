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
        $__internal_9cbd98dbb980c6092ef9b871e1c96875ebe88dfd7e7b4ddbd5fb72b8497b1747 = $this->env->getExtension("native_profiler");
        $__internal_9cbd98dbb980c6092ef9b871e1c96875ebe88dfd7e7b4ddbd5fb72b8497b1747->enter($__internal_9cbd98dbb980c6092ef9b871e1c96875ebe88dfd7e7b4ddbd5fb72b8497b1747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cbd98dbb980c6092ef9b871e1c96875ebe88dfd7e7b4ddbd5fb72b8497b1747->leave($__internal_9cbd98dbb980c6092ef9b871e1c96875ebe88dfd7e7b4ddbd5fb72b8497b1747_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba5ec23df5375cf7d42ca04f17f5c1836835116c379f83746bd25ed43526746 = $this->env->getExtension("native_profiler");
        $__internal_7ba5ec23df5375cf7d42ca04f17f5c1836835116c379f83746bd25ed43526746->enter($__internal_7ba5ec23df5375cf7d42ca04f17f5c1836835116c379f83746bd25ed43526746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ba5ec23df5375cf7d42ca04f17f5c1836835116c379f83746bd25ed43526746->leave($__internal_7ba5ec23df5375cf7d42ca04f17f5c1836835116c379f83746bd25ed43526746_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b798db40f9cc3bbf442f1ad09f0fda92bbd2f2fae26b8f995e70bab75e201309 = $this->env->getExtension("native_profiler");
        $__internal_b798db40f9cc3bbf442f1ad09f0fda92bbd2f2fae26b8f995e70bab75e201309->enter($__internal_b798db40f9cc3bbf442f1ad09f0fda92bbd2f2fae26b8f995e70bab75e201309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b798db40f9cc3bbf442f1ad09f0fda92bbd2f2fae26b8f995e70bab75e201309->leave($__internal_b798db40f9cc3bbf442f1ad09f0fda92bbd2f2fae26b8f995e70bab75e201309_prof);

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
