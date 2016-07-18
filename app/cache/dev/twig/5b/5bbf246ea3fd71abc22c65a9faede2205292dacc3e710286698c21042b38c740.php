<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e48b4b8b37f582e0befd938fc4e4d8cc2ce8f57762d054dc016dc699f5217058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_95748fe9ad94f6fd53e3bd40159b66084a261eb47bde9a97db9c1901e2bd566c = $this->env->getExtension("native_profiler");
        $__internal_95748fe9ad94f6fd53e3bd40159b66084a261eb47bde9a97db9c1901e2bd566c->enter($__internal_95748fe9ad94f6fd53e3bd40159b66084a261eb47bde9a97db9c1901e2bd566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95748fe9ad94f6fd53e3bd40159b66084a261eb47bde9a97db9c1901e2bd566c->leave($__internal_95748fe9ad94f6fd53e3bd40159b66084a261eb47bde9a97db9c1901e2bd566c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3115088e54aa80c1ba67768b1adcba73665008e26d2e332fdc3f19021a3ef1de = $this->env->getExtension("native_profiler");
        $__internal_3115088e54aa80c1ba67768b1adcba73665008e26d2e332fdc3f19021a3ef1de->enter($__internal_3115088e54aa80c1ba67768b1adcba73665008e26d2e332fdc3f19021a3ef1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3115088e54aa80c1ba67768b1adcba73665008e26d2e332fdc3f19021a3ef1de->leave($__internal_3115088e54aa80c1ba67768b1adcba73665008e26d2e332fdc3f19021a3ef1de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5b9efa12ebfa5b89645928004821c8be34c202c6689a3deabd3371c23621ef8 = $this->env->getExtension("native_profiler");
        $__internal_f5b9efa12ebfa5b89645928004821c8be34c202c6689a3deabd3371c23621ef8->enter($__internal_f5b9efa12ebfa5b89645928004821c8be34c202c6689a3deabd3371c23621ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5b9efa12ebfa5b89645928004821c8be34c202c6689a3deabd3371c23621ef8->leave($__internal_f5b9efa12ebfa5b89645928004821c8be34c202c6689a3deabd3371c23621ef8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7a5fa4d1c4aec94cbc6310f425b3d6c7061066075c55df50cb1b12dae67e811 = $this->env->getExtension("native_profiler");
        $__internal_c7a5fa4d1c4aec94cbc6310f425b3d6c7061066075c55df50cb1b12dae67e811->enter($__internal_c7a5fa4d1c4aec94cbc6310f425b3d6c7061066075c55df50cb1b12dae67e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7a5fa4d1c4aec94cbc6310f425b3d6c7061066075c55df50cb1b12dae67e811->leave($__internal_c7a5fa4d1c4aec94cbc6310f425b3d6c7061066075c55df50cb1b12dae67e811_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
