<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b93059f82003c434cf352d6be1ad5f30cbf7c6eb6cab0777ee93081ceef437aa extends Twig_Template
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
        $__internal_3bdf2f8cb68b9c0aa2dc0c6ba2651945658cc62976d8a0f2c47cc4bc9b813aa3 = $this->env->getExtension("native_profiler");
        $__internal_3bdf2f8cb68b9c0aa2dc0c6ba2651945658cc62976d8a0f2c47cc4bc9b813aa3->enter($__internal_3bdf2f8cb68b9c0aa2dc0c6ba2651945658cc62976d8a0f2c47cc4bc9b813aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3bdf2f8cb68b9c0aa2dc0c6ba2651945658cc62976d8a0f2c47cc4bc9b813aa3->leave($__internal_3bdf2f8cb68b9c0aa2dc0c6ba2651945658cc62976d8a0f2c47cc4bc9b813aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
