<?php

/* AccountBundle:Auth:registration.html.twig */
class __TwigTemplate_91db0ec8d3ce6c0bf27278f88241c65eb21435f6bd14b0d7125b4c2f6963747c extends Twig_Template
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
        $__internal_8c256d0b3520f81b4144d8cd0bd2989e3fc40a2ac3af76dac2adc53a508119ff = $this->env->getExtension("native_profiler");
        $__internal_8c256d0b3520f81b4144d8cd0bd2989e3fc40a2ac3af76dac2adc53a508119ff->enter($__internal_8c256d0b3520f81b4144d8cd0bd2989e3fc40a2ac3af76dac2adc53a508119ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:registration.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-register")));
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
        
        $__internal_8c256d0b3520f81b4144d8cd0bd2989e3fc40a2ac3af76dac2adc53a508119ff->leave($__internal_8c256d0b3520f81b4144d8cd0bd2989e3fc40a2ac3af76dac2adc53a508119ff_prof);

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
/* {{ form_start(form, {'attr': {'class': 'form-register'}}) }}*/
/*     {{ form_row(form.username) }}*/
/* {{ form_row(form.email) }}*/
/*      {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/
