<?php

/* ProductBundle:Product:categorised.html.twig */
class __TwigTemplate_903f34f9ea4973d4242885fb7151898969b9268a2c93b3dedf6aa778fb814aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Product:categorised.html.twig", 1);
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
        $__internal_04ccdc6d3d933f475988c2861dec4135d536bced9595f8a664d9cf749d50fcc2 = $this->env->getExtension("native_profiler");
        $__internal_04ccdc6d3d933f475988c2861dec4135d536bced9595f8a664d9cf749d50fcc2->enter($__internal_04ccdc6d3d933f475988c2861dec4135d536bced9595f8a664d9cf749d50fcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:categorised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ccdc6d3d933f475988c2861dec4135d536bced9595f8a664d9cf749d50fcc2->leave($__internal_04ccdc6d3d933f475988c2861dec4135d536bced9595f8a664d9cf749d50fcc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a226af9b6cd20aa82836f6778b6da3406df62644be640f4769881a0d2495a3dc = $this->env->getExtension("native_profiler");
        $__internal_a226af9b6cd20aa82836f6778b6da3406df62644be640f4769881a0d2495a3dc->enter($__internal_a226af9b6cd20aa82836f6778b6da3406df62644be640f4769881a0d2495a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_a226af9b6cd20aa82836f6778b6da3406df62644be640f4769881a0d2495a3dc->leave($__internal_a226af9b6cd20aa82836f6778b6da3406df62644be640f4769881a0d2495a3dc_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8ce122ed48a9b33d9f98749a5a50a25123226d2b08701a4f0f48e3bdf6c68ac = $this->env->getExtension("native_profiler");
        $__internal_c8ce122ed48a9b33d9f98749a5a50a25123226d2b08701a4f0f48e3bdf6c68ac->enter($__internal_c8ce122ed48a9b33d9f98749a5a50a25123226d2b08701a4f0f48e3bdf6c68ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_c8ce122ed48a9b33d9f98749a5a50a25123226d2b08701a4f0f48e3bdf6c68ac->leave($__internal_c8ce122ed48a9b33d9f98749a5a50a25123226d2b08701a4f0f48e3bdf6c68ac_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_45f20f8951f4d788fe88b08d3144c3a452c60bbc48bcccecbe4a6ff1ec765fc2 = $this->env->getExtension("native_profiler");
        $__internal_45f20f8951f4d788fe88b08d3144c3a452c60bbc48bcccecbe4a6ff1ec765fc2->enter($__internal_45f20f8951f4d788fe88b08d3144c3a452c60bbc48bcccecbe4a6ff1ec765fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "<div id='big_container'>
\t<div id='sidebar'></div>
\t<div id='container_products'>
\t\t<div id='search_login'>
\t\t\t";
        // line 14
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 15
        echo "\t\t</div>
\t\t<div id=\"main_div\">
\t\t\t<div id='contents'>

\t\t\t\t<div  class='arbre'>
\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "path"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "\t\t\t\t\t<span>| </span><a class='path' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><span class=''>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span></a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t";
        $context["catego"] = twig_last($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "path"), "method"));
        // line 25
        echo "
\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div id=category_theme>
\t\t\t\t\t<div id='content-cat'>

\t\t\t\t\t\t<div id='products'>

\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<div class='cart_product'>

\t\t\t\t\t\t\t\t<div class='image_product'>
\t\t\t\t\t\t\t\t\t<img src=";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), 0, array(), "array"), "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='infos_product'>
\t\t\t\t\t\t\t\t\t<div class='designation'>
\t\t\t\t\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
            // line 44
            if (((twig_length_filter($this->env, $this->getAttribute($context["product"], "productsDerived", array())) - 1) == 1)) {
                // line 45
                echo "
\t\t\t\t\t\t\t\t\t<p>";
                // line 46
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["product"], "productsDerived", array())) - 1), "html", null, true);
                echo " produit similaire</p>
\t\t\t\t\t\t\t\t\t";
            } elseif (((twig_length_filter($this->env, $this->getAttribute(            // line 47
$context["product"], "productsDerived", array())) - 1) > 1)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["product"], "productsDerived", array())) - 1), "html", null, true);
                echo " produits similaires</p>

\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t\t\t\t\t<span>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), 0, array(), "array"), "price", array()), "html", null, true);
            echo " \$</span>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_product", array("productId" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">+</a>
\t\t\t\t\t\t\t\t\t<button><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_panier", array("id" => $this->getAttribute((isset($context["catego"]) ? $context["catego"] : $this->getContext($context, "catego")), "id", array()), "productId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">Ajouter au panier</a></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>

";
        
        $__internal_45f20f8951f4d788fe88b08d3144c3a452c60bbc48bcccecbe4a6ff1ec765fc2->leave($__internal_45f20f8951f4d788fe88b08d3144c3a452c60bbc48bcccecbe4a6ff1ec765fc2_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_9aeeeb7b8f83e840772a1fcb6ea29125c32ad83d9e9fe59add140a65c0a5ca5d = $this->env->getExtension("native_profiler");
        $__internal_9aeeeb7b8f83e840772a1fcb6ea29125c32ad83d9e9fe59add140a65c0a5ca5d->enter($__internal_9aeeeb7b8f83e840772a1fcb6ea29125c32ad83d9e9fe59add140a65c0a5ca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_9aeeeb7b8f83e840772a1fcb6ea29125c32ad83d9e9fe59add140a65c0a5ca5d->leave($__internal_9aeeeb7b8f83e840772a1fcb6ea29125c32ad83d9e9fe59add140a65c0a5ca5d_prof);

    }

    // line 14
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_26a6a17733aa0475fecb22ee8e6729e6d7b796b611d48f9510deadf8f393db53 = $this->env->getExtension("native_profiler");
        $__internal_26a6a17733aa0475fecb22ee8e6729e6d7b796b611d48f9510deadf8f393db53->enter($__internal_26a6a17733aa0475fecb22ee8e6729e6d7b796b611d48f9510deadf8f393db53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_26a6a17733aa0475fecb22ee8e6729e6d7b796b611d48f9510deadf8f393db53->leave($__internal_26a6a17733aa0475fecb22ee8e6729e6d7b796b611d48f9510deadf8f393db53_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Product:categorised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 14,  199 => 9,  183 => 58,  173 => 54,  169 => 53,  165 => 52,  162 => 51,  155 => 48,  153 => 47,  149 => 46,  146 => 45,  144 => 44,  138 => 41,  130 => 37,  125 => 34,  121 => 33,  111 => 25,  108 => 24,  97 => 22,  93 => 21,  87 => 20,  80 => 15,  78 => 14,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* <div id='big_container'>*/
/* 	<div id='sidebar'></div>*/
/* 	<div id='container_products'>*/
/* 		<div id='search_login'>*/
/* 			{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* 		</div>*/
/* 		<div id="main_div">*/
/* 			<div id='contents'>*/
/* */
/* 				<div  class='arbre'>*/
/* 					<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* 					{% for category in app.session.get('path') %}*/
/* 					<span>| </span><a class='path' href="{{ path('products_category',  { 'id': category.id}) }}"><span class=''>{{ category.name}}</span></a>*/
/* 					{%endfor%}*/
/* 					{% set catego =app.session.get('path')|last%}*/
/* */
/* 					<a href=""></a>*/
/* 				</div>*/
/* 				<div id=category_theme>*/
/* 					<div id='content-cat'>*/
/* */
/* 						<div id='products'>*/
/* */
/* 							{% for product in products %}*/
/* 							<div class='cart_product'>*/
/* */
/* 								<div class='image_product'>*/
/* 									<img src={{ asset('uploads/') }}{{product.productsDerived[0].medias[0].path}}/>*/
/* 								</div>*/
/* 								<div class='infos_product'>*/
/* 									<div class='designation'>*/
/* 										{{ product.name}}*/
/* 									</div>*/
/* */
/* 									{% if product.productsDerived|length - 1 == 1 %}*/
/* */
/* 									<p>{{product.productsDerived|length - 1}} produit similaire</p>*/
/* 									{% elseif product.productsDerived|length - 1 > 1 %}*/
/* 									<p>{{product.productsDerived|length - 1}} produits similaires</p>*/
/* */
/* 									{% endif %}*/
/* */
/* 									<span>{{product.productsDerived[0].price}} $</span>*/
/* 									<a href="{{ path('view_product',{'productId': product.id}) }}">+</a>*/
/* 									<button><a href="{{ path('add_panier',  { 'id':catego.id,'productId': product.productsDerived[0].id}) }}">Ajouter au panier</a></button>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* */
/* {%endblock%}*/
