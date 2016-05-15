<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0005169f324d44b5d87809ebbf30f0b89716a54c5589161b8fb6e845ff203b3f extends Twig_Template
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
        $__internal_f21c9dc13b705ea87f056cd2a9b6ccdec9ffde87c8308c868e48d30f7d5c9a4b = $this->env->getExtension("native_profiler");
        $__internal_f21c9dc13b705ea87f056cd2a9b6ccdec9ffde87c8308c868e48d30f7d5c9a4b->enter($__internal_f21c9dc13b705ea87f056cd2a9b6ccdec9ffde87c8308c868e48d30f7d5c9a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f21c9dc13b705ea87f056cd2a9b6ccdec9ffde87c8308c868e48d30f7d5c9a4b->leave($__internal_f21c9dc13b705ea87f056cd2a9b6ccdec9ffde87c8308c868e48d30f7d5c9a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
