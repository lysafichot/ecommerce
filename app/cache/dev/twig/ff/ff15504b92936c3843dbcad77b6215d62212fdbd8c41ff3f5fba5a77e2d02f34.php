<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9e147c4c9979cbb5d6e826e45b1da8bea78aae57cddf36474920501a72430ad0 extends Twig_Template
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
        $__internal_9758a1606f426521332c8dc3e34ea3390ad6764bfbf63211b29365c1894cc461 = $this->env->getExtension("native_profiler");
        $__internal_9758a1606f426521332c8dc3e34ea3390ad6764bfbf63211b29365c1894cc461->enter($__internal_9758a1606f426521332c8dc3e34ea3390ad6764bfbf63211b29365c1894cc461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9758a1606f426521332c8dc3e34ea3390ad6764bfbf63211b29365c1894cc461->leave($__internal_9758a1606f426521332c8dc3e34ea3390ad6764bfbf63211b29365c1894cc461_prof);

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
