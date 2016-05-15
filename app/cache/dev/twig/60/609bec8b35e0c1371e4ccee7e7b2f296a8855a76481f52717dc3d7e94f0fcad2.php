<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_35494dce8d5de92aecf0794271bd513d20fb97bde976df05db29ec800176346f extends Twig_Template
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
        $__internal_483f26efc8cd69add1aaaa54f95607e4974494a6ed87dc3981c0d3632dead836 = $this->env->getExtension("native_profiler");
        $__internal_483f26efc8cd69add1aaaa54f95607e4974494a6ed87dc3981c0d3632dead836->enter($__internal_483f26efc8cd69add1aaaa54f95607e4974494a6ed87dc3981c0d3632dead836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_483f26efc8cd69add1aaaa54f95607e4974494a6ed87dc3981c0d3632dead836->leave($__internal_483f26efc8cd69add1aaaa54f95607e4974494a6ed87dc3981c0d3632dead836_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
