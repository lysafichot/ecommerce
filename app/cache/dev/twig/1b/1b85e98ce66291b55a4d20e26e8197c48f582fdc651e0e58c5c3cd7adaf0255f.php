<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c1b5cb75a0001a0f3d61d23a015e1102779f41f2579b2ecd9ab77e36546ecd0f extends Twig_Template
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
        $__internal_3506da606f77a955c4e292da915645f72a5835532856e80e5c1baee6e694a42d = $this->env->getExtension("native_profiler");
        $__internal_3506da606f77a955c4e292da915645f72a5835532856e80e5c1baee6e694a42d->enter($__internal_3506da606f77a955c4e292da915645f72a5835532856e80e5c1baee6e694a42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3506da606f77a955c4e292da915645f72a5835532856e80e5c1baee6e694a42d->leave($__internal_3506da606f77a955c4e292da915645f72a5835532856e80e5c1baee6e694a42d_prof);

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
