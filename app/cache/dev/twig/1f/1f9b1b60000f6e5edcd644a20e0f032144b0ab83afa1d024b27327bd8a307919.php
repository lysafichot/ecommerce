<?php

/* @Admin/Default/index.html.twig */
class __TwigTemplate_ff9e67fab11cfcfab29876a75e9cd11a87e9dddf2b554040df85f5b4d368261b extends Twig_Template
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
        $__internal_63056d2cb129cea5cfb189dadcd7fd8c5ca14733116110653d6361d51a16293a = $this->env->getExtension("native_profiler");
        $__internal_63056d2cb129cea5cfb189dadcd7fd8c5ca14733116110653d6361d51a16293a->enter($__internal_63056d2cb129cea5cfb189dadcd7fd8c5ca14733116110653d6361d51a16293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

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
        
        $__internal_63056d2cb129cea5cfb189dadcd7fd8c5ca14733116110653d6361d51a16293a->leave($__internal_63056d2cb129cea5cfb189dadcd7fd8c5ca14733116110653d6361d51a16293a_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6abae0193e0c3cec1ba0b46b8efe8abb7a0019b594d3825fff8b8d48fecf970 = $this->env->getExtension("native_profiler");
        $__internal_f6abae0193e0c3cec1ba0b46b8efe8abb7a0019b594d3825fff8b8d48fecf970->enter($__internal_f6abae0193e0c3cec1ba0b46b8efe8abb7a0019b594d3825fff8b8d48fecf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f6abae0193e0c3cec1ba0b46b8efe8abb7a0019b594d3825fff8b8d48fecf970->leave($__internal_f6abae0193e0c3cec1ba0b46b8efe8abb7a0019b594d3825fff8b8d48fecf970_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a364ec036203a0965f39b8f646f417af15eb3b54158c024727da766be4ae02fd = $this->env->getExtension("native_profiler");
        $__internal_a364ec036203a0965f39b8f646f417af15eb3b54158c024727da766be4ae02fd->enter($__internal_a364ec036203a0965f39b8f646f417af15eb3b54158c024727da766be4ae02fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_a364ec036203a0965f39b8f646f417af15eb3b54158c024727da766be4ae02fd->leave($__internal_a364ec036203a0965f39b8f646f417af15eb3b54158c024727da766be4ae02fd_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf29e3a7d1fb896db98ec4784ffddd2fda8850fe7c710189c8260fb10f484c6 = $this->env->getExtension("native_profiler");
        $__internal_2bf29e3a7d1fb896db98ec4784ffddd2fda8850fe7c710189c8260fb10f484c6->enter($__internal_2bf29e3a7d1fb896db98ec4784ffddd2fda8850fe7c710189c8260fb10f484c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_2bf29e3a7d1fb896db98ec4784ffddd2fda8850fe7c710189c8260fb10f484c6->leave($__internal_2bf29e3a7d1fb896db98ec4784ffddd2fda8850fe7c710189c8260fb10f484c6_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_db1ee06c5361c8f56afef7aef0d8972f3915fc92e65c4b7e75813bd4a8925529 = $this->env->getExtension("native_profiler");
        $__internal_db1ee06c5361c8f56afef7aef0d8972f3915fc92e65c4b7e75813bd4a8925529->enter($__internal_db1ee06c5361c8f56afef7aef0d8972f3915fc92e65c4b7e75813bd4a8925529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_db1ee06c5361c8f56afef7aef0d8972f3915fc92e65c4b7e75813bd4a8925529->leave($__internal_db1ee06c5361c8f56afef7aef0d8972f3915fc92e65c4b7e75813bd4a8925529_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_43874f2ef38c82ec3278428f6341a651bce23f22e749751a2459ffe032853026 = $this->env->getExtension("native_profiler");
        $__internal_43874f2ef38c82ec3278428f6341a651bce23f22e749751a2459ffe032853026->enter($__internal_43874f2ef38c82ec3278428f6341a651bce23f22e749751a2459ffe032853026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_43874f2ef38c82ec3278428f6341a651bce23f22e749751a2459ffe032853026->leave($__internal_43874f2ef38c82ec3278428f6341a651bce23f22e749751a2459ffe032853026_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_232be1e285d15d619005e6360ee398e7e7bcbf46e15912e035d331fd1313d2ee = $this->env->getExtension("native_profiler");
        $__internal_232be1e285d15d619005e6360ee398e7e7bcbf46e15912e035d331fd1313d2ee->enter($__internal_232be1e285d15d619005e6360ee398e7e7bcbf46e15912e035d331fd1313d2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_232be1e285d15d619005e6360ee398e7e7bcbf46e15912e035d331fd1313d2ee->leave($__internal_232be1e285d15d619005e6360ee398e7e7bcbf46e15912e035d331fd1313d2ee_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2ed4ba12af542d831acaa3ddbc3c0e77c08b8aefa871e972c69403b0c659438 = $this->env->getExtension("native_profiler");
        $__internal_c2ed4ba12af542d831acaa3ddbc3c0e77c08b8aefa871e972c69403b0c659438->enter($__internal_c2ed4ba12af542d831acaa3ddbc3c0e77c08b8aefa871e972c69403b0c659438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c2ed4ba12af542d831acaa3ddbc3c0e77c08b8aefa871e972c69403b0c659438->leave($__internal_c2ed4ba12af542d831acaa3ddbc3c0e77c08b8aefa871e972c69403b0c659438_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Default/index.html.twig";
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
