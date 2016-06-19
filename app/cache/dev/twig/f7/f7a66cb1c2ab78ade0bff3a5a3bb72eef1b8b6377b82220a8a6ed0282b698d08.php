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
        $__internal_77d2afa65517f0b040cbd0e415ee811b9bbbd733b4b66a39de656ae07b592cab = $this->env->getExtension("native_profiler");
        $__internal_77d2afa65517f0b040cbd0e415ee811b9bbbd733b4b66a39de656ae07b592cab->enter($__internal_77d2afa65517f0b040cbd0e415ee811b9bbbd733b4b66a39de656ae07b592cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_77d2afa65517f0b040cbd0e415ee811b9bbbd733b4b66a39de656ae07b592cab->leave($__internal_77d2afa65517f0b040cbd0e415ee811b9bbbd733b4b66a39de656ae07b592cab_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_52377a6bfd38724f15afa4c943554ef7d818e6bd15e7012387671219d9c3aaf3 = $this->env->getExtension("native_profiler");
        $__internal_52377a6bfd38724f15afa4c943554ef7d818e6bd15e7012387671219d9c3aaf3->enter($__internal_52377a6bfd38724f15afa4c943554ef7d818e6bd15e7012387671219d9c3aaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_52377a6bfd38724f15afa4c943554ef7d818e6bd15e7012387671219d9c3aaf3->leave($__internal_52377a6bfd38724f15afa4c943554ef7d818e6bd15e7012387671219d9c3aaf3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_30aae20697230da225103a05b328ae6f0ee345636e8e0ab43008acacee7b001d = $this->env->getExtension("native_profiler");
        $__internal_30aae20697230da225103a05b328ae6f0ee345636e8e0ab43008acacee7b001d->enter($__internal_30aae20697230da225103a05b328ae6f0ee345636e8e0ab43008acacee7b001d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_30aae20697230da225103a05b328ae6f0ee345636e8e0ab43008acacee7b001d->leave($__internal_30aae20697230da225103a05b328ae6f0ee345636e8e0ab43008acacee7b001d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e86e0fce06e5fbd2fd5aa410b8527ffde7753d13aa16c6918810a6d90242af = $this->env->getExtension("native_profiler");
        $__internal_64e86e0fce06e5fbd2fd5aa410b8527ffde7753d13aa16c6918810a6d90242af->enter($__internal_64e86e0fce06e5fbd2fd5aa410b8527ffde7753d13aa16c6918810a6d90242af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64e86e0fce06e5fbd2fd5aa410b8527ffde7753d13aa16c6918810a6d90242af->leave($__internal_64e86e0fce06e5fbd2fd5aa410b8527ffde7753d13aa16c6918810a6d90242af_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_eda1a4b759a07909541a7c76f777f8f28a2dbe4511be0f985014cbd74cfe432f = $this->env->getExtension("native_profiler");
        $__internal_eda1a4b759a07909541a7c76f777f8f28a2dbe4511be0f985014cbd74cfe432f->enter($__internal_eda1a4b759a07909541a7c76f777f8f28a2dbe4511be0f985014cbd74cfe432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_eda1a4b759a07909541a7c76f777f8f28a2dbe4511be0f985014cbd74cfe432f->leave($__internal_eda1a4b759a07909541a7c76f777f8f28a2dbe4511be0f985014cbd74cfe432f_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_52c9a186999f6fa6be71d3df308c6fd77ccefa4f312e87116177ca4fb05bac8d = $this->env->getExtension("native_profiler");
        $__internal_52c9a186999f6fa6be71d3df308c6fd77ccefa4f312e87116177ca4fb05bac8d->enter($__internal_52c9a186999f6fa6be71d3df308c6fd77ccefa4f312e87116177ca4fb05bac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_52c9a186999f6fa6be71d3df308c6fd77ccefa4f312e87116177ca4fb05bac8d->leave($__internal_52c9a186999f6fa6be71d3df308c6fd77ccefa4f312e87116177ca4fb05bac8d_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_47e7a183ab500967fad95ac8ac70735c9dc4fea85de3a1e3432ebb78b8d4d597 = $this->env->getExtension("native_profiler");
        $__internal_47e7a183ab500967fad95ac8ac70735c9dc4fea85de3a1e3432ebb78b8d4d597->enter($__internal_47e7a183ab500967fad95ac8ac70735c9dc4fea85de3a1e3432ebb78b8d4d597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_47e7a183ab500967fad95ac8ac70735c9dc4fea85de3a1e3432ebb78b8d4d597->leave($__internal_47e7a183ab500967fad95ac8ac70735c9dc4fea85de3a1e3432ebb78b8d4d597_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_219a1d4b43dd803d360aa6372e799be5db2f53e65f4ac697ace238b9b6a64216 = $this->env->getExtension("native_profiler");
        $__internal_219a1d4b43dd803d360aa6372e799be5db2f53e65f4ac697ace238b9b6a64216->enter($__internal_219a1d4b43dd803d360aa6372e799be5db2f53e65f4ac697ace238b9b6a64216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_219a1d4b43dd803d360aa6372e799be5db2f53e65f4ac697ace238b9b6a64216->leave($__internal_219a1d4b43dd803d360aa6372e799be5db2f53e65f4ac697ace238b9b6a64216_prof);

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
