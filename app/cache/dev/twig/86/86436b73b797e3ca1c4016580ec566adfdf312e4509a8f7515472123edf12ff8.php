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
        $__internal_0ca5a3b8ce2f4878fcbf810e6eb1da88181b8741dc7b9aa97e692af84814ea23 = $this->env->getExtension("native_profiler");
        $__internal_0ca5a3b8ce2f4878fcbf810e6eb1da88181b8741dc7b9aa97e692af84814ea23->enter($__internal_0ca5a3b8ce2f4878fcbf810e6eb1da88181b8741dc7b9aa97e692af84814ea23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca5a3b8ce2f4878fcbf810e6eb1da88181b8741dc7b9aa97e692af84814ea23->leave($__internal_0ca5a3b8ce2f4878fcbf810e6eb1da88181b8741dc7b9aa97e692af84814ea23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_158c41a2bb37e075dab65a7bbf5280ef15d597ca1ea369c703413db78614ffa3 = $this->env->getExtension("native_profiler");
        $__internal_158c41a2bb37e075dab65a7bbf5280ef15d597ca1ea369c703413db78614ffa3->enter($__internal_158c41a2bb37e075dab65a7bbf5280ef15d597ca1ea369c703413db78614ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_158c41a2bb37e075dab65a7bbf5280ef15d597ca1ea369c703413db78614ffa3->leave($__internal_158c41a2bb37e075dab65a7bbf5280ef15d597ca1ea369c703413db78614ffa3_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_12c2696e5aa2afb826064399c17f41edfb8bca0d4dac4a48e21de67ff167ca71 = $this->env->getExtension("native_profiler");
        $__internal_12c2696e5aa2afb826064399c17f41edfb8bca0d4dac4a48e21de67ff167ca71->enter($__internal_12c2696e5aa2afb826064399c17f41edfb8bca0d4dac4a48e21de67ff167ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_12c2696e5aa2afb826064399c17f41edfb8bca0d4dac4a48e21de67ff167ca71->leave($__internal_12c2696e5aa2afb826064399c17f41edfb8bca0d4dac4a48e21de67ff167ca71_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a908b25a4518ff1fcdc45505c67e60a284565acbc535e57f641e496683ef333 = $this->env->getExtension("native_profiler");
        $__internal_6a908b25a4518ff1fcdc45505c67e60a284565acbc535e57f641e496683ef333->enter($__internal_6a908b25a4518ff1fcdc45505c67e60a284565acbc535e57f641e496683ef333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a908b25a4518ff1fcdc45505c67e60a284565acbc535e57f641e496683ef333->leave($__internal_6a908b25a4518ff1fcdc45505c67e60a284565acbc535e57f641e496683ef333_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_bc9295ce08a03c93b9d044a58657e28852a6f545a4857992296d3b274135cb14 = $this->env->getExtension("native_profiler");
        $__internal_bc9295ce08a03c93b9d044a58657e28852a6f545a4857992296d3b274135cb14->enter($__internal_bc9295ce08a03c93b9d044a58657e28852a6f545a4857992296d3b274135cb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_bc9295ce08a03c93b9d044a58657e28852a6f545a4857992296d3b274135cb14->leave($__internal_bc9295ce08a03c93b9d044a58657e28852a6f545a4857992296d3b274135cb14_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_a666f999817dec42e88eced1f64eff8807f71107136db1de1511201e4b30969e = $this->env->getExtension("native_profiler");
        $__internal_a666f999817dec42e88eced1f64eff8807f71107136db1de1511201e4b30969e->enter($__internal_a666f999817dec42e88eced1f64eff8807f71107136db1de1511201e4b30969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_a666f999817dec42e88eced1f64eff8807f71107136db1de1511201e4b30969e->leave($__internal_a666f999817dec42e88eced1f64eff8807f71107136db1de1511201e4b30969e_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f4b1fbeec83cd519be8688cdc2c63adffde7fdc089a4ab5e02c1c8a484f2b310 = $this->env->getExtension("native_profiler");
        $__internal_f4b1fbeec83cd519be8688cdc2c63adffde7fdc089a4ab5e02c1c8a484f2b310->enter($__internal_f4b1fbeec83cd519be8688cdc2c63adffde7fdc089a4ab5e02c1c8a484f2b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_f4b1fbeec83cd519be8688cdc2c63adffde7fdc089a4ab5e02c1c8a484f2b310->leave($__internal_f4b1fbeec83cd519be8688cdc2c63adffde7fdc089a4ab5e02c1c8a484f2b310_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c80d9222fb5979d8afe82383b978fc51edcae739f840849839dc9db84c33684f = $this->env->getExtension("native_profiler");
        $__internal_c80d9222fb5979d8afe82383b978fc51edcae739f840849839dc9db84c33684f->enter($__internal_c80d9222fb5979d8afe82383b978fc51edcae739f840849839dc9db84c33684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c80d9222fb5979d8afe82383b978fc51edcae739f840849839dc9db84c33684f->leave($__internal_c80d9222fb5979d8afe82383b978fc51edcae739f840849839dc9db84c33684f_prof);

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
        return array (  271 => 88,  265 => 87,  256 => 83,  250 => 82,  236 => 12,  222 => 9,  208 => 74,  204 => 73,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  182 => 66,  166 => 52,  162 => 50,  151 => 47,  146 => 46,  143 => 45,  138 => 44,  136 => 43,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  93 => 24,  80 => 13,  78 => 12,  74 => 10,  72 => 9,  66 => 8,  52 => 5,  40 => 3,  11 => 1,);
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
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
