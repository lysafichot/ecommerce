<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_fdc1688d69f06d8266367f7235991e05f6e23f15ae24c66f90524d19d314d366 extends Twig_Template
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
        $__internal_8c8c2149241d7beb7861a712c94ac1fa75cca4852501f520c965040862c832fb = $this->env->getExtension("native_profiler");
        $__internal_8c8c2149241d7beb7861a712c94ac1fa75cca4852501f520c965040862c832fb->enter($__internal_8c8c2149241d7beb7861a712c94ac1fa75cca4852501f520c965040862c832fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8c8c2149241d7beb7861a712c94ac1fa75cca4852501f520c965040862c832fb->leave($__internal_8c8c2149241d7beb7861a712c94ac1fa75cca4852501f520c965040862c832fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
