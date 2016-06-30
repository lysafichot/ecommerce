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
        $__internal_34e92ec412f57792e8125bfd3709a18fce4f8ee409393ca6532d93d993c75c72 = $this->env->getExtension("native_profiler");
        $__internal_34e92ec412f57792e8125bfd3709a18fce4f8ee409393ca6532d93d993c75c72->enter($__internal_34e92ec412f57792e8125bfd3709a18fce4f8ee409393ca6532d93d993c75c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_34e92ec412f57792e8125bfd3709a18fce4f8ee409393ca6532d93d993c75c72->leave($__internal_34e92ec412f57792e8125bfd3709a18fce4f8ee409393ca6532d93d993c75c72_prof);

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
