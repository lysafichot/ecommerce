<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f2caa1d6523de8728db1dee511b0c9255cb9ffae0e4d2bb5192f50c1cf6d5b59 extends Twig_Template
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
        $__internal_906aa8a3ec5b775bf7a8635685b13af23b37ad053f766f42a4d4d3b6636508c8 = $this->env->getExtension("native_profiler");
        $__internal_906aa8a3ec5b775bf7a8635685b13af23b37ad053f766f42a4d4d3b6636508c8->enter($__internal_906aa8a3ec5b775bf7a8635685b13af23b37ad053f766f42a4d4d3b6636508c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_906aa8a3ec5b775bf7a8635685b13af23b37ad053f766f42a4d4d3b6636508c8->leave($__internal_906aa8a3ec5b775bf7a8635685b13af23b37ad053f766f42a4d4d3b6636508c8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b9ee51a3e2b125ee12e671802a05be31365f74b76128afa62debee4ea085b4d = $this->env->getExtension("native_profiler");
        $__internal_6b9ee51a3e2b125ee12e671802a05be31365f74b76128afa62debee4ea085b4d->enter($__internal_6b9ee51a3e2b125ee12e671802a05be31365f74b76128afa62debee4ea085b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b9ee51a3e2b125ee12e671802a05be31365f74b76128afa62debee4ea085b4d->leave($__internal_6b9ee51a3e2b125ee12e671802a05be31365f74b76128afa62debee4ea085b4d_prof);

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
