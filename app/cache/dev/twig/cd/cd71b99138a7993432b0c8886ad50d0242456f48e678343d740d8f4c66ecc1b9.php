<?php

/* base.html.twig */
class __TwigTemplate_e2ba95b1fc5b0c35ba8fff39421054c042e21934b36b0488c66d6759ddd75740 extends Twig_Template
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
        $__internal_6073f14c787a7bfcb74947dcf1e106ab9899069b7ec9cb6f89ec588f1dfd982f = $this->env->getExtension("native_profiler");
        $__internal_6073f14c787a7bfcb74947dcf1e106ab9899069b7ec9cb6f89ec588f1dfd982f->enter($__internal_6073f14c787a7bfcb74947dcf1e106ab9899069b7ec9cb6f89ec588f1dfd982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6073f14c787a7bfcb74947dcf1e106ab9899069b7ec9cb6f89ec588f1dfd982f->leave($__internal_6073f14c787a7bfcb74947dcf1e106ab9899069b7ec9cb6f89ec588f1dfd982f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dd64eb93f3de1bc37206d574e25eeab840c7416760c15eab5dda789f0e168e9 = $this->env->getExtension("native_profiler");
        $__internal_6dd64eb93f3de1bc37206d574e25eeab840c7416760c15eab5dda789f0e168e9->enter($__internal_6dd64eb93f3de1bc37206d574e25eeab840c7416760c15eab5dda789f0e168e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6dd64eb93f3de1bc37206d574e25eeab840c7416760c15eab5dda789f0e168e9->leave($__internal_6dd64eb93f3de1bc37206d574e25eeab840c7416760c15eab5dda789f0e168e9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_179f17d9aa74978e3b3c9aada2881ff1813546d01ab0d340c597f502b3f9d717 = $this->env->getExtension("native_profiler");
        $__internal_179f17d9aa74978e3b3c9aada2881ff1813546d01ab0d340c597f502b3f9d717->enter($__internal_179f17d9aa74978e3b3c9aada2881ff1813546d01ab0d340c597f502b3f9d717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_179f17d9aa74978e3b3c9aada2881ff1813546d01ab0d340c597f502b3f9d717->leave($__internal_179f17d9aa74978e3b3c9aada2881ff1813546d01ab0d340c597f502b3f9d717_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_16fe6d2954109bca1d5745c348fe8464ad181516ea05e1c4af29c4d133a09da3 = $this->env->getExtension("native_profiler");
        $__internal_16fe6d2954109bca1d5745c348fe8464ad181516ea05e1c4af29c4d133a09da3->enter($__internal_16fe6d2954109bca1d5745c348fe8464ad181516ea05e1c4af29c4d133a09da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 25
        echo "
    ";
        
        $__internal_16fe6d2954109bca1d5745c348fe8464ad181516ea05e1c4af29c4d133a09da3->leave($__internal_16fe6d2954109bca1d5745c348fe8464ad181516ea05e1c4af29c4d133a09da3_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_f85941e3549dc059db76929c1a27a8d8b702607408a8c2a92f9ca7be99a4818b = $this->env->getExtension("native_profiler");
        $__internal_f85941e3549dc059db76929c1a27a8d8b702607408a8c2a92f9ca7be99a4818b->enter($__internal_f85941e3549dc059db76929c1a27a8d8b702607408a8c2a92f9ca7be99a4818b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

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
        
        $__internal_f85941e3549dc059db76929c1a27a8d8b702607408a8c2a92f9ca7be99a4818b->leave($__internal_f85941e3549dc059db76929c1a27a8d8b702607408a8c2a92f9ca7be99a4818b_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6d17f80792e69a65c2efd9e820c2520307cf67a093bf04983bfe3361a58e24aa = $this->env->getExtension("native_profiler");
        $__internal_6d17f80792e69a65c2efd9e820c2520307cf67a093bf04983bfe3361a58e24aa->enter($__internal_6d17f80792e69a65c2efd9e820c2520307cf67a093bf04983bfe3361a58e24aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6d17f80792e69a65c2efd9e820c2520307cf67a093bf04983bfe3361a58e24aa->leave($__internal_6d17f80792e69a65c2efd9e820c2520307cf67a093bf04983bfe3361a58e24aa_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bf0a89d540ffa0352a578b3415b2a89c17d50d53785b8c47fdf684963161d91 = $this->env->getExtension("native_profiler");
        $__internal_1bf0a89d540ffa0352a578b3415b2a89c17d50d53785b8c47fdf684963161d91->enter($__internal_1bf0a89d540ffa0352a578b3415b2a89c17d50d53785b8c47fdf684963161d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1bf0a89d540ffa0352a578b3415b2a89c17d50d53785b8c47fdf684963161d91->leave($__internal_1bf0a89d540ffa0352a578b3415b2a89c17d50d53785b8c47fdf684963161d91_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
