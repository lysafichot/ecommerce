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
        $__internal_016823fa5abecf2210a7268c9e9f7837dc67c18b223ea58f6459be4cdb9e34a2 = $this->env->getExtension("native_profiler");
        $__internal_016823fa5abecf2210a7268c9e9f7837dc67c18b223ea58f6459be4cdb9e34a2->enter($__internal_016823fa5abecf2210a7268c9e9f7837dc67c18b223ea58f6459be4cdb9e34a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016823fa5abecf2210a7268c9e9f7837dc67c18b223ea58f6459be4cdb9e34a2->leave($__internal_016823fa5abecf2210a7268c9e9f7837dc67c18b223ea58f6459be4cdb9e34a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43dc7d8c29fe140a8f4e77df184f8ee215ec948e5f9773d1f8ba8ff5d27ae137 = $this->env->getExtension("native_profiler");
        $__internal_43dc7d8c29fe140a8f4e77df184f8ee215ec948e5f9773d1f8ba8ff5d27ae137->enter($__internal_43dc7d8c29fe140a8f4e77df184f8ee215ec948e5f9773d1f8ba8ff5d27ae137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_43dc7d8c29fe140a8f4e77df184f8ee215ec948e5f9773d1f8ba8ff5d27ae137->leave($__internal_43dc7d8c29fe140a8f4e77df184f8ee215ec948e5f9773d1f8ba8ff5d27ae137_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_897fd63e32e77f50e9a4ff07fdbbff7b69d688b5bbff3a6717ddc8413188649a = $this->env->getExtension("native_profiler");
        $__internal_897fd63e32e77f50e9a4ff07fdbbff7b69d688b5bbff3a6717ddc8413188649a->enter($__internal_897fd63e32e77f50e9a4ff07fdbbff7b69d688b5bbff3a6717ddc8413188649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_897fd63e32e77f50e9a4ff07fdbbff7b69d688b5bbff3a6717ddc8413188649a->leave($__internal_897fd63e32e77f50e9a4ff07fdbbff7b69d688b5bbff3a6717ddc8413188649a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a0465fc5db72a860fd93b26bd26c38b749dab87779d1ad8c3fb102cac4b36ac = $this->env->getExtension("native_profiler");
        $__internal_3a0465fc5db72a860fd93b26bd26c38b749dab87779d1ad8c3fb102cac4b36ac->enter($__internal_3a0465fc5db72a860fd93b26bd26c38b749dab87779d1ad8c3fb102cac4b36ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<div id=\"container\">
\t\t\t\t\t<div id=\"displayList\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 23
        $context["i"] = 1;
        // line 24
        echo "
\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorieRanger"]) ? $context["categorieRanger"] : $this->getContext($context, "categorieRanger")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "\t\t\t\t\t\t\t<li><a id=\"listDiv";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" data-id='";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_category", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
            // line 27
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 28
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"allDiv\">
\t\t\t\t\t";
        // line 33
        $context["i"] = 1;
        // line 34
        echo "
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorieRanger"]) ? $context["categorieRanger"] : $this->getContext($context, "categorieRanger")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "\t\t\t\t\t<div data-id='";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "' id=\"div";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class='sousmenu'>


\t\t\t\t\t\t";
            // line 39
            if ($this->getAttribute($context["category"], "children", array(), "any", true, true)) {
                // line 40
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                    echo "\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</span></a>

\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 47
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"slider\">
\t\t\t\t<img class=\"slide\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/fixtures/mac.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<!-- <a href=\"#\">
\t\t\t<div id=\"slides\">
\t\t\t<img class=\"slide\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<img class=\"slide\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t<img class=\"slide\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t<img class=\"slide\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<img class=\"slide\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"bullets\"/> -->

\t\t</section>

\t\t<section id=\"button_div\">
\t\t\t<div id=\"categories\">
\t\t\t\t";
        // line 74
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))) {
            // line 75
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 76
                echo "\t\t\t\t<div class='category_preview'>
\t\t\t\t\t<img class='cat_preview' src=";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "/>
\t\t\t\t\t<a class='cat_title_preview' href=\"";
                // line 78
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
            // line 81
            echo "
\t\t\t\t";
        }
        // line 83
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
<img class=\"pst_slide\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
<img class=\"pst_slide\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
<img class=\"pst_slide\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
<img class=\"pst_slide\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
</div>
</a>
<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
<div id=\"points\"/> -->
</div>
</div>
</section>
</div>
";
        
        $__internal_3a0465fc5db72a860fd93b26bd26c38b749dab87779d1ad8c3fb102cac4b36ac->leave($__internal_3a0465fc5db72a860fd93b26bd26c38b749dab87779d1ad8c3fb102cac4b36ac_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_0fec5f14474271bf20e509e0175ddd327835def2037517cd580caeb176009d66 = $this->env->getExtension("native_profiler");
        $__internal_0fec5f14474271bf20e509e0175ddd327835def2037517cd580caeb176009d66->enter($__internal_0fec5f14474271bf20e509e0175ddd327835def2037517cd580caeb176009d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_0fec5f14474271bf20e509e0175ddd327835def2037517cd580caeb176009d66->leave($__internal_0fec5f14474271bf20e509e0175ddd327835def2037517cd580caeb176009d66_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_fd4e19226b19143583b1d88a6cc6ff536326fc2a698b80e4e6fb4783c63bd3b4 = $this->env->getExtension("native_profiler");
        $__internal_fd4e19226b19143583b1d88a6cc6ff536326fc2a698b80e4e6fb4783c63bd3b4->enter($__internal_fd4e19226b19143583b1d88a6cc6ff536326fc2a698b80e4e6fb4783c63bd3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_fd4e19226b19143583b1d88a6cc6ff536326fc2a698b80e4e6fb4783c63bd3b4->leave($__internal_fd4e19226b19143583b1d88a6cc6ff536326fc2a698b80e4e6fb4783c63bd3b4_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_18a8e58e3c3992f39a67833df29fb9270b1e95fd817e44202703555b816f5ff5 = $this->env->getExtension("native_profiler");
        $__internal_18a8e58e3c3992f39a67833df29fb9270b1e95fd817e44202703555b816f5ff5->enter($__internal_18a8e58e3c3992f39a67833df29fb9270b1e95fd817e44202703555b816f5ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_18a8e58e3c3992f39a67833df29fb9270b1e95fd817e44202703555b816f5ff5->leave($__internal_18a8e58e3c3992f39a67833df29fb9270b1e95fd817e44202703555b816f5ff5_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7d46bba090e7b42cc13214bbaa94a1d3548714242a298a5204541ed2d81fe1e = $this->env->getExtension("native_profiler");
        $__internal_f7d46bba090e7b42cc13214bbaa94a1d3548714242a298a5204541ed2d81fe1e->enter($__internal_f7d46bba090e7b42cc13214bbaa94a1d3548714242a298a5204541ed2d81fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

";
        // line 121
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f7d46bba090e7b42cc13214bbaa94a1d3548714242a298a5204541ed2d81fe1e->leave($__internal_f7d46bba090e7b42cc13214bbaa94a1d3548714242a298a5204541ed2d81fe1e_prof);

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
        return array (  370 => 121,  364 => 119,  358 => 118,  349 => 114,  343 => 113,  329 => 12,  315 => 9,  301 => 105,  297 => 104,  291 => 101,  287 => 100,  283 => 99,  279 => 98,  275 => 97,  259 => 83,  255 => 81,  244 => 78,  239 => 77,  236 => 76,  231 => 75,  229 => 74,  219 => 67,  215 => 66,  209 => 63,  205 => 62,  201 => 61,  197 => 60,  193 => 59,  186 => 55,  178 => 49,  172 => 48,  170 => 47,  166 => 45,  163 => 44,  151 => 41,  146 => 40,  144 => 39,  135 => 36,  131 => 35,  128 => 34,  126 => 33,  120 => 29,  114 => 28,  112 => 27,  101 => 26,  97 => 25,  94 => 24,  92 => 23,  80 => 13,  78 => 12,  74 => 10,  72 => 9,  66 => 8,  52 => 5,  40 => 3,  11 => 1,);
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
/* 				<div id="container">*/
/* 					<div id="displayList">*/
/* 						<ul>*/
/* 							{% set i = 1 %}*/
/* */
/* 							{% for categorie in categorieRanger %}*/
/* 							<li><a id="listDiv{{i}}" data-id='{{i}}' href="{{ path('products_category',  { 'id': categorie.id}) }}"> {{categorie.name}}</a></li>*/
/* 							{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="allDiv">*/
/* 					{% set i = 1 %}*/
/* */
/* 					{% for category in categorieRanger %}*/
/* 					<div data-id='{{i}}' id="div{{i}}" class='sousmenu'>*/
/* */
/* */
/* 						{% if category.children is defined %}*/
/* 						{% for category in category.children %}*/
/* 						<a href="{{ path('products_category',  { 'id': category.id}) }}"><span>{{category.name}}</span></a>*/
/* */
/* 						{% endfor %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* */
/* 					{% set i = i + 1 %}*/
/* 					{% endfor %}*/
/* */
/* */
/* 				</div>*/
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
/* <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>*/
/* */
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
