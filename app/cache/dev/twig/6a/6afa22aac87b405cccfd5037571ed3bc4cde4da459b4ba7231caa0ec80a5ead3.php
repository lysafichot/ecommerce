<?php

/* @Product/Panier/confirmation.html.twig */
class __TwigTemplate_4036111d3171478bd97365f0940ee89338436768e20ef22fbf480e63ac6c49ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Panier/confirmation.html.twig", 1);
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
        $__internal_5a3d5e7279c8faaf52d5139f57deb72bea67a1d561705ccbdb85d5f4164b27ec = $this->env->getExtension("native_profiler");
        $__internal_5a3d5e7279c8faaf52d5139f57deb72bea67a1d561705ccbdb85d5f4164b27ec->enter($__internal_5a3d5e7279c8faaf52d5139f57deb72bea67a1d561705ccbdb85d5f4164b27ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Panier/confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3d5e7279c8faaf52d5139f57deb72bea67a1d561705ccbdb85d5f4164b27ec->leave($__internal_5a3d5e7279c8faaf52d5139f57deb72bea67a1d561705ccbdb85d5f4164b27ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aadf9e40ef969d83a44d18c9bed911bea149a6a934963b6ddfcca4ae528b88e = $this->env->getExtension("native_profiler");
        $__internal_9aadf9e40ef969d83a44d18c9bed911bea149a6a934963b6ddfcca4ae528b88e->enter($__internal_9aadf9e40ef969d83a44d18c9bed911bea149a6a934963b6ddfcca4ae528b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_9aadf9e40ef969d83a44d18c9bed911bea149a6a934963b6ddfcca4ae528b88e->leave($__internal_9aadf9e40ef969d83a44d18c9bed911bea149a6a934963b6ddfcca4ae528b88e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_38fb9926bfcb468cb96652e1690f3499a9f6225b83d37701956c68b5aff274d7 = $this->env->getExtension("native_profiler");
        $__internal_38fb9926bfcb468cb96652e1690f3499a9f6225b83d37701956c68b5aff274d7->enter($__internal_38fb9926bfcb468cb96652e1690f3499a9f6225b83d37701956c68b5aff274d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_38fb9926bfcb468cb96652e1690f3499a9f6225b83d37701956c68b5aff274d7->leave($__internal_38fb9926bfcb468cb96652e1690f3499a9f6225b83d37701956c68b5aff274d7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b301716e990c9f8e156bcd4d6ff4917619406c5da70931c7f20476c2633b958c = $this->env->getExtension("native_profiler");
        $__internal_b301716e990c9f8e156bcd4d6ff4917619406c5da70931c7f20476c2633b958c->enter($__internal_b301716e990c9f8e156bcd4d6ff4917619406c5da70931c7f20476c2633b958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='transaction'>


<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "civilite", array()), "html", null, true);
        echo "</p>
<p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "firstname", array()), "html", null, true);
        echo "</p>
<p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "lastname", array()), "html", null, true);
        echo "</p>


<p><span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "numero", array()), "html", null, true);
        echo " </span>
<span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "name", array()), "html", null, true);
        echo "</span></p>
<p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "codePostal", array()), "html", null, true);
        echo "</p>
<p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "city", array()), "html", null, true);
        echo "</p>
<p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "type", array()), "html", null, true);
        echo "</p>


\t\t\t<form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("transaction");
        echo "\" method=\"post\">
<input type=\"hidden\" id=\"\" name=\"adresse_id\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id", array()), "html", null, true);
        echo "\" />

\t\t\t\t<button type=\"submit\">Payer</button>

</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_b301716e990c9f8e156bcd4d6ff4917619406c5da70931c7f20476c2633b958c->leave($__internal_b301716e990c9f8e156bcd4d6ff4917619406c5da70931c7f20476c2633b958c_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_468edaf9664886eb4b1e5735b30875b2a6e73a36023d6fb05d41e655630a1ed2 = $this->env->getExtension("native_profiler");
        $__internal_468edaf9664886eb4b1e5735b30875b2a6e73a36023d6fb05d41e655630a1ed2->enter($__internal_468edaf9664886eb4b1e5735b30875b2a6e73a36023d6fb05d41e655630a1ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_468edaf9664886eb4b1e5735b30875b2a6e73a36023d6fb05d41e655630a1ed2->leave($__internal_468edaf9664886eb4b1e5735b30875b2a6e73a36023d6fb05d41e655630a1ed2_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_175adec2af8c29ee93897894fb66559c4b580484b5c046d9ca172d7e8c7e62a9 = $this->env->getExtension("native_profiler");
        $__internal_175adec2af8c29ee93897894fb66559c4b580484b5c046d9ca172d7e8c7e62a9->enter($__internal_175adec2af8c29ee93897894fb66559c4b580484b5c046d9ca172d7e8c7e62a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_175adec2af8c29ee93897894fb66559c4b580484b5c046d9ca172d7e8c7e62a9->leave($__internal_175adec2af8c29ee93897894fb66559c4b580484b5c046d9ca172d7e8c7e62a9_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Panier/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 12,  153 => 9,  137 => 38,  133 => 37,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  105 => 27,  101 => 26,  97 => 25,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='transaction'>*/
/* */
/* */
/* <p>{{user[0].civilite}}</p>*/
/* <p>{{user[0].firstname}}</p>*/
/* <p>{{user[0].lastname}}</p>*/
/* */
/* */
/* <p><span>{{adresse.numero}} </span>*/
/* <span>{{adresse.name}}</span></p>*/
/* <p>{{adresse.codePostal}}</p>*/
/* <p>{{adresse.city}}</p>*/
/* <p>{{adresse.type}}</p>*/
/* */
/* */
/* 			<form action="{{ path('transaction') }}" method="post">*/
/* <input type="hidden" id="" name="adresse_id" value="{{ adresse.id }}" />*/
/* */
/* 				<button type="submit">Payer</button>*/
/* */
/* </form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
