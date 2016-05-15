<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_08b0aa60a129934ee4d0673551d4c32cfa992427d89d08358edfc0e41e38fdef extends Twig_Template
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
        $__internal_8ebdc0347ff2660dfac1930f47b1673409b1986385810389488d75718d229306 = $this->env->getExtension("native_profiler");
        $__internal_8ebdc0347ff2660dfac1930f47b1673409b1986385810389488d75718d229306->enter($__internal_8ebdc0347ff2660dfac1930f47b1673409b1986385810389488d75718d229306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ebdc0347ff2660dfac1930f47b1673409b1986385810389488d75718d229306->leave($__internal_8ebdc0347ff2660dfac1930f47b1673409b1986385810389488d75718d229306_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_057172d7397f4045e5234bb12b2087b4db388a2b1270e8dcbe39402d5be6916f = $this->env->getExtension("native_profiler");
        $__internal_057172d7397f4045e5234bb12b2087b4db388a2b1270e8dcbe39402d5be6916f->enter($__internal_057172d7397f4045e5234bb12b2087b4db388a2b1270e8dcbe39402d5be6916f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_057172d7397f4045e5234bb12b2087b4db388a2b1270e8dcbe39402d5be6916f->leave($__internal_057172d7397f4045e5234bb12b2087b4db388a2b1270e8dcbe39402d5be6916f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
