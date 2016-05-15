<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1eecafc791a6ff64ebffc0f70b26f8e7b9a17773d882065c0630b7b44a497f0c extends Twig_Template
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
        $__internal_306c492d9d27b6a3c8bb80d3a3df43945917003d186541956576315fc0ff63c9 = $this->env->getExtension("native_profiler");
        $__internal_306c492d9d27b6a3c8bb80d3a3df43945917003d186541956576315fc0ff63c9->enter($__internal_306c492d9d27b6a3c8bb80d3a3df43945917003d186541956576315fc0ff63c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_306c492d9d27b6a3c8bb80d3a3df43945917003d186541956576315fc0ff63c9->leave($__internal_306c492d9d27b6a3c8bb80d3a3df43945917003d186541956576315fc0ff63c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
