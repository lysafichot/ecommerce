<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_682df9eb8ebf9c6e2a7427578a9ffa18eb68cffd34529eea2086df25e2863696 extends Twig_Template
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
        $__internal_6634cb9a0585df4396b279a3b476177e53f963b115abdcd850607e10f4717e8e = $this->env->getExtension("native_profiler");
        $__internal_6634cb9a0585df4396b279a3b476177e53f963b115abdcd850607e10f4717e8e->enter($__internal_6634cb9a0585df4396b279a3b476177e53f963b115abdcd850607e10f4717e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6634cb9a0585df4396b279a3b476177e53f963b115abdcd850607e10f4717e8e->leave($__internal_6634cb9a0585df4396b279a3b476177e53f963b115abdcd850607e10f4717e8e_prof);

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
