<?php

/* ProductBundle:Product:products.html.twig */
class __TwigTemplate_ff693086d4cb3ff9f592684cef22f89822e1d421ca2a6b79fb3070c82b3259c0 extends Twig_Template
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
        $__internal_39a11c7d910818f505bde6cf49b01b81df14fe0f0ebf1213f452ab45df0c8ec8 = $this->env->getExtension("native_profiler");
        $__internal_39a11c7d910818f505bde6cf49b01b81df14fe0f0ebf1213f452ab45df0c8ec8->enter($__internal_39a11c7d910818f505bde6cf49b01b81df14fe0f0ebf1213f452ab45df0c8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:products.html.twig"));

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
        
        $__internal_39a11c7d910818f505bde6cf49b01b81df14fe0f0ebf1213f452ab45df0c8ec8->leave($__internal_39a11c7d910818f505bde6cf49b01b81df14fe0f0ebf1213f452ab45df0c8ec8_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Product:products.html.twig";
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
