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
        $__internal_059d6f5dde19542c4f8014550f2bffaaac38b70299e4258b1ceed1596cfbb84a = $this->env->getExtension("native_profiler");
        $__internal_059d6f5dde19542c4f8014550f2bffaaac38b70299e4258b1ceed1596cfbb84a->enter($__internal_059d6f5dde19542c4f8014550f2bffaaac38b70299e4258b1ceed1596cfbb84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_059d6f5dde19542c4f8014550f2bffaaac38b70299e4258b1ceed1596cfbb84a->leave($__internal_059d6f5dde19542c4f8014550f2bffaaac38b70299e4258b1ceed1596cfbb84a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_febc81d1d403cad20eab7d0c684d4f1b859f612e8b864ed94d6138b6836b5279 = $this->env->getExtension("native_profiler");
        $__internal_febc81d1d403cad20eab7d0c684d4f1b859f612e8b864ed94d6138b6836b5279->enter($__internal_febc81d1d403cad20eab7d0c684d4f1b859f612e8b864ed94d6138b6836b5279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_febc81d1d403cad20eab7d0c684d4f1b859f612e8b864ed94d6138b6836b5279->leave($__internal_febc81d1d403cad20eab7d0c684d4f1b859f612e8b864ed94d6138b6836b5279_prof);

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
