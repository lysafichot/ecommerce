<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f13971d25ee9992b2ded8ab143ec8e88e216e4acbbc473c8872e00ed214b8759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ffe9a9742c7254de755ff798e24a67a5c1e031fa2f04217508d07eca7491c9 = $this->env->getExtension("native_profiler");
        $__internal_28ffe9a9742c7254de755ff798e24a67a5c1e031fa2f04217508d07eca7491c9->enter($__internal_28ffe9a9742c7254de755ff798e24a67a5c1e031fa2f04217508d07eca7491c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_28ffe9a9742c7254de755ff798e24a67a5c1e031fa2f04217508d07eca7491c9->leave($__internal_28ffe9a9742c7254de755ff798e24a67a5c1e031fa2f04217508d07eca7491c9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_63765dbc900aedf0587fe902041d46e15a57228dd90966f2e9b73645e05829bf = $this->env->getExtension("native_profiler");
        $__internal_63765dbc900aedf0587fe902041d46e15a57228dd90966f2e9b73645e05829bf->enter($__internal_63765dbc900aedf0587fe902041d46e15a57228dd90966f2e9b73645e05829bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_63765dbc900aedf0587fe902041d46e15a57228dd90966f2e9b73645e05829bf->leave($__internal_63765dbc900aedf0587fe902041d46e15a57228dd90966f2e9b73645e05829bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
