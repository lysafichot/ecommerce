<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c75a5e7e446e124be1aaff55c36f180eac7af0b44c0457e13edda16931199d0a extends Twig_Template
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
        $__internal_21dadc9a93ae07e806d8ab313254775694932b4c5d2e542080be258483b31c58 = $this->env->getExtension("native_profiler");
        $__internal_21dadc9a93ae07e806d8ab313254775694932b4c5d2e542080be258483b31c58->enter($__internal_21dadc9a93ae07e806d8ab313254775694932b4c5d2e542080be258483b31c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_21dadc9a93ae07e806d8ab313254775694932b4c5d2e542080be258483b31c58->leave($__internal_21dadc9a93ae07e806d8ab313254775694932b4c5d2e542080be258483b31c58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
