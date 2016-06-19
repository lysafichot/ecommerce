<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1fe1d6e0811c63b8a8ce528886e8220c12466cadc4b83e074bce2e4936aecf31 extends Twig_Template
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
        $__internal_b672793ae3ef391b636d76d99653a3e5d8d3b703c143e9eb3bad045ff2441c68 = $this->env->getExtension("native_profiler");
        $__internal_b672793ae3ef391b636d76d99653a3e5d8d3b703c143e9eb3bad045ff2441c68->enter($__internal_b672793ae3ef391b636d76d99653a3e5d8d3b703c143e9eb3bad045ff2441c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b672793ae3ef391b636d76d99653a3e5d8d3b703c143e9eb3bad045ff2441c68->leave($__internal_b672793ae3ef391b636d76d99653a3e5d8d3b703c143e9eb3bad045ff2441c68_prof);

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
