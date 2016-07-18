<?php

/* @Admin/Product/all.html.twig */
class __TwigTemplate_0e240de8c6f9468939cfa1feb83dfc705520bb5a8c28f7c8191b5c47d6b3cfd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Product/all.html.twig", 1);
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
        $__internal_a3a530717f8d3b72b3792949235e707cf5180df655ef89d767a7d7def173b755 = $this->env->getExtension("native_profiler");
        $__internal_a3a530717f8d3b72b3792949235e707cf5180df655ef89d767a7d7def173b755->enter($__internal_a3a530717f8d3b72b3792949235e707cf5180df655ef89d767a7d7def173b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a530717f8d3b72b3792949235e707cf5180df655ef89d767a7d7def173b755->leave($__internal_a3a530717f8d3b72b3792949235e707cf5180df655ef89d767a7d7def173b755_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_92e79f2a9c5ab0c975a8773f8cf1db7dbff3c1fb35ddbf3893b7dd041c06ae0c = $this->env->getExtension("native_profiler");
        $__internal_92e79f2a9c5ab0c975a8773f8cf1db7dbff3c1fb35ddbf3893b7dd041c06ae0c->enter($__internal_92e79f2a9c5ab0c975a8773f8cf1db7dbff3c1fb35ddbf3893b7dd041c06ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</span>

        <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_view_product", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a></li>
        <form action=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_product", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["product"], "id", array()), array(), "array"), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-small\"><span> Supprimer</span></button>
            </form>

            <div class='derived'>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "productsDerived", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["productsDerived"]) {
                // line 25
                echo "                <span>Nom du produit derive:</span> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productsDerived"], "nameDerived", array()), "html", null, true);
                echo "</span>
                <span>Prix</span><span>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["productsDerived"], "price", array()), "html", null, true);
                echo "</span>
                <span>Weight</span><span>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["productsDerived"], "weight", array()), "html", null, true);
                echo "</span>
                <span>Id</span><span>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["productsDerived"], "id", array()), "html", null, true);
                echo "</span>
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["productsDerived"], "medias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 30
                    echo "                <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "path", array()), "html", null, true);
                    echo "/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productsDerived'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

        ";
        
        $__internal_92e79f2a9c5ab0c975a8773f8cf1db7dbff3c1fb35ddbf3893b7dd041c06ae0c->leave($__internal_92e79f2a9c5ab0c975a8773f8cf1db7dbff3c1fb35ddbf3893b7dd041c06ae0c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Product/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  135 => 33,  129 => 32,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  98 => 25,  94 => 24,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  70 => 14,  61 => 12,  57 => 11,  51 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <span>{{ product.id}}</span>*/
/* */
/*         <li><a href="{{ path('admin_view_product', { 'id': product.id }) }}">show</a></li>*/
/*         <form action="{{ path('admin_delete_product', { 'id': product.id }) }}" method="post">*/
/*             {{ form_widget(deleteForms[product.id]) }}*/
/*             <button type="submit" class="btn btn-small"><span> Supprimer</span></button>*/
/*             </form>*/
/* */
/*             <div class='derived'>*/
/*                 {% for productsDerived in product.productsDerived %}*/
/*                 <span>Nom du produit derive:</span> <span>{{ productsDerived.nameDerived}}</span>*/
/*                 <span>Prix</span><span>{{ productsDerived.price}}</span>*/
/*                 <span>Weight</span><span>{{ productsDerived.weight}}</span>*/
/*                 <span>Id</span><span>{{ productsDerived.id}}</span>*/
/*                 {% for media in productsDerived.medias %}*/
/*                 <img src={{ asset('uploads/') }}{{media.path}}/>*/
/*                 {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/* */
/*         {% endblock %}*/
