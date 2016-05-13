<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_54b9da1c9b7215ae21eea7f110d4e1fc9e4e75e8e500766964a7a83d1ed5a4e0 extends Twig_Template
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
        $__internal_6fa3cc824acc32682a9126615b72dc2ef6b0e2f4c53a229813cfbb4e788e9394 = $this->env->getExtension("native_profiler");
        $__internal_6fa3cc824acc32682a9126615b72dc2ef6b0e2f4c53a229813cfbb4e788e9394->enter($__internal_6fa3cc824acc32682a9126615b72dc2ef6b0e2f4c53a229813cfbb4e788e9394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6fa3cc824acc32682a9126615b72dc2ef6b0e2f4c53a229813cfbb4e788e9394->leave($__internal_6fa3cc824acc32682a9126615b72dc2ef6b0e2f4c53a229813cfbb4e788e9394_prof);

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
