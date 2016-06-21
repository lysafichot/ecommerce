<?php

/* @Account/Auth/account.html.twig */
class __TwigTemplate_08147c42b9108ac578198aec8056a7fd6cabf194afe29b30e3e59d8547306936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Account/Auth/account.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu_auth' => array($this, 'block_menu_auth'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f4084b00fb6a4b0be57769b5f52454a2e5b286ed57e38bba10ca6e6ee16e9c3 = $this->env->getExtension("native_profiler");
        $__internal_1f4084b00fb6a4b0be57769b5f52454a2e5b286ed57e38bba10ca6e6ee16e9c3->enter($__internal_1f4084b00fb6a4b0be57769b5f52454a2e5b286ed57e38bba10ca6e6ee16e9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4084b00fb6a4b0be57769b5f52454a2e5b286ed57e38bba10ca6e6ee16e9c3->leave($__internal_1f4084b00fb6a4b0be57769b5f52454a2e5b286ed57e38bba10ca6e6ee16e9c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcb425e05c43b6af5448c69fc9d21e2effcee7f2358ab8b8f04aefdd289526da = $this->env->getExtension("native_profiler");
        $__internal_dcb425e05c43b6af5448c69fc9d21e2effcee7f2358ab8b8f04aefdd289526da->enter($__internal_dcb425e05c43b6af5448c69fc9d21e2effcee7f2358ab8b8f04aefdd289526da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_dcb425e05c43b6af5448c69fc9d21e2effcee7f2358ab8b8f04aefdd289526da->leave($__internal_dcb425e05c43b6af5448c69fc9d21e2effcee7f2358ab8b8f04aefdd289526da_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_53762bfdf73bae3121bae18d39de15bf9995ce6d60f37bcbe2db256d77674fce = $this->env->getExtension("native_profiler");
        $__internal_53762bfdf73bae3121bae18d39de15bf9995ce6d60f37bcbe2db256d77674fce->enter($__internal_53762bfdf73bae3121bae18d39de15bf9995ce6d60f37bcbe2db256d77674fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_53762bfdf73bae3121bae18d39de15bf9995ce6d60f37bcbe2db256d77674fce->leave($__internal_53762bfdf73bae3121bae18d39de15bf9995ce6d60f37bcbe2db256d77674fce_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d63c91ec9aaad8bf235f9d59325dcf57bfaf1fd728c114de9891f0d2653a7f55 = $this->env->getExtension("native_profiler");
        $__internal_d63c91ec9aaad8bf235f9d59325dcf57bfaf1fd728c114de9891f0d2653a7f55->enter($__internal_d63c91ec9aaad8bf235f9d59325dcf57bfaf1fd728c114de9891f0d2653a7f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
<div id='search_login'>
\t";
        // line 12
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 13
        echo "</div>
<div id=\"main_div\">
\t<div id='contents'>

\t\t<div  class='arbre'>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>

\t\t\t<a href=\"\"></a>
\t\t</div>
\t\t<div id='myaccount'>
\t\t\t<div id='gestion'>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mon profil</a>
\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes commandes</a>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes adresses</a>




\t\t\t</div>

\t\t\t<div id='info_contents'>

\t\t\t</div>



\t\t</div>
\t</div>
</div>
";
        
        $__internal_d63c91ec9aaad8bf235f9d59325dcf57bfaf1fd728c114de9891f0d2653a7f55->leave($__internal_d63c91ec9aaad8bf235f9d59325dcf57bfaf1fd728c114de9891f0d2653a7f55_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_b4a5fee9bbc748fa6d2dd80042ea3b34252276ea9428eac822a7e51c9e53ed5e = $this->env->getExtension("native_profiler");
        $__internal_b4a5fee9bbc748fa6d2dd80042ea3b34252276ea9428eac822a7e51c9e53ed5e->enter($__internal_b4a5fee9bbc748fa6d2dd80042ea3b34252276ea9428eac822a7e51c9e53ed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_b4a5fee9bbc748fa6d2dd80042ea3b34252276ea9428eac822a7e51c9e53ed5e->leave($__internal_b4a5fee9bbc748fa6d2dd80042ea3b34252276ea9428eac822a7e51c9e53ed5e_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_63c8a7dc79489470793f30773eb7cbe0bc1e571eea35697dee62437ad1094614 = $this->env->getExtension("native_profiler");
        $__internal_63c8a7dc79489470793f30773eb7cbe0bc1e571eea35697dee62437ad1094614->enter($__internal_63c8a7dc79489470793f30773eb7cbe0bc1e571eea35697dee62437ad1094614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_63c8a7dc79489470793f30773eb7cbe0bc1e571eea35697dee62437ad1094614->leave($__internal_63c8a7dc79489470793f30773eb7cbe0bc1e571eea35697dee62437ad1094614_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Auth/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 12,  128 => 9,  104 => 26,  100 => 25,  96 => 24,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Accueil {% endblock %}*/
/* */
/* {% block head %} {{ parent() }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* {% block header %} {{ parent() }} {% endblock %}*/
/* */
/* <div id='search_login'>*/
/* 	{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* </div>*/
/* <div id="main_div">*/
/* 	<div id='contents'>*/
/* */
/* 		<div  class='arbre'>*/
/* 			<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* */
/* 			<a href=""></a>*/
/* 		</div>*/
/* 		<div id='myaccount'>*/
/* 			<div id='gestion'>*/
/* 				<a href="{{ path('account') }}">Mon profil</a>*/
/* 				<a href="{{ path('account') }}">Mes commandes</a>*/
/* 				<a href="{{ path('account') }}">Mes adresses</a>*/
/* */
/* */
/* */
/* */
/* 			</div>*/
/* */
/* 			<div id='info_contents'>*/
/* */
/* 			</div>*/
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
