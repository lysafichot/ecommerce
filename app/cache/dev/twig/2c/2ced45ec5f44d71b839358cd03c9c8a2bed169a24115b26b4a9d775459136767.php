<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_13d0831b26991fa0798185b805c5dba3872702ed9468b008c3f9c5f7c3384be1 extends Twig_Template
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
        $__internal_ca1844e4d71888655cdd4a3dafe241a6c6a1f414db6e24ebc567b67b127dff98 = $this->env->getExtension("native_profiler");
        $__internal_ca1844e4d71888655cdd4a3dafe241a6c6a1f414db6e24ebc567b67b127dff98->enter($__internal_ca1844e4d71888655cdd4a3dafe241a6c6a1f414db6e24ebc567b67b127dff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_ca1844e4d71888655cdd4a3dafe241a6c6a1f414db6e24ebc567b67b127dff98->leave($__internal_ca1844e4d71888655cdd4a3dafe241a6c6a1f414db6e24ebc567b67b127dff98_prof);

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
