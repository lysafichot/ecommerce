<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2cb00a057488c4e7559c79d52e072b7674eb3902510e68b4de50840d8d477250 extends Twig_Template
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
        $__internal_9e53193eb59c9ccf3c62f0c769c672e392db7804ddfa4451a76dbab6c5fbedcc = $this->env->getExtension("native_profiler");
        $__internal_9e53193eb59c9ccf3c62f0c769c672e392db7804ddfa4451a76dbab6c5fbedcc->enter($__internal_9e53193eb59c9ccf3c62f0c769c672e392db7804ddfa4451a76dbab6c5fbedcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e53193eb59c9ccf3c62f0c769c672e392db7804ddfa4451a76dbab6c5fbedcc->leave($__internal_9e53193eb59c9ccf3c62f0c769c672e392db7804ddfa4451a76dbab6c5fbedcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b62ac9ba85bef1df7f5004f132a0278f2041a4f4cedb43eb5be72c94dddbce9b = $this->env->getExtension("native_profiler");
        $__internal_b62ac9ba85bef1df7f5004f132a0278f2041a4f4cedb43eb5be72c94dddbce9b->enter($__internal_b62ac9ba85bef1df7f5004f132a0278f2041a4f4cedb43eb5be72c94dddbce9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b62ac9ba85bef1df7f5004f132a0278f2041a4f4cedb43eb5be72c94dddbce9b->leave($__internal_b62ac9ba85bef1df7f5004f132a0278f2041a4f4cedb43eb5be72c94dddbce9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71965a29935173c55db11dd373d6d083f2128821859f4c29755b56d699dc9fc8 = $this->env->getExtension("native_profiler");
        $__internal_71965a29935173c55db11dd373d6d083f2128821859f4c29755b56d699dc9fc8->enter($__internal_71965a29935173c55db11dd373d6d083f2128821859f4c29755b56d699dc9fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71965a29935173c55db11dd373d6d083f2128821859f4c29755b56d699dc9fc8->leave($__internal_71965a29935173c55db11dd373d6d083f2128821859f4c29755b56d699dc9fc8_prof);

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
