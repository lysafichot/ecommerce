<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ba40494e4a9877bfc52de799004ea01ae77b33b345b8494f9cea35ad04bf8582 extends Twig_Template
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
        $__internal_045f383f2800932cc922bfc15c9ec4ee9a8f0f1f73b9c8b60bea48899f6746bf = $this->env->getExtension("native_profiler");
        $__internal_045f383f2800932cc922bfc15c9ec4ee9a8f0f1f73b9c8b60bea48899f6746bf->enter($__internal_045f383f2800932cc922bfc15c9ec4ee9a8f0f1f73b9c8b60bea48899f6746bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_045f383f2800932cc922bfc15c9ec4ee9a8f0f1f73b9c8b60bea48899f6746bf->leave($__internal_045f383f2800932cc922bfc15c9ec4ee9a8f0f1f73b9c8b60bea48899f6746bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
