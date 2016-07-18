<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_87db045552722d2ed56109e759bf979ac36876f0cbb117af094147dafd559d03 extends Twig_Template
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
        $__internal_ad342e21204c14239408023395de62acd8c69efa3dfe454dfc9200652c32735b = $this->env->getExtension("native_profiler");
        $__internal_ad342e21204c14239408023395de62acd8c69efa3dfe454dfc9200652c32735b->enter($__internal_ad342e21204c14239408023395de62acd8c69efa3dfe454dfc9200652c32735b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

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
        
        $__internal_ad342e21204c14239408023395de62acd8c69efa3dfe454dfc9200652c32735b->leave($__internal_ad342e21204c14239408023395de62acd8c69efa3dfe454dfc9200652c32735b_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_532bb9658c8b6bb7b8d6162f8790cec31e7714d7779b5d3201f2507f8aa6ca29 = $this->env->getExtension("native_profiler");
        $__internal_532bb9658c8b6bb7b8d6162f8790cec31e7714d7779b5d3201f2507f8aa6ca29->enter($__internal_532bb9658c8b6bb7b8d6162f8790cec31e7714d7779b5d3201f2507f8aa6ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_532bb9658c8b6bb7b8d6162f8790cec31e7714d7779b5d3201f2507f8aa6ca29->leave($__internal_532bb9658c8b6bb7b8d6162f8790cec31e7714d7779b5d3201f2507f8aa6ca29_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e563e36ff6defa779c079fcf05fa8faa41812fcf966ada9c1c4ae5d754ea5d0 = $this->env->getExtension("native_profiler");
        $__internal_2e563e36ff6defa779c079fcf05fa8faa41812fcf966ada9c1c4ae5d754ea5d0->enter($__internal_2e563e36ff6defa779c079fcf05fa8faa41812fcf966ada9c1c4ae5d754ea5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_2e563e36ff6defa779c079fcf05fa8faa41812fcf966ada9c1c4ae5d754ea5d0->leave($__internal_2e563e36ff6defa779c079fcf05fa8faa41812fcf966ada9c1c4ae5d754ea5d0_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_9feac93629f6bf69def0b0ebaebc5ac7c2bd00730a4036975eca7bdaaaad7df9 = $this->env->getExtension("native_profiler");
        $__internal_9feac93629f6bf69def0b0ebaebc5ac7c2bd00730a4036975eca7bdaaaad7df9->enter($__internal_9feac93629f6bf69def0b0ebaebc5ac7c2bd00730a4036975eca7bdaaaad7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_9feac93629f6bf69def0b0ebaebc5ac7c2bd00730a4036975eca7bdaaaad7df9->leave($__internal_9feac93629f6bf69def0b0ebaebc5ac7c2bd00730a4036975eca7bdaaaad7df9_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_9868153d7c5c5d368231e6916ed1d8e926b53fca33b03fa555fb9e2b251cfdd5 = $this->env->getExtension("native_profiler");
        $__internal_9868153d7c5c5d368231e6916ed1d8e926b53fca33b03fa555fb9e2b251cfdd5->enter($__internal_9868153d7c5c5d368231e6916ed1d8e926b53fca33b03fa555fb9e2b251cfdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_9868153d7c5c5d368231e6916ed1d8e926b53fca33b03fa555fb9e2b251cfdd5->leave($__internal_9868153d7c5c5d368231e6916ed1d8e926b53fca33b03fa555fb9e2b251cfdd5_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_93bac81fb9fecb72f3f9a4f648135521769c5b89c841d5c79e40a0e3cb08213b = $this->env->getExtension("native_profiler");
        $__internal_93bac81fb9fecb72f3f9a4f648135521769c5b89c841d5c79e40a0e3cb08213b->enter($__internal_93bac81fb9fecb72f3f9a4f648135521769c5b89c841d5c79e40a0e3cb08213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_93bac81fb9fecb72f3f9a4f648135521769c5b89c841d5c79e40a0e3cb08213b->leave($__internal_93bac81fb9fecb72f3f9a4f648135521769c5b89c841d5c79e40a0e3cb08213b_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bb3b3603590c05b5688fc5e88e85d6e4096eedf5b803acff0770217bd7d6d115 = $this->env->getExtension("native_profiler");
        $__internal_bb3b3603590c05b5688fc5e88e85d6e4096eedf5b803acff0770217bd7d6d115->enter($__internal_bb3b3603590c05b5688fc5e88e85d6e4096eedf5b803acff0770217bd7d6d115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_bb3b3603590c05b5688fc5e88e85d6e4096eedf5b803acff0770217bd7d6d115->leave($__internal_bb3b3603590c05b5688fc5e88e85d6e4096eedf5b803acff0770217bd7d6d115_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54f3b5eca1a2878bcbaba816313b0e966bfe440aeda138767ebcdc248757efed = $this->env->getExtension("native_profiler");
        $__internal_54f3b5eca1a2878bcbaba816313b0e966bfe440aeda138767ebcdc248757efed->enter($__internal_54f3b5eca1a2878bcbaba816313b0e966bfe440aeda138767ebcdc248757efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_54f3b5eca1a2878bcbaba816313b0e966bfe440aeda138767ebcdc248757efed->leave($__internal_54f3b5eca1a2878bcbaba816313b0e966bfe440aeda138767ebcdc248757efed_prof);

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
