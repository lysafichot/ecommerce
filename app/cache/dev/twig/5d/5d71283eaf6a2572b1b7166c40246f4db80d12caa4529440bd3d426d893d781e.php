<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fb6b64e7a8da0126a92763b15ab7775edbca63cd1ea123d4893c55feea1dae98 extends Twig_Template
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
        $__internal_481c0960a87e634b63717d8bf025294b98e39841bff9f4254321c2f0c2e6ebf0 = $this->env->getExtension("native_profiler");
        $__internal_481c0960a87e634b63717d8bf025294b98e39841bff9f4254321c2f0c2e6ebf0->enter($__internal_481c0960a87e634b63717d8bf025294b98e39841bff9f4254321c2f0c2e6ebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_481c0960a87e634b63717d8bf025294b98e39841bff9f4254321c2f0c2e6ebf0->leave($__internal_481c0960a87e634b63717d8bf025294b98e39841bff9f4254321c2f0c2e6ebf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
