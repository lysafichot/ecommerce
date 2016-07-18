<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_91d1abd8fcba1873db91ec0bb6d634856670895a0fc152d450bddf394a4ca0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4750dd18bd124db00815dc62962976873c4479e5dc34ea9a5eaf2b2041c5f36 = $this->env->getExtension("native_profiler");
        $__internal_c4750dd18bd124db00815dc62962976873c4479e5dc34ea9a5eaf2b2041c5f36->enter($__internal_c4750dd18bd124db00815dc62962976873c4479e5dc34ea9a5eaf2b2041c5f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4750dd18bd124db00815dc62962976873c4479e5dc34ea9a5eaf2b2041c5f36->leave($__internal_c4750dd18bd124db00815dc62962976873c4479e5dc34ea9a5eaf2b2041c5f36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95c3d69ef5d53a20c4e778d9b45f4dd3f635aeef67c4591ea05c85320b48bb35 = $this->env->getExtension("native_profiler");
        $__internal_95c3d69ef5d53a20c4e778d9b45f4dd3f635aeef67c4591ea05c85320b48bb35->enter($__internal_95c3d69ef5d53a20c4e778d9b45f4dd3f635aeef67c4591ea05c85320b48bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_95c3d69ef5d53a20c4e778d9b45f4dd3f635aeef67c4591ea05c85320b48bb35->leave($__internal_95c3d69ef5d53a20c4e778d9b45f4dd3f635aeef67c4591ea05c85320b48bb35_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b5bd918195537027cd6d2b2e23c136898dbf02f8e075ffa747c2ed5ecc0ed07 = $this->env->getExtension("native_profiler");
        $__internal_3b5bd918195537027cd6d2b2e23c136898dbf02f8e075ffa747c2ed5ecc0ed07->enter($__internal_3b5bd918195537027cd6d2b2e23c136898dbf02f8e075ffa747c2ed5ecc0ed07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3b5bd918195537027cd6d2b2e23c136898dbf02f8e075ffa747c2ed5ecc0ed07->leave($__internal_3b5bd918195537027cd6d2b2e23c136898dbf02f8e075ffa747c2ed5ecc0ed07_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_564c51dd701f3f7666cf1abed883f2484cd1d63b96e9c86d33221302bfc0d875 = $this->env->getExtension("native_profiler");
        $__internal_564c51dd701f3f7666cf1abed883f2484cd1d63b96e9c86d33221302bfc0d875->enter($__internal_564c51dd701f3f7666cf1abed883f2484cd1d63b96e9c86d33221302bfc0d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_564c51dd701f3f7666cf1abed883f2484cd1d63b96e9c86d33221302bfc0d875->leave($__internal_564c51dd701f3f7666cf1abed883f2484cd1d63b96e9c86d33221302bfc0d875_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
