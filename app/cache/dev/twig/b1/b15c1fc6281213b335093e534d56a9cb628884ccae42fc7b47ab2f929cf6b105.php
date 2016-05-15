<?php

/* @Account/Auth/registration.html.twig */
class __TwigTemplate_27409bd0fae84d01b8a10ae326acf9c142caf045051367be3de086f5f5636834 extends Twig_Template
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
        $__internal_9b7cce83d32ae678fc5bc4a3a293fc6a841aabf87c7f36fbe36e1c46f8616f15 = $this->env->getExtension("native_profiler");
        $__internal_9b7cce83d32ae678fc5bc4a3a293fc6a841aabf87c7f36fbe36e1c46f8616f15->enter($__internal_9b7cce83d32ae678fc5bc4a3a293fc6a841aabf87c7f36fbe36e1c46f8616f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/registration.html.twig"));

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
        
        $__internal_9b7cce83d32ae678fc5bc4a3a293fc6a841aabf87c7f36fbe36e1c46f8616f15->leave($__internal_9b7cce83d32ae678fc5bc4a3a293fc6a841aabf87c7f36fbe36e1c46f8616f15_prof);

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
/* {{ form_start(form) }}*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/
