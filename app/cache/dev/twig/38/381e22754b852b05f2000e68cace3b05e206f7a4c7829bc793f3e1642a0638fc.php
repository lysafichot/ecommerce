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
        $__internal_296de7cfed82f4fb1395d224f253cc85ecf3038e9ca5db0385ee51fafc499fbc = $this->env->getExtension("native_profiler");
        $__internal_296de7cfed82f4fb1395d224f253cc85ecf3038e9ca5db0385ee51fafc499fbc->enter($__internal_296de7cfed82f4fb1395d224f253cc85ecf3038e9ca5db0385ee51fafc499fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296de7cfed82f4fb1395d224f253cc85ecf3038e9ca5db0385ee51fafc499fbc->leave($__internal_296de7cfed82f4fb1395d224f253cc85ecf3038e9ca5db0385ee51fafc499fbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ff7181ac3acf505b92194b6fed541f6a4a1243c61c4865f4cbae7fe2d876ddd = $this->env->getExtension("native_profiler");
        $__internal_0ff7181ac3acf505b92194b6fed541f6a4a1243c61c4865f4cbae7fe2d876ddd->enter($__internal_0ff7181ac3acf505b92194b6fed541f6a4a1243c61c4865f4cbae7fe2d876ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ff7181ac3acf505b92194b6fed541f6a4a1243c61c4865f4cbae7fe2d876ddd->leave($__internal_0ff7181ac3acf505b92194b6fed541f6a4a1243c61c4865f4cbae7fe2d876ddd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bbf98278579dc4ae3e3c5311a8e664389c00c544c2e7a7cd2f49f441750bae5 = $this->env->getExtension("native_profiler");
        $__internal_3bbf98278579dc4ae3e3c5311a8e664389c00c544c2e7a7cd2f49f441750bae5->enter($__internal_3bbf98278579dc4ae3e3c5311a8e664389c00c544c2e7a7cd2f49f441750bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3bbf98278579dc4ae3e3c5311a8e664389c00c544c2e7a7cd2f49f441750bae5->leave($__internal_3bbf98278579dc4ae3e3c5311a8e664389c00c544c2e7a7cd2f49f441750bae5_prof);

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
