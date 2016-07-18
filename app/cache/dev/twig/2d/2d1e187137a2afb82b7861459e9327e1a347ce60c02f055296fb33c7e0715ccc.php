<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_41b42c241d6e1a5ff0c62f4a2c0d511a77be79963cf5df6ac6d322be72e9dd25 extends Twig_Template
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
        $__internal_42f25ae2ef2e93a6ba164ca5aa5548e003810500edb91ec9920f86f882acf24d = $this->env->getExtension("native_profiler");
        $__internal_42f25ae2ef2e93a6ba164ca5aa5548e003810500edb91ec9920f86f882acf24d->enter($__internal_42f25ae2ef2e93a6ba164ca5aa5548e003810500edb91ec9920f86f882acf24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_42f25ae2ef2e93a6ba164ca5aa5548e003810500edb91ec9920f86f882acf24d->leave($__internal_42f25ae2ef2e93a6ba164ca5aa5548e003810500edb91ec9920f86f882acf24d_prof);

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
