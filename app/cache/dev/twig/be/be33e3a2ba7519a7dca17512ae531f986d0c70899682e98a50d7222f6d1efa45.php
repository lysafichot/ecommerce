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
            'search' => array($this, 'block_search'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_205dd8a0676d5dfa4c1e3f40f54b23044d971b6acd99728b1aee2834d0dc8cf3 = $this->env->getExtension("native_profiler");
        $__internal_205dd8a0676d5dfa4c1e3f40f54b23044d971b6acd99728b1aee2834d0dc8cf3->enter($__internal_205dd8a0676d5dfa4c1e3f40f54b23044d971b6acd99728b1aee2834d0dc8cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 33
        echo "

    ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
</html>";
        
        $__internal_205dd8a0676d5dfa4c1e3f40f54b23044d971b6acd99728b1aee2834d0dc8cf3->leave($__internal_205dd8a0676d5dfa4c1e3f40f54b23044d971b6acd99728b1aee2834d0dc8cf3_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_416bef456e07946325755e14c869ad08947f41f37c7f175e99a4cb00662a9d1d = $this->env->getExtension("native_profiler");
        $__internal_416bef456e07946325755e14c869ad08947f41f37c7f175e99a4cb00662a9d1d->enter($__internal_416bef456e07946325755e14c869ad08947f41f37c7f175e99a4cb00662a9d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_416bef456e07946325755e14c869ad08947f41f37c7f175e99a4cb00662a9d1d->leave($__internal_416bef456e07946325755e14c869ad08947f41f37c7f175e99a4cb00662a9d1d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_97a23829693526b279ad89121c5eacdb7d0fe0a19058fe1a57faa548dd19684a = $this->env->getExtension("native_profiler");
        $__internal_97a23829693526b279ad89121c5eacdb7d0fe0a19058fe1a57faa548dd19684a->enter($__internal_97a23829693526b279ad89121c5eacdb7d0fe0a19058fe1a57faa548dd19684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_97a23829693526b279ad89121c5eacdb7d0fe0a19058fe1a57faa548dd19684a->leave($__internal_97a23829693526b279ad89121c5eacdb7d0fe0a19058fe1a57faa548dd19684a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_67acc6e8afcd01566a59323f1b827f80afa82b8e73d3775843f0f16203714de3 = $this->env->getExtension("native_profiler");
        $__internal_67acc6e8afcd01566a59323f1b827f80afa82b8e73d3775843f0f16203714de3->enter($__internal_67acc6e8afcd01566a59323f1b827f80afa82b8e73d3775843f0f16203714de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('search', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 31
        echo "
    ";
        
        $__internal_67acc6e8afcd01566a59323f1b827f80afa82b8e73d3775843f0f16203714de3->leave($__internal_67acc6e8afcd01566a59323f1b827f80afa82b8e73d3775843f0f16203714de3_prof);

    }

    // line 18
    public function block_search($context, array $blocks = array())
    {
        $__internal_8e11ca2f17d3af3b8ab3f7facb7705baeb018ba5c00a09974538c3af6094567a = $this->env->getExtension("native_profiler");
        $__internal_8e11ca2f17d3af3b8ab3f7facb7705baeb018ba5c00a09974538c3af6094567a->enter($__internal_8e11ca2f17d3af3b8ab3f7facb7705baeb018ba5c00a09974538c3af6094567a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 19
        echo "    ";
        echo twig_include($this->env, $context, "layout/search.html.twig");
        echo "

    ";
        
        $__internal_8e11ca2f17d3af3b8ab3f7facb7705baeb018ba5c00a09974538c3af6094567a->leave($__internal_8e11ca2f17d3af3b8ab3f7facb7705baeb018ba5c00a09974538c3af6094567a_prof);

    }

    // line 23
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_37918bce725aad68be8b026a29ab05a1efc64b863227c34bc9495c269ec4fda7 = $this->env->getExtension("native_profiler");
        $__internal_37918bce725aad68be8b026a29ab05a1efc64b863227c34bc9495c269ec4fda7->enter($__internal_37918bce725aad68be8b026a29ab05a1efc64b863227c34bc9495c269ec4fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 24
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_37918bce725aad68be8b026a29ab05a1efc64b863227c34bc9495c269ec4fda7->leave($__internal_37918bce725aad68be8b026a29ab05a1efc64b863227c34bc9495c269ec4fda7_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4608ee1c90a2fbc87c48e518715a5bc4f4a95ffa0434a0a85a9ede9f652eb7df = $this->env->getExtension("native_profiler");
        $__internal_4608ee1c90a2fbc87c48e518715a5bc4f4a95ffa0434a0a85a9ede9f652eb7df->enter($__internal_4608ee1c90a2fbc87c48e518715a5bc4f4a95ffa0434a0a85a9ede9f652eb7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4608ee1c90a2fbc87c48e518715a5bc4f4a95ffa0434a0a85a9ede9f652eb7df->leave($__internal_4608ee1c90a2fbc87c48e518715a5bc4f4a95ffa0434a0a85a9ede9f652eb7df_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb04a99f88f03343ed9f7b986c580449254e3af5503a6454e6d3857ffe1311e3 = $this->env->getExtension("native_profiler");
        $__internal_eb04a99f88f03343ed9f7b986c580449254e3af5503a6454e6d3857ffe1311e3->enter($__internal_eb04a99f88f03343ed9f7b986c580449254e3af5503a6454e6d3857ffe1311e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<!--     <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script> -->
<!--     <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
-->    ";
        
        $__internal_eb04a99f88f03343ed9f7b986c580449254e3af5503a6454e6d3857ffe1311e3->leave($__internal_eb04a99f88f03343ed9f7b986c580449254e3af5503a6454e6d3857ffe1311e3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 43,  198 => 42,  194 => 41,  190 => 39,  184 => 38,  173 => 35,  163 => 28,  160 => 27,  154 => 25,  151 => 24,  145 => 23,  134 => 19,  128 => 18,  120 => 31,  118 => 23,  115 => 22,  113 => 18,  110 => 17,  104 => 16,  92 => 8,  82 => 11,  78 => 10,  73 => 8,  69 => 6,  63 => 5,  55 => 45,  53 => 38,  49 => 36,  47 => 35,  43 => 33,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
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
/*     {% block search %}*/
/*     {{ include('layout/search.html.twig')}}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block menu_auth %}*/
/*     {% if is_granted('ROLE_USER') %}*/
/*     {{ app.user.username }}*/
/*     {% endif %}*/
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
