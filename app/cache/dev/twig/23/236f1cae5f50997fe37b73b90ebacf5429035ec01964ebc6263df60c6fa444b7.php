<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7b57d3b01b2658b25fe28f7e6ce9db124b62be33f31792d3b8853ad4f4b74e40 extends Twig_Template
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
        $__internal_7d73711981f5d4f0f97dd110ce3e4fe38de4b45365110e9cca05a847005ccd95 = $this->env->getExtension("native_profiler");
        $__internal_7d73711981f5d4f0f97dd110ce3e4fe38de4b45365110e9cca05a847005ccd95->enter($__internal_7d73711981f5d4f0f97dd110ce3e4fe38de4b45365110e9cca05a847005ccd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d73711981f5d4f0f97dd110ce3e4fe38de4b45365110e9cca05a847005ccd95->leave($__internal_7d73711981f5d4f0f97dd110ce3e4fe38de4b45365110e9cca05a847005ccd95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
