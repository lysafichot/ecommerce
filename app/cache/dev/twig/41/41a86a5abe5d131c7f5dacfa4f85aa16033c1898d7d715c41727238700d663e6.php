<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71c795b018b02f969e3f1a547ad72bff6281d77fab75e0e5cb73567719da333f extends Twig_Template
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
        $__internal_729557b7fc1d250aea133230f109353e5ac01a9327065e2221c9dea075d25c86 = $this->env->getExtension("native_profiler");
        $__internal_729557b7fc1d250aea133230f109353e5ac01a9327065e2221c9dea075d25c86->enter($__internal_729557b7fc1d250aea133230f109353e5ac01a9327065e2221c9dea075d25c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_729557b7fc1d250aea133230f109353e5ac01a9327065e2221c9dea075d25c86->leave($__internal_729557b7fc1d250aea133230f109353e5ac01a9327065e2221c9dea075d25c86_prof);

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
