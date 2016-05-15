<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1046f13f5e54df4dcb71f9a0cf5abdbd4275a92c01d6c5983995ce7337857c91 extends Twig_Template
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
        $__internal_de5789f4db30f733b903f725281dfa9e3719dfc9b2d0e360d1d7e8c6e81fccf0 = $this->env->getExtension("native_profiler");
        $__internal_de5789f4db30f733b903f725281dfa9e3719dfc9b2d0e360d1d7e8c6e81fccf0->enter($__internal_de5789f4db30f733b903f725281dfa9e3719dfc9b2d0e360d1d7e8c6e81fccf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_de5789f4db30f733b903f725281dfa9e3719dfc9b2d0e360d1d7e8c6e81fccf0->leave($__internal_de5789f4db30f733b903f725281dfa9e3719dfc9b2d0e360d1d7e8c6e81fccf0_prof);

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
