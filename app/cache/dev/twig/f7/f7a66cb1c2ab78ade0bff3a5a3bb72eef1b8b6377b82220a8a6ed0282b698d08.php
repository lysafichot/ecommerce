<?php

/* ::base.html.twig */
class __TwigTemplate_92447360a6023d54d16dbdb576debd6176770097e8decb1add2e560ae5f44a34 extends Twig_Template
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
        $__internal_9bded4cdf1be60ed0390ea22551f4fa171c6b02317efd9400adccfe0828ce2f9 = $this->env->getExtension("native_profiler");
        $__internal_9bded4cdf1be60ed0390ea22551f4fa171c6b02317efd9400adccfe0828ce2f9->enter($__internal_9bded4cdf1be60ed0390ea22551f4fa171c6b02317efd9400adccfe0828ce2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9bded4cdf1be60ed0390ea22551f4fa171c6b02317efd9400adccfe0828ce2f9->leave($__internal_9bded4cdf1be60ed0390ea22551f4fa171c6b02317efd9400adccfe0828ce2f9_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_a856b5b59485cf9f092502e44fdb933df7633d268ad53745a6c6f8de83ac792b = $this->env->getExtension("native_profiler");
        $__internal_a856b5b59485cf9f092502e44fdb933df7633d268ad53745a6c6f8de83ac792b->enter($__internal_a856b5b59485cf9f092502e44fdb933df7633d268ad53745a6c6f8de83ac792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a856b5b59485cf9f092502e44fdb933df7633d268ad53745a6c6f8de83ac792b->leave($__internal_a856b5b59485cf9f092502e44fdb933df7633d268ad53745a6c6f8de83ac792b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe835bf1f9397a3ddc101df201ea2a4cad9c7b1262c0a26954403da43143b4f7 = $this->env->getExtension("native_profiler");
        $__internal_fe835bf1f9397a3ddc101df201ea2a4cad9c7b1262c0a26954403da43143b4f7->enter($__internal_fe835bf1f9397a3ddc101df201ea2a4cad9c7b1262c0a26954403da43143b4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_fe835bf1f9397a3ddc101df201ea2a4cad9c7b1262c0a26954403da43143b4f7->leave($__internal_fe835bf1f9397a3ddc101df201ea2a4cad9c7b1262c0a26954403da43143b4f7_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f946349648db5713daf6ce0a6223ae34209d2919554214b460cbc31540fc286c = $this->env->getExtension("native_profiler");
        $__internal_f946349648db5713daf6ce0a6223ae34209d2919554214b460cbc31540fc286c->enter($__internal_f946349648db5713daf6ce0a6223ae34209d2919554214b460cbc31540fc286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f946349648db5713daf6ce0a6223ae34209d2919554214b460cbc31540fc286c->leave($__internal_f946349648db5713daf6ce0a6223ae34209d2919554214b460cbc31540fc286c_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_3398875ace3a7330ed563c6a5738cb9b704f6ef63aa41b2358af3e5b5d6e1a07 = $this->env->getExtension("native_profiler");
        $__internal_3398875ace3a7330ed563c6a5738cb9b704f6ef63aa41b2358af3e5b5d6e1a07->enter($__internal_3398875ace3a7330ed563c6a5738cb9b704f6ef63aa41b2358af3e5b5d6e1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_3398875ace3a7330ed563c6a5738cb9b704f6ef63aa41b2358af3e5b5d6e1a07->leave($__internal_3398875ace3a7330ed563c6a5738cb9b704f6ef63aa41b2358af3e5b5d6e1a07_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_3288f06eb6ebb1be11b0e1d4fc361d74a2c8af78953b467ff8a733ce2f4b8cc0 = $this->env->getExtension("native_profiler");
        $__internal_3288f06eb6ebb1be11b0e1d4fc361d74a2c8af78953b467ff8a733ce2f4b8cc0->enter($__internal_3288f06eb6ebb1be11b0e1d4fc361d74a2c8af78953b467ff8a733ce2f4b8cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_3288f06eb6ebb1be11b0e1d4fc361d74a2c8af78953b467ff8a733ce2f4b8cc0->leave($__internal_3288f06eb6ebb1be11b0e1d4fc361d74a2c8af78953b467ff8a733ce2f4b8cc0_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b0f9d1d523ca8a6bfa849ca9cccb6c845ffa1c50a810e735ae5bfd8cfcf4ea95 = $this->env->getExtension("native_profiler");
        $__internal_b0f9d1d523ca8a6bfa849ca9cccb6c845ffa1c50a810e735ae5bfd8cfcf4ea95->enter($__internal_b0f9d1d523ca8a6bfa849ca9cccb6c845ffa1c50a810e735ae5bfd8cfcf4ea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b0f9d1d523ca8a6bfa849ca9cccb6c845ffa1c50a810e735ae5bfd8cfcf4ea95->leave($__internal_b0f9d1d523ca8a6bfa849ca9cccb6c845ffa1c50a810e735ae5bfd8cfcf4ea95_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65786d9706324e6aa596cc699f04ff214b81a7ca89ee095d1609c60b2de1cec3 = $this->env->getExtension("native_profiler");
        $__internal_65786d9706324e6aa596cc699f04ff214b81a7ca89ee095d1609c60b2de1cec3->enter($__internal_65786d9706324e6aa596cc699f04ff214b81a7ca89ee095d1609c60b2de1cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_65786d9706324e6aa596cc699f04ff214b81a7ca89ee095d1609c60b2de1cec3->leave($__internal_65786d9706324e6aa596cc699f04ff214b81a7ca89ee095d1609c60b2de1cec3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
