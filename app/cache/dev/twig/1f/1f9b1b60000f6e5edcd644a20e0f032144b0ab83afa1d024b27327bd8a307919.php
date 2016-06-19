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
        $__internal_04dbd332aa3f9671d97319331f1352104c37f218041871f4574e63ea2fd49efe = $this->env->getExtension("native_profiler");
        $__internal_04dbd332aa3f9671d97319331f1352104c37f218041871f4574e63ea2fd49efe->enter($__internal_04dbd332aa3f9671d97319331f1352104c37f218041871f4574e63ea2fd49efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

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
        // line 43
        echo "</body>
</html>";
        
        $__internal_04dbd332aa3f9671d97319331f1352104c37f218041871f4574e63ea2fd49efe->leave($__internal_04dbd332aa3f9671d97319331f1352104c37f218041871f4574e63ea2fd49efe_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_1223666a373ab86674ef723959acc4ade6bb86dc135b70ff40b5ee4e82741f36 = $this->env->getExtension("native_profiler");
        $__internal_1223666a373ab86674ef723959acc4ade6bb86dc135b70ff40b5ee4e82741f36->enter($__internal_1223666a373ab86674ef723959acc4ade6bb86dc135b70ff40b5ee4e82741f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1223666a373ab86674ef723959acc4ade6bb86dc135b70ff40b5ee4e82741f36->leave($__internal_1223666a373ab86674ef723959acc4ade6bb86dc135b70ff40b5ee4e82741f36_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c1ba99d8c11e8504b9145cbc0bdb981ae1973326e24e32045773923c734e4a5 = $this->env->getExtension("native_profiler");
        $__internal_7c1ba99d8c11e8504b9145cbc0bdb981ae1973326e24e32045773923c734e4a5->enter($__internal_7c1ba99d8c11e8504b9145cbc0bdb981ae1973326e24e32045773923c734e4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_7c1ba99d8c11e8504b9145cbc0bdb981ae1973326e24e32045773923c734e4a5->leave($__internal_7c1ba99d8c11e8504b9145cbc0bdb981ae1973326e24e32045773923c734e4a5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9e4d951944565d4dcdced26acdb7deb4a8247937ba1d1e85ace863486ac7f2 = $this->env->getExtension("native_profiler");
        $__internal_6b9e4d951944565d4dcdced26acdb7deb4a8247937ba1d1e85ace863486ac7f2->enter($__internal_6b9e4d951944565d4dcdced26acdb7deb4a8247937ba1d1e85ace863486ac7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_6b9e4d951944565d4dcdced26acdb7deb4a8247937ba1d1e85ace863486ac7f2->leave($__internal_6b9e4d951944565d4dcdced26acdb7deb4a8247937ba1d1e85ace863486ac7f2_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_b3231e8fa16aef31d410658d741a9f3737e067f8fc6414c104a2678a98342dcf = $this->env->getExtension("native_profiler");
        $__internal_b3231e8fa16aef31d410658d741a9f3737e067f8fc6414c104a2678a98342dcf->enter($__internal_b3231e8fa16aef31d410658d741a9f3737e067f8fc6414c104a2678a98342dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_b3231e8fa16aef31d410658d741a9f3737e067f8fc6414c104a2678a98342dcf->leave($__internal_b3231e8fa16aef31d410658d741a9f3737e067f8fc6414c104a2678a98342dcf_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_4295dd537014c6060b3c87eb1c1231089bab264fc74a088e56e35869fa91e0c6 = $this->env->getExtension("native_profiler");
        $__internal_4295dd537014c6060b3c87eb1c1231089bab264fc74a088e56e35869fa91e0c6->enter($__internal_4295dd537014c6060b3c87eb1c1231089bab264fc74a088e56e35869fa91e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_4295dd537014c6060b3c87eb1c1231089bab264fc74a088e56e35869fa91e0c6->leave($__internal_4295dd537014c6060b3c87eb1c1231089bab264fc74a088e56e35869fa91e0c6_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aa851869a62e40d324ad364351ad4db4107252ad7a1d5c5339cb611c72ef854c = $this->env->getExtension("native_profiler");
        $__internal_aa851869a62e40d324ad364351ad4db4107252ad7a1d5c5339cb611c72ef854c->enter($__internal_aa851869a62e40d324ad364351ad4db4107252ad7a1d5c5339cb611c72ef854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_aa851869a62e40d324ad364351ad4db4107252ad7a1d5c5339cb611c72ef854c->leave($__internal_aa851869a62e40d324ad364351ad4db4107252ad7a1d5c5339cb611c72ef854c_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fcc18c13008c4dee26a853aa23154491effecdfd7fbc279c4064868e20307f7 = $this->env->getExtension("native_profiler");
        $__internal_4fcc18c13008c4dee26a853aa23154491effecdfd7fbc279c4064868e20307f7->enter($__internal_4fcc18c13008c4dee26a853aa23154491effecdfd7fbc279c4064868e20307f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_4fcc18c13008c4dee26a853aa23154491effecdfd7fbc279c4064868e20307f7->leave($__internal_4fcc18c13008c4dee26a853aa23154491effecdfd7fbc279c4064868e20307f7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 40,  191 => 39,  185 => 38,  174 => 35,  166 => 31,  160 => 30,  149 => 24,  145 => 23,  141 => 22,  137 => 21,  134 => 20,  128 => 19,  121 => 28,  119 => 19,  115 => 17,  109 => 16,  97 => 8,  87 => 11,  83 => 10,  78 => 8,  74 => 6,  68 => 5,  60 => 43,  58 => 38,  54 => 36,  52 => 35,  48 => 33,  46 => 30,  43 => 29,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
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
/* */
/*  {% endblock %}*/
/* </body>*/
/* </html>*/
