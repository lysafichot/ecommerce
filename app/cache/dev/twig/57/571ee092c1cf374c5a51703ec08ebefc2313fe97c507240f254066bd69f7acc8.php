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
        $__internal_bb16122b974d39b22530801fafc196d0e99ba986e84dc7b35bf7d5a321f54679 = $this->env->getExtension("native_profiler");
        $__internal_bb16122b974d39b22530801fafc196d0e99ba986e84dc7b35bf7d5a321f54679->enter($__internal_bb16122b974d39b22530801fafc196d0e99ba986e84dc7b35bf7d5a321f54679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb16122b974d39b22530801fafc196d0e99ba986e84dc7b35bf7d5a321f54679->leave($__internal_bb16122b974d39b22530801fafc196d0e99ba986e84dc7b35bf7d5a321f54679_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02cde6e622305928272db5e2f14e73e70d493ec2e6b4e3897eca049b4b7d4384 = $this->env->getExtension("native_profiler");
        $__internal_02cde6e622305928272db5e2f14e73e70d493ec2e6b4e3897eca049b4b7d4384->enter($__internal_02cde6e622305928272db5e2f14e73e70d493ec2e6b4e3897eca049b4b7d4384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_02cde6e622305928272db5e2f14e73e70d493ec2e6b4e3897eca049b4b7d4384->leave($__internal_02cde6e622305928272db5e2f14e73e70d493ec2e6b4e3897eca049b4b7d4384_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d8803f681f4913581f177f412a3544e03f43a076259a60d2d802a7b642fc9df = $this->env->getExtension("native_profiler");
        $__internal_7d8803f681f4913581f177f412a3544e03f43a076259a60d2d802a7b642fc9df->enter($__internal_7d8803f681f4913581f177f412a3544e03f43a076259a60d2d802a7b642fc9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_7d8803f681f4913581f177f412a3544e03f43a076259a60d2d802a7b642fc9df->leave($__internal_7d8803f681f4913581f177f412a3544e03f43a076259a60d2d802a7b642fc9df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_900e7a251b9f5e7b89690e3820a42b2af8a8a6d9f88d488c6ed161bccdfea711 = $this->env->getExtension("native_profiler");
        $__internal_900e7a251b9f5e7b89690e3820a42b2af8a8a6d9f88d488c6ed161bccdfea711->enter($__internal_900e7a251b9f5e7b89690e3820a42b2af8a8a6d9f88d488c6ed161bccdfea711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_900e7a251b9f5e7b89690e3820a42b2af8a8a6d9f88d488c6ed161bccdfea711->leave($__internal_900e7a251b9f5e7b89690e3820a42b2af8a8a6d9f88d488c6ed161bccdfea711_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_571221a1ee5f39687f82105a67b2e81787d4501b90f40749bc111cf2c337bf0e = $this->env->getExtension("native_profiler");
        $__internal_571221a1ee5f39687f82105a67b2e81787d4501b90f40749bc111cf2c337bf0e->enter($__internal_571221a1ee5f39687f82105a67b2e81787d4501b90f40749bc111cf2c337bf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_571221a1ee5f39687f82105a67b2e81787d4501b90f40749bc111cf2c337bf0e->leave($__internal_571221a1ee5f39687f82105a67b2e81787d4501b90f40749bc111cf2c337bf0e_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b1594e1819175dbefeadf9fd5276e24ac1f84638ce7709f173b7796840debf0e = $this->env->getExtension("native_profiler");
        $__internal_b1594e1819175dbefeadf9fd5276e24ac1f84638ce7709f173b7796840debf0e->enter($__internal_b1594e1819175dbefeadf9fd5276e24ac1f84638ce7709f173b7796840debf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_b1594e1819175dbefeadf9fd5276e24ac1f84638ce7709f173b7796840debf0e->leave($__internal_b1594e1819175dbefeadf9fd5276e24ac1f84638ce7709f173b7796840debf0e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96cc4a733306cb948cdfb7213fe788eeab2d6a12a4115354027eb7a605310db5 = $this->env->getExtension("native_profiler");
        $__internal_96cc4a733306cb948cdfb7213fe788eeab2d6a12a4115354027eb7a605310db5->enter($__internal_96cc4a733306cb948cdfb7213fe788eeab2d6a12a4115354027eb7a605310db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_96cc4a733306cb948cdfb7213fe788eeab2d6a12a4115354027eb7a605310db5->leave($__internal_96cc4a733306cb948cdfb7213fe788eeab2d6a12a4115354027eb7a605310db5_prof);

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
