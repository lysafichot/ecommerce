<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8b372ea27150e35d95b576aac06741554762071963a10c1f3aeac139bbf8b3e6 extends Twig_Template
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
        $__internal_9331f6edb64bd50734ae2f965a0680b6332d14cd59be59cffecb00de179aaacf = $this->env->getExtension("native_profiler");
        $__internal_9331f6edb64bd50734ae2f965a0680b6332d14cd59be59cffecb00de179aaacf->enter($__internal_9331f6edb64bd50734ae2f965a0680b6332d14cd59be59cffecb00de179aaacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9331f6edb64bd50734ae2f965a0680b6332d14cd59be59cffecb00de179aaacf->leave($__internal_9331f6edb64bd50734ae2f965a0680b6332d14cd59be59cffecb00de179aaacf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
