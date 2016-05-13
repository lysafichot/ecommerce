<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_33dd09d4cbe78273c162a846f705b0852253e42387fae3be3d183031b91fdf65 extends Twig_Template
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
        $__internal_77c40cb46ab85677d21ee76dcfc192d3e907e4cb740efcca343d71faa1db3dee = $this->env->getExtension("native_profiler");
        $__internal_77c40cb46ab85677d21ee76dcfc192d3e907e4cb740efcca343d71faa1db3dee->enter($__internal_77c40cb46ab85677d21ee76dcfc192d3e907e4cb740efcca343d71faa1db3dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_77c40cb46ab85677d21ee76dcfc192d3e907e4cb740efcca343d71faa1db3dee->leave($__internal_77c40cb46ab85677d21ee76dcfc192d3e907e4cb740efcca343d71faa1db3dee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
