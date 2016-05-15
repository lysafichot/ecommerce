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
        $__internal_a7f20cf635e31ca3301c96b5ad6d29060466665e3d541fa1492288af5ccc6424 = $this->env->getExtension("native_profiler");
        $__internal_a7f20cf635e31ca3301c96b5ad6d29060466665e3d541fa1492288af5ccc6424->enter($__internal_a7f20cf635e31ca3301c96b5ad6d29060466665e3d541fa1492288af5ccc6424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f20cf635e31ca3301c96b5ad6d29060466665e3d541fa1492288af5ccc6424->leave($__internal_a7f20cf635e31ca3301c96b5ad6d29060466665e3d541fa1492288af5ccc6424_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_508ad78d2085ab05d6d9f70cbd50d366e4ca79015f1efa30bb115345ddf3cc4a = $this->env->getExtension("native_profiler");
        $__internal_508ad78d2085ab05d6d9f70cbd50d366e4ca79015f1efa30bb115345ddf3cc4a->enter($__internal_508ad78d2085ab05d6d9f70cbd50d366e4ca79015f1efa30bb115345ddf3cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_508ad78d2085ab05d6d9f70cbd50d366e4ca79015f1efa30bb115345ddf3cc4a->leave($__internal_508ad78d2085ab05d6d9f70cbd50d366e4ca79015f1efa30bb115345ddf3cc4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4efd0fc60c113f98ef32819b84e0fac39324faa72075b6c9cf37e9a4d015d0d = $this->env->getExtension("native_profiler");
        $__internal_c4efd0fc60c113f98ef32819b84e0fac39324faa72075b6c9cf37e9a4d015d0d->enter($__internal_c4efd0fc60c113f98ef32819b84e0fac39324faa72075b6c9cf37e9a4d015d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4efd0fc60c113f98ef32819b84e0fac39324faa72075b6c9cf37e9a4d015d0d->leave($__internal_c4efd0fc60c113f98ef32819b84e0fac39324faa72075b6c9cf37e9a4d015d0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6d5e93a76990ae86889c38b4b1f6e04f95c10ae5a21d60c856d69f64b618002 = $this->env->getExtension("native_profiler");
        $__internal_d6d5e93a76990ae86889c38b4b1f6e04f95c10ae5a21d60c856d69f64b618002->enter($__internal_d6d5e93a76990ae86889c38b4b1f6e04f95c10ae5a21d60c856d69f64b618002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6d5e93a76990ae86889c38b4b1f6e04f95c10ae5a21d60c856d69f64b618002->leave($__internal_d6d5e93a76990ae86889c38b4b1f6e04f95c10ae5a21d60c856d69f64b618002_prof);

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
