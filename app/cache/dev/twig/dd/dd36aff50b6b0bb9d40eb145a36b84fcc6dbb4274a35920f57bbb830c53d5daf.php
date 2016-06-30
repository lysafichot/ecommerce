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
        $__internal_99dcb0e18d6aa2e26dc9a14b4f2663dc929d4ea58b95d5f7bb38c2a39460ce46 = $this->env->getExtension("native_profiler");
        $__internal_99dcb0e18d6aa2e26dc9a14b4f2663dc929d4ea58b95d5f7bb38c2a39460ce46->enter($__internal_99dcb0e18d6aa2e26dc9a14b4f2663dc929d4ea58b95d5f7bb38c2a39460ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99dcb0e18d6aa2e26dc9a14b4f2663dc929d4ea58b95d5f7bb38c2a39460ce46->leave($__internal_99dcb0e18d6aa2e26dc9a14b4f2663dc929d4ea58b95d5f7bb38c2a39460ce46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c94d348fe7358a06b8d44c25f197f1ca992a042a1b144616e7e56d820fd9e02c = $this->env->getExtension("native_profiler");
        $__internal_c94d348fe7358a06b8d44c25f197f1ca992a042a1b144616e7e56d820fd9e02c->enter($__internal_c94d348fe7358a06b8d44c25f197f1ca992a042a1b144616e7e56d820fd9e02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c94d348fe7358a06b8d44c25f197f1ca992a042a1b144616e7e56d820fd9e02c->leave($__internal_c94d348fe7358a06b8d44c25f197f1ca992a042a1b144616e7e56d820fd9e02c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fedbcbe4da66032e02f005e44919bd710b5072f49150627a2108309ed567d2ff = $this->env->getExtension("native_profiler");
        $__internal_fedbcbe4da66032e02f005e44919bd710b5072f49150627a2108309ed567d2ff->enter($__internal_fedbcbe4da66032e02f005e44919bd710b5072f49150627a2108309ed567d2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fedbcbe4da66032e02f005e44919bd710b5072f49150627a2108309ed567d2ff->leave($__internal_fedbcbe4da66032e02f005e44919bd710b5072f49150627a2108309ed567d2ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f8885e5217d67c339a4bb536be39349d3263522b470cfc33748c5fd1aa666c0 = $this->env->getExtension("native_profiler");
        $__internal_9f8885e5217d67c339a4bb536be39349d3263522b470cfc33748c5fd1aa666c0->enter($__internal_9f8885e5217d67c339a4bb536be39349d3263522b470cfc33748c5fd1aa666c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f8885e5217d67c339a4bb536be39349d3263522b470cfc33748c5fd1aa666c0->leave($__internal_9f8885e5217d67c339a4bb536be39349d3263522b470cfc33748c5fd1aa666c0_prof);

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
