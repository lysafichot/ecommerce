<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a8ed871baf9a1068f008531b96fdd61aa04c47e1218047894df50c87c12b577a extends Twig_Template
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
        $__internal_040417ca12e6a98c9a8c7286806264945f5694a394d21962aca1f1bb0f4238d3 = $this->env->getExtension("native_profiler");
        $__internal_040417ca12e6a98c9a8c7286806264945f5694a394d21962aca1f1bb0f4238d3->enter($__internal_040417ca12e6a98c9a8c7286806264945f5694a394d21962aca1f1bb0f4238d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_040417ca12e6a98c9a8c7286806264945f5694a394d21962aca1f1bb0f4238d3->leave($__internal_040417ca12e6a98c9a8c7286806264945f5694a394d21962aca1f1bb0f4238d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
