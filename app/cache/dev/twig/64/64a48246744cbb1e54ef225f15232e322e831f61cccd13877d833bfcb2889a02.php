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
        $__internal_bb07b5addb79257b55070ff8868a844aeb9655f391b14039a36ce307ee66a14a = $this->env->getExtension("native_profiler");
        $__internal_bb07b5addb79257b55070ff8868a844aeb9655f391b14039a36ce307ee66a14a->enter($__internal_bb07b5addb79257b55070ff8868a844aeb9655f391b14039a36ce307ee66a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:categorised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb07b5addb79257b55070ff8868a844aeb9655f391b14039a36ce307ee66a14a->leave($__internal_bb07b5addb79257b55070ff8868a844aeb9655f391b14039a36ce307ee66a14a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e189ccd486dcb6f9bbd4af2810fe18c2efc6a55f7eef6ad96929903d9f44d3fa = $this->env->getExtension("native_profiler");
        $__internal_e189ccd486dcb6f9bbd4af2810fe18c2efc6a55f7eef6ad96929903d9f44d3fa->enter($__internal_e189ccd486dcb6f9bbd4af2810fe18c2efc6a55f7eef6ad96929903d9f44d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_e189ccd486dcb6f9bbd4af2810fe18c2efc6a55f7eef6ad96929903d9f44d3fa->leave($__internal_e189ccd486dcb6f9bbd4af2810fe18c2efc6a55f7eef6ad96929903d9f44d3fa_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_e016e1d15a9ba22b07b0f00f842d25b7a6682f929fdbc28ac752de996bc052d2 = $this->env->getExtension("native_profiler");
        $__internal_e016e1d15a9ba22b07b0f00f842d25b7a6682f929fdbc28ac752de996bc052d2->enter($__internal_e016e1d15a9ba22b07b0f00f842d25b7a6682f929fdbc28ac752de996bc052d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_e016e1d15a9ba22b07b0f00f842d25b7a6682f929fdbc28ac752de996bc052d2->leave($__internal_e016e1d15a9ba22b07b0f00f842d25b7a6682f929fdbc28ac752de996bc052d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1b696a52502bec281fa7f13cf3ba60dc39e4836dbd05c6735df60d7f23bfa1 = $this->env->getExtension("native_profiler");
        $__internal_0a1b696a52502bec281fa7f13cf3ba60dc39e4836dbd05c6735df60d7f23bfa1->enter($__internal_0a1b696a52502bec281fa7f13cf3ba60dc39e4836dbd05c6735df60d7f23bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\t\t\t\t\t<a class='' href=\"";
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
\t\t\t\t\t\t\t\t\t<span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), 0, array(), "array"), "price", array()), "html", null, true);
            echo " \$</span>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_product", array("id" => $this->getAttribute((isset($context["catego"]) ? $context["catego"] : $this->getContext($context, "catego")), "id", array()), "productId" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">+</a>
\t\t\t\t\t\t\t\t\t<button><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_panier", array("id" => $this->getAttribute((isset($context["catego"]) ? $context["catego"] : $this->getContext($context, "catego")), "id", array()), "productId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">Ajouter au panier</a></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>

";
        
        $__internal_0a1b696a52502bec281fa7f13cf3ba60dc39e4836dbd05c6735df60d7f23bfa1->leave($__internal_0a1b696a52502bec281fa7f13cf3ba60dc39e4836dbd05c6735df60d7f23bfa1_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_ba3ffaf61849d0d4a5ba273af53906ad1ce208b2c1063f5ddad4a036c86fc6a4 = $this->env->getExtension("native_profiler");
        $__internal_ba3ffaf61849d0d4a5ba273af53906ad1ce208b2c1063f5ddad4a036c86fc6a4->enter($__internal_ba3ffaf61849d0d4a5ba273af53906ad1ce208b2c1063f5ddad4a036c86fc6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_ba3ffaf61849d0d4a5ba273af53906ad1ce208b2c1063f5ddad4a036c86fc6a4->leave($__internal_ba3ffaf61849d0d4a5ba273af53906ad1ce208b2c1063f5ddad4a036c86fc6a4_prof);

    }

    // line 14
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_8d08614dd68043ea10a6387e2ed443665f60df2fded8de0ad4d20ff5df699bf0 = $this->env->getExtension("native_profiler");
        $__internal_8d08614dd68043ea10a6387e2ed443665f60df2fded8de0ad4d20ff5df699bf0->enter($__internal_8d08614dd68043ea10a6387e2ed443665f60df2fded8de0ad4d20ff5df699bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_8d08614dd68043ea10a6387e2ed443665f60df2fded8de0ad4d20ff5df699bf0->leave($__internal_8d08614dd68043ea10a6387e2ed443665f60df2fded8de0ad4d20ff5df699bf0_prof);

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
        return array (  191 => 14,  177 => 9,  161 => 49,  151 => 45,  147 => 44,  143 => 43,  138 => 41,  130 => 37,  125 => 34,  121 => 33,  111 => 25,  108 => 24,  97 => 22,  93 => 21,  87 => 20,  80 => 15,  78 => 14,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 					<a class='' href="{{ path('products_category',  { 'id': category.id}) }}"><span class=''>{{ category.name}}</span></a>*/
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
/* 									<span>{{product.productsDerived[0].price}} $</span>*/
/* 									<a href="{{ path('view_product',{ 'id':catego.id,'productId': product.id}) }}">+</a>*/
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
