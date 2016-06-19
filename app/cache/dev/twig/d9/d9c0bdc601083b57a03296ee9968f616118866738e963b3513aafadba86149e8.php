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
        $__internal_89cc170fbc79b20d5226540c2d5544237856ee2487bf2fa005823543d8e020fc = $this->env->getExtension("native_profiler");
        $__internal_89cc170fbc79b20d5226540c2d5544237856ee2487bf2fa005823543d8e020fc->enter($__internal_89cc170fbc79b20d5226540c2d5544237856ee2487bf2fa005823543d8e020fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Product/products.html.twig"));

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
        
        $__internal_89cc170fbc79b20d5226540c2d5544237856ee2487bf2fa005823543d8e020fc->leave($__internal_89cc170fbc79b20d5226540c2d5544237856ee2487bf2fa005823543d8e020fc_prof);

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
