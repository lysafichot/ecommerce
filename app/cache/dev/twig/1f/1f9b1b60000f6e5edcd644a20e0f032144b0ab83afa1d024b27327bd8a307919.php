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
        $__internal_526912a424c6adacbafa0bce669bf3a64b832239b95e7d13569e388900ff6920 = $this->env->getExtension("native_profiler");
        $__internal_526912a424c6adacbafa0bce669bf3a64b832239b95e7d13569e388900ff6920->enter($__internal_526912a424c6adacbafa0bce669bf3a64b832239b95e7d13569e388900ff6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

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
        
        $__internal_526912a424c6adacbafa0bce669bf3a64b832239b95e7d13569e388900ff6920->leave($__internal_526912a424c6adacbafa0bce669bf3a64b832239b95e7d13569e388900ff6920_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f178e13f40b43838ceb6d33823060f491097664adf1905e99f5c74ad04feba87 = $this->env->getExtension("native_profiler");
        $__internal_f178e13f40b43838ceb6d33823060f491097664adf1905e99f5c74ad04feba87->enter($__internal_f178e13f40b43838ceb6d33823060f491097664adf1905e99f5c74ad04feba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f178e13f40b43838ceb6d33823060f491097664adf1905e99f5c74ad04feba87->leave($__internal_f178e13f40b43838ceb6d33823060f491097664adf1905e99f5c74ad04feba87_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1072384a841044f9a6df4c573242ba8bc0f6ea53a2fa358033d239a18d1a1b0 = $this->env->getExtension("native_profiler");
        $__internal_e1072384a841044f9a6df4c573242ba8bc0f6ea53a2fa358033d239a18d1a1b0->enter($__internal_e1072384a841044f9a6df4c573242ba8bc0f6ea53a2fa358033d239a18d1a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_e1072384a841044f9a6df4c573242ba8bc0f6ea53a2fa358033d239a18d1a1b0->leave($__internal_e1072384a841044f9a6df4c573242ba8bc0f6ea53a2fa358033d239a18d1a1b0_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b782140d5aba766d52678491450e3693e6816eadb1977a8bae3bfa7186438c6 = $this->env->getExtension("native_profiler");
        $__internal_2b782140d5aba766d52678491450e3693e6816eadb1977a8bae3bfa7186438c6->enter($__internal_2b782140d5aba766d52678491450e3693e6816eadb1977a8bae3bfa7186438c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_2b782140d5aba766d52678491450e3693e6816eadb1977a8bae3bfa7186438c6->leave($__internal_2b782140d5aba766d52678491450e3693e6816eadb1977a8bae3bfa7186438c6_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_37e3b4fb86141af261d2fd6433759c37ff714de9346f111ea02f35a151048dc5 = $this->env->getExtension("native_profiler");
        $__internal_37e3b4fb86141af261d2fd6433759c37ff714de9346f111ea02f35a151048dc5->enter($__internal_37e3b4fb86141af261d2fd6433759c37ff714de9346f111ea02f35a151048dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_37e3b4fb86141af261d2fd6433759c37ff714de9346f111ea02f35a151048dc5->leave($__internal_37e3b4fb86141af261d2fd6433759c37ff714de9346f111ea02f35a151048dc5_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_0cfacd075341ee1b7db05dd6570c9c5da7f7e33c55e440623176209b3551a849 = $this->env->getExtension("native_profiler");
        $__internal_0cfacd075341ee1b7db05dd6570c9c5da7f7e33c55e440623176209b3551a849->enter($__internal_0cfacd075341ee1b7db05dd6570c9c5da7f7e33c55e440623176209b3551a849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_0cfacd075341ee1b7db05dd6570c9c5da7f7e33c55e440623176209b3551a849->leave($__internal_0cfacd075341ee1b7db05dd6570c9c5da7f7e33c55e440623176209b3551a849_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d827fd0d80c519b1e7484445532290c297332fe597a5ab91c648245d6ffa5f6f = $this->env->getExtension("native_profiler");
        $__internal_d827fd0d80c519b1e7484445532290c297332fe597a5ab91c648245d6ffa5f6f->enter($__internal_d827fd0d80c519b1e7484445532290c297332fe597a5ab91c648245d6ffa5f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d827fd0d80c519b1e7484445532290c297332fe597a5ab91c648245d6ffa5f6f->leave($__internal_d827fd0d80c519b1e7484445532290c297332fe597a5ab91c648245d6ffa5f6f_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d13c9c640edd0523fe4b43a3e7684e83849f302de3e1f174cc192fe4d20726e5 = $this->env->getExtension("native_profiler");
        $__internal_d13c9c640edd0523fe4b43a3e7684e83849f302de3e1f174cc192fe4d20726e5->enter($__internal_d13c9c640edd0523fe4b43a3e7684e83849f302de3e1f174cc192fe4d20726e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d13c9c640edd0523fe4b43a3e7684e83849f302de3e1f174cc192fe4d20726e5->leave($__internal_d13c9c640edd0523fe4b43a3e7684e83849f302de3e1f174cc192fe4d20726e5_prof);

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
