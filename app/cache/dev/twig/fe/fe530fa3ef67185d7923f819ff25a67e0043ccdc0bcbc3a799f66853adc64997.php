<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_71f6c6bd3c88940add0ffafcae64963e16b52423262340521fb09e8a3ba576fd extends Twig_Template
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
        $__internal_cc624d66ff8416cb7630e37047b546df4c4ef325d5c76bc9c149fd8911a80ff9 = $this->env->getExtension("native_profiler");
        $__internal_cc624d66ff8416cb7630e37047b546df4c4ef325d5c76bc9c149fd8911a80ff9->enter($__internal_cc624d66ff8416cb7630e37047b546df4c4ef325d5c76bc9c149fd8911a80ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc624d66ff8416cb7630e37047b546df4c4ef325d5c76bc9c149fd8911a80ff9->leave($__internal_cc624d66ff8416cb7630e37047b546df4c4ef325d5c76bc9c149fd8911a80ff9_prof);

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
