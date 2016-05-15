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
        $__internal_da8658a4091264270988e3f7156931fee042d66aaf4bccb86808e9fef17d3e40 = $this->env->getExtension("native_profiler");
        $__internal_da8658a4091264270988e3f7156931fee042d66aaf4bccb86808e9fef17d3e40->enter($__internal_da8658a4091264270988e3f7156931fee042d66aaf4bccb86808e9fef17d3e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da8658a4091264270988e3f7156931fee042d66aaf4bccb86808e9fef17d3e40->leave($__internal_da8658a4091264270988e3f7156931fee042d66aaf4bccb86808e9fef17d3e40_prof);

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
