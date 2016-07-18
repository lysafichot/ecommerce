<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fda8126f9bbcb6d23cadf223534dc4a8baccd8f69a8163587076d5e304ead4aa extends Twig_Template
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
        $__internal_a333f8594d62237808d3908a6b4b7acd4d2785d8cd7a25adcd16b406e9bc5bee = $this->env->getExtension("native_profiler");
        $__internal_a333f8594d62237808d3908a6b4b7acd4d2785d8cd7a25adcd16b406e9bc5bee->enter($__internal_a333f8594d62237808d3908a6b4b7acd4d2785d8cd7a25adcd16b406e9bc5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a333f8594d62237808d3908a6b4b7acd4d2785d8cd7a25adcd16b406e9bc5bee->leave($__internal_a333f8594d62237808d3908a6b4b7acd4d2785d8cd7a25adcd16b406e9bc5bee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
