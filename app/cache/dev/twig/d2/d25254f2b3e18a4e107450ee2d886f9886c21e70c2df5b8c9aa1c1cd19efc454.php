<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2b08f5e54f2b22595311b6a5aa01ac4f17a3019e6f0905f6252c755f5a4940f1 extends Twig_Template
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
        $__internal_cc0efb4836c91b5b3b34e8544f3f93244c45b3fa27f359fc6e7807d9095b8af7 = $this->env->getExtension("native_profiler");
        $__internal_cc0efb4836c91b5b3b34e8544f3f93244c45b3fa27f359fc6e7807d9095b8af7->enter($__internal_cc0efb4836c91b5b3b34e8544f3f93244c45b3fa27f359fc6e7807d9095b8af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc0efb4836c91b5b3b34e8544f3f93244c45b3fa27f359fc6e7807d9095b8af7->leave($__internal_cc0efb4836c91b5b3b34e8544f3f93244c45b3fa27f359fc6e7807d9095b8af7_prof);

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
