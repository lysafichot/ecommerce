<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_985353617bbfb13a0936f2ce937a4af68fae7bc178c8367c2a239a455b0f3022 extends Twig_Template
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
        $__internal_8a45b942b273953df51ddadaa2f347c6bba13dd9668f714aa0d6c318e60aa53a = $this->env->getExtension("native_profiler");
        $__internal_8a45b942b273953df51ddadaa2f347c6bba13dd9668f714aa0d6c318e60aa53a->enter($__internal_8a45b942b273953df51ddadaa2f347c6bba13dd9668f714aa0d6c318e60aa53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a45b942b273953df51ddadaa2f347c6bba13dd9668f714aa0d6c318e60aa53a->leave($__internal_8a45b942b273953df51ddadaa2f347c6bba13dd9668f714aa0d6c318e60aa53a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
