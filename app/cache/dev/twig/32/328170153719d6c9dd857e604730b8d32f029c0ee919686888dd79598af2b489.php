<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_99ec132f39f260c6d3d7bb784eb39076235e006eeffdc04bfca5ed6338cdfe6e extends Twig_Template
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
        $__internal_2fc684269f384441c2207915685fd668a6e301565e1cf236a04db6c7aab2d131 = $this->env->getExtension("native_profiler");
        $__internal_2fc684269f384441c2207915685fd668a6e301565e1cf236a04db6c7aab2d131->enter($__internal_2fc684269f384441c2207915685fd668a6e301565e1cf236a04db6c7aab2d131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_2fc684269f384441c2207915685fd668a6e301565e1cf236a04db6c7aab2d131->leave($__internal_2fc684269f384441c2207915685fd668a6e301565e1cf236a04db6c7aab2d131_prof);

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
