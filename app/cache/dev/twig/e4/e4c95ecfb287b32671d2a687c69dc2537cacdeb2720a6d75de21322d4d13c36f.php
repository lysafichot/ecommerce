<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5d95c06ac07b9c262ba9f0eede29756d257fd1003ede64d6b3c21cd6ddccdf10 extends Twig_Template
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
        $__internal_c924bbcdd937a95817730fb23ec61d1add1ce8cce7869066483298143892f679 = $this->env->getExtension("native_profiler");
        $__internal_c924bbcdd937a95817730fb23ec61d1add1ce8cce7869066483298143892f679->enter($__internal_c924bbcdd937a95817730fb23ec61d1add1ce8cce7869066483298143892f679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c924bbcdd937a95817730fb23ec61d1add1ce8cce7869066483298143892f679->leave($__internal_c924bbcdd937a95817730fb23ec61d1add1ce8cce7869066483298143892f679_prof);

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
