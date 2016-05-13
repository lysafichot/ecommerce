<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_075539e0652fea3bffe8e51694db7085d72af59eba6891a6024faa04f6e86a09 extends Twig_Template
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
        $__internal_15ab0d5376671f512e68167234b8fb52839bb39b81e35970b69ad8f396afe554 = $this->env->getExtension("native_profiler");
        $__internal_15ab0d5376671f512e68167234b8fb52839bb39b81e35970b69ad8f396afe554->enter($__internal_15ab0d5376671f512e68167234b8fb52839bb39b81e35970b69ad8f396afe554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ab0d5376671f512e68167234b8fb52839bb39b81e35970b69ad8f396afe554->leave($__internal_15ab0d5376671f512e68167234b8fb52839bb39b81e35970b69ad8f396afe554_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fba53295052248efee21e7973d5f2df637f531ecc41ba1152276dbd7eb41c81 = $this->env->getExtension("native_profiler");
        $__internal_3fba53295052248efee21e7973d5f2df637f531ecc41ba1152276dbd7eb41c81->enter($__internal_3fba53295052248efee21e7973d5f2df637f531ecc41ba1152276dbd7eb41c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fba53295052248efee21e7973d5f2df637f531ecc41ba1152276dbd7eb41c81->leave($__internal_3fba53295052248efee21e7973d5f2df637f531ecc41ba1152276dbd7eb41c81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75d5baf3b87aa24d96422b2f087aab1c4e587558dfd4447148803a1ad21d87cc = $this->env->getExtension("native_profiler");
        $__internal_75d5baf3b87aa24d96422b2f087aab1c4e587558dfd4447148803a1ad21d87cc->enter($__internal_75d5baf3b87aa24d96422b2f087aab1c4e587558dfd4447148803a1ad21d87cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75d5baf3b87aa24d96422b2f087aab1c4e587558dfd4447148803a1ad21d87cc->leave($__internal_75d5baf3b87aa24d96422b2f087aab1c4e587558dfd4447148803a1ad21d87cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f9a13b71efe1a1fa7420ac9a989c01dc603ac681f6369c01f3001cc843c2d7f = $this->env->getExtension("native_profiler");
        $__internal_9f9a13b71efe1a1fa7420ac9a989c01dc603ac681f6369c01f3001cc843c2d7f->enter($__internal_9f9a13b71efe1a1fa7420ac9a989c01dc603ac681f6369c01f3001cc843c2d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f9a13b71efe1a1fa7420ac9a989c01dc603ac681f6369c01f3001cc843c2d7f->leave($__internal_9f9a13b71efe1a1fa7420ac9a989c01dc603ac681f6369c01f3001cc843c2d7f_prof);

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
