<?php

/* ProductBundle:Panier:view.html.twig */
class __TwigTemplate_cd0f8fdb2335a5c928220031cc7a2ba5888faf8d719c8d018ee5e818cd3f4409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Panier:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu_auth' => array($this, 'block_menu_auth'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80c28bce54826db1818c2a41e272b9c9432e42cd06f44026cd81f18c652f87a = $this->env->getExtension("native_profiler");
        $__internal_f80c28bce54826db1818c2a41e272b9c9432e42cd06f44026cd81f18c652f87a->enter($__internal_f80c28bce54826db1818c2a41e272b9c9432e42cd06f44026cd81f18c652f87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80c28bce54826db1818c2a41e272b9c9432e42cd06f44026cd81f18c652f87a->leave($__internal_f80c28bce54826db1818c2a41e272b9c9432e42cd06f44026cd81f18c652f87a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_567019108ad4c91d071edd5d50435bbb1d18fc3d65d5c016a206f7dee5fab0f2 = $this->env->getExtension("native_profiler");
        $__internal_567019108ad4c91d071edd5d50435bbb1d18fc3d65d5c016a206f7dee5fab0f2->enter($__internal_567019108ad4c91d071edd5d50435bbb1d18fc3d65d5c016a206f7dee5fab0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_567019108ad4c91d071edd5d50435bbb1d18fc3d65d5c016a206f7dee5fab0f2->leave($__internal_567019108ad4c91d071edd5d50435bbb1d18fc3d65d5c016a206f7dee5fab0f2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1c671c6c0559234c72e586919442db505826fe3e4567914f964223a6ea9f83a = $this->env->getExtension("native_profiler");
        $__internal_f1c671c6c0559234c72e586919442db505826fe3e4567914f964223a6ea9f83a->enter($__internal_f1c671c6c0559234c72e586919442db505826fe3e4567914f964223a6ea9f83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_f1c671c6c0559234c72e586919442db505826fe3e4567914f964223a6ea9f83a->leave($__internal_f1c671c6c0559234c72e586919442db505826fe3e4567914f964223a6ea9f83a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_93b1c718bdf9a1454b80089ca6a7762715f0b59307460db8a90346d7e96c435f = $this->env->getExtension("native_profiler");
        $__internal_93b1c718bdf9a1454b80089ca6a7762715f0b59307460db8a90346d7e96c435f->enter($__internal_93b1c718bdf9a1454b80089ca6a7762715f0b59307460db8a90346d7e96c435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t\t<div  class='arbre'>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>

\t\t\t<a href=\"\"></a>
\t\t</div>
\t\t<div id='thepanier'>
\t\t\t<p id='detail_title'>Detail du panier :</p>
\t\t\t<div id='panier_view'>
\t\t\t";
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "products"), "method")) > 0)) {
            // line 26
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "products"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "
\t\t\t\t<div class='product_list'>
\t\t\t\t\t<div class='preview_cart'><img src=";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "derived", array()), "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "/></div>
\t\t\t\t\t<div class=product_cart>
\t\t\t\t\t\t<p><span class='designation_cart'>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "nameDerived", array()), "html", null, true);
                echo "</span></p>
\t\t\t\t\t\t<p class='qte'>
\t\t\t\t\t\t\t<span class='price_cart'> Prix unite: ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()), "html", null, true);
                echo " \$</span>
\t\t\t\t\t\t\t<span class='qte_cart'>Qte: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "count", array()), "html", null, true);
                echo "<button><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quantity_panier", array("id" => $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "id", array()), "option" => 0)), "html", null, true);
                echo "\">-</a></button><button><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quantity_panier", array("id" => $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "id", array()), "option" => 1)), "html", null, true);
                echo "\">+</a></button></span>
\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_panier", array("id" => $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "id", array()))), "html", null, true);
                echo "\">x</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p><span class='total'_cart'>Prix: ";
                // line 37
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()) * $this->getAttribute($context["product"], "count", array())), "html", null, true);
                echo " \$</span></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</div>
\t\t\t<p id='total_panier'>Total : ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
            echo " \$<p>
\t\t\t";
        } else {
            // line 44
            echo "\t\t\t<p>Votre panier est vide</p>
\t\t\t";
        }
        // line 46
        echo "


\t\t\t</div>



\t\t</div>
\t</div>
\t";
        
        $__internal_93b1c718bdf9a1454b80089ca6a7762715f0b59307460db8a90346d7e96c435f->leave($__internal_93b1c718bdf9a1454b80089ca6a7762715f0b59307460db8a90346d7e96c435f_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b852fcdfb266176fb5bbc86b9b02692bcba1fd2239d0eb3cc8804e9d4d380c1 = $this->env->getExtension("native_profiler");
        $__internal_4b852fcdfb266176fb5bbc86b9b02692bcba1fd2239d0eb3cc8804e9d4d380c1->enter($__internal_4b852fcdfb266176fb5bbc86b9b02692bcba1fd2239d0eb3cc8804e9d4d380c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_4b852fcdfb266176fb5bbc86b9b02692bcba1fd2239d0eb3cc8804e9d4d380c1->leave($__internal_4b852fcdfb266176fb5bbc86b9b02692bcba1fd2239d0eb3cc8804e9d4d380c1_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_4d9a4dbcb98451a399242dfdf1bbeabe2a90660affc74761624fe8125286ea54 = $this->env->getExtension("native_profiler");
        $__internal_4d9a4dbcb98451a399242dfdf1bbeabe2a90660affc74761624fe8125286ea54->enter($__internal_4d9a4dbcb98451a399242dfdf1bbeabe2a90660affc74761624fe8125286ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_4d9a4dbcb98451a399242dfdf1bbeabe2a90660affc74761624fe8125286ea54->leave($__internal_4d9a4dbcb98451a399242dfdf1bbeabe2a90660affc74761624fe8125286ea54_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Panier:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 12,  174 => 9,  158 => 46,  154 => 44,  149 => 42,  146 => 41,  136 => 37,  131 => 35,  123 => 34,  119 => 33,  114 => 31,  108 => 29,  104 => 27,  99 => 26,  97 => 25,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* <div id="main_div">*/
/* 	<div id='contents'>*/
/* */
/* 		<div  class='arbre'>*/
/* 			<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* */
/* 			<a href=""></a>*/
/* 		</div>*/
/* 		<div id='thepanier'>*/
/* 			<p id='detail_title'>Detail du panier :</p>*/
/* 			<div id='panier_view'>*/
/* 			{% if app.session.get('products')|length > 0 %}*/
/* 			{% for product in app.session.get('products') %}*/
/* */
/* 				<div class='product_list'>*/
/* 					<div class='preview_cart'><img src={{ asset('uploads/') }}{{product.derived.medias[0].path}}/></div>*/
/* 					<div class=product_cart>*/
/* 						<p><span class='designation_cart'>{{ product.derived.nameDerived}}</span></p>*/
/* 						<p class='qte'>*/
/* 							<span class='price_cart'> Prix unite: {{ product.derived.price }} $</span>*/
/* 							<span class='qte_cart'>Qte: {{ product.count}}<button><a href="{{ path('quantity_panier',  { 'id': product.derived.id, 'option': 0}) }}">-</a></button><button><a href="{{ path('quantity_panier',  { 'id': product.derived.id, 'option': 1}) }}">+</a></button></span>*/
/* 							<a href="{{ path('remove_panier',  { 'id': product.derived.id}) }}">x</a>*/
/* 						</p>*/
/* 						<p><span class='total'_cart'>Prix: {{ product.derived.price * product.count}} $</span></p>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			<p id='total_panier'>Total : {{price}} $<p>*/
/* 			{%else%}*/
/* 			<p>Votre panier est vide</p>*/
/* 			{%endif%}*/
/* */
/* */
/* */
/* 			</div>*/
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* 	{%endblock%}*/
