<?php

/* AccountBundle:Auth:account.html.twig */
class __TwigTemplate_633af8af5b302fd068f3600c717c0e71d3d7066e0e99b74a7aae138e8ccdc62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccountBundle:Auth:account.html.twig", 1);
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
        $__internal_f93a1e00c055fc483debc3d3fa845da5da59063f309e457e9af7c0357c8fa600 = $this->env->getExtension("native_profiler");
        $__internal_f93a1e00c055fc483debc3d3fa845da5da59063f309e457e9af7c0357c8fa600->enter($__internal_f93a1e00c055fc483debc3d3fa845da5da59063f309e457e9af7c0357c8fa600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93a1e00c055fc483debc3d3fa845da5da59063f309e457e9af7c0357c8fa600->leave($__internal_f93a1e00c055fc483debc3d3fa845da5da59063f309e457e9af7c0357c8fa600_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbe151710fc15fdead6d2bb6c24ae488309be10ec970e97249d3b45ff38f9e6e = $this->env->getExtension("native_profiler");
        $__internal_dbe151710fc15fdead6d2bb6c24ae488309be10ec970e97249d3b45ff38f9e6e->enter($__internal_dbe151710fc15fdead6d2bb6c24ae488309be10ec970e97249d3b45ff38f9e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_dbe151710fc15fdead6d2bb6c24ae488309be10ec970e97249d3b45ff38f9e6e->leave($__internal_dbe151710fc15fdead6d2bb6c24ae488309be10ec970e97249d3b45ff38f9e6e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_b80b9036aa96c9d17f4212231bbd1e6b68da6e3267c4cc1dacd14735565a455c = $this->env->getExtension("native_profiler");
        $__internal_b80b9036aa96c9d17f4212231bbd1e6b68da6e3267c4cc1dacd14735565a455c->enter($__internal_b80b9036aa96c9d17f4212231bbd1e6b68da6e3267c4cc1dacd14735565a455c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_b80b9036aa96c9d17f4212231bbd1e6b68da6e3267c4cc1dacd14735565a455c->leave($__internal_b80b9036aa96c9d17f4212231bbd1e6b68da6e3267c4cc1dacd14735565a455c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6164deed1f118dad2045e022e2768e8a66be193583a0e8ae11f917de2da8f4a3 = $this->env->getExtension("native_profiler");
        $__internal_6164deed1f118dad2045e022e2768e8a66be193583a0e8ae11f917de2da8f4a3->enter($__internal_6164deed1f118dad2045e022e2768e8a66be193583a0e8ae11f917de2da8f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6164deed1f118dad2045e022e2768e8a66be193583a0e8ae11f917de2da8f4a3->leave($__internal_6164deed1f118dad2045e022e2768e8a66be193583a0e8ae11f917de2da8f4a3_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_6b13ade5b2b2f1c7e144631226745590771872510b29ef4618aa52bb5d2de6ee = $this->env->getExtension("native_profiler");
        $__internal_6b13ade5b2b2f1c7e144631226745590771872510b29ef4618aa52bb5d2de6ee->enter($__internal_6b13ade5b2b2f1c7e144631226745590771872510b29ef4618aa52bb5d2de6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_6b13ade5b2b2f1c7e144631226745590771872510b29ef4618aa52bb5d2de6ee->leave($__internal_6b13ade5b2b2f1c7e144631226745590771872510b29ef4618aa52bb5d2de6ee_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_3d5ee64ee98579f214e8b014fba17c9a39176eaa1cf6988236077a7161946458 = $this->env->getExtension("native_profiler");
        $__internal_3d5ee64ee98579f214e8b014fba17c9a39176eaa1cf6988236077a7161946458->enter($__internal_3d5ee64ee98579f214e8b014fba17c9a39176eaa1cf6988236077a7161946458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_3d5ee64ee98579f214e8b014fba17c9a39176eaa1cf6988236077a7161946458->leave($__internal_3d5ee64ee98579f214e8b014fba17c9a39176eaa1cf6988236077a7161946458_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Auth:account.html.twig";
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
