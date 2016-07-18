<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8fd9f8619935e5527a3b3db76c6be896276c7eb49d64c7522de3847ee1411e38 extends Twig_Template
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
        $__internal_f89aa43027f594804d9e41301b724e9b6a873936e513666e2df1706ff95f0565 = $this->env->getExtension("native_profiler");
        $__internal_f89aa43027f594804d9e41301b724e9b6a873936e513666e2df1706ff95f0565->enter($__internal_f89aa43027f594804d9e41301b724e9b6a873936e513666e2df1706ff95f0565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f89aa43027f594804d9e41301b724e9b6a873936e513666e2df1706ff95f0565->leave($__internal_f89aa43027f594804d9e41301b724e9b6a873936e513666e2df1706ff95f0565_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
