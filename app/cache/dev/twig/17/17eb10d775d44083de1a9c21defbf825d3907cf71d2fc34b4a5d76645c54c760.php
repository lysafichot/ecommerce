<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7490b648c5f0d59281785d45cb2d70b6f2382d26368c4a2f0088c39018982eb3 extends Twig_Template
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
        $__internal_a6b030551ba4291d18a3e90a2da2f58e54669d437d90387ca1bb10ae2d8035fd = $this->env->getExtension("native_profiler");
        $__internal_a6b030551ba4291d18a3e90a2da2f58e54669d437d90387ca1bb10ae2d8035fd->enter($__internal_a6b030551ba4291d18a3e90a2da2f58e54669d437d90387ca1bb10ae2d8035fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_a6b030551ba4291d18a3e90a2da2f58e54669d437d90387ca1bb10ae2d8035fd->leave($__internal_a6b030551ba4291d18a3e90a2da2f58e54669d437d90387ca1bb10ae2d8035fd_prof);

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
