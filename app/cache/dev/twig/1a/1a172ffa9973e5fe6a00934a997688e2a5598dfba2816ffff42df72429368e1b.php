<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_05665963bd641f9b198016c6059bae173fbc387ec4c823a6b0a167e93002a585 extends Twig_Template
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
        $__internal_ee6846a1f0cd1cbac2593777cea3ca7e41fe9172f94f90ce9593ec0d840ff8de = $this->env->getExtension("native_profiler");
        $__internal_ee6846a1f0cd1cbac2593777cea3ca7e41fe9172f94f90ce9593ec0d840ff8de->enter($__internal_ee6846a1f0cd1cbac2593777cea3ca7e41fe9172f94f90ce9593ec0d840ff8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ee6846a1f0cd1cbac2593777cea3ca7e41fe9172f94f90ce9593ec0d840ff8de->leave($__internal_ee6846a1f0cd1cbac2593777cea3ca7e41fe9172f94f90ce9593ec0d840ff8de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
