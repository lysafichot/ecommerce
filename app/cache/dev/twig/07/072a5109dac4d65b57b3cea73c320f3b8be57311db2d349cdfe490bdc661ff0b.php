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
        $__internal_7d332f80d87a79b728339399d610fd27c24c11bdfedba1dd8e8a23357bb8b11d = $this->env->getExtension("native_profiler");
        $__internal_7d332f80d87a79b728339399d610fd27c24c11bdfedba1dd8e8a23357bb8b11d->enter($__internal_7d332f80d87a79b728339399d610fd27c24c11bdfedba1dd8e8a23357bb8b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d332f80d87a79b728339399d610fd27c24c11bdfedba1dd8e8a23357bb8b11d->leave($__internal_7d332f80d87a79b728339399d610fd27c24c11bdfedba1dd8e8a23357bb8b11d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9530d7c623224af8f24e11b94758e9da3efa16814b4405c3d41e579b4235f667 = $this->env->getExtension("native_profiler");
        $__internal_9530d7c623224af8f24e11b94758e9da3efa16814b4405c3d41e579b4235f667->enter($__internal_9530d7c623224af8f24e11b94758e9da3efa16814b4405c3d41e579b4235f667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9530d7c623224af8f24e11b94758e9da3efa16814b4405c3d41e579b4235f667->leave($__internal_9530d7c623224af8f24e11b94758e9da3efa16814b4405c3d41e579b4235f667_prof);

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
