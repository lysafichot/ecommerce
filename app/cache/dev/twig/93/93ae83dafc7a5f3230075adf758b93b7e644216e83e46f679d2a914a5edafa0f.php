<?php

/* @Product/Product/view.html.twig */
class __TwigTemplate_3d49dc3cab9d860d1b7e6bc2b326a07b10580e8d2829ddb08b1d05ab56d8ecd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Product/view.html.twig", 1);
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
        $__internal_91e67ad9e976511b01e59a7496236057284759273aefd5dd11f75ba80278e730 = $this->env->getExtension("native_profiler");
        $__internal_91e67ad9e976511b01e59a7496236057284759273aefd5dd11f75ba80278e730->enter($__internal_91e67ad9e976511b01e59a7496236057284759273aefd5dd11f75ba80278e730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Product/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e67ad9e976511b01e59a7496236057284759273aefd5dd11f75ba80278e730->leave($__internal_91e67ad9e976511b01e59a7496236057284759273aefd5dd11f75ba80278e730_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b334dc627569220aed08028003fb3312a5bcadf617d56d362fecff4f7c12c751 = $this->env->getExtension("native_profiler");
        $__internal_b334dc627569220aed08028003fb3312a5bcadf617d56d362fecff4f7c12c751->enter($__internal_b334dc627569220aed08028003fb3312a5bcadf617d56d362fecff4f7c12c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_b334dc627569220aed08028003fb3312a5bcadf617d56d362fecff4f7c12c751->leave($__internal_b334dc627569220aed08028003fb3312a5bcadf617d56d362fecff4f7c12c751_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed8701fba16f2f749d94d818a5644289a14f59e662499c17765d3674c0a1ab61 = $this->env->getExtension("native_profiler");
        $__internal_ed8701fba16f2f749d94d818a5644289a14f59e662499c17765d3674c0a1ab61->enter($__internal_ed8701fba16f2f749d94d818a5644289a14f59e662499c17765d3674c0a1ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_ed8701fba16f2f749d94d818a5644289a14f59e662499c17765d3674c0a1ab61->leave($__internal_ed8701fba16f2f749d94d818a5644289a14f59e662499c17765d3674c0a1ab61_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f375c150143a4bad701cbbee70e6f824ab3395c56e7eff018680c3cbf103cc = $this->env->getExtension("native_profiler");
        $__internal_86f375c150143a4bad701cbbee70e6f824ab3395c56e7eff018680c3cbf103cc->enter($__internal_86f375c150143a4bad701cbbee70e6f824ab3395c56e7eff018680c3cbf103cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86f375c150143a4bad701cbbee70e6f824ab3395c56e7eff018680c3cbf103cc->leave($__internal_86f375c150143a4bad701cbbee70e6f824ab3395c56e7eff018680c3cbf103cc_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_5f0d97b3804615fedb517eaf4cc2957bd796aeb454496c1bc4cada3a76a27bf8 = $this->env->getExtension("native_profiler");
        $__internal_5f0d97b3804615fedb517eaf4cc2957bd796aeb454496c1bc4cada3a76a27bf8->enter($__internal_5f0d97b3804615fedb517eaf4cc2957bd796aeb454496c1bc4cada3a76a27bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_5f0d97b3804615fedb517eaf4cc2957bd796aeb454496c1bc4cada3a76a27bf8->leave($__internal_5f0d97b3804615fedb517eaf4cc2957bd796aeb454496c1bc4cada3a76a27bf8_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_2dab74ccee5816b0a02adc91b4e0e8f7bfe742ccc09be1aa2b87e1cafdab4e56 = $this->env->getExtension("native_profiler");
        $__internal_2dab74ccee5816b0a02adc91b4e0e8f7bfe742ccc09be1aa2b87e1cafdab4e56->enter($__internal_2dab74ccee5816b0a02adc91b4e0e8f7bfe742ccc09be1aa2b87e1cafdab4e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_2dab74ccee5816b0a02adc91b4e0e8f7bfe742ccc09be1aa2b87e1cafdab4e56->leave($__internal_2dab74ccee5816b0a02adc91b4e0e8f7bfe742ccc09be1aa2b87e1cafdab4e56_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Product/view.html.twig";
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
