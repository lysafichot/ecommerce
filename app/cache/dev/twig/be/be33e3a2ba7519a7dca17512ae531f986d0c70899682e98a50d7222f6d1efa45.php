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
        $__internal_aec0a281aaa2a1aa72065e07d56cc14d94dfa63f2390a25b5f3645d1ac73cd47 = $this->env->getExtension("native_profiler");
        $__internal_aec0a281aaa2a1aa72065e07d56cc14d94dfa63f2390a25b5f3645d1ac73cd47->enter($__internal_aec0a281aaa2a1aa72065e07d56cc14d94dfa63f2390a25b5f3645d1ac73cd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_aec0a281aaa2a1aa72065e07d56cc14d94dfa63f2390a25b5f3645d1ac73cd47->leave($__internal_aec0a281aaa2a1aa72065e07d56cc14d94dfa63f2390a25b5f3645d1ac73cd47_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e1fc765d1809337ea3a03f1acd98dd7758b54c382f1bfe009be6bbe720f49e9 = $this->env->getExtension("native_profiler");
        $__internal_2e1fc765d1809337ea3a03f1acd98dd7758b54c382f1bfe009be6bbe720f49e9->enter($__internal_2e1fc765d1809337ea3a03f1acd98dd7758b54c382f1bfe009be6bbe720f49e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2e1fc765d1809337ea3a03f1acd98dd7758b54c382f1bfe009be6bbe720f49e9->leave($__internal_2e1fc765d1809337ea3a03f1acd98dd7758b54c382f1bfe009be6bbe720f49e9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f83358439c13126cb2c78abf33a9d078543fd41fc8ab22b81c04c49ff66be5 = $this->env->getExtension("native_profiler");
        $__internal_27f83358439c13126cb2c78abf33a9d078543fd41fc8ab22b81c04c49ff66be5->enter($__internal_27f83358439c13126cb2c78abf33a9d078543fd41fc8ab22b81c04c49ff66be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_27f83358439c13126cb2c78abf33a9d078543fd41fc8ab22b81c04c49ff66be5->leave($__internal_27f83358439c13126cb2c78abf33a9d078543fd41fc8ab22b81c04c49ff66be5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f820bb1f931b4a01e54381fc6cfc6024b2eec8bf439b82dfb4b2f5c7d0ca2d6 = $this->env->getExtension("native_profiler");
        $__internal_3f820bb1f931b4a01e54381fc6cfc6024b2eec8bf439b82dfb4b2f5c7d0ca2d6->enter($__internal_3f820bb1f931b4a01e54381fc6cfc6024b2eec8bf439b82dfb4b2f5c7d0ca2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f820bb1f931b4a01e54381fc6cfc6024b2eec8bf439b82dfb4b2f5c7d0ca2d6->leave($__internal_3f820bb1f931b4a01e54381fc6cfc6024b2eec8bf439b82dfb4b2f5c7d0ca2d6_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_0220e63d984146e3f4aba6a46fa2f0982ca9d28e6c7fe8a3486de865982d5337 = $this->env->getExtension("native_profiler");
        $__internal_0220e63d984146e3f4aba6a46fa2f0982ca9d28e6c7fe8a3486de865982d5337->enter($__internal_0220e63d984146e3f4aba6a46fa2f0982ca9d28e6c7fe8a3486de865982d5337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_0220e63d984146e3f4aba6a46fa2f0982ca9d28e6c7fe8a3486de865982d5337->leave($__internal_0220e63d984146e3f4aba6a46fa2f0982ca9d28e6c7fe8a3486de865982d5337_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_8de7880fcbf58a3ff4b2b6d90d1d5b8ac6b55098aa1f5070fbeed510b96151dd = $this->env->getExtension("native_profiler");
        $__internal_8de7880fcbf58a3ff4b2b6d90d1d5b8ac6b55098aa1f5070fbeed510b96151dd->enter($__internal_8de7880fcbf58a3ff4b2b6d90d1d5b8ac6b55098aa1f5070fbeed510b96151dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_8de7880fcbf58a3ff4b2b6d90d1d5b8ac6b55098aa1f5070fbeed510b96151dd->leave($__internal_8de7880fcbf58a3ff4b2b6d90d1d5b8ac6b55098aa1f5070fbeed510b96151dd_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d6188f889d573187483e2d84c9748b8b6ca38039c47d68b29cc6b7aadc136fd5 = $this->env->getExtension("native_profiler");
        $__internal_d6188f889d573187483e2d84c9748b8b6ca38039c47d68b29cc6b7aadc136fd5->enter($__internal_d6188f889d573187483e2d84c9748b8b6ca38039c47d68b29cc6b7aadc136fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d6188f889d573187483e2d84c9748b8b6ca38039c47d68b29cc6b7aadc136fd5->leave($__internal_d6188f889d573187483e2d84c9748b8b6ca38039c47d68b29cc6b7aadc136fd5_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b5c42cae74666a0ec8ebdcb69e7c38eb57cb5014405f0f8e1367130a071cde7 = $this->env->getExtension("native_profiler");
        $__internal_4b5c42cae74666a0ec8ebdcb69e7c38eb57cb5014405f0f8e1367130a071cde7->enter($__internal_4b5c42cae74666a0ec8ebdcb69e7c38eb57cb5014405f0f8e1367130a071cde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4b5c42cae74666a0ec8ebdcb69e7c38eb57cb5014405f0f8e1367130a071cde7->leave($__internal_4b5c42cae74666a0ec8ebdcb69e7c38eb57cb5014405f0f8e1367130a071cde7_prof);

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
