<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3803302171b4be43ea88070a44d44214168621d1e432597dd35ed189d3690cbb extends Twig_Template
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
        $__internal_e29bf2c97cd4c290591fafc90d5a699b66954832cdfc8d301bbf48558759336d = $this->env->getExtension("native_profiler");
        $__internal_e29bf2c97cd4c290591fafc90d5a699b66954832cdfc8d301bbf48558759336d->enter($__internal_e29bf2c97cd4c290591fafc90d5a699b66954832cdfc8d301bbf48558759336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e29bf2c97cd4c290591fafc90d5a699b66954832cdfc8d301bbf48558759336d->leave($__internal_e29bf2c97cd4c290591fafc90d5a699b66954832cdfc8d301bbf48558759336d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
