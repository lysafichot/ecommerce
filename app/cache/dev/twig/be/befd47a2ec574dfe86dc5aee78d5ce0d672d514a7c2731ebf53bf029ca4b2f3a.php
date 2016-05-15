<?php

/* ::base.html.twig */
class __TwigTemplate_53e6757922583e559f444f84c6895c9d758691c557cec390873663769e588ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e32f9635a877dd576660e93be5c390ce02146afb564fd9f588697fcc6fcf75b = $this->env->getExtension("native_profiler");
        $__internal_3e32f9635a877dd576660e93be5c390ce02146afb564fd9f588697fcc6fcf75b->enter($__internal_3e32f9635a877dd576660e93be5c390ce02146afb564fd9f588697fcc6fcf75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "

    ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
        
        $__internal_3e32f9635a877dd576660e93be5c390ce02146afb564fd9f588697fcc6fcf75b->leave($__internal_3e32f9635a877dd576660e93be5c390ce02146afb564fd9f588697fcc6fcf75b_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7d27dacf404001eaf60f1c6276ef46876bc299c8893ad488cca9426dc8ad66a = $this->env->getExtension("native_profiler");
        $__internal_f7d27dacf404001eaf60f1c6276ef46876bc299c8893ad488cca9426dc8ad66a->enter($__internal_f7d27dacf404001eaf60f1c6276ef46876bc299c8893ad488cca9426dc8ad66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - THT</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_f7d27dacf404001eaf60f1c6276ef46876bc299c8893ad488cca9426dc8ad66a->leave($__internal_f7d27dacf404001eaf60f1c6276ef46876bc299c8893ad488cca9426dc8ad66a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_beb3468aaf86151d1ad3ea0bdecb101cea00fb6e76462c5d5a71f03584821afa = $this->env->getExtension("native_profiler");
        $__internal_beb3468aaf86151d1ad3ea0bdecb101cea00fb6e76462c5d5a71f03584821afa->enter($__internal_beb3468aaf86151d1ad3ea0bdecb101cea00fb6e76462c5d5a71f03584821afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_beb3468aaf86151d1ad3ea0bdecb101cea00fb6e76462c5d5a71f03584821afa->leave($__internal_beb3468aaf86151d1ad3ea0bdecb101cea00fb6e76462c5d5a71f03584821afa_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c014c6d2df23032f65cab29131b466b47f28d57fe205642aa773bcbfa0d9c1 = $this->env->getExtension("native_profiler");
        $__internal_91c014c6d2df23032f65cab29131b466b47f28d57fe205642aa773bcbfa0d9c1->enter($__internal_91c014c6d2df23032f65cab29131b466b47f28d57fe205642aa773bcbfa0d9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 24
        echo "
    ";
        
        $__internal_91c014c6d2df23032f65cab29131b466b47f28d57fe205642aa773bcbfa0d9c1->leave($__internal_91c014c6d2df23032f65cab29131b466b47f28d57fe205642aa773bcbfa0d9c1_prof);

    }

    // line 17
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_370c28da7508ef78b3518abf30c403a70589b6767cc70fdfc60b645b3c837132 = $this->env->getExtension("native_profiler");
        $__internal_370c28da7508ef78b3518abf30c403a70589b6767cc70fdfc60b645b3c837132->enter($__internal_370c28da7508ef78b3518abf30c403a70589b6767cc70fdfc60b645b3c837132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 18
        if ((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session"))) {
            // line 19
            echo "    <h1>Bienvenu ";
            echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "html", null, true);
            echo " </h1>
";
        }
        // line 21
        echo "    ";
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_370c28da7508ef78b3518abf30c403a70589b6767cc70fdfc60b645b3c837132->leave($__internal_370c28da7508ef78b3518abf30c403a70589b6767cc70fdfc60b645b3c837132_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_281147dddfe75bbd73d780843bc1db40e5dfaab56e2cadffbf7de394e00997fc = $this->env->getExtension("native_profiler");
        $__internal_281147dddfe75bbd73d780843bc1db40e5dfaab56e2cadffbf7de394e00997fc->enter($__internal_281147dddfe75bbd73d780843bc1db40e5dfaab56e2cadffbf7de394e00997fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_281147dddfe75bbd73d780843bc1db40e5dfaab56e2cadffbf7de394e00997fc->leave($__internal_281147dddfe75bbd73d780843bc1db40e5dfaab56e2cadffbf7de394e00997fc_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff9c128649967d50e9736f25e10b989c19c638635ad455a55d01039aa1591cf3 = $this->env->getExtension("native_profiler");
        $__internal_ff9c128649967d50e9736f25e10b989c19c638635ad455a55d01039aa1591cf3->enter($__internal_ff9c128649967d50e9736f25e10b989c19c638635ad455a55d01039aa1591cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_ff9c128649967d50e9736f25e10b989c19c638635ad455a55d01039aa1591cf3->leave($__internal_ff9c128649967d50e9736f25e10b989c19c638635ad455a55d01039aa1591cf3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 36,  170 => 35,  166 => 34,  162 => 32,  156 => 31,  145 => 28,  134 => 21,  128 => 19,  126 => 18,  120 => 17,  112 => 24,  109 => 17,  103 => 16,  91 => 8,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  62 => 5,  54 => 38,  52 => 31,  48 => 29,  46 => 28,  42 => 26,  40 => 16,  36 => 14,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*     {% block head %}*/
/* */
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Acceuil - {% endblock %} - THT</title>*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}"/>*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     {% block body %}*/
/*     {% block menu_auth %}*/
/* {% if(session) %}*/
/*     <h1>Bienvenu {{ session }} </h1>*/
/* {% endif %}*/
/*     {{ include('layout/menu.html.twig')}}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/* */
/*     {% block javascripts %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
