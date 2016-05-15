<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_51ce702885df6bf1e65f3b53472a08192a0108fa316a919e22829a40dcfcba4b extends Twig_Template
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
        $__internal_28b8eca504ecc8c427b256f875f94edddf9e8d4b20ba8cccad6230911714b501 = $this->env->getExtension("native_profiler");
        $__internal_28b8eca504ecc8c427b256f875f94edddf9e8d4b20ba8cccad6230911714b501->enter($__internal_28b8eca504ecc8c427b256f875f94edddf9e8d4b20ba8cccad6230911714b501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_28b8eca504ecc8c427b256f875f94edddf9e8d4b20ba8cccad6230911714b501->leave($__internal_28b8eca504ecc8c427b256f875f94edddf9e8d4b20ba8cccad6230911714b501_prof);

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
