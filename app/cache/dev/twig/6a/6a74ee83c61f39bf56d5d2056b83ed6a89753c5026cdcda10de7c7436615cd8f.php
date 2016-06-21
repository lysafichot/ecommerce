<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1fe1d6e0811c63b8a8ce528886e8220c12466cadc4b83e074bce2e4936aecf31 extends Twig_Template
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
        $__internal_321ec7b713606ca45995a96158419df5a507cc053e26fd8a92b1c6ff50cc91ee = $this->env->getExtension("native_profiler");
        $__internal_321ec7b713606ca45995a96158419df5a507cc053e26fd8a92b1c6ff50cc91ee->enter($__internal_321ec7b713606ca45995a96158419df5a507cc053e26fd8a92b1c6ff50cc91ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_321ec7b713606ca45995a96158419df5a507cc053e26fd8a92b1c6ff50cc91ee->leave($__internal_321ec7b713606ca45995a96158419df5a507cc053e26fd8a92b1c6ff50cc91ee_prof);

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
