<?php

/* ProductBundle:Panier:confirmation.html.twig */
class __TwigTemplate_f9230c9fdc3f7c48b7f50019903642986306d9697e00ae8b138709b9ac5dc93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Panier:confirmation.html.twig", 1);
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
        $__internal_9187e5e19aaa00053b9f5805c2aa91be35939176ee1bb0e2c92a15eefd72e7cb = $this->env->getExtension("native_profiler");
        $__internal_9187e5e19aaa00053b9f5805c2aa91be35939176ee1bb0e2c92a15eefd72e7cb->enter($__internal_9187e5e19aaa00053b9f5805c2aa91be35939176ee1bb0e2c92a15eefd72e7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9187e5e19aaa00053b9f5805c2aa91be35939176ee1bb0e2c92a15eefd72e7cb->leave($__internal_9187e5e19aaa00053b9f5805c2aa91be35939176ee1bb0e2c92a15eefd72e7cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f505a71322d204ade7eb30a893eafaa6c5ae4165f808f19d4b7b5bd77777d28f = $this->env->getExtension("native_profiler");
        $__internal_f505a71322d204ade7eb30a893eafaa6c5ae4165f808f19d4b7b5bd77777d28f->enter($__internal_f505a71322d204ade7eb30a893eafaa6c5ae4165f808f19d4b7b5bd77777d28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_f505a71322d204ade7eb30a893eafaa6c5ae4165f808f19d4b7b5bd77777d28f->leave($__internal_f505a71322d204ade7eb30a893eafaa6c5ae4165f808f19d4b7b5bd77777d28f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7b99d60a3d2ddea287ff2fb8190edd3bdf4840680dadf53e763825f433464b7 = $this->env->getExtension("native_profiler");
        $__internal_b7b99d60a3d2ddea287ff2fb8190edd3bdf4840680dadf53e763825f433464b7->enter($__internal_b7b99d60a3d2ddea287ff2fb8190edd3bdf4840680dadf53e763825f433464b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_b7b99d60a3d2ddea287ff2fb8190edd3bdf4840680dadf53e763825f433464b7->leave($__internal_b7b99d60a3d2ddea287ff2fb8190edd3bdf4840680dadf53e763825f433464b7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ec2ca5adafc047f13d180ba290572e860966464584feb7987d8d23f9101f786 = $this->env->getExtension("native_profiler");
        $__internal_7ec2ca5adafc047f13d180ba290572e860966464584feb7987d8d23f9101f786->enter($__internal_7ec2ca5adafc047f13d180ba290572e860966464584feb7987d8d23f9101f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ec2ca5adafc047f13d180ba290572e860966464584feb7987d8d23f9101f786->leave($__internal_7ec2ca5adafc047f13d180ba290572e860966464584feb7987d8d23f9101f786_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_e368ca4626e02ebbadb9fa9ce4ba2bb54581da04a5ba420030c2acb39d0990be = $this->env->getExtension("native_profiler");
        $__internal_e368ca4626e02ebbadb9fa9ce4ba2bb54581da04a5ba420030c2acb39d0990be->enter($__internal_e368ca4626e02ebbadb9fa9ce4ba2bb54581da04a5ba420030c2acb39d0990be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_e368ca4626e02ebbadb9fa9ce4ba2bb54581da04a5ba420030c2acb39d0990be->leave($__internal_e368ca4626e02ebbadb9fa9ce4ba2bb54581da04a5ba420030c2acb39d0990be_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_098894f91aa4386390c8e716c7f18c886f63ecef18c68feef9a077a859be5ad0 = $this->env->getExtension("native_profiler");
        $__internal_098894f91aa4386390c8e716c7f18c886f63ecef18c68feef9a077a859be5ad0->enter($__internal_098894f91aa4386390c8e716c7f18c886f63ecef18c68feef9a077a859be5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_098894f91aa4386390c8e716c7f18c886f63ecef18c68feef9a077a859be5ad0->leave($__internal_098894f91aa4386390c8e716c7f18c886f63ecef18c68feef9a077a859be5ad0_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Panier:confirmation.html.twig";
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
