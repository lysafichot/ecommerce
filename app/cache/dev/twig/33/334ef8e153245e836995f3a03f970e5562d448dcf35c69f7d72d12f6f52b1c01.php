<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9cf0dc5af0119485172e0c49a48a2f54e9ac3f61e2f7d982bd68742435ee9041 extends Twig_Template
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
        $__internal_d6701addd9d5ab93c8541f5d04dc00ef23133fdc1f26b0a199db9b73913e9e70 = $this->env->getExtension("native_profiler");
        $__internal_d6701addd9d5ab93c8541f5d04dc00ef23133fdc1f26b0a199db9b73913e9e70->enter($__internal_d6701addd9d5ab93c8541f5d04dc00ef23133fdc1f26b0a199db9b73913e9e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6701addd9d5ab93c8541f5d04dc00ef23133fdc1f26b0a199db9b73913e9e70->leave($__internal_d6701addd9d5ab93c8541f5d04dc00ef23133fdc1f26b0a199db9b73913e9e70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
