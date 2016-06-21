<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6bc1244fd76f9821b997183b292001875c509b9e8f3b861df80d06b6c70144c7 extends Twig_Template
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
        $__internal_ff59727a569b7fd186a7536df5de7c46bab90288602d7295c735f6e96bac9881 = $this->env->getExtension("native_profiler");
        $__internal_ff59727a569b7fd186a7536df5de7c46bab90288602d7295c735f6e96bac9881->enter($__internal_ff59727a569b7fd186a7536df5de7c46bab90288602d7295c735f6e96bac9881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ff59727a569b7fd186a7536df5de7c46bab90288602d7295c735f6e96bac9881->leave($__internal_ff59727a569b7fd186a7536df5de7c46bab90288602d7295c735f6e96bac9881_prof);

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
