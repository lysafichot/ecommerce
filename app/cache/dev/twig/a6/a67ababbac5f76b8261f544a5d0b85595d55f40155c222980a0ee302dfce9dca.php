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
        $__internal_12ef84d881a728089d38ad6133e72c9a314eb581678d04f6b3467781a88a0376 = $this->env->getExtension("native_profiler");
        $__internal_12ef84d881a728089d38ad6133e72c9a314eb581678d04f6b3467781a88a0376->enter($__internal_12ef84d881a728089d38ad6133e72c9a314eb581678d04f6b3467781a88a0376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Product:products.html.twig"));

        // line 1
        echo "<div class='product_item'>
    <div class='product'>

        <span>Nom du produit :</span><span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</span>
        <div class='categories_product'>
        <span>Category :</span>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
        <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</span>
";
        
        $__internal_12ef84d881a728089d38ad6133e72c9a314eb581678d04f6b3467781a88a0376->leave($__internal_12ef84d881a728089d38ad6133e72c9a314eb581678d04f6b3467781a88a0376_prof);

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
        return array (  49 => 11,  46 => 10,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class='product_item'>*/
/*     <div class='product'>*/
/* */
/*         <span>Nom du produit :</span><span> {{ product.name}}</span>*/
/*         <div class='categories_product'>*/
/*         <span>Category :</span>*/
/*             {% for category in product.categories %}*/
/*             <span>{{ category.name}}</span>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <span>{{ product.id}}</span>*/
/* */
