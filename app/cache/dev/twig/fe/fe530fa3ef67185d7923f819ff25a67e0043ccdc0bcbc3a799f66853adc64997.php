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
        $__internal_b50e2250d1729777656c49ab1761b483289013c921dced8566a9d735d501dc3f = $this->env->getExtension("native_profiler");
        $__internal_b50e2250d1729777656c49ab1761b483289013c921dced8566a9d735d501dc3f->enter($__internal_b50e2250d1729777656c49ab1761b483289013c921dced8566a9d735d501dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b50e2250d1729777656c49ab1761b483289013c921dced8566a9d735d501dc3f->leave($__internal_b50e2250d1729777656c49ab1761b483289013c921dced8566a9d735d501dc3f_prof);

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
