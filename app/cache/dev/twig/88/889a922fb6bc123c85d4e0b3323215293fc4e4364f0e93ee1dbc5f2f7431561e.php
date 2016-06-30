<?php

/* ProductBundle:Product:view.html.twig */
class __TwigTemplate_23f752acbc9c669c4bd9d8464cc5ce82c2777730836ee7c7e57ed089ffba12ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Product:view.html.twig", 1);
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
        $__internal_0179236ab0993e402cf93b1342f0d811f9ad43e8c04c2b2c641a46fa26a7e19a = $this->env->getExtension("native_profiler");
        $__internal_0179236ab0993e402cf93b1342f0d811f9ad43e8c04c2b2c641a46fa26a7e19a->enter($__internal_0179236ab0993e402cf93b1342f0d811f9ad43e8c04c2b2c641a46fa26a7e19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0179236ab0993e402cf93b1342f0d811f9ad43e8c04c2b2c641a46fa26a7e19a->leave($__internal_0179236ab0993e402cf93b1342f0d811f9ad43e8c04c2b2c641a46fa26a7e19a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_125f72c270f4e6255ef194ade673ab16a79ee68f9aea52c160ebae4631ac4c1a = $this->env->getExtension("native_profiler");
        $__internal_125f72c270f4e6255ef194ade673ab16a79ee68f9aea52c160ebae4631ac4c1a->enter($__internal_125f72c270f4e6255ef194ade673ab16a79ee68f9aea52c160ebae4631ac4c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_125f72c270f4e6255ef194ade673ab16a79ee68f9aea52c160ebae4631ac4c1a->leave($__internal_125f72c270f4e6255ef194ade673ab16a79ee68f9aea52c160ebae4631ac4c1a_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_31208f76c270a6c32f5c12d8592f252fcafc881963263b9f68f3883f4d08b54c = $this->env->getExtension("native_profiler");
        $__internal_31208f76c270a6c32f5c12d8592f252fcafc881963263b9f68f3883f4d08b54c->enter($__internal_31208f76c270a6c32f5c12d8592f252fcafc881963263b9f68f3883f4d08b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_31208f76c270a6c32f5c12d8592f252fcafc881963263b9f68f3883f4d08b54c->leave($__internal_31208f76c270a6c32f5c12d8592f252fcafc881963263b9f68f3883f4d08b54c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca2e99f0aa8244034da98ca2081f69aad476681c2aba124ba21063af8bf9465 = $this->env->getExtension("native_profiler");
        $__internal_1ca2e99f0aa8244034da98ca2081f69aad476681c2aba124ba21063af8bf9465->enter($__internal_1ca2e99f0aa8244034da98ca2081f69aad476681c2aba124ba21063af8bf9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<div id='contents' class='view_product'>

\t\t<div  class='arbre'>
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "path"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "\t\t\t<span>|</span><a class='path' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><span class=''>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span></a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
\t\t\t<a href=\"\"></a>
\t\t</div>

\t\t<span id='title_product'>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</span>
\t\t<div id='info_cart'>
\t\t\t<div id='images'>
\t\t\t\t<div id='view_img'>
\t\t\t\t\t<img src=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "/>
\t\t\t\t</div>
\t\t\t\t<div id='gallery'>
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "medias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 36
            echo "\t\t\t\t\t<div class='thumb'>
\t\t\t\t\t\t<img src=";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "path", array()), "html", null, true);
            echo "/>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id='cart'></div>
\t\t</div>
\t\t<div id='description'>
\t\t\t<p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div id='summary'>
\t\t\t<p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "summary", array()), "html", null, true);
        echo "</p>
\t\t</div>


\t</div>
</div>
";
        
        $__internal_1ca2e99f0aa8244034da98ca2081f69aad476681c2aba124ba21063af8bf9465->leave($__internal_1ca2e99f0aa8244034da98ca2081f69aad476681c2aba124ba21063af8bf9465_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_d217852c34b7d2cc84f5dc3d43195121c61a53cf0d91ad9203cf9724b570d3ea = $this->env->getExtension("native_profiler");
        $__internal_d217852c34b7d2cc84f5dc3d43195121c61a53cf0d91ad9203cf9724b570d3ea->enter($__internal_d217852c34b7d2cc84f5dc3d43195121c61a53cf0d91ad9203cf9724b570d3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_d217852c34b7d2cc84f5dc3d43195121c61a53cf0d91ad9203cf9724b570d3ea->leave($__internal_d217852c34b7d2cc84f5dc3d43195121c61a53cf0d91ad9203cf9724b570d3ea_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_ff1d8683b9f4a17bee7b351c2babc281258ffa55d074e3066ee700d5fe8a3118 = $this->env->getExtension("native_profiler");
        $__internal_ff1d8683b9f4a17bee7b351c2babc281258ffa55d074e3066ee700d5fe8a3118->enter($__internal_ff1d8683b9f4a17bee7b351c2babc281258ffa55d074e3066ee700d5fe8a3118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_ff1d8683b9f4a17bee7b351c2babc281258ffa55d074e3066ee700d5fe8a3118->leave($__internal_ff1d8683b9f4a17bee7b351c2babc281258ffa55d074e3066ee700d5fe8a3118_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 12,  172 => 9,  158 => 48,  152 => 45,  145 => 40,  135 => 37,  132 => 36,  128 => 35,  121 => 32,  114 => 28,  108 => 24,  97 => 22,  93 => 21,  87 => 20,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 	<div id='contents' class='view_product'>*/
/* */
/* 		<div  class='arbre'>*/
/* 			<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* 			{% for category in app.session.get('path') %}*/
/* 			<span>|</span><a class='path' href="{{ path('products_category',  { 'id': category.id}) }}"><span class=''>{{ category.name}}</span></a>*/
/* 			{%endfor%}*/
/* */
/* 			<a href=""></a>*/
/* 		</div>*/
/* */
/* 		<span id='title_product'>{{product.name}}</span>*/
/* 		<div id='info_cart'>*/
/* 			<div id='images'>*/
/* 				<div id='view_img'>*/
/* 					<img src={{ asset('uploads/') }}{{product.productsDerived[0].medias[0].path}}/>*/
/* 				</div>*/
/* 				<div id='gallery'>*/
/* 					{% for media in product.productsDerived[0].medias %}*/
/* 					<div class='thumb'>*/
/* 						<img src={{ asset('uploads/') }}{{media.path}}/>*/
/* 					</div>*/
/* 					{%endfor%}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id='cart'></div>*/
/* 		</div>*/
/* 		<div id='description'>*/
/* 			<p>{{product.description}}</p>*/
/* 		</div>*/
/* 		<div id='summary'>*/
/* 			<p>{{product.summary}}</p>*/
/* 		</div>*/
/* */
/* */
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
