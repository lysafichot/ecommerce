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
        $__internal_bbc351be3435e2c9dfe47f3f728d40c545b3f5c89c95a440fb80e6640c58f72d = $this->env->getExtension("native_profiler");
        $__internal_bbc351be3435e2c9dfe47f3f728d40c545b3f5c89c95a440fb80e6640c58f72d->enter($__internal_bbc351be3435e2c9dfe47f3f728d40c545b3f5c89c95a440fb80e6640c58f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_bbc351be3435e2c9dfe47f3f728d40c545b3f5c89c95a440fb80e6640c58f72d->leave($__internal_bbc351be3435e2c9dfe47f3f728d40c545b3f5c89c95a440fb80e6640c58f72d_prof);

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
