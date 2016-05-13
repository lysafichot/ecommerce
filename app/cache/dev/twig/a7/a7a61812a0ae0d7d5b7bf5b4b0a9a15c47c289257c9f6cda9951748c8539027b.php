<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_73f5cab9a1f1516152f9c2cf02a6d5763701295cf876c7d6da8ae05544e9ac82 extends Twig_Template
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
        $__internal_82ba23bbc5ed48bd6de9613ef7f89024249436141029f55b9cb2b0308e9f68b7 = $this->env->getExtension("native_profiler");
        $__internal_82ba23bbc5ed48bd6de9613ef7f89024249436141029f55b9cb2b0308e9f68b7->enter($__internal_82ba23bbc5ed48bd6de9613ef7f89024249436141029f55b9cb2b0308e9f68b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_82ba23bbc5ed48bd6de9613ef7f89024249436141029f55b9cb2b0308e9f68b7->leave($__internal_82ba23bbc5ed48bd6de9613ef7f89024249436141029f55b9cb2b0308e9f68b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
