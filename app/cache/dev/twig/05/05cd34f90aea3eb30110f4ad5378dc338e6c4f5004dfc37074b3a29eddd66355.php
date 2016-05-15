<?php

/* AccountBundle:Auth:registration.html.twig */
class __TwigTemplate_6c91abdcb2dd4cf0382d3c7917d40821fdb19cbaf5809d510c47a5d24624769a extends Twig_Template
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
        $__internal_d3614b68195a1dc63d895db6dff1522c5d90d481efa921c1dbbeb880c8f2fcba = $this->env->getExtension("native_profiler");
        $__internal_d3614b68195a1dc63d895db6dff1522c5d90d481efa921c1dbbeb880c8f2fcba->enter($__internal_d3614b68195a1dc63d895db6dff1522c5d90d481efa921c1dbbeb880c8f2fcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:registration.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Register!</button>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_d3614b68195a1dc63d895db6dff1522c5d90d481efa921c1dbbeb880c8f2fcba->leave($__internal_d3614b68195a1dc63d895db6dff1522c5d90d481efa921c1dbbeb880c8f2fcba_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Auth:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/
