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
        $__internal_38740cfe26340eadca2bc698bc3540166850a0ff6c6ec833cda19c1d3c048c1e = $this->env->getExtension("native_profiler");
        $__internal_38740cfe26340eadca2bc698bc3540166850a0ff6c6ec833cda19c1d3c048c1e->enter($__internal_38740cfe26340eadca2bc698bc3540166850a0ff6c6ec833cda19c1d3c048c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

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
        
        $__internal_38740cfe26340eadca2bc698bc3540166850a0ff6c6ec833cda19c1d3c048c1e->leave($__internal_38740cfe26340eadca2bc698bc3540166850a0ff6c6ec833cda19c1d3c048c1e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1062700f0d43afaaabb0dcc7ddc988fed233761d86b97d215287b89531feb75 = $this->env->getExtension("native_profiler");
        $__internal_e1062700f0d43afaaabb0dcc7ddc988fed233761d86b97d215287b89531feb75->enter($__internal_e1062700f0d43afaaabb0dcc7ddc988fed233761d86b97d215287b89531feb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e1062700f0d43afaaabb0dcc7ddc988fed233761d86b97d215287b89531feb75->leave($__internal_e1062700f0d43afaaabb0dcc7ddc988fed233761d86b97d215287b89531feb75_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb82fd777c6743f0f3bfb3263d62fedd79dc5c680b1ff7c2675e533f346fb562 = $this->env->getExtension("native_profiler");
        $__internal_cb82fd777c6743f0f3bfb3263d62fedd79dc5c680b1ff7c2675e533f346fb562->enter($__internal_cb82fd777c6743f0f3bfb3263d62fedd79dc5c680b1ff7c2675e533f346fb562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_cb82fd777c6743f0f3bfb3263d62fedd79dc5c680b1ff7c2675e533f346fb562->leave($__internal_cb82fd777c6743f0f3bfb3263d62fedd79dc5c680b1ff7c2675e533f346fb562_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57259c86937d8d1078fcbf0ff5761cc0ddae43e62f5ee3a3048f34e50d33eac = $this->env->getExtension("native_profiler");
        $__internal_a57259c86937d8d1078fcbf0ff5761cc0ddae43e62f5ee3a3048f34e50d33eac->enter($__internal_a57259c86937d8d1078fcbf0ff5761cc0ddae43e62f5ee3a3048f34e50d33eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_a57259c86937d8d1078fcbf0ff5761cc0ddae43e62f5ee3a3048f34e50d33eac->leave($__internal_a57259c86937d8d1078fcbf0ff5761cc0ddae43e62f5ee3a3048f34e50d33eac_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_6dc61bc09cce24997e1805cde95a7e4c8de78ec873df6e082f4ac70792e26535 = $this->env->getExtension("native_profiler");
        $__internal_6dc61bc09cce24997e1805cde95a7e4c8de78ec873df6e082f4ac70792e26535->enter($__internal_6dc61bc09cce24997e1805cde95a7e4c8de78ec873df6e082f4ac70792e26535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_6dc61bc09cce24997e1805cde95a7e4c8de78ec873df6e082f4ac70792e26535->leave($__internal_6dc61bc09cce24997e1805cde95a7e4c8de78ec873df6e082f4ac70792e26535_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_e7ff188e95be9e4fec2e5cff1723ad2ae914cecbb7641ee4f6db8853bdb22c37 = $this->env->getExtension("native_profiler");
        $__internal_e7ff188e95be9e4fec2e5cff1723ad2ae914cecbb7641ee4f6db8853bdb22c37->enter($__internal_e7ff188e95be9e4fec2e5cff1723ad2ae914cecbb7641ee4f6db8853bdb22c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_e7ff188e95be9e4fec2e5cff1723ad2ae914cecbb7641ee4f6db8853bdb22c37->leave($__internal_e7ff188e95be9e4fec2e5cff1723ad2ae914cecbb7641ee4f6db8853bdb22c37_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8ce179294ede835a9f03c8c9c260287701eaee03100fc27fa81ac052115bf746 = $this->env->getExtension("native_profiler");
        $__internal_8ce179294ede835a9f03c8c9c260287701eaee03100fc27fa81ac052115bf746->enter($__internal_8ce179294ede835a9f03c8c9c260287701eaee03100fc27fa81ac052115bf746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8ce179294ede835a9f03c8c9c260287701eaee03100fc27fa81ac052115bf746->leave($__internal_8ce179294ede835a9f03c8c9c260287701eaee03100fc27fa81ac052115bf746_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_582a30f66b11533c76658d28eb727758a373fcf37dd2891206e89a1067cb37fd = $this->env->getExtension("native_profiler");
        $__internal_582a30f66b11533c76658d28eb727758a373fcf37dd2891206e89a1067cb37fd->enter($__internal_582a30f66b11533c76658d28eb727758a373fcf37dd2891206e89a1067cb37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_582a30f66b11533c76658d28eb727758a373fcf37dd2891206e89a1067cb37fd->leave($__internal_582a30f66b11533c76658d28eb727758a373fcf37dd2891206e89a1067cb37fd_prof);

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
