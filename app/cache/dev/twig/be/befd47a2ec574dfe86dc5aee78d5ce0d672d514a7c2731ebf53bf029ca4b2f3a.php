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
        $__internal_f1951587a820ed213c65d50f98997ee77d6e145f31f13c34796c39ed107950d3 = $this->env->getExtension("native_profiler");
        $__internal_f1951587a820ed213c65d50f98997ee77d6e145f31f13c34796c39ed107950d3->enter($__internal_f1951587a820ed213c65d50f98997ee77d6e145f31f13c34796c39ed107950d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 25
        echo "

    ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
</html>";
        
        $__internal_f1951587a820ed213c65d50f98997ee77d6e145f31f13c34796c39ed107950d3->leave($__internal_f1951587a820ed213c65d50f98997ee77d6e145f31f13c34796c39ed107950d3_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_68334a18e6acf1765d72775d095a3953a3ebaf8d7930b101ea4b2993c243ef97 = $this->env->getExtension("native_profiler");
        $__internal_68334a18e6acf1765d72775d095a3953a3ebaf8d7930b101ea4b2993c243ef97->enter($__internal_68334a18e6acf1765d72775d095a3953a3ebaf8d7930b101ea4b2993c243ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_68334a18e6acf1765d72775d095a3953a3ebaf8d7930b101ea4b2993c243ef97->leave($__internal_68334a18e6acf1765d72775d095a3953a3ebaf8d7930b101ea4b2993c243ef97_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8f135847430fc5769a57bd35d4d7972cb46a648fd66076b76bf6b73cc21f125 = $this->env->getExtension("native_profiler");
        $__internal_f8f135847430fc5769a57bd35d4d7972cb46a648fd66076b76bf6b73cc21f125->enter($__internal_f8f135847430fc5769a57bd35d4d7972cb46a648fd66076b76bf6b73cc21f125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_f8f135847430fc5769a57bd35d4d7972cb46a648fd66076b76bf6b73cc21f125->leave($__internal_f8f135847430fc5769a57bd35d4d7972cb46a648fd66076b76bf6b73cc21f125_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55bb884660c40c0a7ecba9ef089f4ef6e47a32c1b053be090a5f3dad13f0072 = $this->env->getExtension("native_profiler");
        $__internal_c55bb884660c40c0a7ecba9ef089f4ef6e47a32c1b053be090a5f3dad13f0072->enter($__internal_c55bb884660c40c0a7ecba9ef089f4ef6e47a32c1b053be090a5f3dad13f0072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 23
        echo "
    ";
        
        $__internal_c55bb884660c40c0a7ecba9ef089f4ef6e47a32c1b053be090a5f3dad13f0072->leave($__internal_c55bb884660c40c0a7ecba9ef089f4ef6e47a32c1b053be090a5f3dad13f0072_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_7b74be22ba8e71a4b43c6aaefc99fd45736dfd6ad4105293a1d43c1c609be05d = $this->env->getExtension("native_profiler");
        $__internal_7b74be22ba8e71a4b43c6aaefc99fd45736dfd6ad4105293a1d43c1c609be05d->enter($__internal_7b74be22ba8e71a4b43c6aaefc99fd45736dfd6ad4105293a1d43c1c609be05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 19
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_7b74be22ba8e71a4b43c6aaefc99fd45736dfd6ad4105293a1d43c1c609be05d->leave($__internal_7b74be22ba8e71a4b43c6aaefc99fd45736dfd6ad4105293a1d43c1c609be05d_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_99a905a17f2d3b18dac9a5a2300406e52cf9b71488a9d80a056aa8d3a4c9c092 = $this->env->getExtension("native_profiler");
        $__internal_99a905a17f2d3b18dac9a5a2300406e52cf9b71488a9d80a056aa8d3a4c9c092->enter($__internal_99a905a17f2d3b18dac9a5a2300406e52cf9b71488a9d80a056aa8d3a4c9c092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_99a905a17f2d3b18dac9a5a2300406e52cf9b71488a9d80a056aa8d3a4c9c092->leave($__internal_99a905a17f2d3b18dac9a5a2300406e52cf9b71488a9d80a056aa8d3a4c9c092_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe321c38e6891cd68298dbcaa701cc4ba0e5230532fc72048e55d4a4d7715625 = $this->env->getExtension("native_profiler");
        $__internal_fe321c38e6891cd68298dbcaa701cc4ba0e5230532fc72048e55d4a4d7715625->enter($__internal_fe321c38e6891cd68298dbcaa701cc4ba0e5230532fc72048e55d4a4d7715625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_fe321c38e6891cd68298dbcaa701cc4ba0e5230532fc72048e55d4a4d7715625->leave($__internal_fe321c38e6891cd68298dbcaa701cc4ba0e5230532fc72048e55d4a4d7715625_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 34,  165 => 33,  161 => 32,  158 => 31,  152 => 30,  141 => 27,  131 => 20,  128 => 19,  122 => 18,  114 => 23,  112 => 18,  109 => 17,  103 => 16,  91 => 8,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  62 => 5,  54 => 36,  52 => 30,  48 => 28,  46 => 27,  42 => 25,  40 => 16,  36 => 14,  34 => 5,  28 => 1,);
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
/*     {% block menu_auth %}*/
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
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
