<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_80b4506208d45ffe32d5cbc6da9c3b0e08ce95942df7ed578766c0cbcc4ee903 extends Twig_Template
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
        $__internal_d9ecceb8223a02206d56765ae0328f46d10e81cd56950061ad4bbcff601393ad = $this->env->getExtension("native_profiler");
        $__internal_d9ecceb8223a02206d56765ae0328f46d10e81cd56950061ad4bbcff601393ad->enter($__internal_d9ecceb8223a02206d56765ae0328f46d10e81cd56950061ad4bbcff601393ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d9ecceb8223a02206d56765ae0328f46d10e81cd56950061ad4bbcff601393ad->leave($__internal_d9ecceb8223a02206d56765ae0328f46d10e81cd56950061ad4bbcff601393ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
