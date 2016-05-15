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
        $__internal_732b2287c7bc67845d250830a4651ccd11a110c6cff4d4b14cd55925675d3e94 = $this->env->getExtension("native_profiler");
        $__internal_732b2287c7bc67845d250830a4651ccd11a110c6cff4d4b14cd55925675d3e94->enter($__internal_732b2287c7bc67845d250830a4651ccd11a110c6cff4d4b14cd55925675d3e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732b2287c7bc67845d250830a4651ccd11a110c6cff4d4b14cd55925675d3e94->leave($__internal_732b2287c7bc67845d250830a4651ccd11a110c6cff4d4b14cd55925675d3e94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f11e9e632ce56518dac84d8bdfa300b3651ca4871d6c5fcb5dfb6c7cd66ff2d8 = $this->env->getExtension("native_profiler");
        $__internal_f11e9e632ce56518dac84d8bdfa300b3651ca4871d6c5fcb5dfb6c7cd66ff2d8->enter($__internal_f11e9e632ce56518dac84d8bdfa300b3651ca4871d6c5fcb5dfb6c7cd66ff2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f11e9e632ce56518dac84d8bdfa300b3651ca4871d6c5fcb5dfb6c7cd66ff2d8->leave($__internal_f11e9e632ce56518dac84d8bdfa300b3651ca4871d6c5fcb5dfb6c7cd66ff2d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_027dd5c5a6de3666df8b0c315371304307ee3b9d23cb1631c05195463834e054 = $this->env->getExtension("native_profiler");
        $__internal_027dd5c5a6de3666df8b0c315371304307ee3b9d23cb1631c05195463834e054->enter($__internal_027dd5c5a6de3666df8b0c315371304307ee3b9d23cb1631c05195463834e054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_027dd5c5a6de3666df8b0c315371304307ee3b9d23cb1631c05195463834e054->leave($__internal_027dd5c5a6de3666df8b0c315371304307ee3b9d23cb1631c05195463834e054_prof);

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
