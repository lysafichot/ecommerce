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
        $__internal_db10aa35e6a732f77c7c4d7595bf9e440b1926e9dc6ba052b9b0ae4f6b92efe7 = $this->env->getExtension("native_profiler");
        $__internal_db10aa35e6a732f77c7c4d7595bf9e440b1926e9dc6ba052b9b0ae4f6b92efe7->enter($__internal_db10aa35e6a732f77c7c4d7595bf9e440b1926e9dc6ba052b9b0ae4f6b92efe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db10aa35e6a732f77c7c4d7595bf9e440b1926e9dc6ba052b9b0ae4f6b92efe7->leave($__internal_db10aa35e6a732f77c7c4d7595bf9e440b1926e9dc6ba052b9b0ae4f6b92efe7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_654eec7e472c8430cea44e3105df4eafdab5ababa4636967764fc5bd53afbfd0 = $this->env->getExtension("native_profiler");
        $__internal_654eec7e472c8430cea44e3105df4eafdab5ababa4636967764fc5bd53afbfd0->enter($__internal_654eec7e472c8430cea44e3105df4eafdab5ababa4636967764fc5bd53afbfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_654eec7e472c8430cea44e3105df4eafdab5ababa4636967764fc5bd53afbfd0->leave($__internal_654eec7e472c8430cea44e3105df4eafdab5ababa4636967764fc5bd53afbfd0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6636a708b719f365fc0deab025d793144df0231822f98930c11c71405492552f = $this->env->getExtension("native_profiler");
        $__internal_6636a708b719f365fc0deab025d793144df0231822f98930c11c71405492552f->enter($__internal_6636a708b719f365fc0deab025d793144df0231822f98930c11c71405492552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6636a708b719f365fc0deab025d793144df0231822f98930c11c71405492552f->leave($__internal_6636a708b719f365fc0deab025d793144df0231822f98930c11c71405492552f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6668146673aa0c10baaf40b4a0187cad53efd63d9cc526306f3412e05a9a6e00 = $this->env->getExtension("native_profiler");
        $__internal_6668146673aa0c10baaf40b4a0187cad53efd63d9cc526306f3412e05a9a6e00->enter($__internal_6668146673aa0c10baaf40b4a0187cad53efd63d9cc526306f3412e05a9a6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6668146673aa0c10baaf40b4a0187cad53efd63d9cc526306f3412e05a9a6e00->leave($__internal_6668146673aa0c10baaf40b4a0187cad53efd63d9cc526306f3412e05a9a6e00_prof);

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
