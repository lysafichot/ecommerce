<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_92541477ebcb4af931277cc7e8b177375db552e5d1ca6c54b4684a5fc3d9ba4a extends Twig_Template
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
        $__internal_387078b1a0f8da6104be4c329d0e78cfae3cfbcc7cbbb1c0be1297f6efe72b6c = $this->env->getExtension("native_profiler");
        $__internal_387078b1a0f8da6104be4c329d0e78cfae3cfbcc7cbbb1c0be1297f6efe72b6c->enter($__internal_387078b1a0f8da6104be4c329d0e78cfae3cfbcc7cbbb1c0be1297f6efe72b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_387078b1a0f8da6104be4c329d0e78cfae3cfbcc7cbbb1c0be1297f6efe72b6c->leave($__internal_387078b1a0f8da6104be4c329d0e78cfae3cfbcc7cbbb1c0be1297f6efe72b6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
