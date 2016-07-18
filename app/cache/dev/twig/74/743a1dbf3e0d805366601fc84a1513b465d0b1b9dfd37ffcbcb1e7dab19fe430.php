<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a1709c91f6006bef3effe7444aad7c4e5a339d0a1b517cdebc18c4e55483b01f extends Twig_Template
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
        $__internal_d1cea4a9e71e537862c44141a9af33dec3f9ad27ec057714e8eba45cc9b9200f = $this->env->getExtension("native_profiler");
        $__internal_d1cea4a9e71e537862c44141a9af33dec3f9ad27ec057714e8eba45cc9b9200f->enter($__internal_d1cea4a9e71e537862c44141a9af33dec3f9ad27ec057714e8eba45cc9b9200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d1cea4a9e71e537862c44141a9af33dec3f9ad27ec057714e8eba45cc9b9200f->leave($__internal_d1cea4a9e71e537862c44141a9af33dec3f9ad27ec057714e8eba45cc9b9200f_prof);

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
