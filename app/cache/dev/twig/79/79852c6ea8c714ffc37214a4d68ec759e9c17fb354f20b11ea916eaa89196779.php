<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ea0620a77225e2979335842a807c96ddec93426a38c2f1f39ad555d4424c5ab6 extends Twig_Template
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
        $__internal_38e622734a1fbef628df1e60c03fdb99ef53e8206a2dccfff9daa7611ee0808d = $this->env->getExtension("native_profiler");
        $__internal_38e622734a1fbef628df1e60c03fdb99ef53e8206a2dccfff9daa7611ee0808d->enter($__internal_38e622734a1fbef628df1e60c03fdb99ef53e8206a2dccfff9daa7611ee0808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_38e622734a1fbef628df1e60c03fdb99ef53e8206a2dccfff9daa7611ee0808d->leave($__internal_38e622734a1fbef628df1e60c03fdb99ef53e8206a2dccfff9daa7611ee0808d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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