<?php

/* @Product/Product/products.html.twig */
class __TwigTemplate_9e416a1fcce74e4b2f54b23123f35241492039416fe71c4cce6bf8882558b081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_807565b8f288114b61a6dbb23611893d5591bd51a470f1800994e325e62aa260 = $this->env->getExtension("native_profiler");
        $__internal_807565b8f288114b61a6dbb23611893d5591bd51a470f1800994e325e62aa260->enter($__internal_807565b8f288114b61a6dbb23611893d5591bd51a470f1800994e325e62aa260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Product/products.html.twig"));

        // line 1
        echo "<div class='product_item'>
\t<div class='product'>
\t\t<span>Nom du produit :</span><span> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</span>
\t\t<div class='categories_product'>
\t\t\t<span>Category :</span>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</div>
\t\t<span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</span>
";
        
        $__internal_807565b8f288114b61a6dbb23611893d5591bd51a470f1800994e325e62aa260->leave($__internal_807565b8f288114b61a6dbb23611893d5591bd51a470f1800994e325e62aa260_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Product/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <div class='product_item'>*/
/* 	<div class='product'>*/
/* 		<span>Nom du produit :</span><span> {{ product.name}}</span>*/
/* 		<div class='categories_product'>*/
/* 			<span>Category :</span>*/
/* 			{% for category in product.categories %}*/
/* 			<span>{{ category.name}}</span>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		<span>{{ product.id}}</span>*/
/* */
