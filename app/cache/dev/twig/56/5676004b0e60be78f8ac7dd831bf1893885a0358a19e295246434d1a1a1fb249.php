<?php

/* ProductBundle:Index:index.html.twig */
class __TwigTemplate_5eb3b06b204b8137f23187c114bde2140e31c225c570fd8428d655179dbe692f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Index:index.html.twig", 1);
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
        $__internal_e460b510940b5464f7ea2d79950da102a3edc066469c3f7641d7e56b9f89479a = $this->env->getExtension("native_profiler");
        $__internal_e460b510940b5464f7ea2d79950da102a3edc066469c3f7641d7e56b9f89479a->enter($__internal_e460b510940b5464f7ea2d79950da102a3edc066469c3f7641d7e56b9f89479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e460b510940b5464f7ea2d79950da102a3edc066469c3f7641d7e56b9f89479a->leave($__internal_e460b510940b5464f7ea2d79950da102a3edc066469c3f7641d7e56b9f89479a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8334ce349d0441c5e10a852a3820342ae545855b646d693f2f6a902e45e10f = $this->env->getExtension("native_profiler");
        $__internal_dd8334ce349d0441c5e10a852a3820342ae545855b646d693f2f6a902e45e10f->enter($__internal_dd8334ce349d0441c5e10a852a3820342ae545855b646d693f2f6a902e45e10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_dd8334ce349d0441c5e10a852a3820342ae545855b646d693f2f6a902e45e10f->leave($__internal_dd8334ce349d0441c5e10a852a3820342ae545855b646d693f2f6a902e45e10f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_29bbe219219f45b12bc4b9e32da60b7ed7ed8eb971c5412f27b54ce3862984a4 = $this->env->getExtension("native_profiler");
        $__internal_29bbe219219f45b12bc4b9e32da60b7ed7ed8eb971c5412f27b54ce3862984a4->enter($__internal_29bbe219219f45b12bc4b9e32da60b7ed7ed8eb971c5412f27b54ce3862984a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_29bbe219219f45b12bc4b9e32da60b7ed7ed8eb971c5412f27b54ce3862984a4->leave($__internal_29bbe219219f45b12bc4b9e32da60b7ed7ed8eb971c5412f27b54ce3862984a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fba8ecadc7ca3b3f13d7c395b9c64f00e5a1ff65d4e360e145dc7ba32798461 = $this->env->getExtension("native_profiler");
        $__internal_2fba8ecadc7ca3b3f13d7c395b9c64f00e5a1ff65d4e360e145dc7ba32798461->enter($__internal_2fba8ecadc7ca3b3f13d7c395b9c64f00e5a1ff65d4e360e145dc7ba32798461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fba8ecadc7ca3b3f13d7c395b9c64f00e5a1ff65d4e360e145dc7ba32798461->leave($__internal_2fba8ecadc7ca3b3f13d7c395b9c64f00e5a1ff65d4e360e145dc7ba32798461_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_76c6452782c0ced61cd6d76f3dab3d769c74a6ce014061705600987cf7ae4d16 = $this->env->getExtension("native_profiler");
        $__internal_76c6452782c0ced61cd6d76f3dab3d769c74a6ce014061705600987cf7ae4d16->enter($__internal_76c6452782c0ced61cd6d76f3dab3d769c74a6ce014061705600987cf7ae4d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_76c6452782c0ced61cd6d76f3dab3d769c74a6ce014061705600987cf7ae4d16->leave($__internal_76c6452782c0ced61cd6d76f3dab3d769c74a6ce014061705600987cf7ae4d16_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_72ad3301d036fd7c49b2c605933a65d7157d73ddb99bc1f2d0e01838f6b77b82 = $this->env->getExtension("native_profiler");
        $__internal_72ad3301d036fd7c49b2c605933a65d7157d73ddb99bc1f2d0e01838f6b77b82->enter($__internal_72ad3301d036fd7c49b2c605933a65d7157d73ddb99bc1f2d0e01838f6b77b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_72ad3301d036fd7c49b2c605933a65d7157d73ddb99bc1f2d0e01838f6b77b82->leave($__internal_72ad3301d036fd7c49b2c605933a65d7157d73ddb99bc1f2d0e01838f6b77b82_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4994f82ba3dc4434c270b101d77bd78881bb58b7db7fdb8560fa8ae8e1fcba88 = $this->env->getExtension("native_profiler");
        $__internal_4994f82ba3dc4434c270b101d77bd78881bb58b7db7fdb8560fa8ae8e1fcba88->enter($__internal_4994f82ba3dc4434c270b101d77bd78881bb58b7db7fdb8560fa8ae8e1fcba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4994f82ba3dc4434c270b101d77bd78881bb58b7db7fdb8560fa8ae8e1fcba88->leave($__internal_4994f82ba3dc4434c270b101d77bd78881bb58b7db7fdb8560fa8ae8e1fcba88_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Index:index.html.twig";
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
