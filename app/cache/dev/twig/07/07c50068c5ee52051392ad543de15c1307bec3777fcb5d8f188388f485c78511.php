<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e0653a8515b3b871bc44b231983dc93d10634d00d276b5a0156a84ba9d379890 extends Twig_Template
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
        $__internal_0447ffc63602cc1d75ea4b7b99e4f7229bcefde903ab3b19553950990ba805db = $this->env->getExtension("native_profiler");
        $__internal_0447ffc63602cc1d75ea4b7b99e4f7229bcefde903ab3b19553950990ba805db->enter($__internal_0447ffc63602cc1d75ea4b7b99e4f7229bcefde903ab3b19553950990ba805db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0447ffc63602cc1d75ea4b7b99e4f7229bcefde903ab3b19553950990ba805db->leave($__internal_0447ffc63602cc1d75ea4b7b99e4f7229bcefde903ab3b19553950990ba805db_prof);

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
