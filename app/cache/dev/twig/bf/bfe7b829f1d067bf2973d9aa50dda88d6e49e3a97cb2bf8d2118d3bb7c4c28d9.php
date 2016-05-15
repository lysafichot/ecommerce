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
        $__internal_1d55f76e41be7b736ee4ebc37ceff4efa30b862f7a4467a2791769276fb473d1 = $this->env->getExtension("native_profiler");
        $__internal_1d55f76e41be7b736ee4ebc37ceff4efa30b862f7a4467a2791769276fb473d1->enter($__internal_1d55f76e41be7b736ee4ebc37ceff4efa30b862f7a4467a2791769276fb473d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d55f76e41be7b736ee4ebc37ceff4efa30b862f7a4467a2791769276fb473d1->leave($__internal_1d55f76e41be7b736ee4ebc37ceff4efa30b862f7a4467a2791769276fb473d1_prof);

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
