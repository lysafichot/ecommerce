<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dc261f101b378a7a00b9233553985b96bd44c26a67645ec88550903efc8806d7 extends Twig_Template
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
        $__internal_0023ebaf3422302dd1023095f00f7fb2e276e1ba9ab5ecdeddce24ea834b3849 = $this->env->getExtension("native_profiler");
        $__internal_0023ebaf3422302dd1023095f00f7fb2e276e1ba9ab5ecdeddce24ea834b3849->enter($__internal_0023ebaf3422302dd1023095f00f7fb2e276e1ba9ab5ecdeddce24ea834b3849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0023ebaf3422302dd1023095f00f7fb2e276e1ba9ab5ecdeddce24ea834b3849->leave($__internal_0023ebaf3422302dd1023095f00f7fb2e276e1ba9ab5ecdeddce24ea834b3849_prof);

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
