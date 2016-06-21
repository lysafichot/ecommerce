<?php

/* ProductBundle:Product:products.html.twig */
class __TwigTemplate_a92216cf3c9473b5f81e9d9017104043ee60473c90470e2c6c22c4fbd0fca4f4 extends Twig_Template
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
        $__internal_ea4bff54edc571dca281cc70c2bca2f9d83fd09a130f4ddf93788ff5f51eafbc = $this->env->getExtension("native_profiler");
        $__internal_ea4bff54edc571dca281cc70c2bca2f9d83fd09a130f4ddf93788ff5f51eafbc->enter($__internal_ea4bff54edc571dca281cc70c2bca2f9d83fd09a130f4ddf93788ff5f51eafbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:products.html.twig"));

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
        
        $__internal_ea4bff54edc571dca281cc70c2bca2f9d83fd09a130f4ddf93788ff5f51eafbc->leave($__internal_ea4bff54edc571dca281cc70c2bca2f9d83fd09a130f4ddf93788ff5f51eafbc_prof);

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
