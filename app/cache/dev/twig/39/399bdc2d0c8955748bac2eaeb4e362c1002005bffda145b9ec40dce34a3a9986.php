<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_99dd4c85a29dd72f6583e99101856471c9a85ab8e18d0f5ae4fa355f6360b1d2 extends Twig_Template
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
        $__internal_3ea81387a6f2c5b43723dbed91cda443084d935603ad574439d8819d34431c72 = $this->env->getExtension("native_profiler");
        $__internal_3ea81387a6f2c5b43723dbed91cda443084d935603ad574439d8819d34431c72->enter($__internal_3ea81387a6f2c5b43723dbed91cda443084d935603ad574439d8819d34431c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3ea81387a6f2c5b43723dbed91cda443084d935603ad574439d8819d34431c72->leave($__internal_3ea81387a6f2c5b43723dbed91cda443084d935603ad574439d8819d34431c72_prof);

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
