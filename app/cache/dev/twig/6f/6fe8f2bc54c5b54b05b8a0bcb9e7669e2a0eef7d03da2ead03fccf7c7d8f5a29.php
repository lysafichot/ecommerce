<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9a138bc73af08fa107a02e420ff9a0d4700e89918963741fac6a8a2d975e7fbc extends Twig_Template
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
        $__internal_3c9c2d6de630b0452dd831916fc25c3c6ea28fda8893f8cffefc84d8e8acae89 = $this->env->getExtension("native_profiler");
        $__internal_3c9c2d6de630b0452dd831916fc25c3c6ea28fda8893f8cffefc84d8e8acae89->enter($__internal_3c9c2d6de630b0452dd831916fc25c3c6ea28fda8893f8cffefc84d8e8acae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3c9c2d6de630b0452dd831916fc25c3c6ea28fda8893f8cffefc84d8e8acae89->leave($__internal_3c9c2d6de630b0452dd831916fc25c3c6ea28fda8893f8cffefc84d8e8acae89_prof);

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
