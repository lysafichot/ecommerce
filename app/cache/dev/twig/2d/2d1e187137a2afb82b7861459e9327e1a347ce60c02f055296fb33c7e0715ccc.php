<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_41b42c241d6e1a5ff0c62f4a2c0d511a77be79963cf5df6ac6d322be72e9dd25 extends Twig_Template
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
        $__internal_76a6ea28668415f4f102459a7daee1fa95b6f13a25c3c7a8e374678b63cc3021 = $this->env->getExtension("native_profiler");
        $__internal_76a6ea28668415f4f102459a7daee1fa95b6f13a25c3c7a8e374678b63cc3021->enter($__internal_76a6ea28668415f4f102459a7daee1fa95b6f13a25c3c7a8e374678b63cc3021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_76a6ea28668415f4f102459a7daee1fa95b6f13a25c3c7a8e374678b63cc3021->leave($__internal_76a6ea28668415f4f102459a7daee1fa95b6f13a25c3c7a8e374678b63cc3021_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
