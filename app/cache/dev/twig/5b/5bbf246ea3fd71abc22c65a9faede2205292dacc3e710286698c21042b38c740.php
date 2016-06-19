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
        $__internal_8e5a7abaa81c5ef93144d331bc525f76a8f96f41353bcc40fdf74d2b10309c4c = $this->env->getExtension("native_profiler");
        $__internal_8e5a7abaa81c5ef93144d331bc525f76a8f96f41353bcc40fdf74d2b10309c4c->enter($__internal_8e5a7abaa81c5ef93144d331bc525f76a8f96f41353bcc40fdf74d2b10309c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5a7abaa81c5ef93144d331bc525f76a8f96f41353bcc40fdf74d2b10309c4c->leave($__internal_8e5a7abaa81c5ef93144d331bc525f76a8f96f41353bcc40fdf74d2b10309c4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3b2427da7b117d984813ca22326447f91263de7a7e0a9d5c1da6f53091c84af = $this->env->getExtension("native_profiler");
        $__internal_c3b2427da7b117d984813ca22326447f91263de7a7e0a9d5c1da6f53091c84af->enter($__internal_c3b2427da7b117d984813ca22326447f91263de7a7e0a9d5c1da6f53091c84af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3b2427da7b117d984813ca22326447f91263de7a7e0a9d5c1da6f53091c84af->leave($__internal_c3b2427da7b117d984813ca22326447f91263de7a7e0a9d5c1da6f53091c84af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d45acda7eecd60af423dd8df124eacede894b57bf0348630ee18058349b1a61 = $this->env->getExtension("native_profiler");
        $__internal_7d45acda7eecd60af423dd8df124eacede894b57bf0348630ee18058349b1a61->enter($__internal_7d45acda7eecd60af423dd8df124eacede894b57bf0348630ee18058349b1a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d45acda7eecd60af423dd8df124eacede894b57bf0348630ee18058349b1a61->leave($__internal_7d45acda7eecd60af423dd8df124eacede894b57bf0348630ee18058349b1a61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9f322c1f693ab75a27cbf40ace1a97e588c531e1295861b5523879e3e240d38 = $this->env->getExtension("native_profiler");
        $__internal_c9f322c1f693ab75a27cbf40ace1a97e588c531e1295861b5523879e3e240d38->enter($__internal_c9f322c1f693ab75a27cbf40ace1a97e588c531e1295861b5523879e3e240d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9f322c1f693ab75a27cbf40ace1a97e588c531e1295861b5523879e3e240d38->leave($__internal_c9f322c1f693ab75a27cbf40ace1a97e588c531e1295861b5523879e3e240d38_prof);

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
