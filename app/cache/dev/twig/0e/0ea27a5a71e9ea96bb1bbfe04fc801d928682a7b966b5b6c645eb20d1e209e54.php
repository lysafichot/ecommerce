<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_3f8bbeee51bfd2121b922751b0118fc9071de358ae5a787ab8d754f94456bff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu_admin' => array($this, 'block_menu_admin'),
            'board' => array($this, 'block_board'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61e0b25aed3a255f782db5bf506193043055043fcc80e55c5e4f8eb87e79ec53 = $this->env->getExtension("native_profiler");
        $__internal_61e0b25aed3a255f782db5bf506193043055043fcc80e55c5e4f8eb87e79ec53->enter($__internal_61e0b25aed3a255f782db5bf506193043055043fcc80e55c5e4f8eb87e79ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

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
        // line 29
        echo "  <div id='board'>
   ";
        // line 30
        $this->displayBlock('board', $context, $blocks);
        // line 33
        echo "
 </div>
 ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "

 ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</body>
</html>";
        
        $__internal_61e0b25aed3a255f782db5bf506193043055043fcc80e55c5e4f8eb87e79ec53->leave($__internal_61e0b25aed3a255f782db5bf506193043055043fcc80e55c5e4f8eb87e79ec53_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad4a7f1f0b04b75e147e01ba51fefa99e5ccdbc7b1e4f83594b0c52fa3dea2c8 = $this->env->getExtension("native_profiler");
        $__internal_ad4a7f1f0b04b75e147e01ba51fefa99e5ccdbc7b1e4f83594b0c52fa3dea2c8->enter($__internal_ad4a7f1f0b04b75e147e01ba51fefa99e5ccdbc7b1e4f83594b0c52fa3dea2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\"/>

  ";
        
        $__internal_ad4a7f1f0b04b75e147e01ba51fefa99e5ccdbc7b1e4f83594b0c52fa3dea2c8->leave($__internal_ad4a7f1f0b04b75e147e01ba51fefa99e5ccdbc7b1e4f83594b0c52fa3dea2c8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1a333698c268e8c69461ad4c26942b19a2d2736c774117ea871c30dad07786b = $this->env->getExtension("native_profiler");
        $__internal_d1a333698c268e8c69461ad4c26942b19a2d2736c774117ea871c30dad07786b->enter($__internal_d1a333698c268e8c69461ad4c26942b19a2d2736c774117ea871c30dad07786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_d1a333698c268e8c69461ad4c26942b19a2d2736c774117ea871c30dad07786b->leave($__internal_d1a333698c268e8c69461ad4c26942b19a2d2736c774117ea871c30dad07786b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b705bde9b6d8a0e582d505d856172874fab5bcce5e9e978efeff21569e5e700 = $this->env->getExtension("native_profiler");
        $__internal_1b705bde9b6d8a0e582d505d856172874fab5bcce5e9e978efeff21569e5e700->enter($__internal_1b705bde9b6d8a0e582d505d856172874fab5bcce5e9e978efeff21569e5e700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_1b705bde9b6d8a0e582d505d856172874fab5bcce5e9e978efeff21569e5e700->leave($__internal_1b705bde9b6d8a0e582d505d856172874fab5bcce5e9e978efeff21569e5e700_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_d49cf0dbd03ab66062323f3685f3ff05e1979382caf147b1ac64e9be32333bd0 = $this->env->getExtension("native_profiler");
        $__internal_d49cf0dbd03ab66062323f3685f3ff05e1979382caf147b1ac64e9be32333bd0->enter($__internal_d49cf0dbd03ab66062323f3685f3ff05e1979382caf147b1ac64e9be32333bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

        // line 20
        echo "      <h3>Panel Administrateur</h3>
      <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Dashboard</a>
      <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_categories");
        echo "\">Gerer les categories</a>
      <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_add_product");
        echo "\">Ajouter un produit</a>
      <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_all_products");
        echo "\">Voir les produits</a>
  </div>

  ";
        
        $__internal_d49cf0dbd03ab66062323f3685f3ff05e1979382caf147b1ac64e9be32333bd0->leave($__internal_d49cf0dbd03ab66062323f3685f3ff05e1979382caf147b1ac64e9be32333bd0_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_1928707c1ebecc04da90cb84ab2489ef4f715602a238d6e2350c66f3aba187e9 = $this->env->getExtension("native_profiler");
        $__internal_1928707c1ebecc04da90cb84ab2489ef4f715602a238d6e2350c66f3aba187e9->enter($__internal_1928707c1ebecc04da90cb84ab2489ef4f715602a238d6e2350c66f3aba187e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_1928707c1ebecc04da90cb84ab2489ef4f715602a238d6e2350c66f3aba187e9->leave($__internal_1928707c1ebecc04da90cb84ab2489ef4f715602a238d6e2350c66f3aba187e9_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_44539a57b8599827637bf65dcc8dd9b78d7a3404bd565bf02c869f540636230a = $this->env->getExtension("native_profiler");
        $__internal_44539a57b8599827637bf65dcc8dd9b78d7a3404bd565bf02c869f540636230a->enter($__internal_44539a57b8599827637bf65dcc8dd9b78d7a3404bd565bf02c869f540636230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_44539a57b8599827637bf65dcc8dd9b78d7a3404bd565bf02c869f540636230a->leave($__internal_44539a57b8599827637bf65dcc8dd9b78d7a3404bd565bf02c869f540636230a_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9da53cbeda47a5a852cfe81ef92340974a1bd2b5e6de6c37323d585b5794b132 = $this->env->getExtension("native_profiler");
        $__internal_9da53cbeda47a5a852cfe81ef92340974a1bd2b5e6de6c37323d585b5794b132->enter($__internal_9da53cbeda47a5a852cfe81ef92340974a1bd2b5e6de6c37323d585b5794b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/toggle.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_9da53cbeda47a5a852cfe81ef92340974a1bd2b5e6de6c37323d585b5794b132->leave($__internal_9da53cbeda47a5a852cfe81ef92340974a1bd2b5e6de6c37323d585b5794b132_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 41,  194 => 40,  191 => 39,  185 => 38,  174 => 35,  166 => 31,  160 => 30,  149 => 24,  145 => 23,  141 => 22,  137 => 21,  134 => 20,  128 => 19,  121 => 28,  119 => 19,  115 => 17,  109 => 16,  97 => 8,  87 => 11,  83 => 10,  78 => 8,  74 => 6,  68 => 5,  60 => 44,  58 => 38,  54 => 36,  52 => 35,  48 => 33,  46 => 30,  43 => 29,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*   {% block head %}*/
/* */
/*   <meta charset="UTF-8" />*/
/*   <title>{% block title %}Acceuil - {% endblock %} - THT</title>*/
/* */
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}"/>*/
/* */
/*   {% endblock %}*/
/* </head>*/
/* <body>*/
/*   {% block body %}*/
/*   <div id='container'>*/
/*     <div id='menu'>*/
/*      {% block menu_admin %}*/
/*       <h3>Panel Administrateur</h3>*/
/*       <a href="{{ path('admin') }}">Dashboard</a>*/
/*       <a href="{{ path('admin_categories') }}">Gerer les categories</a>*/
/*       <a href="{{ path('admin_add_product') }}">Ajouter un produit</a>*/
/*       <a href="{{ path('admin_all_products') }}">Voir les produits</a>*/
/*   </div>*/
/* */
/*   {% endblock %}*/
/*   {% endblock %}*/
/*   <div id='board'>*/
/*    {% block board %}*/
/* */
/*    {% endblock %}*/
/* */
/*  </div>*/
/*  {% block footer %}{% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/*  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*  <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('js/toggle.js') }}"></script>*/
/* */
/*  {% endblock %}*/
/* </body>*/
/* </html>*/
