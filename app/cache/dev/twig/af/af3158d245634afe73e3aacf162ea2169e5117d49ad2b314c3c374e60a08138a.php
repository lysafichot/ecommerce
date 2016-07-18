<?php

/* ProductBundle:Panier:confirmation.html.twig */
class __TwigTemplate_7cfde7813b07799b6c96fc42b6c972ffecbfbc6c707506d91ed1e87301fbd229 extends Twig_Template
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
        $__internal_5677e91c7a2d572579ca1a326d2f8c5b57e78bc21626620fb3a59d411925cc65 = $this->env->getExtension("native_profiler");
        $__internal_5677e91c7a2d572579ca1a326d2f8c5b57e78bc21626620fb3a59d411925cc65->enter($__internal_5677e91c7a2d572579ca1a326d2f8c5b57e78bc21626620fb3a59d411925cc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5677e91c7a2d572579ca1a326d2f8c5b57e78bc21626620fb3a59d411925cc65->leave($__internal_5677e91c7a2d572579ca1a326d2f8c5b57e78bc21626620fb3a59d411925cc65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b178c1a50ee09d09ada1e04485098de6fdde5bd92144a16ca227b655e2d9258 = $this->env->getExtension("native_profiler");
        $__internal_6b178c1a50ee09d09ada1e04485098de6fdde5bd92144a16ca227b655e2d9258->enter($__internal_6b178c1a50ee09d09ada1e04485098de6fdde5bd92144a16ca227b655e2d9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_6b178c1a50ee09d09ada1e04485098de6fdde5bd92144a16ca227b655e2d9258->leave($__internal_6b178c1a50ee09d09ada1e04485098de6fdde5bd92144a16ca227b655e2d9258_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e834c9ea826d89679be5cae12e30b112b437c88a56e0dd3b7ddfd6dfcbb5cea = $this->env->getExtension("native_profiler");
        $__internal_8e834c9ea826d89679be5cae12e30b112b437c88a56e0dd3b7ddfd6dfcbb5cea->enter($__internal_8e834c9ea826d89679be5cae12e30b112b437c88a56e0dd3b7ddfd6dfcbb5cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_8e834c9ea826d89679be5cae12e30b112b437c88a56e0dd3b7ddfd6dfcbb5cea->leave($__internal_8e834c9ea826d89679be5cae12e30b112b437c88a56e0dd3b7ddfd6dfcbb5cea_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_13f6d354948f7f0f505a79bb18b4f59922eecad81dade68f5e048901b3c9d8fb = $this->env->getExtension("native_profiler");
        $__internal_13f6d354948f7f0f505a79bb18b4f59922eecad81dade68f5e048901b3c9d8fb->enter($__internal_13f6d354948f7f0f505a79bb18b4f59922eecad81dade68f5e048901b3c9d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13f6d354948f7f0f505a79bb18b4f59922eecad81dade68f5e048901b3c9d8fb->leave($__internal_13f6d354948f7f0f505a79bb18b4f59922eecad81dade68f5e048901b3c9d8fb_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b5f2061e1c9bf9468a8fb79fcf91c0573dc1ab31d29def4c39288e4876f7b8d = $this->env->getExtension("native_profiler");
        $__internal_4b5f2061e1c9bf9468a8fb79fcf91c0573dc1ab31d29def4c39288e4876f7b8d->enter($__internal_4b5f2061e1c9bf9468a8fb79fcf91c0573dc1ab31d29def4c39288e4876f7b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_4b5f2061e1c9bf9468a8fb79fcf91c0573dc1ab31d29def4c39288e4876f7b8d->leave($__internal_4b5f2061e1c9bf9468a8fb79fcf91c0573dc1ab31d29def4c39288e4876f7b8d_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_bdf97136aebb6ae563678ca1097689b67dd4780d0f1b0bf73705cd432087e337 = $this->env->getExtension("native_profiler");
        $__internal_bdf97136aebb6ae563678ca1097689b67dd4780d0f1b0bf73705cd432087e337->enter($__internal_bdf97136aebb6ae563678ca1097689b67dd4780d0f1b0bf73705cd432087e337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_bdf97136aebb6ae563678ca1097689b67dd4780d0f1b0bf73705cd432087e337->leave($__internal_bdf97136aebb6ae563678ca1097689b67dd4780d0f1b0bf73705cd432087e337_prof);

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
