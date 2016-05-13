<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d6881c6d6a7c25d4354bc1dc21efff50b6e50a723771d138779b9f604d185786 extends Twig_Template
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
        $__internal_a3da1e7e7cf199ff6ccc3869df1e83ae288d3f563efd16fe06013038496bd38d = $this->env->getExtension("native_profiler");
        $__internal_a3da1e7e7cf199ff6ccc3869df1e83ae288d3f563efd16fe06013038496bd38d->enter($__internal_a3da1e7e7cf199ff6ccc3869df1e83ae288d3f563efd16fe06013038496bd38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a3da1e7e7cf199ff6ccc3869df1e83ae288d3f563efd16fe06013038496bd38d->leave($__internal_a3da1e7e7cf199ff6ccc3869df1e83ae288d3f563efd16fe06013038496bd38d_prof);

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
