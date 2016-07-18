<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_549b5b88eebcc1944a92f382c17696a8a2e659d26802d830ca8ef75286400f2d extends Twig_Template
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
        $__internal_21943cb0e4151ba07fc2b3ca50302df8cb43de5b98020818e5e6f4aeb5b35349 = $this->env->getExtension("native_profiler");
        $__internal_21943cb0e4151ba07fc2b3ca50302df8cb43de5b98020818e5e6f4aeb5b35349->enter($__internal_21943cb0e4151ba07fc2b3ca50302df8cb43de5b98020818e5e6f4aeb5b35349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_21943cb0e4151ba07fc2b3ca50302df8cb43de5b98020818e5e6f4aeb5b35349->leave($__internal_21943cb0e4151ba07fc2b3ca50302df8cb43de5b98020818e5e6f4aeb5b35349_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
