<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8fd9f8619935e5527a3b3db76c6be896276c7eb49d64c7522de3847ee1411e38 extends Twig_Template
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
        $__internal_4fd4cb7a60b5b5a0901c2ea96edd6ab110a2bbdd0a76e759421acea2a90acc91 = $this->env->getExtension("native_profiler");
        $__internal_4fd4cb7a60b5b5a0901c2ea96edd6ab110a2bbdd0a76e759421acea2a90acc91->enter($__internal_4fd4cb7a60b5b5a0901c2ea96edd6ab110a2bbdd0a76e759421acea2a90acc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4fd4cb7a60b5b5a0901c2ea96edd6ab110a2bbdd0a76e759421acea2a90acc91->leave($__internal_4fd4cb7a60b5b5a0901c2ea96edd6ab110a2bbdd0a76e759421acea2a90acc91_prof);

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
