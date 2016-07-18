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
        $__internal_21a49179659f0ce032cb2eae4c27531bf41338a8a31754f8cd602e4fee785d55 = $this->env->getExtension("native_profiler");
        $__internal_21a49179659f0ce032cb2eae4c27531bf41338a8a31754f8cd602e4fee785d55->enter($__internal_21a49179659f0ce032cb2eae4c27531bf41338a8a31754f8cd602e4fee785d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_21a49179659f0ce032cb2eae4c27531bf41338a8a31754f8cd602e4fee785d55->leave($__internal_21a49179659f0ce032cb2eae4c27531bf41338a8a31754f8cd602e4fee785d55_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b13dd7e4956b6895641fe5fe7012f855d93dfe03564508011f77210c55d1638 = $this->env->getExtension("native_profiler");
        $__internal_4b13dd7e4956b6895641fe5fe7012f855d93dfe03564508011f77210c55d1638->enter($__internal_4b13dd7e4956b6895641fe5fe7012f855d93dfe03564508011f77210c55d1638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b13dd7e4956b6895641fe5fe7012f855d93dfe03564508011f77210c55d1638->leave($__internal_4b13dd7e4956b6895641fe5fe7012f855d93dfe03564508011f77210c55d1638_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4252377e10be92904efa4a63452d941245565bbd6ae5be1c70597f5c984596d1 = $this->env->getExtension("native_profiler");
        $__internal_4252377e10be92904efa4a63452d941245565bbd6ae5be1c70597f5c984596d1->enter($__internal_4252377e10be92904efa4a63452d941245565bbd6ae5be1c70597f5c984596d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_4252377e10be92904efa4a63452d941245565bbd6ae5be1c70597f5c984596d1->leave($__internal_4252377e10be92904efa4a63452d941245565bbd6ae5be1c70597f5c984596d1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_250b37f737012f04f46c3651e06e36d374028748656ffa79bbe659057b36228e = $this->env->getExtension("native_profiler");
        $__internal_250b37f737012f04f46c3651e06e36d374028748656ffa79bbe659057b36228e->enter($__internal_250b37f737012f04f46c3651e06e36d374028748656ffa79bbe659057b36228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_250b37f737012f04f46c3651e06e36d374028748656ffa79bbe659057b36228e->leave($__internal_250b37f737012f04f46c3651e06e36d374028748656ffa79bbe659057b36228e_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_86c0877207212fd2ecb9295f6f1aa7cb3daf909c6bc868a6cf85ef49697603ef = $this->env->getExtension("native_profiler");
        $__internal_86c0877207212fd2ecb9295f6f1aa7cb3daf909c6bc868a6cf85ef49697603ef->enter($__internal_86c0877207212fd2ecb9295f6f1aa7cb3daf909c6bc868a6cf85ef49697603ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_86c0877207212fd2ecb9295f6f1aa7cb3daf909c6bc868a6cf85ef49697603ef->leave($__internal_86c0877207212fd2ecb9295f6f1aa7cb3daf909c6bc868a6cf85ef49697603ef_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_e53c548aa2d90af40b7d33f35a487852f3900f3c8fab2994f25e34feb6c80930 = $this->env->getExtension("native_profiler");
        $__internal_e53c548aa2d90af40b7d33f35a487852f3900f3c8fab2994f25e34feb6c80930->enter($__internal_e53c548aa2d90af40b7d33f35a487852f3900f3c8fab2994f25e34feb6c80930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_e53c548aa2d90af40b7d33f35a487852f3900f3c8fab2994f25e34feb6c80930->leave($__internal_e53c548aa2d90af40b7d33f35a487852f3900f3c8fab2994f25e34feb6c80930_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_da87d21ace47641b29cc23a8c1335dfd255305ee40b1ea895f000227fa0391cb = $this->env->getExtension("native_profiler");
        $__internal_da87d21ace47641b29cc23a8c1335dfd255305ee40b1ea895f000227fa0391cb->enter($__internal_da87d21ace47641b29cc23a8c1335dfd255305ee40b1ea895f000227fa0391cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_da87d21ace47641b29cc23a8c1335dfd255305ee40b1ea895f000227fa0391cb->leave($__internal_da87d21ace47641b29cc23a8c1335dfd255305ee40b1ea895f000227fa0391cb_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fca9bdb8b6c598dbdc5284c7d9bbc9b5569e17044ada198d75deeb5c25b47056 = $this->env->getExtension("native_profiler");
        $__internal_fca9bdb8b6c598dbdc5284c7d9bbc9b5569e17044ada198d75deeb5c25b47056->enter($__internal_fca9bdb8b6c598dbdc5284c7d9bbc9b5569e17044ada198d75deeb5c25b47056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fca9bdb8b6c598dbdc5284c7d9bbc9b5569e17044ada198d75deeb5c25b47056->leave($__internal_fca9bdb8b6c598dbdc5284c7d9bbc9b5569e17044ada198d75deeb5c25b47056_prof);

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
