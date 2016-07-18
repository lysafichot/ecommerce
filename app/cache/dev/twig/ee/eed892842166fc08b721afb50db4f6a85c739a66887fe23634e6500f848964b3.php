<?php

/* @Product/Product/search.html.twig */
class __TwigTemplate_5927c13691f4df9920cd7e9a1efe4ddecce58cb017df07be7592b59d1f7f1b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Product/search.html.twig", 1);
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
        $__internal_5b07821968fb36077457c26c42ff87412cbb1434cdffcdb1cee55c2ed1ae7b96 = $this->env->getExtension("native_profiler");
        $__internal_5b07821968fb36077457c26c42ff87412cbb1434cdffcdb1cee55c2ed1ae7b96->enter($__internal_5b07821968fb36077457c26c42ff87412cbb1434cdffcdb1cee55c2ed1ae7b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Product/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b07821968fb36077457c26c42ff87412cbb1434cdffcdb1cee55c2ed1ae7b96->leave($__internal_5b07821968fb36077457c26c42ff87412cbb1434cdffcdb1cee55c2ed1ae7b96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9e1e7d2c482255cb8aed82889f381cf997ac3aee5aae479a2ccea6dac59207b = $this->env->getExtension("native_profiler");
        $__internal_e9e1e7d2c482255cb8aed82889f381cf997ac3aee5aae479a2ccea6dac59207b->enter($__internal_e9e1e7d2c482255cb8aed82889f381cf997ac3aee5aae479a2ccea6dac59207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_e9e1e7d2c482255cb8aed82889f381cf997ac3aee5aae479a2ccea6dac59207b->leave($__internal_e9e1e7d2c482255cb8aed82889f381cf997ac3aee5aae479a2ccea6dac59207b_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_01e9a92dd394a7630cac94436c0721771237146514fac0d50ab73bfee4d92ea0 = $this->env->getExtension("native_profiler");
        $__internal_01e9a92dd394a7630cac94436c0721771237146514fac0d50ab73bfee4d92ea0->enter($__internal_01e9a92dd394a7630cac94436c0721771237146514fac0d50ab73bfee4d92ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_01e9a92dd394a7630cac94436c0721771237146514fac0d50ab73bfee4d92ea0->leave($__internal_01e9a92dd394a7630cac94436c0721771237146514fac0d50ab73bfee4d92ea0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eec4470422bceebf09d5f8cd6abc6cf860582d2d942cb014ac03d20eff63299 = $this->env->getExtension("native_profiler");
        $__internal_3eec4470422bceebf09d5f8cd6abc6cf860582d2d942cb014ac03d20eff63299->enter($__internal_3eec4470422bceebf09d5f8cd6abc6cf860582d2d942cb014ac03d20eff63299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["postsearch"]) ? $context["postsearch"] : $this->getContext($context, "postsearch")), "html", null, true);
        echo "</span>

\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t</div>
\t\t\t\t<div id='search_result'>
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchs"]) ? $context["searchs"] : $this->getContext($context, "searchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 27
            echo "
\t\t\t\t\t<div class='cart_product'>

\t\t\t\t\t\t<div class='image_product'>
\t\t\t\t\t\t\t<img src=";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["search"], "productsDerived", array()), 0, array(), "array"), "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='infos_product'>
\t\t\t\t\t\t\t<div class='designation'>
\t\t\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 37
            if (((twig_length_filter($this->env, $this->getAttribute($context["search"], "productsDerived", array())) - 1) == 1)) {
                // line 38
                echo "
\t\t\t\t\t\t\t<p>";
                // line 39
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["search"], "productsDerived", array())) - 1), "html", null, true);
                echo " produit similaire</p>
\t\t\t\t\t\t\t";
            } elseif (((twig_length_filter($this->env, $this->getAttribute(            // line 40
$context["search"], "productsDerived", array())) - 1) > 1)) {
                // line 41
                echo "\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($context["search"], "productsDerived", array())) - 1), "html", null, true);
                echo " produits similaires</p>

\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["search"], "productsDerived", array()), 0, array(), "array"), "price", array()), "html", null, true);
            echo " \$</span>
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_product", array("productId" => $this->getAttribute($context["search"], "id", array()))), "html", null, true);
            echo "\">+</a>
\t\t\t\t\t\t\t<button><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_panier", array("id" => $this->getAttribute($this->getAttribute($context["search"], "categories", array()), 0, array(), "array"), "productId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["search"], "productsDerived", array()), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">Ajouter au panier</a></button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


";
        
        $__internal_3eec4470422bceebf09d5f8cd6abc6cf860582d2d942cb014ac03d20eff63299->leave($__internal_3eec4470422bceebf09d5f8cd6abc6cf860582d2d942cb014ac03d20eff63299_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_92312f2bac861f82cbb8ed52a675faa1886cb2cbf7b784b82ced555b4f861a33 = $this->env->getExtension("native_profiler");
        $__internal_92312f2bac861f82cbb8ed52a675faa1886cb2cbf7b784b82ced555b4f861a33->enter($__internal_92312f2bac861f82cbb8ed52a675faa1886cb2cbf7b784b82ced555b4f861a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_92312f2bac861f82cbb8ed52a675faa1886cb2cbf7b784b82ced555b4f861a33->leave($__internal_92312f2bac861f82cbb8ed52a675faa1886cb2cbf7b784b82ced555b4f861a33_prof);

    }

    // line 14
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_6a826e4ef969564514a595c3b9dab6b09daf2a5665b7adc27d0f6a783999694a = $this->env->getExtension("native_profiler");
        $__internal_6a826e4ef969564514a595c3b9dab6b09daf2a5665b7adc27d0f6a783999694a->enter($__internal_6a826e4ef969564514a595c3b9dab6b09daf2a5665b7adc27d0f6a783999694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_6a826e4ef969564514a595c3b9dab6b09daf2a5665b7adc27d0f6a783999694a->leave($__internal_6a826e4ef969564514a595c3b9dab6b09daf2a5665b7adc27d0f6a783999694a_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Product/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 14,  178 => 9,  164 => 53,  151 => 46,  147 => 45,  142 => 44,  135 => 41,  133 => 40,  129 => 39,  126 => 38,  124 => 37,  119 => 35,  111 => 31,  105 => 27,  101 => 26,  93 => 21,  87 => 20,  80 => 15,  78 => 14,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 					<span>{{postsearch}}</span>*/
/* */
/* 					<a href=""></a>*/
/* 				</div>*/
/* 				<div id='search_result'>*/
/* 					{% for search in searchs %}*/
/* */
/* 					<div class='cart_product'>*/
/* */
/* 						<div class='image_product'>*/
/* 							<img src={{ asset('uploads/') }}{{search.productsDerived[0].medias[0].path}}/>*/
/* 						</div>*/
/* 						<div class='infos_product'>*/
/* 							<div class='designation'>*/
/* 								{{ search.name }}*/
/* 							</div>*/
/* 							{% if search.productsDerived|length - 1 == 1 %}*/
/* */
/* 							<p>{{search.productsDerived|length - 1}} produit similaire</p>*/
/* 							{% elseif search.productsDerived|length - 1 > 1 %}*/
/* 							<p>{{search.productsDerived|length - 1}} produits similaires</p>*/
/* */
/* 							{% endif %}*/
/* 							<span>{{search.productsDerived[0].price}} $</span>*/
/* 							<a href="{{ path('view_product',{'productId': search.id}) }}">+</a>*/
/* 							<button><a href="{{ path('add_panier',  { 'id':search.categories[0],'productId':search.productsDerived[0].id}) }}">Ajouter au panier</a></button>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* 					{%endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {%endblock%}*/
