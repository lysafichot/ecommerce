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
        $__internal_bb8b90c9d2820697f5fe8b6d5a9ee824f8f7cde37bc55885b6f36e6ac2adfb83 = $this->env->getExtension("native_profiler");
        $__internal_bb8b90c9d2820697f5fe8b6d5a9ee824f8f7cde37bc55885b6f36e6ac2adfb83->enter($__internal_bb8b90c9d2820697f5fe8b6d5a9ee824f8f7cde37bc55885b6f36e6ac2adfb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bb8b90c9d2820697f5fe8b6d5a9ee824f8f7cde37bc55885b6f36e6ac2adfb83->leave($__internal_bb8b90c9d2820697f5fe8b6d5a9ee824f8f7cde37bc55885b6f36e6ac2adfb83_prof);

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
