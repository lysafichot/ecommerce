<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_74c2ed31f010180808583940b66262bd5bb64ac1e84dba6ad9100247e5a1ca23 extends Twig_Template
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
        $__internal_34c90d5e106a61567b7a75e15269e447cffe40f285f3c3f1c8b468aab23a47e9 = $this->env->getExtension("native_profiler");
        $__internal_34c90d5e106a61567b7a75e15269e447cffe40f285f3c3f1c8b468aab23a47e9->enter($__internal_34c90d5e106a61567b7a75e15269e447cffe40f285f3c3f1c8b468aab23a47e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_34c90d5e106a61567b7a75e15269e447cffe40f285f3c3f1c8b468aab23a47e9->leave($__internal_34c90d5e106a61567b7a75e15269e447cffe40f285f3c3f1c8b468aab23a47e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
