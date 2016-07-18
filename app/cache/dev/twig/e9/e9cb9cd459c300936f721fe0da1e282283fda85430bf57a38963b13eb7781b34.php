<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b95f93deed60a8a452b0fabfb4fe209972600b303cdff64710b47872edf06958 extends Twig_Template
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
        $__internal_6749c1ae84d06c3203b264250cbec6ff0bedc7c9740d745e8e457ce2cd31c64d = $this->env->getExtension("native_profiler");
        $__internal_6749c1ae84d06c3203b264250cbec6ff0bedc7c9740d745e8e457ce2cd31c64d->enter($__internal_6749c1ae84d06c3203b264250cbec6ff0bedc7c9740d745e8e457ce2cd31c64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6749c1ae84d06c3203b264250cbec6ff0bedc7c9740d745e8e457ce2cd31c64d->leave($__internal_6749c1ae84d06c3203b264250cbec6ff0bedc7c9740d745e8e457ce2cd31c64d_prof);

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
