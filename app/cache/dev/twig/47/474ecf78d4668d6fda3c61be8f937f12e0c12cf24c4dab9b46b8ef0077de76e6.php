<?php

/* @Account/Security/registration.html.twig */
class __TwigTemplate_6346f577327de2908941b6c98595e6043a297def87afed146092fda7d461eb3b extends Twig_Template
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
        $__internal_fee4084a6df74852f0c6aa8cf9670f56c4f1b12b2d26d1a8d9f2e9a07ca706ac = $this->env->getExtension("native_profiler");
        $__internal_fee4084a6df74852f0c6aa8cf9670f56c4f1b12b2d26d1a8d9f2e9a07ca706ac->enter($__internal_fee4084a6df74852f0c6aa8cf9670f56c4f1b12b2d26d1a8d9f2e9a07ca706ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Security/registration.html.twig"));

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
        
        $__internal_fee4084a6df74852f0c6aa8cf9670f56c4f1b12b2d26d1a8d9f2e9a07ca706ac->leave($__internal_fee4084a6df74852f0c6aa8cf9670f56c4f1b12b2d26d1a8d9f2e9a07ca706ac_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Security/registration.html.twig";
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
