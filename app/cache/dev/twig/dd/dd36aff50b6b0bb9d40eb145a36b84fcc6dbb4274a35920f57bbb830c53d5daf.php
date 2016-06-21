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
        $__internal_f83916a9837312b1d0ec7791003221b20a9bfa7403f29b9a80d24a62ecfbf82c = $this->env->getExtension("native_profiler");
        $__internal_f83916a9837312b1d0ec7791003221b20a9bfa7403f29b9a80d24a62ecfbf82c->enter($__internal_f83916a9837312b1d0ec7791003221b20a9bfa7403f29b9a80d24a62ecfbf82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83916a9837312b1d0ec7791003221b20a9bfa7403f29b9a80d24a62ecfbf82c->leave($__internal_f83916a9837312b1d0ec7791003221b20a9bfa7403f29b9a80d24a62ecfbf82c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_352b130cfb68cffa5fd7fc486c3798366bf1dcf9ec6a5d71475ea130acc2427d = $this->env->getExtension("native_profiler");
        $__internal_352b130cfb68cffa5fd7fc486c3798366bf1dcf9ec6a5d71475ea130acc2427d->enter($__internal_352b130cfb68cffa5fd7fc486c3798366bf1dcf9ec6a5d71475ea130acc2427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_352b130cfb68cffa5fd7fc486c3798366bf1dcf9ec6a5d71475ea130acc2427d->leave($__internal_352b130cfb68cffa5fd7fc486c3798366bf1dcf9ec6a5d71475ea130acc2427d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8ea939b25c3039561eadeecc2e7bc460f4ccc3fb56fe45d6f76c571ea52abe8 = $this->env->getExtension("native_profiler");
        $__internal_e8ea939b25c3039561eadeecc2e7bc460f4ccc3fb56fe45d6f76c571ea52abe8->enter($__internal_e8ea939b25c3039561eadeecc2e7bc460f4ccc3fb56fe45d6f76c571ea52abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8ea939b25c3039561eadeecc2e7bc460f4ccc3fb56fe45d6f76c571ea52abe8->leave($__internal_e8ea939b25c3039561eadeecc2e7bc460f4ccc3fb56fe45d6f76c571ea52abe8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a10a88ca5941df57d8d4b3e009b293bca2298119c437d215823a8d45279cd76 = $this->env->getExtension("native_profiler");
        $__internal_5a10a88ca5941df57d8d4b3e009b293bca2298119c437d215823a8d45279cd76->enter($__internal_5a10a88ca5941df57d8d4b3e009b293bca2298119c437d215823a8d45279cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a10a88ca5941df57d8d4b3e009b293bca2298119c437d215823a8d45279cd76->leave($__internal_5a10a88ca5941df57d8d4b3e009b293bca2298119c437d215823a8d45279cd76_prof);

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
