<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5d907706f6c8bd0e74fe198e74b5007ebd4769ff60bad30ff519b429bdb98513 extends Twig_Template
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
        $__internal_a62f332325f1ce9c8bd37779e713414d1c0bc7a503db7b289f139ea347ea1f9e = $this->env->getExtension("native_profiler");
        $__internal_a62f332325f1ce9c8bd37779e713414d1c0bc7a503db7b289f139ea347ea1f9e->enter($__internal_a62f332325f1ce9c8bd37779e713414d1c0bc7a503db7b289f139ea347ea1f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a62f332325f1ce9c8bd37779e713414d1c0bc7a503db7b289f139ea347ea1f9e->leave($__internal_a62f332325f1ce9c8bd37779e713414d1c0bc7a503db7b289f139ea347ea1f9e_prof);

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
