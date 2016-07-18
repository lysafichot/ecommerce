<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ffe19e1953e47e3bd1bca29ada87614b542363649d672859ac200436aa5501b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_780addfe8d72e624e2b9f14eca18bcf10653acafdf5e988adae8d69433752fc3 = $this->env->getExtension("native_profiler");
        $__internal_780addfe8d72e624e2b9f14eca18bcf10653acafdf5e988adae8d69433752fc3->enter($__internal_780addfe8d72e624e2b9f14eca18bcf10653acafdf5e988adae8d69433752fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780addfe8d72e624e2b9f14eca18bcf10653acafdf5e988adae8d69433752fc3->leave($__internal_780addfe8d72e624e2b9f14eca18bcf10653acafdf5e988adae8d69433752fc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d413996db05a1eb82bdee3813441a6b7c886a9e280ee7d5aba1b19223d929b68 = $this->env->getExtension("native_profiler");
        $__internal_d413996db05a1eb82bdee3813441a6b7c886a9e280ee7d5aba1b19223d929b68->enter($__internal_d413996db05a1eb82bdee3813441a6b7c886a9e280ee7d5aba1b19223d929b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d413996db05a1eb82bdee3813441a6b7c886a9e280ee7d5aba1b19223d929b68->leave($__internal_d413996db05a1eb82bdee3813441a6b7c886a9e280ee7d5aba1b19223d929b68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11e66c017b729208efd354b618884a0c675a8b7882e047cf3b21b678598c7475 = $this->env->getExtension("native_profiler");
        $__internal_11e66c017b729208efd354b618884a0c675a8b7882e047cf3b21b678598c7475->enter($__internal_11e66c017b729208efd354b618884a0c675a8b7882e047cf3b21b678598c7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11e66c017b729208efd354b618884a0c675a8b7882e047cf3b21b678598c7475->leave($__internal_11e66c017b729208efd354b618884a0c675a8b7882e047cf3b21b678598c7475_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23e151ee472d1d64c20ec2716a72fca0299979b10f10978c1a3550273383e9bb = $this->env->getExtension("native_profiler");
        $__internal_23e151ee472d1d64c20ec2716a72fca0299979b10f10978c1a3550273383e9bb->enter($__internal_23e151ee472d1d64c20ec2716a72fca0299979b10f10978c1a3550273383e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23e151ee472d1d64c20ec2716a72fca0299979b10f10978c1a3550273383e9bb->leave($__internal_23e151ee472d1d64c20ec2716a72fca0299979b10f10978c1a3550273383e9bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
