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
        $__internal_43f877c32281011863054bd90d44cf00b733370d06708bab0321a97515b66479 = $this->env->getExtension("native_profiler");
        $__internal_43f877c32281011863054bd90d44cf00b733370d06708bab0321a97515b66479->enter($__internal_43f877c32281011863054bd90d44cf00b733370d06708bab0321a97515b66479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f877c32281011863054bd90d44cf00b733370d06708bab0321a97515b66479->leave($__internal_43f877c32281011863054bd90d44cf00b733370d06708bab0321a97515b66479_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a05b3595afd992ae80eb68a61ee110f68f6fffaf693442306684d2fdaf5c0891 = $this->env->getExtension("native_profiler");
        $__internal_a05b3595afd992ae80eb68a61ee110f68f6fffaf693442306684d2fdaf5c0891->enter($__internal_a05b3595afd992ae80eb68a61ee110f68f6fffaf693442306684d2fdaf5c0891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a05b3595afd992ae80eb68a61ee110f68f6fffaf693442306684d2fdaf5c0891->leave($__internal_a05b3595afd992ae80eb68a61ee110f68f6fffaf693442306684d2fdaf5c0891_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0583bb58b6385e00ae79798ecbb1f9458f80fe47ca079057a8f414568299738c = $this->env->getExtension("native_profiler");
        $__internal_0583bb58b6385e00ae79798ecbb1f9458f80fe47ca079057a8f414568299738c->enter($__internal_0583bb58b6385e00ae79798ecbb1f9458f80fe47ca079057a8f414568299738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0583bb58b6385e00ae79798ecbb1f9458f80fe47ca079057a8f414568299738c->leave($__internal_0583bb58b6385e00ae79798ecbb1f9458f80fe47ca079057a8f414568299738c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fa55ee11e25b61ff02dd190ef581628d2bb428c06e0becb10fe6172e6e157ad = $this->env->getExtension("native_profiler");
        $__internal_1fa55ee11e25b61ff02dd190ef581628d2bb428c06e0becb10fe6172e6e157ad->enter($__internal_1fa55ee11e25b61ff02dd190ef581628d2bb428c06e0becb10fe6172e6e157ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fa55ee11e25b61ff02dd190ef581628d2bb428c06e0becb10fe6172e6e157ad->leave($__internal_1fa55ee11e25b61ff02dd190ef581628d2bb428c06e0becb10fe6172e6e157ad_prof);

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
