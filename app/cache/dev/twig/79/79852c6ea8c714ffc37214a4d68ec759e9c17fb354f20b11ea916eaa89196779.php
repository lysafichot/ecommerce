<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ea0620a77225e2979335842a807c96ddec93426a38c2f1f39ad555d4424c5ab6 extends Twig_Template
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
        $__internal_afc4999ded2f59ea04f08d8847c3422bc10bf7a94ccf0b74d1fc6a1aec55e37e = $this->env->getExtension("native_profiler");
        $__internal_afc4999ded2f59ea04f08d8847c3422bc10bf7a94ccf0b74d1fc6a1aec55e37e->enter($__internal_afc4999ded2f59ea04f08d8847c3422bc10bf7a94ccf0b74d1fc6a1aec55e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_afc4999ded2f59ea04f08d8847c3422bc10bf7a94ccf0b74d1fc6a1aec55e37e->leave($__internal_afc4999ded2f59ea04f08d8847c3422bc10bf7a94ccf0b74d1fc6a1aec55e37e_prof);

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
