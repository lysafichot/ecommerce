<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1fe1d6e0811c63b8a8ce528886e8220c12466cadc4b83e074bce2e4936aecf31 extends Twig_Template
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
        $__internal_f403f7c622ee53062b995301f1c123e77d2eb9f091ccbaf8251e1ae1b8a3c42e = $this->env->getExtension("native_profiler");
        $__internal_f403f7c622ee53062b995301f1c123e77d2eb9f091ccbaf8251e1ae1b8a3c42e->enter($__internal_f403f7c622ee53062b995301f1c123e77d2eb9f091ccbaf8251e1ae1b8a3c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f403f7c622ee53062b995301f1c123e77d2eb9f091ccbaf8251e1ae1b8a3c42e->leave($__internal_f403f7c622ee53062b995301f1c123e77d2eb9f091ccbaf8251e1ae1b8a3c42e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
