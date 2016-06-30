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
        $__internal_56512876d0a0d9bbaeb422345b228762722e8ab16d638bc85148d58f23e68658 = $this->env->getExtension("native_profiler");
        $__internal_56512876d0a0d9bbaeb422345b228762722e8ab16d638bc85148d58f23e68658->enter($__internal_56512876d0a0d9bbaeb422345b228762722e8ab16d638bc85148d58f23e68658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/categorised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56512876d0a0d9bbaeb422345b228762722e8ab16d638bc85148d58f23e68658->leave($__internal_56512876d0a0d9bbaeb422345b228762722e8ab16d638bc85148d58f23e68658_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_a59e716f503d2203844325ebcb25e10edc585d0f893578a95d6d493cf12d1246 = $this->env->getExtension("native_profiler");
        $__internal_a59e716f503d2203844325ebcb25e10edc585d0f893578a95d6d493cf12d1246->enter($__internal_a59e716f503d2203844325ebcb25e10edc585d0f893578a95d6d493cf12d1246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        
        $__internal_a59e716f503d2203844325ebcb25e10edc585d0f893578a95d6d493cf12d1246->leave($__internal_a59e716f503d2203844325ebcb25e10edc585d0f893578a95d6d493cf12d1246_prof);

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
