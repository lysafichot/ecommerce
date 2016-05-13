<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ff4841ea652d28887ba50db43e5a66815f512858d8e1d5158c71f12c1a2e8947 extends Twig_Template
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
        $__internal_58ca7d4e064816e9bbcb5a14622455b30de8eab52bccc3e198cbc6d8cb3cf32d = $this->env->getExtension("native_profiler");
        $__internal_58ca7d4e064816e9bbcb5a14622455b30de8eab52bccc3e198cbc6d8cb3cf32d->enter($__internal_58ca7d4e064816e9bbcb5a14622455b30de8eab52bccc3e198cbc6d8cb3cf32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_58ca7d4e064816e9bbcb5a14622455b30de8eab52bccc3e198cbc6d8cb3cf32d->leave($__internal_58ca7d4e064816e9bbcb5a14622455b30de8eab52bccc3e198cbc6d8cb3cf32d_prof);

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
