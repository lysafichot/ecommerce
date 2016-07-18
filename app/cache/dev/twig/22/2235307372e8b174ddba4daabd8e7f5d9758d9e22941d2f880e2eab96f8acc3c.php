<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_80b4506208d45ffe32d5cbc6da9c3b0e08ce95942df7ed578766c0cbcc4ee903 extends Twig_Template
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
        $__internal_38f53a7128a530694e69c5ff3bf1382ac13ca6cffb9090080c198e65965b1a00 = $this->env->getExtension("native_profiler");
        $__internal_38f53a7128a530694e69c5ff3bf1382ac13ca6cffb9090080c198e65965b1a00->enter($__internal_38f53a7128a530694e69c5ff3bf1382ac13ca6cffb9090080c198e65965b1a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_38f53a7128a530694e69c5ff3bf1382ac13ca6cffb9090080c198e65965b1a00->leave($__internal_38f53a7128a530694e69c5ff3bf1382ac13ca6cffb9090080c198e65965b1a00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
