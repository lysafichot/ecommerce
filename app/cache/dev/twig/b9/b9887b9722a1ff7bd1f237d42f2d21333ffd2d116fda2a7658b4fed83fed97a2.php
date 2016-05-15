<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0005169f324d44b5d87809ebbf30f0b89716a54c5589161b8fb6e845ff203b3f extends Twig_Template
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
        $__internal_270b1fe17fe2ed9daed262a80448fbe8ae40eb3a17b3e78c6486009a6a702854 = $this->env->getExtension("native_profiler");
        $__internal_270b1fe17fe2ed9daed262a80448fbe8ae40eb3a17b3e78c6486009a6a702854->enter($__internal_270b1fe17fe2ed9daed262a80448fbe8ae40eb3a17b3e78c6486009a6a702854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_270b1fe17fe2ed9daed262a80448fbe8ae40eb3a17b3e78c6486009a6a702854->leave($__internal_270b1fe17fe2ed9daed262a80448fbe8ae40eb3a17b3e78c6486009a6a702854_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
