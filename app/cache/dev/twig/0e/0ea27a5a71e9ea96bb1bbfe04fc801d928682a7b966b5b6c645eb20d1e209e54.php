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
        $__internal_9baf6db3a6249a4da95e5b272f2fb4d8e5ae1edd00acc65b33491c33116af5af = $this->env->getExtension("native_profiler");
        $__internal_9baf6db3a6249a4da95e5b272f2fb4d8e5ae1edd00acc65b33491c33116af5af->enter($__internal_9baf6db3a6249a4da95e5b272f2fb4d8e5ae1edd00acc65b33491c33116af5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

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
        
        $__internal_9baf6db3a6249a4da95e5b272f2fb4d8e5ae1edd00acc65b33491c33116af5af->leave($__internal_9baf6db3a6249a4da95e5b272f2fb4d8e5ae1edd00acc65b33491c33116af5af_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_319cc8eff192a14cdeb64c8d0d055473bb8e415665f930c962d33cf2ced66fa8 = $this->env->getExtension("native_profiler");
        $__internal_319cc8eff192a14cdeb64c8d0d055473bb8e415665f930c962d33cf2ced66fa8->enter($__internal_319cc8eff192a14cdeb64c8d0d055473bb8e415665f930c962d33cf2ced66fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_319cc8eff192a14cdeb64c8d0d055473bb8e415665f930c962d33cf2ced66fa8->leave($__internal_319cc8eff192a14cdeb64c8d0d055473bb8e415665f930c962d33cf2ced66fa8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcc977b27afefb097c3166a873adf50905675be8e531afb210acb166b57144df = $this->env->getExtension("native_profiler");
        $__internal_fcc977b27afefb097c3166a873adf50905675be8e531afb210acb166b57144df->enter($__internal_fcc977b27afefb097c3166a873adf50905675be8e531afb210acb166b57144df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_fcc977b27afefb097c3166a873adf50905675be8e531afb210acb166b57144df->leave($__internal_fcc977b27afefb097c3166a873adf50905675be8e531afb210acb166b57144df_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e659245e477121aa5e96176965f780d38c0e7fd2bd86a1b408a2537ad9eef006 = $this->env->getExtension("native_profiler");
        $__internal_e659245e477121aa5e96176965f780d38c0e7fd2bd86a1b408a2537ad9eef006->enter($__internal_e659245e477121aa5e96176965f780d38c0e7fd2bd86a1b408a2537ad9eef006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_e659245e477121aa5e96176965f780d38c0e7fd2bd86a1b408a2537ad9eef006->leave($__internal_e659245e477121aa5e96176965f780d38c0e7fd2bd86a1b408a2537ad9eef006_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_46d76692e7cc8fb6fd7a0a4cd3eec0d2e82cb7d7e87012bc9c90ab792fac961c = $this->env->getExtension("native_profiler");
        $__internal_46d76692e7cc8fb6fd7a0a4cd3eec0d2e82cb7d7e87012bc9c90ab792fac961c->enter($__internal_46d76692e7cc8fb6fd7a0a4cd3eec0d2e82cb7d7e87012bc9c90ab792fac961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_46d76692e7cc8fb6fd7a0a4cd3eec0d2e82cb7d7e87012bc9c90ab792fac961c->leave($__internal_46d76692e7cc8fb6fd7a0a4cd3eec0d2e82cb7d7e87012bc9c90ab792fac961c_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_715c2a306d3d94b7758a07fee718fd1152a350a10d9c366301919b9a3b618178 = $this->env->getExtension("native_profiler");
        $__internal_715c2a306d3d94b7758a07fee718fd1152a350a10d9c366301919b9a3b618178->enter($__internal_715c2a306d3d94b7758a07fee718fd1152a350a10d9c366301919b9a3b618178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_715c2a306d3d94b7758a07fee718fd1152a350a10d9c366301919b9a3b618178->leave($__internal_715c2a306d3d94b7758a07fee718fd1152a350a10d9c366301919b9a3b618178_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e1ef5f73fac78850df91e418ec4635caaa8487aadd8b00894a430067f2002e84 = $this->env->getExtension("native_profiler");
        $__internal_e1ef5f73fac78850df91e418ec4635caaa8487aadd8b00894a430067f2002e84->enter($__internal_e1ef5f73fac78850df91e418ec4635caaa8487aadd8b00894a430067f2002e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_e1ef5f73fac78850df91e418ec4635caaa8487aadd8b00894a430067f2002e84->leave($__internal_e1ef5f73fac78850df91e418ec4635caaa8487aadd8b00894a430067f2002e84_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ff5331ec20be9a7a5e63d96b9bf1641c20efc28becf93e07848c0f1455239fa = $this->env->getExtension("native_profiler");
        $__internal_9ff5331ec20be9a7a5e63d96b9bf1641c20efc28becf93e07848c0f1455239fa->enter($__internal_9ff5331ec20be9a7a5e63d96b9bf1641c20efc28becf93e07848c0f1455239fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9ff5331ec20be9a7a5e63d96b9bf1641c20efc28becf93e07848c0f1455239fa->leave($__internal_9ff5331ec20be9a7a5e63d96b9bf1641c20efc28becf93e07848c0f1455239fa_prof);

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
