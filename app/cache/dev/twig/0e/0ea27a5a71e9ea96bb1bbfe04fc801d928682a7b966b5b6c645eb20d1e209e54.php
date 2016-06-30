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
        $__internal_8690a2eda28148c544ef0a9db4834cb7d09d2161b0135b3f27b11d5b6b24e735 = $this->env->getExtension("native_profiler");
        $__internal_8690a2eda28148c544ef0a9db4834cb7d09d2161b0135b3f27b11d5b6b24e735->enter($__internal_8690a2eda28148c544ef0a9db4834cb7d09d2161b0135b3f27b11d5b6b24e735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

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
        
        $__internal_8690a2eda28148c544ef0a9db4834cb7d09d2161b0135b3f27b11d5b6b24e735->leave($__internal_8690a2eda28148c544ef0a9db4834cb7d09d2161b0135b3f27b11d5b6b24e735_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_377effbea1b83bbc04fdbee432f7f04eb1773c279539843d019195fe73ce58c2 = $this->env->getExtension("native_profiler");
        $__internal_377effbea1b83bbc04fdbee432f7f04eb1773c279539843d019195fe73ce58c2->enter($__internal_377effbea1b83bbc04fdbee432f7f04eb1773c279539843d019195fe73ce58c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_377effbea1b83bbc04fdbee432f7f04eb1773c279539843d019195fe73ce58c2->leave($__internal_377effbea1b83bbc04fdbee432f7f04eb1773c279539843d019195fe73ce58c2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_057877b4965f6f62c00c02b2802c7807dc8576e8ae6f005bb5fee4941ddfd2e7 = $this->env->getExtension("native_profiler");
        $__internal_057877b4965f6f62c00c02b2802c7807dc8576e8ae6f005bb5fee4941ddfd2e7->enter($__internal_057877b4965f6f62c00c02b2802c7807dc8576e8ae6f005bb5fee4941ddfd2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_057877b4965f6f62c00c02b2802c7807dc8576e8ae6f005bb5fee4941ddfd2e7->leave($__internal_057877b4965f6f62c00c02b2802c7807dc8576e8ae6f005bb5fee4941ddfd2e7_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a354f0614ce1e5d5b88d5ed365bcef786b0f98c9edfea708b391964ff32074e9 = $this->env->getExtension("native_profiler");
        $__internal_a354f0614ce1e5d5b88d5ed365bcef786b0f98c9edfea708b391964ff32074e9->enter($__internal_a354f0614ce1e5d5b88d5ed365bcef786b0f98c9edfea708b391964ff32074e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_a354f0614ce1e5d5b88d5ed365bcef786b0f98c9edfea708b391964ff32074e9->leave($__internal_a354f0614ce1e5d5b88d5ed365bcef786b0f98c9edfea708b391964ff32074e9_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_c8cf90270a98e6459245d57461aa4ec162a33d02098ad03b594557589f9487d4 = $this->env->getExtension("native_profiler");
        $__internal_c8cf90270a98e6459245d57461aa4ec162a33d02098ad03b594557589f9487d4->enter($__internal_c8cf90270a98e6459245d57461aa4ec162a33d02098ad03b594557589f9487d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_c8cf90270a98e6459245d57461aa4ec162a33d02098ad03b594557589f9487d4->leave($__internal_c8cf90270a98e6459245d57461aa4ec162a33d02098ad03b594557589f9487d4_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_a0bbe3198a516e97f6f076fcb0ef62913219625d296bcf568cf2a416078407cc = $this->env->getExtension("native_profiler");
        $__internal_a0bbe3198a516e97f6f076fcb0ef62913219625d296bcf568cf2a416078407cc->enter($__internal_a0bbe3198a516e97f6f076fcb0ef62913219625d296bcf568cf2a416078407cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_a0bbe3198a516e97f6f076fcb0ef62913219625d296bcf568cf2a416078407cc->leave($__internal_a0bbe3198a516e97f6f076fcb0ef62913219625d296bcf568cf2a416078407cc_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fd87509d2374e04fb89ec6bec6b275fb5bad0324e4da578f92efe97978414e5a = $this->env->getExtension("native_profiler");
        $__internal_fd87509d2374e04fb89ec6bec6b275fb5bad0324e4da578f92efe97978414e5a->enter($__internal_fd87509d2374e04fb89ec6bec6b275fb5bad0324e4da578f92efe97978414e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_fd87509d2374e04fb89ec6bec6b275fb5bad0324e4da578f92efe97978414e5a->leave($__internal_fd87509d2374e04fb89ec6bec6b275fb5bad0324e4da578f92efe97978414e5a_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4c0ee6f638206a9401a71c219b252d8d1d85a8895166c8b11c4a1788b4abdf6 = $this->env->getExtension("native_profiler");
        $__internal_c4c0ee6f638206a9401a71c219b252d8d1d85a8895166c8b11c4a1788b4abdf6->enter($__internal_c4c0ee6f638206a9401a71c219b252d8d1d85a8895166c8b11c4a1788b4abdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c4c0ee6f638206a9401a71c219b252d8d1d85a8895166c8b11c4a1788b4abdf6->leave($__internal_c4c0ee6f638206a9401a71c219b252d8d1d85a8895166c8b11c4a1788b4abdf6_prof);

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
