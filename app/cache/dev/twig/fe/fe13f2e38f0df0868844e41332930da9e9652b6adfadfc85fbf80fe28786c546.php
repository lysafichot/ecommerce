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
        $__internal_3aea3372edd2b4155a66ab0f78e4930843ae92e7503d176a9512a6867da20b51 = $this->env->getExtension("native_profiler");
        $__internal_3aea3372edd2b4155a66ab0f78e4930843ae92e7503d176a9512a6867da20b51->enter($__internal_3aea3372edd2b4155a66ab0f78e4930843ae92e7503d176a9512a6867da20b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3aea3372edd2b4155a66ab0f78e4930843ae92e7503d176a9512a6867da20b51->leave($__internal_3aea3372edd2b4155a66ab0f78e4930843ae92e7503d176a9512a6867da20b51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_618280ac2ad9e8b2ca4e4dbce8cb3069bbd014d05eede27ead558d61e94ec982 = $this->env->getExtension("native_profiler");
        $__internal_618280ac2ad9e8b2ca4e4dbce8cb3069bbd014d05eede27ead558d61e94ec982->enter($__internal_618280ac2ad9e8b2ca4e4dbce8cb3069bbd014d05eede27ead558d61e94ec982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_618280ac2ad9e8b2ca4e4dbce8cb3069bbd014d05eede27ead558d61e94ec982->leave($__internal_618280ac2ad9e8b2ca4e4dbce8cb3069bbd014d05eede27ead558d61e94ec982_prof);

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
