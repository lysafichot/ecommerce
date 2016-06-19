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
        $__internal_42e252f8d30315db353e47b20ca9959cef8fdd9722935c054777e3244ed95c3d = $this->env->getExtension("native_profiler");
        $__internal_42e252f8d30315db353e47b20ca9959cef8fdd9722935c054777e3244ed95c3d->enter($__internal_42e252f8d30315db353e47b20ca9959cef8fdd9722935c054777e3244ed95c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e252f8d30315db353e47b20ca9959cef8fdd9722935c054777e3244ed95c3d->leave($__internal_42e252f8d30315db353e47b20ca9959cef8fdd9722935c054777e3244ed95c3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6093648a7d17484947bef9d962d790d81e9bc969ede2d66121a1128fc7deceb0 = $this->env->getExtension("native_profiler");
        $__internal_6093648a7d17484947bef9d962d790d81e9bc969ede2d66121a1128fc7deceb0->enter($__internal_6093648a7d17484947bef9d962d790d81e9bc969ede2d66121a1128fc7deceb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_6093648a7d17484947bef9d962d790d81e9bc969ede2d66121a1128fc7deceb0->leave($__internal_6093648a7d17484947bef9d962d790d81e9bc969ede2d66121a1128fc7deceb0_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_5427ebdc105f69d69e996c73d80e20ce336c58aa99acbfe8163f73c3ff0fd78c = $this->env->getExtension("native_profiler");
        $__internal_5427ebdc105f69d69e996c73d80e20ce336c58aa99acbfe8163f73c3ff0fd78c->enter($__internal_5427ebdc105f69d69e996c73d80e20ce336c58aa99acbfe8163f73c3ff0fd78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_5427ebdc105f69d69e996c73d80e20ce336c58aa99acbfe8163f73c3ff0fd78c->leave($__internal_5427ebdc105f69d69e996c73d80e20ce336c58aa99acbfe8163f73c3ff0fd78c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfbd0d09bebbab43d20cfd386027d3c71d459d74c227c32c8a66bdd810c7457e = $this->env->getExtension("native_profiler");
        $__internal_bfbd0d09bebbab43d20cfd386027d3c71d459d74c227c32c8a66bdd810c7457e->enter($__internal_bfbd0d09bebbab43d20cfd386027d3c71d459d74c227c32c8a66bdd810c7457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "
\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t</div>
\t</div>
</div>
";
        
        $__internal_bfbd0d09bebbab43d20cfd386027d3c71d459d74c227c32c8a66bdd810c7457e->leave($__internal_bfbd0d09bebbab43d20cfd386027d3c71d459d74c227c32c8a66bdd810c7457e_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_ad722f2deab053ccc84b223fe43464a486f86e2c69ef147c8cb847bf0c592d14 = $this->env->getExtension("native_profiler");
        $__internal_ad722f2deab053ccc84b223fe43464a486f86e2c69ef147c8cb847bf0c592d14->enter($__internal_ad722f2deab053ccc84b223fe43464a486f86e2c69ef147c8cb847bf0c592d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_ad722f2deab053ccc84b223fe43464a486f86e2c69ef147c8cb847bf0c592d14->leave($__internal_ad722f2deab053ccc84b223fe43464a486f86e2c69ef147c8cb847bf0c592d14_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_cdc4a3066b11be56f531c070a95ec70eac31ba7e1453281cf14305b6c74ff2f9 = $this->env->getExtension("native_profiler");
        $__internal_cdc4a3066b11be56f531c070a95ec70eac31ba7e1453281cf14305b6c74ff2f9->enter($__internal_cdc4a3066b11be56f531c070a95ec70eac31ba7e1453281cf14305b6c74ff2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_cdc4a3066b11be56f531c070a95ec70eac31ba7e1453281cf14305b6c74ff2f9->leave($__internal_cdc4a3066b11be56f531c070a95ec70eac31ba7e1453281cf14305b6c74ff2f9_prof);

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
        return array (  134 => 12,  120 => 9,  108 => 24,  97 => 22,  93 => 21,  87 => 20,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* */
/* 				<div  class='arbre'>*/
/* 					<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* 					{% for category in app.session.get('path') %}*/
/* 					<a class='' href="{{ path('products_category',  { 'id': category.id}) }}"><span class=''>{{ category.name}}</span></a>*/
/* 					{%endfor%}*/
/* */
/* 					<a href=""></a>*/
/* 				</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
