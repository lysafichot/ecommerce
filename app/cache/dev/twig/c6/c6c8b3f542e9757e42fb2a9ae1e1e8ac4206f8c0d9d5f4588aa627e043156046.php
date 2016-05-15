<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9d18390a8995ee17615ee260f0bc1eea69472a79436a0b5b230834d4b6a908cf extends Twig_Template
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
        $__internal_631bdc8f90eb37b72f0f754c7aa0ff0d89ecc6114bd34f138553039033df3785 = $this->env->getExtension("native_profiler");
        $__internal_631bdc8f90eb37b72f0f754c7aa0ff0d89ecc6114bd34f138553039033df3785->enter($__internal_631bdc8f90eb37b72f0f754c7aa0ff0d89ecc6114bd34f138553039033df3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_631bdc8f90eb37b72f0f754c7aa0ff0d89ecc6114bd34f138553039033df3785->leave($__internal_631bdc8f90eb37b72f0f754c7aa0ff0d89ecc6114bd34f138553039033df3785_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
