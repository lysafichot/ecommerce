<?php

/* @Admin/Product/categorised.html.twig */
class __TwigTemplate_5742f8b20686f07bf964dc2df214979aa2fd781fb243c7a747d62f047e741f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Product/categorised.html.twig", 1);
        $this->blocks = array(
            'board' => array($this, 'block_board'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_882d67c821e272c1b7756d3a5806eb08c18796260eee89349cd5e1f79bfb9851 = $this->env->getExtension("native_profiler");
        $__internal_882d67c821e272c1b7756d3a5806eb08c18796260eee89349cd5e1f79bfb9851->enter($__internal_882d67c821e272c1b7756d3a5806eb08c18796260eee89349cd5e1f79bfb9851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/categorised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882d67c821e272c1b7756d3a5806eb08c18796260eee89349cd5e1f79bfb9851->leave($__internal_882d67c821e272c1b7756d3a5806eb08c18796260eee89349cd5e1f79bfb9851_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_b6b66f4736ba41e278dc4d2357c92981d675dc4005e637b50bd6589012b6cfd5 = $this->env->getExtension("native_profiler");
        $__internal_b6b66f4736ba41e278dc4d2357c92981d675dc4005e637b50bd6589012b6cfd5->enter($__internal_b6b66f4736ba41e278dc4d2357c92981d675dc4005e637b50bd6589012b6cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "<div class='product_item'>
    <div class='product'>
        <span>Nom du produit :</span><span> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</span>
        <div class='categories_product'>
            <span>Category :</span>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "

        ";
        
        $__internal_b6b66f4736ba41e278dc4d2357c92981d675dc4005e637b50bd6589012b6cfd5->leave($__internal_b6b66f4736ba41e278dc4d2357c92981d675dc4005e637b50bd6589012b6cfd5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Product/categorised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  70 => 14,  61 => 12,  57 => 11,  51 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/* {% block board %}*/
/* */
/* {% for product in products%}*/
/* <div class='product_item'>*/
/*     <div class='product'>*/
/*         <span>Nom du produit :</span><span> {{ product.name}}</span>*/
/*         <div class='categories_product'>*/
/*             <span>Category :</span>*/
/*             {% for category in product.categories %}*/
/*             <span>{{ category.name}}</span>*/
/*             {% endfor %}*/
/*         </div>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/* */
/*         {% endblock %}*/
