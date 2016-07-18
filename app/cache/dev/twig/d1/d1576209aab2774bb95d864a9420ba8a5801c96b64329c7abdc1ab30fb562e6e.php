<?php

/* ProductBundle:Product:view.html.twig */
class __TwigTemplate_e01bccc6c3036b69b5e6262ac6f928d4bb34390bc26d821652bbc183d205e65b extends Twig_Template
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
        $__internal_93caf99f55f8f2befaec22bc123915d575503fe5b7a748566f530d6b5d2c0ed8 = $this->env->getExtension("native_profiler");
        $__internal_93caf99f55f8f2befaec22bc123915d575503fe5b7a748566f530d6b5d2c0ed8->enter($__internal_93caf99f55f8f2befaec22bc123915d575503fe5b7a748566f530d6b5d2c0ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93caf99f55f8f2befaec22bc123915d575503fe5b7a748566f530d6b5d2c0ed8->leave($__internal_93caf99f55f8f2befaec22bc123915d575503fe5b7a748566f530d6b5d2c0ed8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba6a4d59d1b468d0f11fa10ff3cd37126b5e7618ce59f785a1b836162ae5fd64 = $this->env->getExtension("native_profiler");
        $__internal_ba6a4d59d1b468d0f11fa10ff3cd37126b5e7618ce59f785a1b836162ae5fd64->enter($__internal_ba6a4d59d1b468d0f11fa10ff3cd37126b5e7618ce59f785a1b836162ae5fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_ba6a4d59d1b468d0f11fa10ff3cd37126b5e7618ce59f785a1b836162ae5fd64->leave($__internal_ba6a4d59d1b468d0f11fa10ff3cd37126b5e7618ce59f785a1b836162ae5fd64_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dff59713c15756ce2d8477fb8ae3f6621f4ab6dcaffeb1263679398a375028f = $this->env->getExtension("native_profiler");
        $__internal_7dff59713c15756ce2d8477fb8ae3f6621f4ab6dcaffeb1263679398a375028f->enter($__internal_7dff59713c15756ce2d8477fb8ae3f6621f4ab6dcaffeb1263679398a375028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_7dff59713c15756ce2d8477fb8ae3f6621f4ab6dcaffeb1263679398a375028f->leave($__internal_7dff59713c15756ce2d8477fb8ae3f6621f4ab6dcaffeb1263679398a375028f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ad9df476003444e8d53446a458cb7803224d78a5a41a0c279eb96cc6e6fa9e1 = $this->env->getExtension("native_profiler");
        $__internal_6ad9df476003444e8d53446a458cb7803224d78a5a41a0c279eb96cc6e6fa9e1->enter($__internal_6ad9df476003444e8d53446a458cb7803224d78a5a41a0c279eb96cc6e6fa9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t";
        // line 27
        $context["one"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "id", array());
        // line 28
        echo "
\t\t<span id='title_product'>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</span>
\t\t<div id='info_cart'>
\t\t\t<div id='images'>
\t\t\t\t<div id='view_img'>
\t\t\t\t\t<img src=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "medias", array()), 0, array(), "array"), "path", array()), "html", null, true);
        echo "/>
\t\t\t\t</div>
\t\t\t\t<div id='gallery'>
\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "medias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 37
            echo "\t\t\t\t\t<div class='thumb'>
\t\t\t\t\t\t<img src=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "path", array()), "html", null, true);
            echo "/>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id='cart'></div>
\t\t</div>
\t\t<div id='description'>
\t\t\t<p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div id='summary'>
\t\t\t<p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "summary", array()), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<div id='productDerived' >



\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["derived"]) {
            // line 57
            echo "
\t\t\t";
            // line 58
            if (($this->getAttribute($context["derived"], "id", array()) != (isset($context["one"]) ? $context["one"] : $this->getContext($context, "one")))) {
                // line 59
                echo "\t\t\t<div class='derived'>
\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["derived"], "medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 61
                    echo "\t\t\t\t<div class='thumb'>
\t\t\t\t\t<img src=";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "path", array()), "html", null, true);
                    echo "/>
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["derived"], "nameDerived", array()), "html", null, true);
                echo "</p>
\t\t\t\t<div>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["derived"], "price", array()), "html", null, true);
                echo " \$</div>


\t\t\t</div>
\t\t\t";
            }
            // line 71
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['derived'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6ad9df476003444e8d53446a458cb7803224d78a5a41a0c279eb96cc6e6fa9e1->leave($__internal_6ad9df476003444e8d53446a458cb7803224d78a5a41a0c279eb96cc6e6fa9e1_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_d359632035257c91c91564efcecbf0e37355c6f053717fafc87c623680144f90 = $this->env->getExtension("native_profiler");
        $__internal_d359632035257c91c91564efcecbf0e37355c6f053717fafc87c623680144f90->enter($__internal_d359632035257c91c91564efcecbf0e37355c6f053717fafc87c623680144f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_d359632035257c91c91564efcecbf0e37355c6f053717fafc87c623680144f90->leave($__internal_d359632035257c91c91564efcecbf0e37355c6f053717fafc87c623680144f90_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_54d987219e69a3dcb51c6cd16c553263b7432a06ed2d3097e5ecbaa9fff6a491 = $this->env->getExtension("native_profiler");
        $__internal_54d987219e69a3dcb51c6cd16c553263b7432a06ed2d3097e5ecbaa9fff6a491->enter($__internal_54d987219e69a3dcb51c6cd16c553263b7432a06ed2d3097e5ecbaa9fff6a491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_54d987219e69a3dcb51c6cd16c553263b7432a06ed2d3097e5ecbaa9fff6a491->leave($__internal_54d987219e69a3dcb51c6cd16c553263b7432a06ed2d3097e5ecbaa9fff6a491_prof);

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
        return array (  245 => 12,  231 => 9,  220 => 72,  214 => 71,  206 => 66,  201 => 65,  191 => 62,  188 => 61,  184 => 60,  181 => 59,  179 => 58,  176 => 57,  172 => 56,  162 => 49,  156 => 46,  149 => 41,  139 => 38,  136 => 37,  132 => 36,  125 => 33,  118 => 29,  115 => 28,  113 => 27,  108 => 24,  97 => 22,  93 => 21,  87 => 20,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		{% set one = product.productsDerived[0].id%}*/
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
/* 		<div id='productDerived' >*/
/* */
/* */
/* */
/* 			{% for derived in product.productsDerived%}*/
/* */
/* 			{% if derived.id != one %}*/
/* 			<div class='derived'>*/
/* 				{% for media in derived.medias %}*/
/* 				<div class='thumb'>*/
/* 					<img src={{ asset('uploads/') }}{{media.path}}/>*/
/* 				</div>*/
/* 				{%endfor%}*/
/* 				<p>{{derived.nameDerived}}</p>*/
/* 				<div>{{derived.price}} $</div>*/
/* */
/* */
/* 			</div>*/
/* 			{%endif%}*/
/* 			{%endfor%}*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
