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
        $__internal_a22d612f9958668a28779e15ebdb6d6f67fc516a657d583cfa1baf56c3aacc49 = $this->env->getExtension("native_profiler");
        $__internal_a22d612f9958668a28779e15ebdb6d6f67fc516a657d583cfa1baf56c3aacc49->enter($__internal_a22d612f9958668a28779e15ebdb6d6f67fc516a657d583cfa1baf56c3aacc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a22d612f9958668a28779e15ebdb6d6f67fc516a657d583cfa1baf56c3aacc49->leave($__internal_a22d612f9958668a28779e15ebdb6d6f67fc516a657d583cfa1baf56c3aacc49_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e565bd051102cf6b0cbed210f700c707b4d40249109401537d4b59359d94da5 = $this->env->getExtension("native_profiler");
        $__internal_5e565bd051102cf6b0cbed210f700c707b4d40249109401537d4b59359d94da5->enter($__internal_5e565bd051102cf6b0cbed210f700c707b4d40249109401537d4b59359d94da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5e565bd051102cf6b0cbed210f700c707b4d40249109401537d4b59359d94da5->leave($__internal_5e565bd051102cf6b0cbed210f700c707b4d40249109401537d4b59359d94da5_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_06ea00da952935bf59b0504463233deadcfd2c0c99e4506123325d3f48bba304 = $this->env->getExtension("native_profiler");
        $__internal_06ea00da952935bf59b0504463233deadcfd2c0c99e4506123325d3f48bba304->enter($__internal_06ea00da952935bf59b0504463233deadcfd2c0c99e4506123325d3f48bba304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_06ea00da952935bf59b0504463233deadcfd2c0c99e4506123325d3f48bba304->leave($__internal_06ea00da952935bf59b0504463233deadcfd2c0c99e4506123325d3f48bba304_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0810ba8b4637dd5c1cbf322962329a33840a88d7cc78d4e1bb6c0433d03b284c = $this->env->getExtension("native_profiler");
        $__internal_0810ba8b4637dd5c1cbf322962329a33840a88d7cc78d4e1bb6c0433d03b284c->enter($__internal_0810ba8b4637dd5c1cbf322962329a33840a88d7cc78d4e1bb6c0433d03b284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0810ba8b4637dd5c1cbf322962329a33840a88d7cc78d4e1bb6c0433d03b284c->leave($__internal_0810ba8b4637dd5c1cbf322962329a33840a88d7cc78d4e1bb6c0433d03b284c_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_3f3bbce4e437e1e674ebe7dd6b0a6080b86ab0aa5559de54f16d8da0ee063a73 = $this->env->getExtension("native_profiler");
        $__internal_3f3bbce4e437e1e674ebe7dd6b0a6080b86ab0aa5559de54f16d8da0ee063a73->enter($__internal_3f3bbce4e437e1e674ebe7dd6b0a6080b86ab0aa5559de54f16d8da0ee063a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_3f3bbce4e437e1e674ebe7dd6b0a6080b86ab0aa5559de54f16d8da0ee063a73->leave($__internal_3f3bbce4e437e1e674ebe7dd6b0a6080b86ab0aa5559de54f16d8da0ee063a73_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_d8e6e4588cb36bb2b770ce20879d2dbd781670f8e3fbcd2f82c669c0ebad3d37 = $this->env->getExtension("native_profiler");
        $__internal_d8e6e4588cb36bb2b770ce20879d2dbd781670f8e3fbcd2f82c669c0ebad3d37->enter($__internal_d8e6e4588cb36bb2b770ce20879d2dbd781670f8e3fbcd2f82c669c0ebad3d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_d8e6e4588cb36bb2b770ce20879d2dbd781670f8e3fbcd2f82c669c0ebad3d37->leave($__internal_d8e6e4588cb36bb2b770ce20879d2dbd781670f8e3fbcd2f82c669c0ebad3d37_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e73fa45935bbf1620c7ccd124eb83cb1fc8fa60a81131cfaa75a76d470077c10 = $this->env->getExtension("native_profiler");
        $__internal_e73fa45935bbf1620c7ccd124eb83cb1fc8fa60a81131cfaa75a76d470077c10->enter($__internal_e73fa45935bbf1620c7ccd124eb83cb1fc8fa60a81131cfaa75a76d470077c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_e73fa45935bbf1620c7ccd124eb83cb1fc8fa60a81131cfaa75a76d470077c10->leave($__internal_e73fa45935bbf1620c7ccd124eb83cb1fc8fa60a81131cfaa75a76d470077c10_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41bdb208364e999df05c8479393a1bf9ac150dbf2f10e98a4ceff5f7adff449e = $this->env->getExtension("native_profiler");
        $__internal_41bdb208364e999df05c8479393a1bf9ac150dbf2f10e98a4ceff5f7adff449e->enter($__internal_41bdb208364e999df05c8479393a1bf9ac150dbf2f10e98a4ceff5f7adff449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_41bdb208364e999df05c8479393a1bf9ac150dbf2f10e98a4ceff5f7adff449e->leave($__internal_41bdb208364e999df05c8479393a1bf9ac150dbf2f10e98a4ceff5f7adff449e_prof);

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
