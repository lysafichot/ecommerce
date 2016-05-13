<?php

/* ::base.html.twig */
class __TwigTemplate_c1a7d59da4209b8a9b7b286d42d85a3d93b22349ed603a67db4bc739d4b6fc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0db298480029f009e19820ee4fe222c31bf1b279f2606540047d050023561d0b = $this->env->getExtension("native_profiler");
        $__internal_0db298480029f009e19820ee4fe222c31bf1b279f2606540047d050023561d0b->enter($__internal_0db298480029f009e19820ee4fe222c31bf1b279f2606540047d050023561d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 27
        echo "

    ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
        
        $__internal_0db298480029f009e19820ee4fe222c31bf1b279f2606540047d050023561d0b->leave($__internal_0db298480029f009e19820ee4fe222c31bf1b279f2606540047d050023561d0b_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd4c1a13608d294b470a858ebf4140eb0176eb5c7c0a03969bca3fc8fce811fb = $this->env->getExtension("native_profiler");
        $__internal_cd4c1a13608d294b470a858ebf4140eb0176eb5c7c0a03969bca3fc8fce811fb->enter($__internal_cd4c1a13608d294b470a858ebf4140eb0176eb5c7c0a03969bca3fc8fce811fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd4c1a13608d294b470a858ebf4140eb0176eb5c7c0a03969bca3fc8fce811fb->leave($__internal_cd4c1a13608d294b470a858ebf4140eb0176eb5c7c0a03969bca3fc8fce811fb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d270993ef1664f3887884344ec9dfea27a471b85412ee467ff9dc8f6289d70c1 = $this->env->getExtension("native_profiler");
        $__internal_d270993ef1664f3887884344ec9dfea27a471b85412ee467ff9dc8f6289d70c1->enter($__internal_d270993ef1664f3887884344ec9dfea27a471b85412ee467ff9dc8f6289d70c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_d270993ef1664f3887884344ec9dfea27a471b85412ee467ff9dc8f6289d70c1->leave($__internal_d270993ef1664f3887884344ec9dfea27a471b85412ee467ff9dc8f6289d70c1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d230e3e6eb63d37d836ba4b1aa7c25d42929d45fb26043ae99de190e38f7d41a = $this->env->getExtension("native_profiler");
        $__internal_d230e3e6eb63d37d836ba4b1aa7c25d42929d45fb26043ae99de190e38f7d41a->enter($__internal_d230e3e6eb63d37d836ba4b1aa7c25d42929d45fb26043ae99de190e38f7d41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 25
        echo "
    ";
        
        $__internal_d230e3e6eb63d37d836ba4b1aa7c25d42929d45fb26043ae99de190e38f7d41a->leave($__internal_d230e3e6eb63d37d836ba4b1aa7c25d42929d45fb26043ae99de190e38f7d41a_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_cafbeb1231d89ff9fd56f9041141eb15ae4a3a1dd314f7a80e957ddd57913e26 = $this->env->getExtension("native_profiler");
        $__internal_cafbeb1231d89ff9fd56f9041141eb15ae4a3a1dd314f7a80e957ddd57913e26->enter($__internal_cafbeb1231d89ff9fd56f9041141eb15ae4a3a1dd314f7a80e957ddd57913e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 19
        echo "    <div id='auth'>
        <ul>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ecommerce_account_connexion");
        echo "\">Connexion</a></li>
        </ul>
    </div>
    ";
        
        $__internal_cafbeb1231d89ff9fd56f9041141eb15ae4a3a1dd314f7a80e957ddd57913e26->leave($__internal_cafbeb1231d89ff9fd56f9041141eb15ae4a3a1dd314f7a80e957ddd57913e26_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b57af5ae710a21680814d9846093b94716a7185fe8e4cf8e679df13ac57f9247 = $this->env->getExtension("native_profiler");
        $__internal_b57af5ae710a21680814d9846093b94716a7185fe8e4cf8e679df13ac57f9247->enter($__internal_b57af5ae710a21680814d9846093b94716a7185fe8e4cf8e679df13ac57f9247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b57af5ae710a21680814d9846093b94716a7185fe8e4cf8e679df13ac57f9247->leave($__internal_b57af5ae710a21680814d9846093b94716a7185fe8e4cf8e679df13ac57f9247_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e46d99d2643c2a7b434f3051708a325afcbbfd89afa06d1e07b14420dc883471 = $this->env->getExtension("native_profiler");
        $__internal_e46d99d2643c2a7b434f3051708a325afcbbfd89afa06d1e07b14420dc883471->enter($__internal_e46d99d2643c2a7b434f3051708a325afcbbfd89afa06d1e07b14420dc883471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_e46d99d2643c2a7b434f3051708a325afcbbfd89afa06d1e07b14420dc883471->leave($__internal_e46d99d2643c2a7b434f3051708a325afcbbfd89afa06d1e07b14420dc883471_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 36,  167 => 35,  163 => 34,  160 => 33,  154 => 32,  143 => 29,  132 => 21,  128 => 19,  122 => 18,  114 => 25,  112 => 18,  109 => 17,  103 => 16,  91 => 8,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  62 => 5,  54 => 38,  52 => 32,  48 => 30,  46 => 29,  42 => 27,  40 => 16,  36 => 14,  34 => 5,  28 => 1,);
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
/*     {% block menu_auth %}*/
/*     <div id='auth'>*/
/*         <ul>*/
/*             <li><a href="{{ path('ecommerce_account_connexion') }}">Connexion</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/* */
/*     {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
