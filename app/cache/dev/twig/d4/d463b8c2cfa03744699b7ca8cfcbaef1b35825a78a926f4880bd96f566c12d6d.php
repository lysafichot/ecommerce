<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d67618af134a9b995795566b34568eabe8f0fba0dab7d2a28ce862416d1d32f8 extends Twig_Template
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
        $__internal_e9bd6949c75f16c74512f60569c2abf3731855ebea41e3b7f24e80bcaacf6255 = $this->env->getExtension("native_profiler");
        $__internal_e9bd6949c75f16c74512f60569c2abf3731855ebea41e3b7f24e80bcaacf6255->enter($__internal_e9bd6949c75f16c74512f60569c2abf3731855ebea41e3b7f24e80bcaacf6255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bd6949c75f16c74512f60569c2abf3731855ebea41e3b7f24e80bcaacf6255->leave($__internal_e9bd6949c75f16c74512f60569c2abf3731855ebea41e3b7f24e80bcaacf6255_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ec3a572729bd8d0e9d7958d0806cd5ec350f275757a62630f7aa176f7bccead = $this->env->getExtension("native_profiler");
        $__internal_7ec3a572729bd8d0e9d7958d0806cd5ec350f275757a62630f7aa176f7bccead->enter($__internal_7ec3a572729bd8d0e9d7958d0806cd5ec350f275757a62630f7aa176f7bccead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ec3a572729bd8d0e9d7958d0806cd5ec350f275757a62630f7aa176f7bccead->leave($__internal_7ec3a572729bd8d0e9d7958d0806cd5ec350f275757a62630f7aa176f7bccead_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ce5947c412dd578a6b4c5654883b8a5040fd15d3702cb9fc57fcba765754af9 = $this->env->getExtension("native_profiler");
        $__internal_5ce5947c412dd578a6b4c5654883b8a5040fd15d3702cb9fc57fcba765754af9->enter($__internal_5ce5947c412dd578a6b4c5654883b8a5040fd15d3702cb9fc57fcba765754af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ce5947c412dd578a6b4c5654883b8a5040fd15d3702cb9fc57fcba765754af9->leave($__internal_5ce5947c412dd578a6b4c5654883b8a5040fd15d3702cb9fc57fcba765754af9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfc048a9ede81cc32577843df7b5b4a28f526146ad3a16599f27e85ac66a3428 = $this->env->getExtension("native_profiler");
        $__internal_dfc048a9ede81cc32577843df7b5b4a28f526146ad3a16599f27e85ac66a3428->enter($__internal_dfc048a9ede81cc32577843df7b5b4a28f526146ad3a16599f27e85ac66a3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dfc048a9ede81cc32577843df7b5b4a28f526146ad3a16599f27e85ac66a3428->leave($__internal_dfc048a9ede81cc32577843df7b5b4a28f526146ad3a16599f27e85ac66a3428_prof);

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
