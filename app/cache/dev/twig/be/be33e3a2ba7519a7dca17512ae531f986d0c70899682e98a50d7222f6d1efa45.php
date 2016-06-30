<?php

/* base.html.twig */
class __TwigTemplate_90cfbd6934c84a1b0ac079e1f414d10aa48fbfb391065afdd0aaa817708b887a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c359ab829ee541c5062f71a398f29f96c9e8663abf7fe40de1e70450b0dfc7ef = $this->env->getExtension("native_profiler");
        $__internal_c359ab829ee541c5062f71a398f29f96c9e8663abf7fe40de1e70450b0dfc7ef->enter($__internal_c359ab829ee541c5062f71a398f29f96c9e8663abf7fe40de1e70450b0dfc7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 34
        echo "

    ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "

    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
</html>";
        
        $__internal_c359ab829ee541c5062f71a398f29f96c9e8663abf7fe40de1e70450b0dfc7ef->leave($__internal_c359ab829ee541c5062f71a398f29f96c9e8663abf7fe40de1e70450b0dfc7ef_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_52a74ba92ba3829c74fb6e04d4dc2241abb7970d7a4d897023cfcd8abdd3a4b7 = $this->env->getExtension("native_profiler");
        $__internal_52a74ba92ba3829c74fb6e04d4dc2241abb7970d7a4d897023cfcd8abdd3a4b7->enter($__internal_52a74ba92ba3829c74fb6e04d4dc2241abb7970d7a4d897023cfcd8abdd3a4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_52a74ba92ba3829c74fb6e04d4dc2241abb7970d7a4d897023cfcd8abdd3a4b7->leave($__internal_52a74ba92ba3829c74fb6e04d4dc2241abb7970d7a4d897023cfcd8abdd3a4b7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9cb11c4db7136d7df9968f14c629d620da59afa570e278830061ed8e20bff2c = $this->env->getExtension("native_profiler");
        $__internal_a9cb11c4db7136d7df9968f14c629d620da59afa570e278830061ed8e20bff2c->enter($__internal_a9cb11c4db7136d7df9968f14c629d620da59afa570e278830061ed8e20bff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_a9cb11c4db7136d7df9968f14c629d620da59afa570e278830061ed8e20bff2c->leave($__internal_a9cb11c4db7136d7df9968f14c629d620da59afa570e278830061ed8e20bff2c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef55034f2d530d112a532d7d28d9734df3936b9adeba0cb2b7a2aba12c48e9c9 = $this->env->getExtension("native_profiler");
        $__internal_ef55034f2d530d112a532d7d28d9734df3936b9adeba0cb2b7a2aba12c48e9c9->enter($__internal_ef55034f2d530d112a532d7d28d9734df3936b9adeba0cb2b7a2aba12c48e9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

 ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "


    ";
        // line 26
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 32
        echo "
    ";
        
        $__internal_ef55034f2d530d112a532d7d28d9734df3936b9adeba0cb2b7a2aba12c48e9c9->leave($__internal_ef55034f2d530d112a532d7d28d9734df3936b9adeba0cb2b7a2aba12c48e9c9_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_e90a7330db1828ac172854808e162bdb0fe365c70239fab318994d21f5f90dc2 = $this->env->getExtension("native_profiler");
        $__internal_e90a7330db1828ac172854808e162bdb0fe365c70239fab318994d21f5f90dc2->enter($__internal_e90a7330db1828ac172854808e162bdb0fe365c70239fab318994d21f5f90dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_e90a7330db1828ac172854808e162bdb0fe365c70239fab318994d21f5f90dc2->leave($__internal_e90a7330db1828ac172854808e162bdb0fe365c70239fab318994d21f5f90dc2_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_2ec204705f0a4dcd5acbe2658fe4a12be9d772e88e57b7e9245e7cca9c0e275e = $this->env->getExtension("native_profiler");
        $__internal_2ec204705f0a4dcd5acbe2658fe4a12be9d772e88e57b7e9245e7cca9c0e275e->enter($__internal_2ec204705f0a4dcd5acbe2658fe4a12be9d772e88e57b7e9245e7cca9c0e275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_2ec204705f0a4dcd5acbe2658fe4a12be9d772e88e57b7e9245e7cca9c0e275e->leave($__internal_2ec204705f0a4dcd5acbe2658fe4a12be9d772e88e57b7e9245e7cca9c0e275e_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_23ad612fbca4090641010677b32ea89d82372486b2083f572d18c2de95fc211f = $this->env->getExtension("native_profiler");
        $__internal_23ad612fbca4090641010677b32ea89d82372486b2083f572d18c2de95fc211f->enter($__internal_23ad612fbca4090641010677b32ea89d82372486b2083f572d18c2de95fc211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_23ad612fbca4090641010677b32ea89d82372486b2083f572d18c2de95fc211f->leave($__internal_23ad612fbca4090641010677b32ea89d82372486b2083f572d18c2de95fc211f_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caca7b8452fa96f9cd8ee0bcf58004975b6f0db4b8e200e66aa7a1dc53cb378d = $this->env->getExtension("native_profiler");
        $__internal_caca7b8452fa96f9cd8ee0bcf58004975b6f0db4b8e200e66aa7a1dc53cb378d->enter($__internal_caca7b8452fa96f9cd8ee0bcf58004975b6f0db4b8e200e66aa7a1dc53cb378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<!--     <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script> -->
<!--     <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
-->    ";
        
        $__internal_caca7b8452fa96f9cd8ee0bcf58004975b6f0db4b8e200e66aa7a1dc53cb378d->leave($__internal_caca7b8452fa96f9cd8ee0bcf58004975b6f0db4b8e200e66aa7a1dc53cb378d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 44,  193 => 43,  189 => 42,  185 => 40,  179 => 39,  168 => 36,  158 => 29,  154 => 27,  148 => 26,  137 => 20,  131 => 19,  123 => 32,  121 => 26,  116 => 23,  114 => 19,  110 => 17,  104 => 16,  92 => 8,  82 => 11,  78 => 10,  73 => 8,  69 => 6,  63 => 5,  55 => 46,  53 => 39,  49 => 37,  47 => 36,  43 => 34,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
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
/* */
/* */
/*  {% block header %}*/
/*     {{ include('layout/header.html.twig')}}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
/*     {% block menu_auth %}*/
/* */
/* */
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
/* <!--     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script> -->*/
/* <!--     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/* -->    {% endblock %}*/
/* </body>*/
/* </html>*/
