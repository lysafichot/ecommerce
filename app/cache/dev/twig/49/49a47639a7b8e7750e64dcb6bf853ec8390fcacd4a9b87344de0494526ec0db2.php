<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_fe94c462a735c39e21214b472e3adaf762511a510153016af842f7ad5f10cbad extends Twig_Template
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
        $__internal_0c5196aa2f42b4246580cb5e0922f40bb5ac8cf99f08d8333764c2ef91ccb15f = $this->env->getExtension("native_profiler");
        $__internal_0c5196aa2f42b4246580cb5e0922f40bb5ac8cf99f08d8333764c2ef91ccb15f->enter($__internal_0c5196aa2f42b4246580cb5e0922f40bb5ac8cf99f08d8333764c2ef91ccb15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c5196aa2f42b4246580cb5e0922f40bb5ac8cf99f08d8333764c2ef91ccb15f->leave($__internal_0c5196aa2f42b4246580cb5e0922f40bb5ac8cf99f08d8333764c2ef91ccb15f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
