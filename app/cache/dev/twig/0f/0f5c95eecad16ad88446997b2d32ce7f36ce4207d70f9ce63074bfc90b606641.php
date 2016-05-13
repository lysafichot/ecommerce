<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_82dcf889cd1ab4a3358c4a499f8395f9b258103260072a7d285f7090567fccad extends Twig_Template
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
        $__internal_5be2f83e8f125f1f1744320eb196c41f3964955d9f24b4e6d320e344ca68b260 = $this->env->getExtension("native_profiler");
        $__internal_5be2f83e8f125f1f1744320eb196c41f3964955d9f24b4e6d320e344ca68b260->enter($__internal_5be2f83e8f125f1f1744320eb196c41f3964955d9f24b4e6d320e344ca68b260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5be2f83e8f125f1f1744320eb196c41f3964955d9f24b4e6d320e344ca68b260->leave($__internal_5be2f83e8f125f1f1744320eb196c41f3964955d9f24b4e6d320e344ca68b260_prof);

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
