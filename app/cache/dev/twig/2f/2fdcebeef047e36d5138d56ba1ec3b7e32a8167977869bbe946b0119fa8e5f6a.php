<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2e54f532f9218c27903c9ab2bbc6e7ffd38c90747b5c2f108c96d610cef207f3 extends Twig_Template
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
        $__internal_b1cbb1a9f740d6e6cd5604235cd61e04ef57f93c3132be9833ccbf670c980be9 = $this->env->getExtension("native_profiler");
        $__internal_b1cbb1a9f740d6e6cd5604235cd61e04ef57f93c3132be9833ccbf670c980be9->enter($__internal_b1cbb1a9f740d6e6cd5604235cd61e04ef57f93c3132be9833ccbf670c980be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b1cbb1a9f740d6e6cd5604235cd61e04ef57f93c3132be9833ccbf670c980be9->leave($__internal_b1cbb1a9f740d6e6cd5604235cd61e04ef57f93c3132be9833ccbf670c980be9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
