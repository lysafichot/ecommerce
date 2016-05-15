<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3c096f0741110c6158038c4e25f8263ff17ba830ef608353649c7e380a05595b extends Twig_Template
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
        $__internal_09adc5606d6b48b014b3f0ffc14944360e03291472ec2eb857d530ab4cbac655 = $this->env->getExtension("native_profiler");
        $__internal_09adc5606d6b48b014b3f0ffc14944360e03291472ec2eb857d530ab4cbac655->enter($__internal_09adc5606d6b48b014b3f0ffc14944360e03291472ec2eb857d530ab4cbac655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09adc5606d6b48b014b3f0ffc14944360e03291472ec2eb857d530ab4cbac655->leave($__internal_09adc5606d6b48b014b3f0ffc14944360e03291472ec2eb857d530ab4cbac655_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5842d1e77b83cd697dc3a06d050a99a85d26dbe960dc738c038f6ee8d34b4885 = $this->env->getExtension("native_profiler");
        $__internal_5842d1e77b83cd697dc3a06d050a99a85d26dbe960dc738c038f6ee8d34b4885->enter($__internal_5842d1e77b83cd697dc3a06d050a99a85d26dbe960dc738c038f6ee8d34b4885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5842d1e77b83cd697dc3a06d050a99a85d26dbe960dc738c038f6ee8d34b4885->leave($__internal_5842d1e77b83cd697dc3a06d050a99a85d26dbe960dc738c038f6ee8d34b4885_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ba852176f304d9c6b1c3d930fc340c777fcb32799df609cfe182da0ecbc2bb7 = $this->env->getExtension("native_profiler");
        $__internal_9ba852176f304d9c6b1c3d930fc340c777fcb32799df609cfe182da0ecbc2bb7->enter($__internal_9ba852176f304d9c6b1c3d930fc340c777fcb32799df609cfe182da0ecbc2bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9ba852176f304d9c6b1c3d930fc340c777fcb32799df609cfe182da0ecbc2bb7->leave($__internal_9ba852176f304d9c6b1c3d930fc340c777fcb32799df609cfe182da0ecbc2bb7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fa8c1fd9089354c63270d0bb188d2387e12a0b0a92875b5174d9c3934b85c5e = $this->env->getExtension("native_profiler");
        $__internal_7fa8c1fd9089354c63270d0bb188d2387e12a0b0a92875b5174d9c3934b85c5e->enter($__internal_7fa8c1fd9089354c63270d0bb188d2387e12a0b0a92875b5174d9c3934b85c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7fa8c1fd9089354c63270d0bb188d2387e12a0b0a92875b5174d9c3934b85c5e->leave($__internal_7fa8c1fd9089354c63270d0bb188d2387e12a0b0a92875b5174d9c3934b85c5e_prof);

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
