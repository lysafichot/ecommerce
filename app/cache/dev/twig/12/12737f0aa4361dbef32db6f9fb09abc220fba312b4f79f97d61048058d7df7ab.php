<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1759682f66c39c8f0ff442eaca46dc4535ed7b36042683a6c3cf8e824393c3f6 extends Twig_Template
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
        $__internal_101fbea763f0448da6af192a2f950f30b7e33afa8f6fd3a6928138480702be82 = $this->env->getExtension("native_profiler");
        $__internal_101fbea763f0448da6af192a2f950f30b7e33afa8f6fd3a6928138480702be82->enter($__internal_101fbea763f0448da6af192a2f950f30b7e33afa8f6fd3a6928138480702be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_101fbea763f0448da6af192a2f950f30b7e33afa8f6fd3a6928138480702be82->leave($__internal_101fbea763f0448da6af192a2f950f30b7e33afa8f6fd3a6928138480702be82_prof);

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
