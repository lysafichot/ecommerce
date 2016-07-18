<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ec90f948bdc77ff422aec08339f238406942807ddc490d518d98600ef35c3677 extends Twig_Template
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
        $__internal_d081b2228a45e05bffc6cb25e8ca7745f446d6c16d6fa7218ab902787e3cdbeb = $this->env->getExtension("native_profiler");
        $__internal_d081b2228a45e05bffc6cb25e8ca7745f446d6c16d6fa7218ab902787e3cdbeb->enter($__internal_d081b2228a45e05bffc6cb25e8ca7745f446d6c16d6fa7218ab902787e3cdbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d081b2228a45e05bffc6cb25e8ca7745f446d6c16d6fa7218ab902787e3cdbeb->leave($__internal_d081b2228a45e05bffc6cb25e8ca7745f446d6c16d6fa7218ab902787e3cdbeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
