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
        $__internal_20149dfe53d340b47b2844bc5226c97b96ea947e4d8a008578d023e55568b862 = $this->env->getExtension("native_profiler");
        $__internal_20149dfe53d340b47b2844bc5226c97b96ea947e4d8a008578d023e55568b862->enter($__internal_20149dfe53d340b47b2844bc5226c97b96ea947e4d8a008578d023e55568b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20149dfe53d340b47b2844bc5226c97b96ea947e4d8a008578d023e55568b862->leave($__internal_20149dfe53d340b47b2844bc5226c97b96ea947e4d8a008578d023e55568b862_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_919fd2d0bbda76d81d9fe06fce9f813cbfbca56c4878fef6d6ad1e3c1cf48da4 = $this->env->getExtension("native_profiler");
        $__internal_919fd2d0bbda76d81d9fe06fce9f813cbfbca56c4878fef6d6ad1e3c1cf48da4->enter($__internal_919fd2d0bbda76d81d9fe06fce9f813cbfbca56c4878fef6d6ad1e3c1cf48da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_919fd2d0bbda76d81d9fe06fce9f813cbfbca56c4878fef6d6ad1e3c1cf48da4->leave($__internal_919fd2d0bbda76d81d9fe06fce9f813cbfbca56c4878fef6d6ad1e3c1cf48da4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62ecd561d627f4767ab94ffe9311f79e76c82bd55c00163f4b750fb25ebbaeb4 = $this->env->getExtension("native_profiler");
        $__internal_62ecd561d627f4767ab94ffe9311f79e76c82bd55c00163f4b750fb25ebbaeb4->enter($__internal_62ecd561d627f4767ab94ffe9311f79e76c82bd55c00163f4b750fb25ebbaeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_62ecd561d627f4767ab94ffe9311f79e76c82bd55c00163f4b750fb25ebbaeb4->leave($__internal_62ecd561d627f4767ab94ffe9311f79e76c82bd55c00163f4b750fb25ebbaeb4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_961f4a78112e29e56d7a35e82bad0c0653f69b25b1ffb43abd332fcc506d408d = $this->env->getExtension("native_profiler");
        $__internal_961f4a78112e29e56d7a35e82bad0c0653f69b25b1ffb43abd332fcc506d408d->enter($__internal_961f4a78112e29e56d7a35e82bad0c0653f69b25b1ffb43abd332fcc506d408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_961f4a78112e29e56d7a35e82bad0c0653f69b25b1ffb43abd332fcc506d408d->leave($__internal_961f4a78112e29e56d7a35e82bad0c0653f69b25b1ffb43abd332fcc506d408d_prof);

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
