<?php

/* AdminBundle:Product:categorised.html.twig */
class __TwigTemplate_bd5017c57046286bea0d9eb1dac0e7c2c31f2b7bddd1af90cf602f7b5dbb5a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Product:categorised.html.twig", 1);
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
        $__internal_e5644179f4fc05ddfd32fd10d900ece058aafbdc6040dd4c032656ae4aeb4e01 = $this->env->getExtension("native_profiler");
        $__internal_e5644179f4fc05ddfd32fd10d900ece058aafbdc6040dd4c032656ae4aeb4e01->enter($__internal_e5644179f4fc05ddfd32fd10d900ece058aafbdc6040dd4c032656ae4aeb4e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:categorised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5644179f4fc05ddfd32fd10d900ece058aafbdc6040dd4c032656ae4aeb4e01->leave($__internal_e5644179f4fc05ddfd32fd10d900ece058aafbdc6040dd4c032656ae4aeb4e01_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_181dec962009d59fe448e9827b0be9b7b1b52fcc3ef9d0c77f8bb09e52873538 = $this->env->getExtension("native_profiler");
        $__internal_181dec962009d59fe448e9827b0be9b7b1b52fcc3ef9d0c77f8bb09e52873538->enter($__internal_181dec962009d59fe448e9827b0be9b7b1b52fcc3ef9d0c77f8bb09e52873538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        
        $__internal_181dec962009d59fe448e9827b0be9b7b1b52fcc3ef9d0c77f8bb09e52873538->leave($__internal_181dec962009d59fe448e9827b0be9b7b1b52fcc3ef9d0c77f8bb09e52873538_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:categorised.html.twig";
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
