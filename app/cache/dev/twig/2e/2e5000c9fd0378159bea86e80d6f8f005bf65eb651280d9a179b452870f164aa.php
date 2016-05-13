<?php

/* @Product/Index/index.html.twig */
class __TwigTemplate_305d1d1aaeb0337c3ce9761a6c5ecedc5c95723e1c6d7b507d91169a4d33d1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Index/index.html.twig", 1);
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
        $__internal_c14239085ea97a620c7c115f0aa5a7d01267b4085ad8b005ee50af05b48256cd = $this->env->getExtension("native_profiler");
        $__internal_c14239085ea97a620c7c115f0aa5a7d01267b4085ad8b005ee50af05b48256cd->enter($__internal_c14239085ea97a620c7c115f0aa5a7d01267b4085ad8b005ee50af05b48256cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14239085ea97a620c7c115f0aa5a7d01267b4085ad8b005ee50af05b48256cd->leave($__internal_c14239085ea97a620c7c115f0aa5a7d01267b4085ad8b005ee50af05b48256cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f72093b5f55e6d9d78820ae7da326a08f65456373355c4de938cdf34d4d9924 = $this->env->getExtension("native_profiler");
        $__internal_7f72093b5f55e6d9d78820ae7da326a08f65456373355c4de938cdf34d4d9924->enter($__internal_7f72093b5f55e6d9d78820ae7da326a08f65456373355c4de938cdf34d4d9924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_7f72093b5f55e6d9d78820ae7da326a08f65456373355c4de938cdf34d4d9924->leave($__internal_7f72093b5f55e6d9d78820ae7da326a08f65456373355c4de938cdf34d4d9924_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1b68d3fdbae50fb141d770280980612b96ead07cd6d0ac29e103f697a9cb9ed = $this->env->getExtension("native_profiler");
        $__internal_a1b68d3fdbae50fb141d770280980612b96ead07cd6d0ac29e103f697a9cb9ed->enter($__internal_a1b68d3fdbae50fb141d770280980612b96ead07cd6d0ac29e103f697a9cb9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_a1b68d3fdbae50fb141d770280980612b96ead07cd6d0ac29e103f697a9cb9ed->leave($__internal_a1b68d3fdbae50fb141d770280980612b96ead07cd6d0ac29e103f697a9cb9ed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f0f3f11b2be615b6e355c2d4a0c8c32964b704edc7cf01e635b8b2c4c6b126 = $this->env->getExtension("native_profiler");
        $__internal_24f0f3f11b2be615b6e355c2d4a0c8c32964b704edc7cf01e635b8b2c4c6b126->enter($__internal_24f0f3f11b2be615b6e355c2d4a0c8c32964b704edc7cf01e635b8b2c4c6b126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

<canvas id=\"bg_canvas\"></canvas>

    <div id=\"main_div\">
        <header>
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>

";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 19
        echo "        </header>
\t<section id=\"slide_div\">
\t\t<div id=\"slider\">
\t\t\t<a href=\"#\">
\t\t\t\t<div id=\"slides\">
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"bullets\"/>
\t\t</div>
\t</section>

\t<section id=\"button_div\">
\t\t<div class=\"categories\">

\t\t</div>
\t\t<div class=\"promo\">

\t\t</div>
\t\t<div class=\"other\">

\t\t</div>
\t</section>

\t<section id=\"pst_div\">
\t\t<div id=\"pst_slide\">
\t\t\t<a href=\"#\">
\t\t\t\t<div id=\"pst_slides\">
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"points\"/>
\t\t</div>
\t</div>
</section>

";
        
        $__internal_24f0f3f11b2be615b6e355c2d4a0c8c32964b704edc7cf01e635b8b2c4c6b126->leave($__internal_24f0f3f11b2be615b6e355c2d4a0c8c32964b704edc7cf01e635b8b2c4c6b126_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_63445bb24628b3ac7c5d0939d6cf8fea2842e83e77c48f8080f39ec0bc0f6383 = $this->env->getExtension("native_profiler");
        $__internal_63445bb24628b3ac7c5d0939d6cf8fea2842e83e77c48f8080f39ec0bc0f6383->enter($__internal_63445bb24628b3ac7c5d0939d6cf8fea2842e83e77c48f8080f39ec0bc0f6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_63445bb24628b3ac7c5d0939d6cf8fea2842e83e77c48f8080f39ec0bc0f6383->leave($__internal_63445bb24628b3ac7c5d0939d6cf8fea2842e83e77c48f8080f39ec0bc0f6383_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a359b6410ad381b72292fac635d6ba451b8f5103a4fde50e10519956807a8cd6 = $this->env->getExtension("native_profiler");
        $__internal_a359b6410ad381b72292fac635d6ba451b8f5103a4fde50e10519956807a8cd6->enter($__internal_a359b6410ad381b72292fac635d6ba451b8f5103a4fde50e10519956807a8cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_a359b6410ad381b72292fac635d6ba451b8f5103a4fde50e10519956807a8cd6->leave($__internal_a359b6410ad381b72292fac635d6ba451b8f5103a4fde50e10519956807a8cd6_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e214a1eab3a6078df4c0fae9fea7e2e65fadce7c8bc10226fcfb4cb56b5c19d = $this->env->getExtension("native_profiler");
        $__internal_1e214a1eab3a6078df4c0fae9fea7e2e65fadce7c8bc10226fcfb4cb56b5c19d->enter($__internal_1e214a1eab3a6078df4c0fae9fea7e2e65fadce7c8bc10226fcfb4cb56b5c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1e214a1eab3a6078df4c0fae9fea7e2e65fadce7c8bc10226fcfb4cb56b5c19d->leave($__internal_1e214a1eab3a6078df4c0fae9fea7e2e65fadce7c8bc10226fcfb4cb56b5c19d_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  212 => 74,  203 => 70,  197 => 69,  183 => 18,  169 => 61,  165 => 60,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  119 => 32,  115 => 31,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  86 => 19,  84 => 18,  79 => 16,  71 => 10,  65 => 9,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Accueil {% endblock %}*/
/* */
/* {% block head %} {{ parent() }} {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* <canvas id="bg_canvas"></canvas>*/
/* */
/*     <div id="main_div">*/
/*         <header>*/
/*             <img src="{{ asset('images/logo.png') }}"/>*/
/* */
/* {% block menu_auth %} {{ parent() }} {% endblock %}*/
/*         </header>*/
/* 	<section id="slide_div">*/
/* 		<div id="slider">*/
/* 			<a href="#">*/
/* 				<div id="slides">*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 				</div>*/
/* 			</a>*/
/* 			<img id="leftArrow" class="arrow" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 			<img id="rightArrow" class="arrow" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 			<div id="bullets"/>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section id="button_div">*/
/* 		<div class="categories">*/
/* */
/* 		</div>*/
/* 		<div class="promo">*/
/* */
/* 		</div>*/
/* 		<div class="other">*/
/* */
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section id="pst_div">*/
/* 		<div id="pst_slide">*/
/* 			<a href="#">*/
/* 				<div id="pst_slides">*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 				</div>*/
/* 			</a>*/
/* 			<img id="gaucheArrow" class="fleches" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 			<img id="droiteArrow" class="fleches" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 			<div id="points"/>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
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
