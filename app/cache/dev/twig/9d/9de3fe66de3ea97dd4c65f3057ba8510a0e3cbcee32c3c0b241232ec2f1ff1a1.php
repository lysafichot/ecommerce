<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8b10a300b7c951c0a2f8e204ffe1c076fe9b76c4550506b7e01b17e02315d116 extends Twig_Template
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
        $__internal_c8e4ad19abff793ad69218ca56280cad9e8d7f5cb86630b3b918c42bd6ed4489 = $this->env->getExtension("native_profiler");
        $__internal_c8e4ad19abff793ad69218ca56280cad9e8d7f5cb86630b3b918c42bd6ed4489->enter($__internal_c8e4ad19abff793ad69218ca56280cad9e8d7f5cb86630b3b918c42bd6ed4489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c8e4ad19abff793ad69218ca56280cad9e8d7f5cb86630b3b918c42bd6ed4489->leave($__internal_c8e4ad19abff793ad69218ca56280cad9e8d7f5cb86630b3b918c42bd6ed4489_prof);

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
