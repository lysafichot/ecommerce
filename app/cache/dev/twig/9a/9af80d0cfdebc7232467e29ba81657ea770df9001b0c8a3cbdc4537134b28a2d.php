<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d78dd414eb9eeaa4692c63a1dd7fdb3e04ff881cd80e813a38df2099919aa45 extends Twig_Template
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
        $__internal_41cb2a09d8fe606e8c96ef7d538c8eed61544656ddfdeebca529a76511159a14 = $this->env->getExtension("native_profiler");
        $__internal_41cb2a09d8fe606e8c96ef7d538c8eed61544656ddfdeebca529a76511159a14->enter($__internal_41cb2a09d8fe606e8c96ef7d538c8eed61544656ddfdeebca529a76511159a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41cb2a09d8fe606e8c96ef7d538c8eed61544656ddfdeebca529a76511159a14->leave($__internal_41cb2a09d8fe606e8c96ef7d538c8eed61544656ddfdeebca529a76511159a14_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64e46c7e82380a6574e1232f8bece06c7151074b76ba077568c45b4369d3f79e = $this->env->getExtension("native_profiler");
        $__internal_64e46c7e82380a6574e1232f8bece06c7151074b76ba077568c45b4369d3f79e->enter($__internal_64e46c7e82380a6574e1232f8bece06c7151074b76ba077568c45b4369d3f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64e46c7e82380a6574e1232f8bece06c7151074b76ba077568c45b4369d3f79e->leave($__internal_64e46c7e82380a6574e1232f8bece06c7151074b76ba077568c45b4369d3f79e_prof);

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
