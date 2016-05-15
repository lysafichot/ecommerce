<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_35a0c9951fb85009b698145f661d74a39b3836fd81073b2e1b14b962dc4df4b8 extends Twig_Template
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
        $__internal_e0661e1e7e69f063cb20d2a6f144a97e6a7c93a1c4e2c768fc00abaaab2caf26 = $this->env->getExtension("native_profiler");
        $__internal_e0661e1e7e69f063cb20d2a6f144a97e6a7c93a1c4e2c768fc00abaaab2caf26->enter($__internal_e0661e1e7e69f063cb20d2a6f144a97e6a7c93a1c4e2c768fc00abaaab2caf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e0661e1e7e69f063cb20d2a6f144a97e6a7c93a1c4e2c768fc00abaaab2caf26->leave($__internal_e0661e1e7e69f063cb20d2a6f144a97e6a7c93a1c4e2c768fc00abaaab2caf26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
