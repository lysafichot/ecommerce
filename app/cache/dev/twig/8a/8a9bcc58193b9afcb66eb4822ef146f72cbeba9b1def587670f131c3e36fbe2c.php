<?php

/* ::base.html.twig */
class __TwigTemplate_259004d7b67c75cbcc246a68f9b2dec74ba5f1d85f472be83ff80182ff7a2e00 extends Twig_Template
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
        $__internal_4493b6871071a8f64eb95c25cde416b1bafaa6992b93210cdf3b04ffc6dbfecd = $this->env->getExtension("native_profiler");
        $__internal_4493b6871071a8f64eb95c25cde416b1bafaa6992b93210cdf3b04ffc6dbfecd->enter($__internal_4493b6871071a8f64eb95c25cde416b1bafaa6992b93210cdf3b04ffc6dbfecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4493b6871071a8f64eb95c25cde416b1bafaa6992b93210cdf3b04ffc6dbfecd->leave($__internal_4493b6871071a8f64eb95c25cde416b1bafaa6992b93210cdf3b04ffc6dbfecd_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e97939e527fdce9709c18c4a0ad20754b528ba1771193616db640c5ea7b35f7 = $this->env->getExtension("native_profiler");
        $__internal_5e97939e527fdce9709c18c4a0ad20754b528ba1771193616db640c5ea7b35f7->enter($__internal_5e97939e527fdce9709c18c4a0ad20754b528ba1771193616db640c5ea7b35f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5e97939e527fdce9709c18c4a0ad20754b528ba1771193616db640c5ea7b35f7->leave($__internal_5e97939e527fdce9709c18c4a0ad20754b528ba1771193616db640c5ea7b35f7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f1a116ecd2107ff6a51b8bf1998164f657979f62f5383dc06ad5492e6b74af = $this->env->getExtension("native_profiler");
        $__internal_e2f1a116ecd2107ff6a51b8bf1998164f657979f62f5383dc06ad5492e6b74af->enter($__internal_e2f1a116ecd2107ff6a51b8bf1998164f657979f62f5383dc06ad5492e6b74af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_e2f1a116ecd2107ff6a51b8bf1998164f657979f62f5383dc06ad5492e6b74af->leave($__internal_e2f1a116ecd2107ff6a51b8bf1998164f657979f62f5383dc06ad5492e6b74af_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_de01632b4a422a006f5345645b350ef8fe5dbeab7b69c38164306aa170805de3 = $this->env->getExtension("native_profiler");
        $__internal_de01632b4a422a006f5345645b350ef8fe5dbeab7b69c38164306aa170805de3->enter($__internal_de01632b4a422a006f5345645b350ef8fe5dbeab7b69c38164306aa170805de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de01632b4a422a006f5345645b350ef8fe5dbeab7b69c38164306aa170805de3->leave($__internal_de01632b4a422a006f5345645b350ef8fe5dbeab7b69c38164306aa170805de3_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_1b05f4bd0b0a37198581b005641dcb8f6c9f88e97fb2d7658e957f7e5e610b93 = $this->env->getExtension("native_profiler");
        $__internal_1b05f4bd0b0a37198581b005641dcb8f6c9f88e97fb2d7658e957f7e5e610b93->enter($__internal_1b05f4bd0b0a37198581b005641dcb8f6c9f88e97fb2d7658e957f7e5e610b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

    ";
        
        $__internal_1b05f4bd0b0a37198581b005641dcb8f6c9f88e97fb2d7658e957f7e5e610b93->leave($__internal_1b05f4bd0b0a37198581b005641dcb8f6c9f88e97fb2d7658e957f7e5e610b93_prof);

    }

    // line 26
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_e68e0842050c352626decae63ac1a8633e682513e6cce17b49a7dc6915b68080 = $this->env->getExtension("native_profiler");
        $__internal_e68e0842050c352626decae63ac1a8633e682513e6cce17b49a7dc6915b68080->enter($__internal_e68e0842050c352626decae63ac1a8633e682513e6cce17b49a7dc6915b68080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 27
        echo "

    ";
        // line 29
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_e68e0842050c352626decae63ac1a8633e682513e6cce17b49a7dc6915b68080->leave($__internal_e68e0842050c352626decae63ac1a8633e682513e6cce17b49a7dc6915b68080_prof);

    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5afc127eb6067b52f1a49fb103ce93b7e204a83afd8c870fb5ebbd0be2fd1c70 = $this->env->getExtension("native_profiler");
        $__internal_5afc127eb6067b52f1a49fb103ce93b7e204a83afd8c870fb5ebbd0be2fd1c70->enter($__internal_5afc127eb6067b52f1a49fb103ce93b7e204a83afd8c870fb5ebbd0be2fd1c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5afc127eb6067b52f1a49fb103ce93b7e204a83afd8c870fb5ebbd0be2fd1c70->leave($__internal_5afc127eb6067b52f1a49fb103ce93b7e204a83afd8c870fb5ebbd0be2fd1c70_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d67d4333d85d282ac1a1991aa38a1ff00c49b70c9ecb3addd08693dda520618d = $this->env->getExtension("native_profiler");
        $__internal_d67d4333d85d282ac1a1991aa38a1ff00c49b70c9ecb3addd08693dda520618d->enter($__internal_d67d4333d85d282ac1a1991aa38a1ff00c49b70c9ecb3addd08693dda520618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d67d4333d85d282ac1a1991aa38a1ff00c49b70c9ecb3addd08693dda520618d->leave($__internal_d67d4333d85d282ac1a1991aa38a1ff00c49b70c9ecb3addd08693dda520618d_prof);

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
