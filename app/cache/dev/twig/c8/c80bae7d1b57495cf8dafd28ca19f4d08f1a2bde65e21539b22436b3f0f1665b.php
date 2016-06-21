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
        $__internal_6e49bc90320b8cc1c9f9d7fffabd44365d623ae05d13ed04f259d33dab9e2a49 = $this->env->getExtension("native_profiler");
        $__internal_6e49bc90320b8cc1c9f9d7fffabd44365d623ae05d13ed04f259d33dab9e2a49->enter($__internal_6e49bc90320b8cc1c9f9d7fffabd44365d623ae05d13ed04f259d33dab9e2a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6e49bc90320b8cc1c9f9d7fffabd44365d623ae05d13ed04f259d33dab9e2a49->leave($__internal_6e49bc90320b8cc1c9f9d7fffabd44365d623ae05d13ed04f259d33dab9e2a49_prof);

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
