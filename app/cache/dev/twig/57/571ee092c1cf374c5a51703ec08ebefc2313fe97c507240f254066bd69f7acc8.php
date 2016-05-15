<?php

/* @Product/Index/index.html.twig */
class __TwigTemplate_2bf6dee1540d5bd057fd379fda1264a59512753b4873c9ef8c7490d8cf342883 extends Twig_Template
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
        $__internal_9e438147d0812e7a7715a051a81e9b6e6ba40c740214972956a53c949e01f1b8 = $this->env->getExtension("native_profiler");
        $__internal_9e438147d0812e7a7715a051a81e9b6e6ba40c740214972956a53c949e01f1b8->enter($__internal_9e438147d0812e7a7715a051a81e9b6e6ba40c740214972956a53c949e01f1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e438147d0812e7a7715a051a81e9b6e6ba40c740214972956a53c949e01f1b8->leave($__internal_9e438147d0812e7a7715a051a81e9b6e6ba40c740214972956a53c949e01f1b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_832ec031ce3cf2bc24378cc32e8a9e8f4613d2662b3f4b7af6a0861eb5f128bb = $this->env->getExtension("native_profiler");
        $__internal_832ec031ce3cf2bc24378cc32e8a9e8f4613d2662b3f4b7af6a0861eb5f128bb->enter($__internal_832ec031ce3cf2bc24378cc32e8a9e8f4613d2662b3f4b7af6a0861eb5f128bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_832ec031ce3cf2bc24378cc32e8a9e8f4613d2662b3f4b7af6a0861eb5f128bb->leave($__internal_832ec031ce3cf2bc24378cc32e8a9e8f4613d2662b3f4b7af6a0861eb5f128bb_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8a1454b600573ebe4b2b6189baa5d94947ab1dcf4926fbf0e808be6fbffb959 = $this->env->getExtension("native_profiler");
        $__internal_d8a1454b600573ebe4b2b6189baa5d94947ab1dcf4926fbf0e808be6fbffb959->enter($__internal_d8a1454b600573ebe4b2b6189baa5d94947ab1dcf4926fbf0e808be6fbffb959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_d8a1454b600573ebe4b2b6189baa5d94947ab1dcf4926fbf0e808be6fbffb959->leave($__internal_d8a1454b600573ebe4b2b6189baa5d94947ab1dcf4926fbf0e808be6fbffb959_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd786f869825ba77a664bd4f36eac631a457581696595dfd3111a6f02afaf4b1 = $this->env->getExtension("native_profiler");
        $__internal_cd786f869825ba77a664bd4f36eac631a457581696595dfd3111a6f02afaf4b1->enter($__internal_cd786f869825ba77a664bd4f36eac631a457581696595dfd3111a6f02afaf4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd786f869825ba77a664bd4f36eac631a457581696595dfd3111a6f02afaf4b1->leave($__internal_cd786f869825ba77a664bd4f36eac631a457581696595dfd3111a6f02afaf4b1_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_88765826e145838e7120ac02939edfb3c24042ec443942405b6b5d5e19696d80 = $this->env->getExtension("native_profiler");
        $__internal_88765826e145838e7120ac02939edfb3c24042ec443942405b6b5d5e19696d80->enter($__internal_88765826e145838e7120ac02939edfb3c24042ec443942405b6b5d5e19696d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_88765826e145838e7120ac02939edfb3c24042ec443942405b6b5d5e19696d80->leave($__internal_88765826e145838e7120ac02939edfb3c24042ec443942405b6b5d5e19696d80_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a1d258946989471d4226584379bcc75a3639117e6ec63c29861724ef9df7a25f = $this->env->getExtension("native_profiler");
        $__internal_a1d258946989471d4226584379bcc75a3639117e6ec63c29861724ef9df7a25f->enter($__internal_a1d258946989471d4226584379bcc75a3639117e6ec63c29861724ef9df7a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_a1d258946989471d4226584379bcc75a3639117e6ec63c29861724ef9df7a25f->leave($__internal_a1d258946989471d4226584379bcc75a3639117e6ec63c29861724ef9df7a25f_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfb63085be8c4b2d86a219957eb821bbc84ec65b5a08a2df698bffbc8dd8aea6 = $this->env->getExtension("native_profiler");
        $__internal_cfb63085be8c4b2d86a219957eb821bbc84ec65b5a08a2df698bffbc8dd8aea6->enter($__internal_cfb63085be8c4b2d86a219957eb821bbc84ec65b5a08a2df698bffbc8dd8aea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_cfb63085be8c4b2d86a219957eb821bbc84ec65b5a08a2df698bffbc8dd8aea6->leave($__internal_cfb63085be8c4b2d86a219957eb821bbc84ec65b5a08a2df698bffbc8dd8aea6_prof);

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
