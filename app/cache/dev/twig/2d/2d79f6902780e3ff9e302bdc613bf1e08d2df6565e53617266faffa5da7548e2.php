<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_976e52c2c8feb9314c5d903d301838e33306124e4e21c8b3ef8e6dc5131dae26 extends Twig_Template
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
        $__internal_446ffb807a0e019ee4786f98af056f8b22a352249930308894657321fb4cc904 = $this->env->getExtension("native_profiler");
        $__internal_446ffb807a0e019ee4786f98af056f8b22a352249930308894657321fb4cc904->enter($__internal_446ffb807a0e019ee4786f98af056f8b22a352249930308894657321fb4cc904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446ffb807a0e019ee4786f98af056f8b22a352249930308894657321fb4cc904->leave($__internal_446ffb807a0e019ee4786f98af056f8b22a352249930308894657321fb4cc904_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88db49ed4a4f1486abfc28620a9976e533594eb6f658321fa62a8ccff659400d = $this->env->getExtension("native_profiler");
        $__internal_88db49ed4a4f1486abfc28620a9976e533594eb6f658321fa62a8ccff659400d->enter($__internal_88db49ed4a4f1486abfc28620a9976e533594eb6f658321fa62a8ccff659400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88db49ed4a4f1486abfc28620a9976e533594eb6f658321fa62a8ccff659400d->leave($__internal_88db49ed4a4f1486abfc28620a9976e533594eb6f658321fa62a8ccff659400d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c2056e42703ec54dc877cac5e081c7028aa101a6d50f90156be014c4c51b107 = $this->env->getExtension("native_profiler");
        $__internal_4c2056e42703ec54dc877cac5e081c7028aa101a6d50f90156be014c4c51b107->enter($__internal_4c2056e42703ec54dc877cac5e081c7028aa101a6d50f90156be014c4c51b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c2056e42703ec54dc877cac5e081c7028aa101a6d50f90156be014c4c51b107->leave($__internal_4c2056e42703ec54dc877cac5e081c7028aa101a6d50f90156be014c4c51b107_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9e912709b310b250139977020d4fea5b097625d31dd122f7fb3b6c2c14353b3 = $this->env->getExtension("native_profiler");
        $__internal_c9e912709b310b250139977020d4fea5b097625d31dd122f7fb3b6c2c14353b3->enter($__internal_c9e912709b310b250139977020d4fea5b097625d31dd122f7fb3b6c2c14353b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9e912709b310b250139977020d4fea5b097625d31dd122f7fb3b6c2c14353b3->leave($__internal_c9e912709b310b250139977020d4fea5b097625d31dd122f7fb3b6c2c14353b3_prof);

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
