<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_af4d4b0bf7a39479228384b9d6bd3bcff1d0c942a524bb6fb639eb643fb118c4 extends Twig_Template
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
        $__internal_1908846f3b0ddab7c4b2125af95a44d36f7741342f956702429d01f57294d71a = $this->env->getExtension("native_profiler");
        $__internal_1908846f3b0ddab7c4b2125af95a44d36f7741342f956702429d01f57294d71a->enter($__internal_1908846f3b0ddab7c4b2125af95a44d36f7741342f956702429d01f57294d71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1908846f3b0ddab7c4b2125af95a44d36f7741342f956702429d01f57294d71a->leave($__internal_1908846f3b0ddab7c4b2125af95a44d36f7741342f956702429d01f57294d71a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
