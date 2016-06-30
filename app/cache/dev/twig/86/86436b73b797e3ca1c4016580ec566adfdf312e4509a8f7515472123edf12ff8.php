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
        $__internal_7769b09e9d3be1832ffbc223526a18627d6db400d577a32b88613de41df363aa = $this->env->getExtension("native_profiler");
        $__internal_7769b09e9d3be1832ffbc223526a18627d6db400d577a32b88613de41df363aa->enter($__internal_7769b09e9d3be1832ffbc223526a18627d6db400d577a32b88613de41df363aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7769b09e9d3be1832ffbc223526a18627d6db400d577a32b88613de41df363aa->leave($__internal_7769b09e9d3be1832ffbc223526a18627d6db400d577a32b88613de41df363aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_187d50d0386f94ec04a32c76db96b79b562cdf3b8cab289dd830360308ac8371 = $this->env->getExtension("native_profiler");
        $__internal_187d50d0386f94ec04a32c76db96b79b562cdf3b8cab289dd830360308ac8371->enter($__internal_187d50d0386f94ec04a32c76db96b79b562cdf3b8cab289dd830360308ac8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_187d50d0386f94ec04a32c76db96b79b562cdf3b8cab289dd830360308ac8371->leave($__internal_187d50d0386f94ec04a32c76db96b79b562cdf3b8cab289dd830360308ac8371_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_86428676e7939900fdfa54ba183f496dc21bde91307ed70b6db1d9aaf2087918 = $this->env->getExtension("native_profiler");
        $__internal_86428676e7939900fdfa54ba183f496dc21bde91307ed70b6db1d9aaf2087918->enter($__internal_86428676e7939900fdfa54ba183f496dc21bde91307ed70b6db1d9aaf2087918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_86428676e7939900fdfa54ba183f496dc21bde91307ed70b6db1d9aaf2087918->leave($__internal_86428676e7939900fdfa54ba183f496dc21bde91307ed70b6db1d9aaf2087918_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc7c189f2133b1b840fe45c2706f68b49bf37b0f143e8687eddafd254c0a2fe3 = $this->env->getExtension("native_profiler");
        $__internal_bc7c189f2133b1b840fe45c2706f68b49bf37b0f143e8687eddafd254c0a2fe3->enter($__internal_bc7c189f2133b1b840fe45c2706f68b49bf37b0f143e8687eddafd254c0a2fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc7c189f2133b1b840fe45c2706f68b49bf37b0f143e8687eddafd254c0a2fe3->leave($__internal_bc7c189f2133b1b840fe45c2706f68b49bf37b0f143e8687eddafd254c0a2fe3_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_093b9412e03c3e7c5026e05cc85df13d7fbe443c6be9cd04d6f600425d914103 = $this->env->getExtension("native_profiler");
        $__internal_093b9412e03c3e7c5026e05cc85df13d7fbe443c6be9cd04d6f600425d914103->enter($__internal_093b9412e03c3e7c5026e05cc85df13d7fbe443c6be9cd04d6f600425d914103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_093b9412e03c3e7c5026e05cc85df13d7fbe443c6be9cd04d6f600425d914103->leave($__internal_093b9412e03c3e7c5026e05cc85df13d7fbe443c6be9cd04d6f600425d914103_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_4748ca660d4db87f69ee6c3ea4839d57631786498e93e19145246b779d594531 = $this->env->getExtension("native_profiler");
        $__internal_4748ca660d4db87f69ee6c3ea4839d57631786498e93e19145246b779d594531->enter($__internal_4748ca660d4db87f69ee6c3ea4839d57631786498e93e19145246b779d594531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_4748ca660d4db87f69ee6c3ea4839d57631786498e93e19145246b779d594531->leave($__internal_4748ca660d4db87f69ee6c3ea4839d57631786498e93e19145246b779d594531_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_92fd3c6977b5852393cf214ebbd52d5644ffddcf627ec299a1ec5cf6c9b8a2c3 = $this->env->getExtension("native_profiler");
        $__internal_92fd3c6977b5852393cf214ebbd52d5644ffddcf627ec299a1ec5cf6c9b8a2c3->enter($__internal_92fd3c6977b5852393cf214ebbd52d5644ffddcf627ec299a1ec5cf6c9b8a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_92fd3c6977b5852393cf214ebbd52d5644ffddcf627ec299a1ec5cf6c9b8a2c3->leave($__internal_92fd3c6977b5852393cf214ebbd52d5644ffddcf627ec299a1ec5cf6c9b8a2c3_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44352ba70348233284f549deee10660eebde9779e105ab8e9c1611809d83e84d = $this->env->getExtension("native_profiler");
        $__internal_44352ba70348233284f549deee10660eebde9779e105ab8e9c1611809d83e84d->enter($__internal_44352ba70348233284f549deee10660eebde9779e105ab8e9c1611809d83e84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script> -->

";
        // line 90
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_44352ba70348233284f549deee10660eebde9779e105ab8e9c1611809d83e84d->leave($__internal_44352ba70348233284f549deee10660eebde9779e105ab8e9c1611809d83e84d_prof);

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
/*     <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script> -->*/
/* */
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
