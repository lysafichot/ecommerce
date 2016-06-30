<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6a7839ece1d76e380f764df7ee060a5269c7ef0a3b0327012ad32ebdb535441d extends Twig_Template
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
        $__internal_b5b2b155b80389147d9b35545ecccc525ffdad22a040950554525c4555aedc2e = $this->env->getExtension("native_profiler");
        $__internal_b5b2b155b80389147d9b35545ecccc525ffdad22a040950554525c4555aedc2e->enter($__internal_b5b2b155b80389147d9b35545ecccc525ffdad22a040950554525c4555aedc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b5b2b155b80389147d9b35545ecccc525ffdad22a040950554525c4555aedc2e->leave($__internal_b5b2b155b80389147d9b35545ecccc525ffdad22a040950554525c4555aedc2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
