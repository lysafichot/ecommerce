<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4407a63f29d20dcf8d1a71056d917230fb95fcfd6dbd7a97cbd84630ea6747c3 extends Twig_Template
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
        $__internal_5f04ce14219281823b5d7eee00ab5c3052bcdb3534a6cd6029d71b3bbc45ccef = $this->env->getExtension("native_profiler");
        $__internal_5f04ce14219281823b5d7eee00ab5c3052bcdb3534a6cd6029d71b3bbc45ccef->enter($__internal_5f04ce14219281823b5d7eee00ab5c3052bcdb3534a6cd6029d71b3bbc45ccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f04ce14219281823b5d7eee00ab5c3052bcdb3534a6cd6029d71b3bbc45ccef->leave($__internal_5f04ce14219281823b5d7eee00ab5c3052bcdb3534a6cd6029d71b3bbc45ccef_prof);

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
