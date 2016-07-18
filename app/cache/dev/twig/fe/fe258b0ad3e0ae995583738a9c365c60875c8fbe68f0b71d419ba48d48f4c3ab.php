<?php

/* ProductBundle:Commande:commande.html.twig */
class __TwigTemplate_1f3dc17b5baeee6ee2a0f31e6cae48fcefb0e221eb6295ff698301c9cd0fafd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Commande:commande.html.twig", 1);
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
        $__internal_9f9eeabf58ba9bb932ad524b2b264d600dccd7046d293065bfaad43a19c5af4f = $this->env->getExtension("native_profiler");
        $__internal_9f9eeabf58ba9bb932ad524b2b264d600dccd7046d293065bfaad43a19c5af4f->enter($__internal_9f9eeabf58ba9bb932ad524b2b264d600dccd7046d293065bfaad43a19c5af4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Commande:commande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9eeabf58ba9bb932ad524b2b264d600dccd7046d293065bfaad43a19c5af4f->leave($__internal_9f9eeabf58ba9bb932ad524b2b264d600dccd7046d293065bfaad43a19c5af4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_819a69d89f1aeeb9547b7f042781a2e37f5de7e4147bb68b94a0e879f2c85a3f = $this->env->getExtension("native_profiler");
        $__internal_819a69d89f1aeeb9547b7f042781a2e37f5de7e4147bb68b94a0e879f2c85a3f->enter($__internal_819a69d89f1aeeb9547b7f042781a2e37f5de7e4147bb68b94a0e879f2c85a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_819a69d89f1aeeb9547b7f042781a2e37f5de7e4147bb68b94a0e879f2c85a3f->leave($__internal_819a69d89f1aeeb9547b7f042781a2e37f5de7e4147bb68b94a0e879f2c85a3f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb6b63be62183b436342dba5c71b552d8cdca0ff1f6589762b1731ca9a7a0ff3 = $this->env->getExtension("native_profiler");
        $__internal_bb6b63be62183b436342dba5c71b552d8cdca0ff1f6589762b1731ca9a7a0ff3->enter($__internal_bb6b63be62183b436342dba5c71b552d8cdca0ff1f6589762b1731ca9a7a0ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_bb6b63be62183b436342dba5c71b552d8cdca0ff1f6589762b1731ca9a7a0ff3->leave($__internal_bb6b63be62183b436342dba5c71b552d8cdca0ff1f6589762b1731ca9a7a0ff3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8587054c1a47c7d4dadb1be21772f0a426c4ad624010f65effd690434c89ea77 = $this->env->getExtension("native_profiler");
        $__internal_8587054c1a47c7d4dadb1be21772f0a426c4ad624010f65effd690434c89ea77->enter($__internal_8587054c1a47c7d4dadb1be21772f0a426c4ad624010f65effd690434c89ea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div>
\t\t\t<p>Commande</p>
\t\t\t";
        // line 24
        $context["total"] = 0;
        // line 25
        echo "
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 27
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</p>
\t\t\t<span>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t<p><span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "adresse", array()), "numero", array()), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "adresse", array()), "name", array()), "html", null, true);
            echo "</span></p>
\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "adresse", array()), "codePostal", array()), "html", null, true);
            echo "</p>
\t\t\t<p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "adresse", array()), "city", array()), "html", null, true);
            echo "</p>
\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["commande"], "paniers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "
\t\t\t<p>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "</p>
\t\t\t<p>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), "nameDerived", array()), "html", null, true);
                echo "</p>
\t\t\t<p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), "weight", array()), "html", null, true);
                echo " kg</p>
\t\t\t<p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), "price", array()), "html", null, true);
                echo " \$</p>
\t\t\t<p>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                echo "</p>
\t\t\t<p> ";
                // line 39
                echo twig_escape_filter($this->env, ($this->getAttribute($context["product"], "quantity", array()) * $this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), "price", array())), "html", null, true);
                echo " \$</p>
\t\t\t<p>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pack", array()), "html", null, true);
                echo " emballage</p>
\t\t\t";
                // line 41
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($context["product"], "quantity", array()) * $this->getAttribute($this->getAttribute($context["product"], "productsDerived", array()), "price", array())));
                // line 42
                echo "

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\tTotal de la commande :";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
";
        
        $__internal_8587054c1a47c7d4dadb1be21772f0a426c4ad624010f65effd690434c89ea77->leave($__internal_8587054c1a47c7d4dadb1be21772f0a426c4ad624010f65effd690434c89ea77_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_eb19a8e1898ae886c65285945ccf0bdf15756693c101332add5a695456e596f6 = $this->env->getExtension("native_profiler");
        $__internal_eb19a8e1898ae886c65285945ccf0bdf15756693c101332add5a695456e596f6->enter($__internal_eb19a8e1898ae886c65285945ccf0bdf15756693c101332add5a695456e596f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_eb19a8e1898ae886c65285945ccf0bdf15756693c101332add5a695456e596f6->leave($__internal_eb19a8e1898ae886c65285945ccf0bdf15756693c101332add5a695456e596f6_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_01794815a182cec4f9e82455de950476c316db5983012605723997ca296cc2d1 = $this->env->getExtension("native_profiler");
        $__internal_01794815a182cec4f9e82455de950476c316db5983012605723997ca296cc2d1->enter($__internal_01794815a182cec4f9e82455de950476c316db5983012605723997ca296cc2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_01794815a182cec4f9e82455de950476c316db5983012605723997ca296cc2d1->leave($__internal_01794815a182cec4f9e82455de950476c316db5983012605723997ca296cc2d1_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Commande:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 12,  193 => 9,  180 => 47,  173 => 45,  165 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  114 => 29,  110 => 28,  105 => 27,  101 => 26,  98 => 25,  96 => 24,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div>*/
/* 			<p>Commande</p>*/
/* 			{% set total = 0 %}*/
/* */
/* 			{% for commande in commandes %}*/
/* 			<p>{{ commande.id }}</p>*/
/* 			<span>{{commande.createdAt|date('Y-m-d')}}</span>*/
/* 			<p><span>{{commande.adresse.numero}}</span><span>{{commande.adresse.name}}</span></p>*/
/* 			<p>{{ commande.adresse.codePostal}}</p>*/
/* 			<p>{{ commande.adresse.city }}</p>*/
/* 			{% for product in commande.paniers %}*/
/* */
/* 			<p>{{ product.id}}</p>*/
/* 			<p>{{ product.productsDerived.nameDerived}}</p>*/
/* 			<p>{{ product.productsDerived.weight}} kg</p>*/
/* 			<p>{{ product.productsDerived.price}} $</p>*/
/* 			<p>{{ product.quantity}}</p>*/
/* 			<p> {{ product.quantity * product.productsDerived.price}} $</p>*/
/* 			<p>{{ product.pack}} emballage</p>*/
/* 			{% set total = total + product.quantity * product.productsDerived.price %}*/
/* */
/* */
/* 			{% endfor%}*/
/* */
/* 			{% endfor%}*/
/* 			Total de la commande :{{total}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
