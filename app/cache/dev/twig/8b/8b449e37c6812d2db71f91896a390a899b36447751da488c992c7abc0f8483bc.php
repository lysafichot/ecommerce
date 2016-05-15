<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a52a46f7a4fd9e1b97b0fa1bf5849f8e12c2ee90cf95715d161f729f8d085461 extends Twig_Template
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
        $__internal_fecf588be4914dc25d2d1218613ee4090fb3c02898b7a21b50a059c25750171a = $this->env->getExtension("native_profiler");
        $__internal_fecf588be4914dc25d2d1218613ee4090fb3c02898b7a21b50a059c25750171a->enter($__internal_fecf588be4914dc25d2d1218613ee4090fb3c02898b7a21b50a059c25750171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_fecf588be4914dc25d2d1218613ee4090fb3c02898b7a21b50a059c25750171a->leave($__internal_fecf588be4914dc25d2d1218613ee4090fb3c02898b7a21b50a059c25750171a_prof);

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
