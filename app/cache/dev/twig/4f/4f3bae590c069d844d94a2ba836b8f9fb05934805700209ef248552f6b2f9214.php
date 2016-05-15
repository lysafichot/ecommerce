<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_904705e2643a989c2519ce34ef5c2a2c788354185966f8b491995e580a153d47 extends Twig_Template
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
        $__internal_0a5fc939a5f9db301f1ed4053336dee0777193d5efb8b395df35ae9a010701e6 = $this->env->getExtension("native_profiler");
        $__internal_0a5fc939a5f9db301f1ed4053336dee0777193d5efb8b395df35ae9a010701e6->enter($__internal_0a5fc939a5f9db301f1ed4053336dee0777193d5efb8b395df35ae9a010701e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5fc939a5f9db301f1ed4053336dee0777193d5efb8b395df35ae9a010701e6->leave($__internal_0a5fc939a5f9db301f1ed4053336dee0777193d5efb8b395df35ae9a010701e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2a1ac56bb9c1ab176873b0c0fced8a5b7e69ae3d654e0eb12764a0e8d4ccfda = $this->env->getExtension("native_profiler");
        $__internal_a2a1ac56bb9c1ab176873b0c0fced8a5b7e69ae3d654e0eb12764a0e8d4ccfda->enter($__internal_a2a1ac56bb9c1ab176873b0c0fced8a5b7e69ae3d654e0eb12764a0e8d4ccfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2a1ac56bb9c1ab176873b0c0fced8a5b7e69ae3d654e0eb12764a0e8d4ccfda->leave($__internal_a2a1ac56bb9c1ab176873b0c0fced8a5b7e69ae3d654e0eb12764a0e8d4ccfda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1fbc79abb902cc6cedced67f3595f8ec2b1d0d0ff4770e7464202834df7dc97 = $this->env->getExtension("native_profiler");
        $__internal_c1fbc79abb902cc6cedced67f3595f8ec2b1d0d0ff4770e7464202834df7dc97->enter($__internal_c1fbc79abb902cc6cedced67f3595f8ec2b1d0d0ff4770e7464202834df7dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1fbc79abb902cc6cedced67f3595f8ec2b1d0d0ff4770e7464202834df7dc97->leave($__internal_c1fbc79abb902cc6cedced67f3595f8ec2b1d0d0ff4770e7464202834df7dc97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc289cc3bb13dddc0dcf7a2b7096f3e69a64bfe21c6f82851a18b033d477e4b3 = $this->env->getExtension("native_profiler");
        $__internal_fc289cc3bb13dddc0dcf7a2b7096f3e69a64bfe21c6f82851a18b033d477e4b3->enter($__internal_fc289cc3bb13dddc0dcf7a2b7096f3e69a64bfe21c6f82851a18b033d477e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc289cc3bb13dddc0dcf7a2b7096f3e69a64bfe21c6f82851a18b033d477e4b3->leave($__internal_fc289cc3bb13dddc0dcf7a2b7096f3e69a64bfe21c6f82851a18b033d477e4b3_prof);

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
