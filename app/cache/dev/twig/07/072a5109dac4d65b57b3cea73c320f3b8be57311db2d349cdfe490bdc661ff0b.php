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
        $__internal_1bcd48c49fd8957a22e8adbe674ffd5455e081a9338ba68839917347fd103b4c = $this->env->getExtension("native_profiler");
        $__internal_1bcd48c49fd8957a22e8adbe674ffd5455e081a9338ba68839917347fd103b4c->enter($__internal_1bcd48c49fd8957a22e8adbe674ffd5455e081a9338ba68839917347fd103b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1bcd48c49fd8957a22e8adbe674ffd5455e081a9338ba68839917347fd103b4c->leave($__internal_1bcd48c49fd8957a22e8adbe674ffd5455e081a9338ba68839917347fd103b4c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_29be56b306e0efd1ebe718ff45d4ba605d65ca5f4949c5aa91f3d66c3d52312e = $this->env->getExtension("native_profiler");
        $__internal_29be56b306e0efd1ebe718ff45d4ba605d65ca5f4949c5aa91f3d66c3d52312e->enter($__internal_29be56b306e0efd1ebe718ff45d4ba605d65ca5f4949c5aa91f3d66c3d52312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_29be56b306e0efd1ebe718ff45d4ba605d65ca5f4949c5aa91f3d66c3d52312e->leave($__internal_29be56b306e0efd1ebe718ff45d4ba605d65ca5f4949c5aa91f3d66c3d52312e_prof);

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
