<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_923c410632565c7d2f1059ea9325f098cf602d4a831d2745ec221d545bd574cb extends Twig_Template
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
        $__internal_ddb312d08e22ce7df40b49794be54adff89c78e9f1b62b210f02ef074879ad6b = $this->env->getExtension("native_profiler");
        $__internal_ddb312d08e22ce7df40b49794be54adff89c78e9f1b62b210f02ef074879ad6b->enter($__internal_ddb312d08e22ce7df40b49794be54adff89c78e9f1b62b210f02ef074879ad6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ddb312d08e22ce7df40b49794be54adff89c78e9f1b62b210f02ef074879ad6b->leave($__internal_ddb312d08e22ce7df40b49794be54adff89c78e9f1b62b210f02ef074879ad6b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a6800ece31d920112ac2aa1bd62270cda77f7e82c3c8795d3d530a514885058 = $this->env->getExtension("native_profiler");
        $__internal_4a6800ece31d920112ac2aa1bd62270cda77f7e82c3c8795d3d530a514885058->enter($__internal_4a6800ece31d920112ac2aa1bd62270cda77f7e82c3c8795d3d530a514885058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a6800ece31d920112ac2aa1bd62270cda77f7e82c3c8795d3d530a514885058->leave($__internal_4a6800ece31d920112ac2aa1bd62270cda77f7e82c3c8795d3d530a514885058_prof);

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
