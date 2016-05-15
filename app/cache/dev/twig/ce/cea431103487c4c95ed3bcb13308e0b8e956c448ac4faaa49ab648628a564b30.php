<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1705cf82a3bcc69b9f243a0062c71a4229427cc003aad9f8a72a2f6924cc8d57 extends Twig_Template
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
        $__internal_577d75cb59f7a4955914dfe82c2aff778460a14fecd62a9947e9f6a6ab2ee1ce = $this->env->getExtension("native_profiler");
        $__internal_577d75cb59f7a4955914dfe82c2aff778460a14fecd62a9947e9f6a6ab2ee1ce->enter($__internal_577d75cb59f7a4955914dfe82c2aff778460a14fecd62a9947e9f6a6ab2ee1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577d75cb59f7a4955914dfe82c2aff778460a14fecd62a9947e9f6a6ab2ee1ce->leave($__internal_577d75cb59f7a4955914dfe82c2aff778460a14fecd62a9947e9f6a6ab2ee1ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d0c8d8fc4de69616c4e0bb2624cc13dd1bfbab0da0804cb51f917bb00f6d512 = $this->env->getExtension("native_profiler");
        $__internal_7d0c8d8fc4de69616c4e0bb2624cc13dd1bfbab0da0804cb51f917bb00f6d512->enter($__internal_7d0c8d8fc4de69616c4e0bb2624cc13dd1bfbab0da0804cb51f917bb00f6d512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d0c8d8fc4de69616c4e0bb2624cc13dd1bfbab0da0804cb51f917bb00f6d512->leave($__internal_7d0c8d8fc4de69616c4e0bb2624cc13dd1bfbab0da0804cb51f917bb00f6d512_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47ae161f72787b9ae5e8e635bf09bf3a51fe605de146db2d2504d78cc4c5e983 = $this->env->getExtension("native_profiler");
        $__internal_47ae161f72787b9ae5e8e635bf09bf3a51fe605de146db2d2504d78cc4c5e983->enter($__internal_47ae161f72787b9ae5e8e635bf09bf3a51fe605de146db2d2504d78cc4c5e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47ae161f72787b9ae5e8e635bf09bf3a51fe605de146db2d2504d78cc4c5e983->leave($__internal_47ae161f72787b9ae5e8e635bf09bf3a51fe605de146db2d2504d78cc4c5e983_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d7dc74d74a98a620ce5b33640809965fa34c838b752bb744a576f5ba4660c8e = $this->env->getExtension("native_profiler");
        $__internal_2d7dc74d74a98a620ce5b33640809965fa34c838b752bb744a576f5ba4660c8e->enter($__internal_2d7dc74d74a98a620ce5b33640809965fa34c838b752bb744a576f5ba4660c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d7dc74d74a98a620ce5b33640809965fa34c838b752bb744a576f5ba4660c8e->leave($__internal_2d7dc74d74a98a620ce5b33640809965fa34c838b752bb744a576f5ba4660c8e_prof);

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
