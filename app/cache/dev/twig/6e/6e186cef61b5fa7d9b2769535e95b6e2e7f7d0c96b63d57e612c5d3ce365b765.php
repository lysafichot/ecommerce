<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c8c1d395e496b87750c3973ef803019cf94108a5e5dd9bf539c783d071ab0c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d3f921b453d587a87dd54260d72c6afb9d607cf0b0b69208dbc753eb4659e88 = $this->env->getExtension("native_profiler");
        $__internal_7d3f921b453d587a87dd54260d72c6afb9d607cf0b0b69208dbc753eb4659e88->enter($__internal_7d3f921b453d587a87dd54260d72c6afb9d607cf0b0b69208dbc753eb4659e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7d3f921b453d587a87dd54260d72c6afb9d607cf0b0b69208dbc753eb4659e88->leave($__internal_7d3f921b453d587a87dd54260d72c6afb9d607cf0b0b69208dbc753eb4659e88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
