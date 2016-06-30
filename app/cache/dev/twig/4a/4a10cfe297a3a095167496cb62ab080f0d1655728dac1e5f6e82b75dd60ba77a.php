<?php

/* ::index.html.twig */
class __TwigTemplate_b6d592f3d93589cc29201b9d570f68d420b54e583230d07e83f81f405c9b2776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
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
        $__internal_cf1ac3b4465390506b034e6a0ef74762ac1115272704896a2e2ac77c21c8e899 = $this->env->getExtension("native_profiler");
        $__internal_cf1ac3b4465390506b034e6a0ef74762ac1115272704896a2e2ac77c21c8e899->enter($__internal_cf1ac3b4465390506b034e6a0ef74762ac1115272704896a2e2ac77c21c8e899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1ac3b4465390506b034e6a0ef74762ac1115272704896a2e2ac77c21c8e899->leave($__internal_cf1ac3b4465390506b034e6a0ef74762ac1115272704896a2e2ac77c21c8e899_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3ceca87d6eed09f56539f51b9442a2dc62d441c5905f9f039802abb6a057a87 = $this->env->getExtension("native_profiler");
        $__internal_b3ceca87d6eed09f56539f51b9442a2dc62d441c5905f9f039802abb6a057a87->enter($__internal_b3ceca87d6eed09f56539f51b9442a2dc62d441c5905f9f039802abb6a057a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_b3ceca87d6eed09f56539f51b9442a2dc62d441c5905f9f039802abb6a057a87->leave($__internal_b3ceca87d6eed09f56539f51b9442a2dc62d441c5905f9f039802abb6a057a87_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d21dbfebf1530cefc33830e86926ccdc22ff42e9feabc5c4a6eb012526f4a65 = $this->env->getExtension("native_profiler");
        $__internal_0d21dbfebf1530cefc33830e86926ccdc22ff42e9feabc5c4a6eb012526f4a65->enter($__internal_0d21dbfebf1530cefc33830e86926ccdc22ff42e9feabc5c4a6eb012526f4a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_0d21dbfebf1530cefc33830e86926ccdc22ff42e9feabc5c4a6eb012526f4a65->leave($__internal_0d21dbfebf1530cefc33830e86926ccdc22ff42e9feabc5c4a6eb012526f4a65_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5468fe9f93b64a22be990556e004f2e7e221d89bf4ca4b4a1b67fc3667e6f2a = $this->env->getExtension("native_profiler");
        $__internal_f5468fe9f93b64a22be990556e004f2e7e221d89bf4ca4b4a1b67fc3667e6f2a->enter($__internal_f5468fe9f93b64a22be990556e004f2e7e221d89bf4ca4b4a1b67fc3667e6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<section id=\"menu_category_slide\">
\t\t\t<div id='menu_category'>

\t\t\t</div>

\t\t\t<div id=\"slider\">
\t\t\t\t<img class=\"slide\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/fixtures/mac.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<!-- <a href=\"#\">
\t\t\t<div id=\"slides\">
\t\t\t<img class=\"slide\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<img class=\"slide\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t<img class=\"slide\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t<img class=\"slide\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<img class=\"slide\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"bullets\"/> -->

\t\t</section>

\t\t<section id=\"button_div\">
\t\t\t<div id=\"categories\">
\t\t\t\t";
        // line 43
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))) {
            // line 44
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 45
                echo "\t\t\t\t<div class='category_preview'>
\t\t\t\t\t<img class='cat_preview' src=";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "/>
\t\t\t\t\t<a class='cat_title_preview' href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><span class=''>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
\t\t\t\t";
        }
        // line 52
        echo "
\t\t\t</div>
\t\t\t<div class=\"promo\">

\t\t\t</div>
\t\t\t<div class=\"other\">

\t\t\t</div>
\t\t</section>

\t\t<section id=\"pst_div\">
<!-- <div id=\"pst_slide\">
<a href=\"#\">
<div id=\"pst_slides\">
<img class=\"pst_slide\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
<img class=\"pst_slide\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
<img class=\"pst_slide\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
<img class=\"pst_slide\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
<img class=\"pst_slide\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
</div>
</a>
<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
<div id=\"points\"/> -->
</div>
</div>
</section>
</div>
";
        
        $__internal_f5468fe9f93b64a22be990556e004f2e7e221d89bf4ca4b4a1b67fc3667e6f2a->leave($__internal_f5468fe9f93b64a22be990556e004f2e7e221d89bf4ca4b4a1b67fc3667e6f2a_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_7cdccc4645c41df3542a27ecd2e6d64cba840b2f4af05a21b1b021fdbf017b63 = $this->env->getExtension("native_profiler");
        $__internal_7cdccc4645c41df3542a27ecd2e6d64cba840b2f4af05a21b1b021fdbf017b63->enter($__internal_7cdccc4645c41df3542a27ecd2e6d64cba840b2f4af05a21b1b021fdbf017b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_7cdccc4645c41df3542a27ecd2e6d64cba840b2f4af05a21b1b021fdbf017b63->leave($__internal_7cdccc4645c41df3542a27ecd2e6d64cba840b2f4af05a21b1b021fdbf017b63_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_bf7be3517dd4b5a43202b0585115ac4805ef6fec30a5593a1fcfb1bbfaa872b3 = $this->env->getExtension("native_profiler");
        $__internal_bf7be3517dd4b5a43202b0585115ac4805ef6fec30a5593a1fcfb1bbfaa872b3->enter($__internal_bf7be3517dd4b5a43202b0585115ac4805ef6fec30a5593a1fcfb1bbfaa872b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_bf7be3517dd4b5a43202b0585115ac4805ef6fec30a5593a1fcfb1bbfaa872b3->leave($__internal_bf7be3517dd4b5a43202b0585115ac4805ef6fec30a5593a1fcfb1bbfaa872b3_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2a46915e0c672c48e98939204b789705e161e3f810b4774368e32048459433d5 = $this->env->getExtension("native_profiler");
        $__internal_2a46915e0c672c48e98939204b789705e161e3f810b4774368e32048459433d5->enter($__internal_2a46915e0c672c48e98939204b789705e161e3f810b4774368e32048459433d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_2a46915e0c672c48e98939204b789705e161e3f810b4774368e32048459433d5->leave($__internal_2a46915e0c672c48e98939204b789705e161e3f810b4774368e32048459433d5_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c34b05bbd2dc46c9578227437ab896e62bb133d7febe160ef374f95716a2595 = $this->env->getExtension("native_profiler");
        $__internal_9c34b05bbd2dc46c9578227437ab896e62bb133d7febe160ef374f95716a2595->enter($__internal_9c34b05bbd2dc46c9578227437ab896e62bb133d7febe160ef374f95716a2595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

";
        // line 90
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9c34b05bbd2dc46c9578227437ab896e62bb133d7febe160ef374f95716a2595->leave($__internal_9c34b05bbd2dc46c9578227437ab896e62bb133d7febe160ef374f95716a2595_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 90,  271 => 88,  265 => 87,  256 => 83,  250 => 82,  236 => 12,  222 => 9,  208 => 74,  204 => 73,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  182 => 66,  166 => 52,  162 => 50,  151 => 47,  146 => 46,  143 => 45,  138 => 44,  136 => 43,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  93 => 24,  80 => 13,  78 => 12,  74 => 10,  72 => 9,  66 => 8,  52 => 5,  40 => 3,  11 => 1,);
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
/* */
/* */
/* <div id="main_div">*/
/* 	<div id='contents'>*/
/* 		<section id="menu_category_slide">*/
/* 			<div id='menu_category'>*/
/* */
/* 			</div>*/
/* */
/* 			<div id="slider">*/
/* 				<img class="slide" src="{{ asset('uploads/fixtures/mac.png') }}"/>*/
/* 			</div>*/
/* 			<!-- <a href="#">*/
/* 			<div id="slides">*/
/* 			<img class="slide" src="{{ asset('images/slide_brute/hightech.jpg') }}"/>*/
/* 			<img class="slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 			<img class="slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 			<img class="slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 			<img class="slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 			</div>*/
/* 			</a>*/
/* 			<img id="leftArrow" class="arrow" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 			<img id="rightArrow" class="arrow" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 			<div id="bullets"/> -->*/
/* */
/* 		</section>*/
/* */
/* 		<section id="button_div">*/
/* 			<div id="categories">*/
/* 				{% if  categories is not empty %}*/
/* 				{% for category in categories %}*/
/* 				<div class='category_preview'>*/
/* 					<img class='cat_preview' src={{ asset('uploads/') }}{{category.medias[0].path}}/>*/
/* 					<a class='cat_title_preview' href="{{ path('products_category',  { 'id': category.id}) }}"><span class=''>{{ category.name}}</span></a>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* */
/* 				{% endif%}*/
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
/* <!-- <div id="pst_slide">*/
/* <a href="#">*/
/* <div id="pst_slides">*/
/* <img class="pst_slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* <img class="pst_slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* <img class="pst_slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* <img class="pst_slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* <img class="pst_slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* </div>*/
/* </a>*/
/* <img id="gaucheArrow" class="fleches" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* <img id="droiteArrow" class="fleches" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* <div id="points"/> -->*/
/* </div>*/
/* </div>*/
/* </section>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>*/
/* */
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
