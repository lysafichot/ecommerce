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
        $__internal_1f028265a7e8df80312a69efe12cd4f2327ed2682359e0b432a1de64f8464eca = $this->env->getExtension("native_profiler");
        $__internal_1f028265a7e8df80312a69efe12cd4f2327ed2682359e0b432a1de64f8464eca->enter($__internal_1f028265a7e8df80312a69efe12cd4f2327ed2682359e0b432a1de64f8464eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f028265a7e8df80312a69efe12cd4f2327ed2682359e0b432a1de64f8464eca->leave($__internal_1f028265a7e8df80312a69efe12cd4f2327ed2682359e0b432a1de64f8464eca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f6dfce7318c2803d47d2e662cac2249ca4732ec758518e31bfa9bc91840fb84 = $this->env->getExtension("native_profiler");
        $__internal_3f6dfce7318c2803d47d2e662cac2249ca4732ec758518e31bfa9bc91840fb84->enter($__internal_3f6dfce7318c2803d47d2e662cac2249ca4732ec758518e31bfa9bc91840fb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_3f6dfce7318c2803d47d2e662cac2249ca4732ec758518e31bfa9bc91840fb84->leave($__internal_3f6dfce7318c2803d47d2e662cac2249ca4732ec758518e31bfa9bc91840fb84_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee0a52cb67a58d377ce0ed61a749b6c62c32019104f1022adb0fbff70f9c41a6 = $this->env->getExtension("native_profiler");
        $__internal_ee0a52cb67a58d377ce0ed61a749b6c62c32019104f1022adb0fbff70f9c41a6->enter($__internal_ee0a52cb67a58d377ce0ed61a749b6c62c32019104f1022adb0fbff70f9c41a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_ee0a52cb67a58d377ce0ed61a749b6c62c32019104f1022adb0fbff70f9c41a6->leave($__internal_ee0a52cb67a58d377ce0ed61a749b6c62c32019104f1022adb0fbff70f9c41a6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_325c82937f5c105591c5260b7318c064443f15364d3d6c4c189e5e89619964e3 = $this->env->getExtension("native_profiler");
        $__internal_325c82937f5c105591c5260b7318c064443f15364d3d6c4c189e5e89619964e3->enter($__internal_325c82937f5c105591c5260b7318c064443f15364d3d6c4c189e5e89619964e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_325c82937f5c105591c5260b7318c064443f15364d3d6c4c189e5e89619964e3->leave($__internal_325c82937f5c105591c5260b7318c064443f15364d3d6c4c189e5e89619964e3_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_908febc592a1009c7201df06de50a7f0957cf7d6bca437da6f8c0ea6757abce8 = $this->env->getExtension("native_profiler");
        $__internal_908febc592a1009c7201df06de50a7f0957cf7d6bca437da6f8c0ea6757abce8->enter($__internal_908febc592a1009c7201df06de50a7f0957cf7d6bca437da6f8c0ea6757abce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_908febc592a1009c7201df06de50a7f0957cf7d6bca437da6f8c0ea6757abce8->leave($__internal_908febc592a1009c7201df06de50a7f0957cf7d6bca437da6f8c0ea6757abce8_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_76c7522b1cddbaadb2e399877af75cffe5eb6c793978b31aa12e6f35e56e1d02 = $this->env->getExtension("native_profiler");
        $__internal_76c7522b1cddbaadb2e399877af75cffe5eb6c793978b31aa12e6f35e56e1d02->enter($__internal_76c7522b1cddbaadb2e399877af75cffe5eb6c793978b31aa12e6f35e56e1d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_76c7522b1cddbaadb2e399877af75cffe5eb6c793978b31aa12e6f35e56e1d02->leave($__internal_76c7522b1cddbaadb2e399877af75cffe5eb6c793978b31aa12e6f35e56e1d02_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0165554d3dffb1b6e1d9b2a64786722e855a6da6ea51ce7a8e91cd0a44ed60f = $this->env->getExtension("native_profiler");
        $__internal_d0165554d3dffb1b6e1d9b2a64786722e855a6da6ea51ce7a8e91cd0a44ed60f->enter($__internal_d0165554d3dffb1b6e1d9b2a64786722e855a6da6ea51ce7a8e91cd0a44ed60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d0165554d3dffb1b6e1d9b2a64786722e855a6da6ea51ce7a8e91cd0a44ed60f->leave($__internal_d0165554d3dffb1b6e1d9b2a64786722e855a6da6ea51ce7a8e91cd0a44ed60f_prof);

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
