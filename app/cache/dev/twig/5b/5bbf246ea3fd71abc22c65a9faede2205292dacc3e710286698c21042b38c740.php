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
        $__internal_1bf54e0b61d7012a7478cad7a548dfda8d8f5461642510bfba6c7d7022a2fe6e = $this->env->getExtension("native_profiler");
        $__internal_1bf54e0b61d7012a7478cad7a548dfda8d8f5461642510bfba6c7d7022a2fe6e->enter($__internal_1bf54e0b61d7012a7478cad7a548dfda8d8f5461642510bfba6c7d7022a2fe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf54e0b61d7012a7478cad7a548dfda8d8f5461642510bfba6c7d7022a2fe6e->leave($__internal_1bf54e0b61d7012a7478cad7a548dfda8d8f5461642510bfba6c7d7022a2fe6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b618e30bef8d914c49581661b3cdb4e0b986edbd883e356b8eb3c12b73e6bef8 = $this->env->getExtension("native_profiler");
        $__internal_b618e30bef8d914c49581661b3cdb4e0b986edbd883e356b8eb3c12b73e6bef8->enter($__internal_b618e30bef8d914c49581661b3cdb4e0b986edbd883e356b8eb3c12b73e6bef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b618e30bef8d914c49581661b3cdb4e0b986edbd883e356b8eb3c12b73e6bef8->leave($__internal_b618e30bef8d914c49581661b3cdb4e0b986edbd883e356b8eb3c12b73e6bef8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c3f8b3da2148b83a801cfe0f880e2f0da11c15f0bd1473b8c6ec8ab7f3cd99d = $this->env->getExtension("native_profiler");
        $__internal_9c3f8b3da2148b83a801cfe0f880e2f0da11c15f0bd1473b8c6ec8ab7f3cd99d->enter($__internal_9c3f8b3da2148b83a801cfe0f880e2f0da11c15f0bd1473b8c6ec8ab7f3cd99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c3f8b3da2148b83a801cfe0f880e2f0da11c15f0bd1473b8c6ec8ab7f3cd99d->leave($__internal_9c3f8b3da2148b83a801cfe0f880e2f0da11c15f0bd1473b8c6ec8ab7f3cd99d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fbcd8648b31341415cfeec661fff23b57960fb8ee7b550a7e8ecfbc240715533 = $this->env->getExtension("native_profiler");
        $__internal_fbcd8648b31341415cfeec661fff23b57960fb8ee7b550a7e8ecfbc240715533->enter($__internal_fbcd8648b31341415cfeec661fff23b57960fb8ee7b550a7e8ecfbc240715533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fbcd8648b31341415cfeec661fff23b57960fb8ee7b550a7e8ecfbc240715533->leave($__internal_fbcd8648b31341415cfeec661fff23b57960fb8ee7b550a7e8ecfbc240715533_prof);

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
