<?php

/* @Product/Panier/view.html.twig */
class __TwigTemplate_4a0ab440d57cbc4edafe174dbd987043ca25bc1e017296500687beeb347091c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Panier/view.html.twig", 1);
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
        $__internal_3c46734e94e8c8bb29b8395ffce9fdde382b4423ffefcbb2fe46361e77ea20bd = $this->env->getExtension("native_profiler");
        $__internal_3c46734e94e8c8bb29b8395ffce9fdde382b4423ffefcbb2fe46361e77ea20bd->enter($__internal_3c46734e94e8c8bb29b8395ffce9fdde382b4423ffefcbb2fe46361e77ea20bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Panier/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c46734e94e8c8bb29b8395ffce9fdde382b4423ffefcbb2fe46361e77ea20bd->leave($__internal_3c46734e94e8c8bb29b8395ffce9fdde382b4423ffefcbb2fe46361e77ea20bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec0cd6e46f8fc9a0e864dc9f5641c44a5b1f08731d82e95636c0845d237c186 = $this->env->getExtension("native_profiler");
        $__internal_aec0cd6e46f8fc9a0e864dc9f5641c44a5b1f08731d82e95636c0845d237c186->enter($__internal_aec0cd6e46f8fc9a0e864dc9f5641c44a5b1f08731d82e95636c0845d237c186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_aec0cd6e46f8fc9a0e864dc9f5641c44a5b1f08731d82e95636c0845d237c186->leave($__internal_aec0cd6e46f8fc9a0e864dc9f5641c44a5b1f08731d82e95636c0845d237c186_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef133b7b000f7de2810ee76cb372ecdc70eef93b999b5218455586d79cdbbb93 = $this->env->getExtension("native_profiler");
        $__internal_ef133b7b000f7de2810ee76cb372ecdc70eef93b999b5218455586d79cdbbb93->enter($__internal_ef133b7b000f7de2810ee76cb372ecdc70eef93b999b5218455586d79cdbbb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_ef133b7b000f7de2810ee76cb372ecdc70eef93b999b5218455586d79cdbbb93->leave($__internal_ef133b7b000f7de2810ee76cb372ecdc70eef93b999b5218455586d79cdbbb93_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_372b6bce2dd6e040d05a4949bdedb50baac4168dff53ce9c25f6f403e95f2ad9 = $this->env->getExtension("native_profiler");
        $__internal_372b6bce2dd6e040d05a4949bdedb50baac4168dff53ce9c25f6f403e95f2ad9->enter($__internal_372b6bce2dd6e040d05a4949bdedb50baac4168dff53ce9c25f6f403e95f2ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t";
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "products"), "method")) > 0)) {
            // line 26
            echo "\t\t\t\t";
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
\t\t\t<p id='total_panier'>Total :";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "price"), "method"), "html", null, true);
            echo " \$<p>
\t\t\t\t<button><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("payement");
            echo "\">Commander</a> </button>
\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t<p>Votre panier est vide</p>
\t\t\t\t";
        }
        // line 47
        echo "
\t\t\t</div>

\t\t</div>

\t</div>
</div>
";
        
        $__internal_372b6bce2dd6e040d05a4949bdedb50baac4168dff53ce9c25f6f403e95f2ad9->leave($__internal_372b6bce2dd6e040d05a4949bdedb50baac4168dff53ce9c25f6f403e95f2ad9_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_d4cc30217277bd71e0a3101bf023db0b2f20c169ccb76907f48971f9075ea911 = $this->env->getExtension("native_profiler");
        $__internal_d4cc30217277bd71e0a3101bf023db0b2f20c169ccb76907f48971f9075ea911->enter($__internal_d4cc30217277bd71e0a3101bf023db0b2f20c169ccb76907f48971f9075ea911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_d4cc30217277bd71e0a3101bf023db0b2f20c169ccb76907f48971f9075ea911->leave($__internal_d4cc30217277bd71e0a3101bf023db0b2f20c169ccb76907f48971f9075ea911_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_9432a73a7ee6f077a0b46bf28673b08df3ce0bd0ca16dd1d1ed57963a320a19d = $this->env->getExtension("native_profiler");
        $__internal_9432a73a7ee6f077a0b46bf28673b08df3ce0bd0ca16dd1d1ed57963a320a19d->enter($__internal_9432a73a7ee6f077a0b46bf28673b08df3ce0bd0ca16dd1d1ed57963a320a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_9432a73a7ee6f077a0b46bf28673b08df3ce0bd0ca16dd1d1ed57963a320a19d->leave($__internal_9432a73a7ee6f077a0b46bf28673b08df3ce0bd0ca16dd1d1ed57963a320a19d_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Panier/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 12,  176 => 9,  162 => 47,  158 => 45,  153 => 43,  149 => 42,  146 => 41,  136 => 37,  131 => 35,  123 => 34,  119 => 33,  114 => 31,  108 => 29,  104 => 27,  99 => 26,  97 => 25,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 				{% if app.session.get('products')|length > 0 %}*/
/* 				{% for product in app.session.get('products') %}*/
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
/* 			<p id='total_panier'>Total :{{app.session.get('price')}} $<p>*/
/* 				<button><a href="{{path('payement')}}">Commander</a> </button>*/
/* 				{%else%}*/
/* 				<p>Votre panier est vide</p>*/
/* 				{%endif%}*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
