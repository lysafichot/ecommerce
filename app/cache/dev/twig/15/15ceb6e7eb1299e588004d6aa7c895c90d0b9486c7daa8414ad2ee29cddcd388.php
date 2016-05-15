<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_74d3e46bbaed0315f4467d3fed8ab071a2ebff1e035ae76a1905e9d9379b1be9 extends Twig_Template
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
        $__internal_3752aaec3aeac3265ebfac4b8c2f44c3a04fe44ccdc82fa96dd9bd55b5d70df6 = $this->env->getExtension("native_profiler");
        $__internal_3752aaec3aeac3265ebfac4b8c2f44c3a04fe44ccdc82fa96dd9bd55b5d70df6->enter($__internal_3752aaec3aeac3265ebfac4b8c2f44c3a04fe44ccdc82fa96dd9bd55b5d70df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3752aaec3aeac3265ebfac4b8c2f44c3a04fe44ccdc82fa96dd9bd55b5d70df6->leave($__internal_3752aaec3aeac3265ebfac4b8c2f44c3a04fe44ccdc82fa96dd9bd55b5d70df6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
