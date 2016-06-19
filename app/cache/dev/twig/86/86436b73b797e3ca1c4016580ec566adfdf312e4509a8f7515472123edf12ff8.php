<?php

/* index.html.twig */
class __TwigTemplate_0bb864c16e3f54fd2970ce016b51e699126bb426ef0a2fe6b1fae78a87baee12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d768472050ecf51736714f25facdfc49b4219693a8e02bb91a1d4bcd1e19f4d = $this->env->getExtension("native_profiler");
        $__internal_4d768472050ecf51736714f25facdfc49b4219693a8e02bb91a1d4bcd1e19f4d->enter($__internal_4d768472050ecf51736714f25facdfc49b4219693a8e02bb91a1d4bcd1e19f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d768472050ecf51736714f25facdfc49b4219693a8e02bb91a1d4bcd1e19f4d->leave($__internal_4d768472050ecf51736714f25facdfc49b4219693a8e02bb91a1d4bcd1e19f4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f45934f06a88d3d5ea06dbe27bdcb19bb285a1dbab6ec421399c4fce83b60749 = $this->env->getExtension("native_profiler");
        $__internal_f45934f06a88d3d5ea06dbe27bdcb19bb285a1dbab6ec421399c4fce83b60749->enter($__internal_f45934f06a88d3d5ea06dbe27bdcb19bb285a1dbab6ec421399c4fce83b60749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_f45934f06a88d3d5ea06dbe27bdcb19bb285a1dbab6ec421399c4fce83b60749->leave($__internal_f45934f06a88d3d5ea06dbe27bdcb19bb285a1dbab6ec421399c4fce83b60749_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fa28607c91e7e491c3d7221cea996c093d6c1d02f247ec4bdc936f7f8d7b8ab = $this->env->getExtension("native_profiler");
        $__internal_1fa28607c91e7e491c3d7221cea996c093d6c1d02f247ec4bdc936f7f8d7b8ab->enter($__internal_1fa28607c91e7e491c3d7221cea996c093d6c1d02f247ec4bdc936f7f8d7b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_1fa28607c91e7e491c3d7221cea996c093d6c1d02f247ec4bdc936f7f8d7b8ab->leave($__internal_1fa28607c91e7e491c3d7221cea996c093d6c1d02f247ec4bdc936f7f8d7b8ab_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb3fa59e7a106db8c138b6f9b4e51c25ef81b690a19cee1fa98e80a4068133e3 = $this->env->getExtension("native_profiler");
        $__internal_cb3fa59e7a106db8c138b6f9b4e51c25ef81b690a19cee1fa98e80a4068133e3->enter($__internal_cb3fa59e7a106db8c138b6f9b4e51c25ef81b690a19cee1fa98e80a4068133e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<div id=\"main_div\">
\t<header>
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>

\t</header>
\t<div id='search_login'>
\t\t";
        // line 17
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 18
        echo "\t</div>
\t<div id='contents'>
\t\t<section id=\"menu_category_slide\">
\t\t\t<div id='menu_category'>

\t\t\t</div>

\t\t\t<div id=\"slider\">
\t\t\t\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>

\t\t\t\t<!-- <a href=\"#\">
\t\t\t\t\t<div id=\"slides\">
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<div id=\"bullets\"/> -->
\t\t\t</div>
\t\t</section>

\t\t<section id=\"button_div\">
\t\t\t<div class=\"categories\">
\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("home_categories");
        echo "\">Categories</a></li>

\t\t\t</div>
\t\t\t<div class=\"promo\">

\t\t\t</div>
\t\t\t<div class=\"other\">

\t\t\t</div>
\t\t</section>

\t\t<section id=\"pst_div\">
\t\t\t<!-- <div id=\"pst_slide\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<div id=\"pst_slides\">
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<div id=\"points\"/> -->
\t\t\t</div>
\t\t</div>
\t</section>
</div>
";
        
        $__internal_cb3fa59e7a106db8c138b6f9b4e51c25ef81b690a19cee1fa98e80a4068133e3->leave($__internal_cb3fa59e7a106db8c138b6f9b4e51c25ef81b690a19cee1fa98e80a4068133e3_prof);

    }

    // line 17
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_2ca67df16ad9563e449aa06388c1815d20075fe9152248822a09cd1e026f5397 = $this->env->getExtension("native_profiler");
        $__internal_2ca67df16ad9563e449aa06388c1815d20075fe9152248822a09cd1e026f5397->enter($__internal_2ca67df16ad9563e449aa06388c1815d20075fe9152248822a09cd1e026f5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_2ca67df16ad9563e449aa06388c1815d20075fe9152248822a09cd1e026f5397->leave($__internal_2ca67df16ad9563e449aa06388c1815d20075fe9152248822a09cd1e026f5397_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0f0675e0194e029dd9233a8735eb21ed298888b3ec6956043835583b45af4f5e = $this->env->getExtension("native_profiler");
        $__internal_0f0675e0194e029dd9233a8735eb21ed298888b3ec6956043835583b45af4f5e->enter($__internal_0f0675e0194e029dd9233a8735eb21ed298888b3ec6956043835583b45af4f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_0f0675e0194e029dd9233a8735eb21ed298888b3ec6956043835583b45af4f5e->leave($__internal_0f0675e0194e029dd9233a8735eb21ed298888b3ec6956043835583b45af4f5e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cb38aea88aa5bf215ac13198b83fd34c1c5c879180ca2016215dbd7abb0b771 = $this->env->getExtension("native_profiler");
        $__internal_6cb38aea88aa5bf215ac13198b83fd34c1c5c879180ca2016215dbd7abb0b771->enter($__internal_6cb38aea88aa5bf215ac13198b83fd34c1c5c879180ca2016215dbd7abb0b771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6cb38aea88aa5bf215ac13198b83fd34c1c5c879180ca2016215dbd7abb0b771->leave($__internal_6cb38aea88aa5bf215ac13198b83fd34c1c5c879180ca2016215dbd7abb0b771_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  226 => 81,  217 => 77,  211 => 76,  197 => 17,  183 => 68,  179 => 67,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  139 => 45,  129 => 38,  125 => 37,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  96 => 26,  86 => 18,  84 => 17,  77 => 13,  71 => 9,  65 => 8,  51 => 5,  39 => 3,  11 => 1,);
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
/* */
/* */
/* <div id="main_div">*/
/* 	<header>*/
/* 		<img src="{{ asset('images/logo.png') }}"/>*/
/* */
/* 	</header>*/
/* 	<div id='search_login'>*/
/* 		{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* 	</div>*/
/* 	<div id='contents'>*/
/* 		<section id="menu_category_slide">*/
/* 			<div id='menu_category'>*/
/* */
/* 			</div>*/
/* */
/* 			<div id="slider">*/
/* 									<img class="slide" src="{{ asset('images/slide_brute/hightech.jpg') }}"/>*/
/* */
/* 				<!-- <a href="#">*/
/* 					<div id="slides">*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/hightech.jpg') }}"/>*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 					</div>*/
/* 				</a>*/
/* 				<img id="leftArrow" class="arrow" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 				<img id="rightArrow" class="arrow" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 				<div id="bullets"/> -->*/
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<section id="button_div">*/
/* 			<div class="categories">*/
/* 				<li><a href="{{ path('home_categories') }}">Categories</a></li>*/
/* */
/* 			</div>*/
/* 			<div class="promo">*/
/* */
/* 			</div>*/
/* 			<div class="other">*/
/* */
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<section id="pst_div">*/
/* 			<!-- <div id="pst_slide">*/
/* 				<a href="#">*/
/* 					<div id="pst_slides">*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 					</div>*/
/* 				</a>*/
/* 				<img id="gaucheArrow" class="fleches" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 				<img id="droiteArrow" class="fleches" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 				<div id="points"/> -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
