<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b7e1300f34d8f2ac69ee75f39217a41188d7327863c12e9b043e77c5e90aa4b4 extends Twig_Template
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
        $__internal_5906451add495f4e89be7fcca436dd0d61f56a9496c0ebdb694f2761e424fe40 = $this->env->getExtension("native_profiler");
        $__internal_5906451add495f4e89be7fcca436dd0d61f56a9496c0ebdb694f2761e424fe40->enter($__internal_5906451add495f4e89be7fcca436dd0d61f56a9496c0ebdb694f2761e424fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5906451add495f4e89be7fcca436dd0d61f56a9496c0ebdb694f2761e424fe40->leave($__internal_5906451add495f4e89be7fcca436dd0d61f56a9496c0ebdb694f2761e424fe40_prof);

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
