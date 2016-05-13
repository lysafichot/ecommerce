<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c6bfb36f486212f80d0d68ae9639ac4ee08582aee168164b7494b0c206e10aa5 extends Twig_Template
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
        $__internal_a45614e2f8818e7428fd9f9264d62bdd8243b2cdcddaf0897be4e792c1c8661f = $this->env->getExtension("native_profiler");
        $__internal_a45614e2f8818e7428fd9f9264d62bdd8243b2cdcddaf0897be4e792c1c8661f->enter($__internal_a45614e2f8818e7428fd9f9264d62bdd8243b2cdcddaf0897be4e792c1c8661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a45614e2f8818e7428fd9f9264d62bdd8243b2cdcddaf0897be4e792c1c8661f->leave($__internal_a45614e2f8818e7428fd9f9264d62bdd8243b2cdcddaf0897be4e792c1c8661f_prof);

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
