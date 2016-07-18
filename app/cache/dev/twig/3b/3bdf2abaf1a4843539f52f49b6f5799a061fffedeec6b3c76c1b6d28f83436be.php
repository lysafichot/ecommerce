<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b08790154b5a4d72e5a9002683f3d546a578f2a6ed2c64d138bf17aa28176335 extends Twig_Template
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
        $__internal_db2722ef7dd922457ac46e2ab0daa854ee22017c21bf2be9772e3a21166766b1 = $this->env->getExtension("native_profiler");
        $__internal_db2722ef7dd922457ac46e2ab0daa854ee22017c21bf2be9772e3a21166766b1->enter($__internal_db2722ef7dd922457ac46e2ab0daa854ee22017c21bf2be9772e3a21166766b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_db2722ef7dd922457ac46e2ab0daa854ee22017c21bf2be9772e3a21166766b1->leave($__internal_db2722ef7dd922457ac46e2ab0daa854ee22017c21bf2be9772e3a21166766b1_prof);

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
