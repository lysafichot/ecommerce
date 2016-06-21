<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c81b87a6e5f96d01348fa51f56c928b6a21cee1f7a6f7d8d00f44991904c9311 extends Twig_Template
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
        $__internal_f2577185c3b79a14720efc392806a12636622a799b25295006aeeb3b4b9571a1 = $this->env->getExtension("native_profiler");
        $__internal_f2577185c3b79a14720efc392806a12636622a799b25295006aeeb3b4b9571a1->enter($__internal_f2577185c3b79a14720efc392806a12636622a799b25295006aeeb3b4b9571a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f2577185c3b79a14720efc392806a12636622a799b25295006aeeb3b4b9571a1->leave($__internal_f2577185c3b79a14720efc392806a12636622a799b25295006aeeb3b4b9571a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
