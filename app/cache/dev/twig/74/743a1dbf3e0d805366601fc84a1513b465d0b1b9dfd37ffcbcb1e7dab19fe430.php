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
        $__internal_f808cb55793965c831170c418b7e869a67842779e1505619ecc9f8453dc0cf76 = $this->env->getExtension("native_profiler");
        $__internal_f808cb55793965c831170c418b7e869a67842779e1505619ecc9f8453dc0cf76->enter($__internal_f808cb55793965c831170c418b7e869a67842779e1505619ecc9f8453dc0cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f808cb55793965c831170c418b7e869a67842779e1505619ecc9f8453dc0cf76->leave($__internal_f808cb55793965c831170c418b7e869a67842779e1505619ecc9f8453dc0cf76_prof);

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
