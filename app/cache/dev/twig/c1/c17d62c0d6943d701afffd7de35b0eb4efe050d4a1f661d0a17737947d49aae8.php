<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7c768852f833e4fadcc20421e840263bb2008b6b2d296701970cb79da3e932ca extends Twig_Template
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
        $__internal_be93f8f41eff7fbdbbde77398800c6af480f4c1fa989489a2423d05779e93882 = $this->env->getExtension("native_profiler");
        $__internal_be93f8f41eff7fbdbbde77398800c6af480f4c1fa989489a2423d05779e93882->enter($__internal_be93f8f41eff7fbdbbde77398800c6af480f4c1fa989489a2423d05779e93882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be93f8f41eff7fbdbbde77398800c6af480f4c1fa989489a2423d05779e93882->leave($__internal_be93f8f41eff7fbdbbde77398800c6af480f4c1fa989489a2423d05779e93882_prof);

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
