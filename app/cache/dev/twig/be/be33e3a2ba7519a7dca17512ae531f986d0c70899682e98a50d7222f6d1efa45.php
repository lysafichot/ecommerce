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
        $__internal_a009a204987374dce644b5a29262903a06816cacdf5251e58e874b56c9c59a18 = $this->env->getExtension("native_profiler");
        $__internal_a009a204987374dce644b5a29262903a06816cacdf5251e58e874b56c9c59a18->enter($__internal_a009a204987374dce644b5a29262903a06816cacdf5251e58e874b56c9c59a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a009a204987374dce644b5a29262903a06816cacdf5251e58e874b56c9c59a18->leave($__internal_a009a204987374dce644b5a29262903a06816cacdf5251e58e874b56c9c59a18_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_63524061cf987b73ee6fefab897ad310f16cbacfb37f869a7a50fd5a38427977 = $this->env->getExtension("native_profiler");
        $__internal_63524061cf987b73ee6fefab897ad310f16cbacfb37f869a7a50fd5a38427977->enter($__internal_63524061cf987b73ee6fefab897ad310f16cbacfb37f869a7a50fd5a38427977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_63524061cf987b73ee6fefab897ad310f16cbacfb37f869a7a50fd5a38427977->leave($__internal_63524061cf987b73ee6fefab897ad310f16cbacfb37f869a7a50fd5a38427977_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef0cc4536743fa59590f332918f8b8ab2a888c19bd0258d28459d9b2b757ea5a = $this->env->getExtension("native_profiler");
        $__internal_ef0cc4536743fa59590f332918f8b8ab2a888c19bd0258d28459d9b2b757ea5a->enter($__internal_ef0cc4536743fa59590f332918f8b8ab2a888c19bd0258d28459d9b2b757ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_ef0cc4536743fa59590f332918f8b8ab2a888c19bd0258d28459d9b2b757ea5a->leave($__internal_ef0cc4536743fa59590f332918f8b8ab2a888c19bd0258d28459d9b2b757ea5a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbd8c049007c548d2086476c4c9b7ed1af1973797b608551c0374117706723c = $this->env->getExtension("native_profiler");
        $__internal_0bbd8c049007c548d2086476c4c9b7ed1af1973797b608551c0374117706723c->enter($__internal_0bbd8c049007c548d2086476c4c9b7ed1af1973797b608551c0374117706723c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0bbd8c049007c548d2086476c4c9b7ed1af1973797b608551c0374117706723c->leave($__internal_0bbd8c049007c548d2086476c4c9b7ed1af1973797b608551c0374117706723c_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_0cfd94a86849b2a5308a6aef093654e9f315b1fdca605eed697438c8915de8ac = $this->env->getExtension("native_profiler");
        $__internal_0cfd94a86849b2a5308a6aef093654e9f315b1fdca605eed697438c8915de8ac->enter($__internal_0cfd94a86849b2a5308a6aef093654e9f315b1fdca605eed697438c8915de8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_0cfd94a86849b2a5308a6aef093654e9f315b1fdca605eed697438c8915de8ac->leave($__internal_0cfd94a86849b2a5308a6aef093654e9f315b1fdca605eed697438c8915de8ac_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_1060520792e8e9ae8f6427157801e8889e883a526db9549909e7ff56f62cb653 = $this->env->getExtension("native_profiler");
        $__internal_1060520792e8e9ae8f6427157801e8889e883a526db9549909e7ff56f62cb653->enter($__internal_1060520792e8e9ae8f6427157801e8889e883a526db9549909e7ff56f62cb653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_1060520792e8e9ae8f6427157801e8889e883a526db9549909e7ff56f62cb653->leave($__internal_1060520792e8e9ae8f6427157801e8889e883a526db9549909e7ff56f62cb653_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_849723d8209cb10928436806930a5ad5085eb5435a8cd51f17848394a8ba757c = $this->env->getExtension("native_profiler");
        $__internal_849723d8209cb10928436806930a5ad5085eb5435a8cd51f17848394a8ba757c->enter($__internal_849723d8209cb10928436806930a5ad5085eb5435a8cd51f17848394a8ba757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_849723d8209cb10928436806930a5ad5085eb5435a8cd51f17848394a8ba757c->leave($__internal_849723d8209cb10928436806930a5ad5085eb5435a8cd51f17848394a8ba757c_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b8787f98777b34ba8bed72707f38594df0a19ec7e73cacd4a829ac90392565f = $this->env->getExtension("native_profiler");
        $__internal_0b8787f98777b34ba8bed72707f38594df0a19ec7e73cacd4a829ac90392565f->enter($__internal_0b8787f98777b34ba8bed72707f38594df0a19ec7e73cacd4a829ac90392565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0b8787f98777b34ba8bed72707f38594df0a19ec7e73cacd4a829ac90392565f->leave($__internal_0b8787f98777b34ba8bed72707f38594df0a19ec7e73cacd4a829ac90392565f_prof);

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
