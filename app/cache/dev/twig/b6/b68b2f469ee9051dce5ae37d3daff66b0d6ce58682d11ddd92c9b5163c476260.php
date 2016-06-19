<?php

/* @Account/Auth/registration.html.twig */
class __TwigTemplate_2e500f8284cb80cf49eb79866b85372982614b735f111c58702e2cc50c7feb7d extends Twig_Template
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
        $__internal_462f30ce6c2a32bdea0d8bf7043ce0d3b11b217b0f837735628ffbd764d35e6e = $this->env->getExtension("native_profiler");
        $__internal_462f30ce6c2a32bdea0d8bf7043ce0d3b11b217b0f837735628ffbd764d35e6e->enter($__internal_462f30ce6c2a32bdea0d8bf7043ce0d3b11b217b0f837735628ffbd764d35e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/registration.html.twig"));

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
        
        $__internal_462f30ce6c2a32bdea0d8bf7043ce0d3b11b217b0f837735628ffbd764d35e6e->leave($__internal_462f30ce6c2a32bdea0d8bf7043ce0d3b11b217b0f837735628ffbd764d35e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Auth/registration.html.twig";
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
