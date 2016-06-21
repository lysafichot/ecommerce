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
        $__internal_a4a218325ff0c4df46262c22061a04d682bf2fa1b3de402b4db16b6a5ca67bad = $this->env->getExtension("native_profiler");
        $__internal_a4a218325ff0c4df46262c22061a04d682bf2fa1b3de402b4db16b6a5ca67bad->enter($__internal_a4a218325ff0c4df46262c22061a04d682bf2fa1b3de402b4db16b6a5ca67bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a218325ff0c4df46262c22061a04d682bf2fa1b3de402b4db16b6a5ca67bad->leave($__internal_a4a218325ff0c4df46262c22061a04d682bf2fa1b3de402b4db16b6a5ca67bad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62a6cddd2e7d12f17bd142044b64235676fa8dff28ef7edb24a3adc5201f62d6 = $this->env->getExtension("native_profiler");
        $__internal_62a6cddd2e7d12f17bd142044b64235676fa8dff28ef7edb24a3adc5201f62d6->enter($__internal_62a6cddd2e7d12f17bd142044b64235676fa8dff28ef7edb24a3adc5201f62d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62a6cddd2e7d12f17bd142044b64235676fa8dff28ef7edb24a3adc5201f62d6->leave($__internal_62a6cddd2e7d12f17bd142044b64235676fa8dff28ef7edb24a3adc5201f62d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4d81acfc0016d29cfd8549507f6a9566820c9648f6d8ef324f287d01aae0fb0 = $this->env->getExtension("native_profiler");
        $__internal_d4d81acfc0016d29cfd8549507f6a9566820c9648f6d8ef324f287d01aae0fb0->enter($__internal_d4d81acfc0016d29cfd8549507f6a9566820c9648f6d8ef324f287d01aae0fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4d81acfc0016d29cfd8549507f6a9566820c9648f6d8ef324f287d01aae0fb0->leave($__internal_d4d81acfc0016d29cfd8549507f6a9566820c9648f6d8ef324f287d01aae0fb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80780ae619cc382f685931c63280fdfcc133ffbe3b0d95bc0cf4d19076de0262 = $this->env->getExtension("native_profiler");
        $__internal_80780ae619cc382f685931c63280fdfcc133ffbe3b0d95bc0cf4d19076de0262->enter($__internal_80780ae619cc382f685931c63280fdfcc133ffbe3b0d95bc0cf4d19076de0262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80780ae619cc382f685931c63280fdfcc133ffbe3b0d95bc0cf4d19076de0262->leave($__internal_80780ae619cc382f685931c63280fdfcc133ffbe3b0d95bc0cf4d19076de0262_prof);

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
