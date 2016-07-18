<?php

/* ::index.html.twig */
class __TwigTemplate_80b1feefd5b17cdb638bc503ca30af8ec5430f28c768ef2d68d856b986a5870c extends Twig_Template
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
        $__internal_b54a0dff53d12909bba82de92188ffa9ab5f5684c21a6a98723d5782fd7af8f5 = $this->env->getExtension("native_profiler");
        $__internal_b54a0dff53d12909bba82de92188ffa9ab5f5684c21a6a98723d5782fd7af8f5->enter($__internal_b54a0dff53d12909bba82de92188ffa9ab5f5684c21a6a98723d5782fd7af8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54a0dff53d12909bba82de92188ffa9ab5f5684c21a6a98723d5782fd7af8f5->leave($__internal_b54a0dff53d12909bba82de92188ffa9ab5f5684c21a6a98723d5782fd7af8f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a26c88037547643e0153a271c40a721f4fdcfecfa84f5c70c15a7ee7b594101e = $this->env->getExtension("native_profiler");
        $__internal_a26c88037547643e0153a271c40a721f4fdcfecfa84f5c70c15a7ee7b594101e->enter($__internal_a26c88037547643e0153a271c40a721f4fdcfecfa84f5c70c15a7ee7b594101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_a26c88037547643e0153a271c40a721f4fdcfecfa84f5c70c15a7ee7b594101e->leave($__internal_a26c88037547643e0153a271c40a721f4fdcfecfa84f5c70c15a7ee7b594101e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d066cd803056ff12562c8165912f04e8146422cc6f23021891e25bc8d21f9c3 = $this->env->getExtension("native_profiler");
        $__internal_7d066cd803056ff12562c8165912f04e8146422cc6f23021891e25bc8d21f9c3->enter($__internal_7d066cd803056ff12562c8165912f04e8146422cc6f23021891e25bc8d21f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_7d066cd803056ff12562c8165912f04e8146422cc6f23021891e25bc8d21f9c3->leave($__internal_7d066cd803056ff12562c8165912f04e8146422cc6f23021891e25bc8d21f9c3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d7da49d7af4de8e15dec81a1c766cc723483763ea68a6f802fbc1b15098184 = $this->env->getExtension("native_profiler");
        $__internal_23d7da49d7af4de8e15dec81a1c766cc723483763ea68a6f802fbc1b15098184->enter($__internal_23d7da49d7af4de8e15dec81a1c766cc723483763ea68a6f802fbc1b15098184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t</section>

\t\t<section id=\"button_div\">
\t\t\t<div id=\"categories\">
\t\t\t\t";
        // line 61
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))) {
            // line 62
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 63
                echo "\t\t\t\t<div class='category_preview'>
\t\t\t\t\t<img class='cat_preview' src=";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "/>
\t\t\t\t\t<a class='cat_title_preview' href=\"";
                // line 65
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
            // line 68
            echo "
\t\t\t\t";
        }
        // line 70
        echo "
\t\t\t</div>
\t\t\t<div class=\"promo\">

\t\t\t</div>
\t\t\t<div class=\"other\">

\t\t\t</div>
\t\t</section>

\t\t<section id=\"pst_div\">

\t\t</div>
\t</div>
</section>
</div>
";
        
        $__internal_23d7da49d7af4de8e15dec81a1c766cc723483763ea68a6f802fbc1b15098184->leave($__internal_23d7da49d7af4de8e15dec81a1c766cc723483763ea68a6f802fbc1b15098184_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_6b1900f2304e8db081b8e5b550a0ecfc5c4c9cbf9691e89d98c8b1f489849e03 = $this->env->getExtension("native_profiler");
        $__internal_6b1900f2304e8db081b8e5b550a0ecfc5c4c9cbf9691e89d98c8b1f489849e03->enter($__internal_6b1900f2304e8db081b8e5b550a0ecfc5c4c9cbf9691e89d98c8b1f489849e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_6b1900f2304e8db081b8e5b550a0ecfc5c4c9cbf9691e89d98c8b1f489849e03->leave($__internal_6b1900f2304e8db081b8e5b550a0ecfc5c4c9cbf9691e89d98c8b1f489849e03_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_1433ca54a130945370061cdd32d781e721670d679bed153e0fcf5f0eeb1e6d75 = $this->env->getExtension("native_profiler");
        $__internal_1433ca54a130945370061cdd32d781e721670d679bed153e0fcf5f0eeb1e6d75->enter($__internal_1433ca54a130945370061cdd32d781e721670d679bed153e0fcf5f0eeb1e6d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_1433ca54a130945370061cdd32d781e721670d679bed153e0fcf5f0eeb1e6d75->leave($__internal_1433ca54a130945370061cdd32d781e721670d679bed153e0fcf5f0eeb1e6d75_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_945161ca7d80c90756b3d4ff4ea285cda6b9beedbe93f6c96f055ec0b2065053 = $this->env->getExtension("native_profiler");
        $__internal_945161ca7d80c90756b3d4ff4ea285cda6b9beedbe93f6c96f055ec0b2065053->enter($__internal_945161ca7d80c90756b3d4ff4ea285cda6b9beedbe93f6c96f055ec0b2065053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_945161ca7d80c90756b3d4ff4ea285cda6b9beedbe93f6c96f055ec0b2065053->leave($__internal_945161ca7d80c90756b3d4ff4ea285cda6b9beedbe93f6c96f055ec0b2065053_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd0f69a9e4ac185304a922b706ebc56fc4efb58ee840e7ad53bc07d282645616 = $this->env->getExtension("native_profiler");
        $__internal_dd0f69a9e4ac185304a922b706ebc56fc4efb58ee840e7ad53bc07d282645616->enter($__internal_dd0f69a9e4ac185304a922b706ebc56fc4efb58ee840e7ad53bc07d282645616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

";
        // line 96
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_dd0f69a9e4ac185304a922b706ebc56fc4efb58ee840e7ad53bc07d282645616->leave($__internal_dd0f69a9e4ac185304a922b706ebc56fc4efb58ee840e7ad53bc07d282645616_prof);

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
        return array (  303 => 96,  297 => 94,  291 => 93,  282 => 89,  276 => 88,  262 => 12,  248 => 9,  225 => 70,  221 => 68,  210 => 65,  205 => 64,  202 => 63,  197 => 62,  195 => 61,  186 => 55,  178 => 49,  172 => 48,  170 => 47,  166 => 45,  163 => 44,  151 => 41,  146 => 40,  144 => 39,  135 => 36,  131 => 35,  128 => 34,  126 => 33,  120 => 29,  114 => 28,  112 => 27,  101 => 26,  97 => 25,  94 => 24,  92 => 23,  80 => 13,  78 => 12,  74 => 10,  72 => 9,  66 => 8,  52 => 5,  40 => 3,  11 => 1,);
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
/* */
/* 		</div>*/
/* 	</div>*/
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
