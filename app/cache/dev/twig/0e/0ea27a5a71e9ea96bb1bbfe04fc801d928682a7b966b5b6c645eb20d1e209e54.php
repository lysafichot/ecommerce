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
        $__internal_196e42a9308d878e86e6f7c0b788cb882ba59c32041c4d4cf4004f72f868aa0d = $this->env->getExtension("native_profiler");
        $__internal_196e42a9308d878e86e6f7c0b788cb882ba59c32041c4d4cf4004f72f868aa0d->enter($__internal_196e42a9308d878e86e6f7c0b788cb882ba59c32041c4d4cf4004f72f868aa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

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
        
        $__internal_196e42a9308d878e86e6f7c0b788cb882ba59c32041c4d4cf4004f72f868aa0d->leave($__internal_196e42a9308d878e86e6f7c0b788cb882ba59c32041c4d4cf4004f72f868aa0d_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b4501b39bb831575406025d99e4d4215585d0f11ec3bf23c8de4e09cefb8e64 = $this->env->getExtension("native_profiler");
        $__internal_0b4501b39bb831575406025d99e4d4215585d0f11ec3bf23c8de4e09cefb8e64->enter($__internal_0b4501b39bb831575406025d99e4d4215585d0f11ec3bf23c8de4e09cefb8e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b4501b39bb831575406025d99e4d4215585d0f11ec3bf23c8de4e09cefb8e64->leave($__internal_0b4501b39bb831575406025d99e4d4215585d0f11ec3bf23c8de4e09cefb8e64_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2802363bb75dadcb5b295fbfa251cfc5cc777981e07fa50c592c73be20f3ea = $this->env->getExtension("native_profiler");
        $__internal_3d2802363bb75dadcb5b295fbfa251cfc5cc777981e07fa50c592c73be20f3ea->enter($__internal_3d2802363bb75dadcb5b295fbfa251cfc5cc777981e07fa50c592c73be20f3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_3d2802363bb75dadcb5b295fbfa251cfc5cc777981e07fa50c592c73be20f3ea->leave($__internal_3d2802363bb75dadcb5b295fbfa251cfc5cc777981e07fa50c592c73be20f3ea_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba22051fc8fffa17421c1453482d54c4927a7ac0460a60c33326f8b461838f36 = $this->env->getExtension("native_profiler");
        $__internal_ba22051fc8fffa17421c1453482d54c4927a7ac0460a60c33326f8b461838f36->enter($__internal_ba22051fc8fffa17421c1453482d54c4927a7ac0460a60c33326f8b461838f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_ba22051fc8fffa17421c1453482d54c4927a7ac0460a60c33326f8b461838f36->leave($__internal_ba22051fc8fffa17421c1453482d54c4927a7ac0460a60c33326f8b461838f36_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_7e7c79d55d3eb97afb68f419f06b64e3f1dc0af4c9bfaf4890a9cd9d890e2a95 = $this->env->getExtension("native_profiler");
        $__internal_7e7c79d55d3eb97afb68f419f06b64e3f1dc0af4c9bfaf4890a9cd9d890e2a95->enter($__internal_7e7c79d55d3eb97afb68f419f06b64e3f1dc0af4c9bfaf4890a9cd9d890e2a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_7e7c79d55d3eb97afb68f419f06b64e3f1dc0af4c9bfaf4890a9cd9d890e2a95->leave($__internal_7e7c79d55d3eb97afb68f419f06b64e3f1dc0af4c9bfaf4890a9cd9d890e2a95_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_58c32fc8c5e1480e5af4ac62c847169b3e016ff8c3d4a57e660db4a2123ae11f = $this->env->getExtension("native_profiler");
        $__internal_58c32fc8c5e1480e5af4ac62c847169b3e016ff8c3d4a57e660db4a2123ae11f->enter($__internal_58c32fc8c5e1480e5af4ac62c847169b3e016ff8c3d4a57e660db4a2123ae11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_58c32fc8c5e1480e5af4ac62c847169b3e016ff8c3d4a57e660db4a2123ae11f->leave($__internal_58c32fc8c5e1480e5af4ac62c847169b3e016ff8c3d4a57e660db4a2123ae11f_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a1f3a1cce39157a1a68ba158c23876513618e38187952c65934d39ac4ae0329a = $this->env->getExtension("native_profiler");
        $__internal_a1f3a1cce39157a1a68ba158c23876513618e38187952c65934d39ac4ae0329a->enter($__internal_a1f3a1cce39157a1a68ba158c23876513618e38187952c65934d39ac4ae0329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a1f3a1cce39157a1a68ba158c23876513618e38187952c65934d39ac4ae0329a->leave($__internal_a1f3a1cce39157a1a68ba158c23876513618e38187952c65934d39ac4ae0329a_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a3f11a117c9cdfd87610d6306814c5bb91a79c9aea45f810620ddd4480e34c9 = $this->env->getExtension("native_profiler");
        $__internal_6a3f11a117c9cdfd87610d6306814c5bb91a79c9aea45f810620ddd4480e34c9->enter($__internal_6a3f11a117c9cdfd87610d6306814c5bb91a79c9aea45f810620ddd4480e34c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_6a3f11a117c9cdfd87610d6306814c5bb91a79c9aea45f810620ddd4480e34c9->leave($__internal_6a3f11a117c9cdfd87610d6306814c5bb91a79c9aea45f810620ddd4480e34c9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
