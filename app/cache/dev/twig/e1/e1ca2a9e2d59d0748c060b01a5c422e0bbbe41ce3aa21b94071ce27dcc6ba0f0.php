<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_01aed36accd9543adce520038e87e2885129f3bd5a9d54c30afeb6cfc2d5523b extends Twig_Template
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
        $__internal_cea68bbaeccd405d2badebc0c574758154c659d48c1fc17eacbf1356e602d671 = $this->env->getExtension("native_profiler");
        $__internal_cea68bbaeccd405d2badebc0c574758154c659d48c1fc17eacbf1356e602d671->enter($__internal_cea68bbaeccd405d2badebc0c574758154c659d48c1fc17eacbf1356e602d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cea68bbaeccd405d2badebc0c574758154c659d48c1fc17eacbf1356e602d671->leave($__internal_cea68bbaeccd405d2badebc0c574758154c659d48c1fc17eacbf1356e602d671_prof);

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
