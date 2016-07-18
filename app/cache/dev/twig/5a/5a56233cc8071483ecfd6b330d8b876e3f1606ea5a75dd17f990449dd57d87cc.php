<?php

/* ProductBundle:Panier:transaction.html.twig */
class __TwigTemplate_f3f5d3f3a666459d64acb77a319cc0ac0ec7e279f2416991c467475b958e2550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Panier:transaction.html.twig", 1);
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
        $__internal_521261b6d60f283cc40e82915188df00d4916021897afcd56e815840e8d569bc = $this->env->getExtension("native_profiler");
        $__internal_521261b6d60f283cc40e82915188df00d4916021897afcd56e815840e8d569bc->enter($__internal_521261b6d60f283cc40e82915188df00d4916021897afcd56e815840e8d569bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:transaction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521261b6d60f283cc40e82915188df00d4916021897afcd56e815840e8d569bc->leave($__internal_521261b6d60f283cc40e82915188df00d4916021897afcd56e815840e8d569bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4730f90654868e47ea808fb06e3cb8c33100d174eb710d51d79e5e62b523ad87 = $this->env->getExtension("native_profiler");
        $__internal_4730f90654868e47ea808fb06e3cb8c33100d174eb710d51d79e5e62b523ad87->enter($__internal_4730f90654868e47ea808fb06e3cb8c33100d174eb710d51d79e5e62b523ad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_4730f90654868e47ea808fb06e3cb8c33100d174eb710d51d79e5e62b523ad87->leave($__internal_4730f90654868e47ea808fb06e3cb8c33100d174eb710d51d79e5e62b523ad87_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_fccd0f81c19faf43b54aa45a1976c1e83b1104d189af3abe8c8c34fa7ee0249e = $this->env->getExtension("native_profiler");
        $__internal_fccd0f81c19faf43b54aa45a1976c1e83b1104d189af3abe8c8c34fa7ee0249e->enter($__internal_fccd0f81c19faf43b54aa45a1976c1e83b1104d189af3abe8c8c34fa7ee0249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_fccd0f81c19faf43b54aa45a1976c1e83b1104d189af3abe8c8c34fa7ee0249e->leave($__internal_fccd0f81c19faf43b54aa45a1976c1e83b1104d189af3abe8c8c34fa7ee0249e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7e058036941d51c10bf59a8999507fa3c76e122800cf1243f2b8c5e86c44c9 = $this->env->getExtension("native_profiler");
        $__internal_9d7e058036941d51c10bf59a8999507fa3c76e122800cf1243f2b8c5e86c44c9->enter($__internal_9d7e058036941d51c10bf59a8999507fa3c76e122800cf1243f2b8c5e86c44c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='confirm'>





\t\t</div>
\t</div>
</div>
";
        
        $__internal_9d7e058036941d51c10bf59a8999507fa3c76e122800cf1243f2b8c5e86c44c9->leave($__internal_9d7e058036941d51c10bf59a8999507fa3c76e122800cf1243f2b8c5e86c44c9_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_e7c3a91dbf4725283fe7a92812ea75849daf88e13eeb5216882ddd36acd2c98e = $this->env->getExtension("native_profiler");
        $__internal_e7c3a91dbf4725283fe7a92812ea75849daf88e13eeb5216882ddd36acd2c98e->enter($__internal_e7c3a91dbf4725283fe7a92812ea75849daf88e13eeb5216882ddd36acd2c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_e7c3a91dbf4725283fe7a92812ea75849daf88e13eeb5216882ddd36acd2c98e->leave($__internal_e7c3a91dbf4725283fe7a92812ea75849daf88e13eeb5216882ddd36acd2c98e_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_32df94fa6acc30fd9df2524ebe1f8a210a1bb384a974fd71d19ecb4c9795bcf8 = $this->env->getExtension("native_profiler");
        $__internal_32df94fa6acc30fd9df2524ebe1f8a210a1bb384a974fd71d19ecb4c9795bcf8->enter($__internal_32df94fa6acc30fd9df2524ebe1f8a210a1bb384a974fd71d19ecb4c9795bcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_32df94fa6acc30fd9df2524ebe1f8a210a1bb384a974fd71d19ecb4c9795bcf8->leave($__internal_32df94fa6acc30fd9df2524ebe1f8a210a1bb384a974fd71d19ecb4c9795bcf8_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Panier:transaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 12,  108 => 9,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='confirm'>*/
/* */
/* */
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
