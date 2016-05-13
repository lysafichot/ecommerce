<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ca307f46b8fe82d6d89e540c8f086f6cfcb7f2866065d4dab109eb11665429bf extends Twig_Template
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
        $__internal_e41ce81f971d5ffa5f9df5aa4778e805e182eaa3eb32961ffa8d645b4293227a = $this->env->getExtension("native_profiler");
        $__internal_e41ce81f971d5ffa5f9df5aa4778e805e182eaa3eb32961ffa8d645b4293227a->enter($__internal_e41ce81f971d5ffa5f9df5aa4778e805e182eaa3eb32961ffa8d645b4293227a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e41ce81f971d5ffa5f9df5aa4778e805e182eaa3eb32961ffa8d645b4293227a->leave($__internal_e41ce81f971d5ffa5f9df5aa4778e805e182eaa3eb32961ffa8d645b4293227a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
