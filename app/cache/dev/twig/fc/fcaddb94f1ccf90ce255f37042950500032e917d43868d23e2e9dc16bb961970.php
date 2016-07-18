<?php

/* AdminBundle:Product:view.html.twig */
class __TwigTemplate_881cb6dcb26a5654863794c8d94462eb482484863f34075fb1175f76c8eade0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Product:view.html.twig", 1);
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
        $__internal_a441c44d5108c1c751c00eb32b920126623553885977ec78cab084e5cdd28828 = $this->env->getExtension("native_profiler");
        $__internal_a441c44d5108c1c751c00eb32b920126623553885977ec78cab084e5cdd28828->enter($__internal_a441c44d5108c1c751c00eb32b920126623553885977ec78cab084e5cdd28828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a441c44d5108c1c751c00eb32b920126623553885977ec78cab084e5cdd28828->leave($__internal_a441c44d5108c1c751c00eb32b920126623553885977ec78cab084e5cdd28828_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_7af0c3c9bd08eede1cebf191f3afed8e163d052b30b84eab0ecdec92afc31c3f = $this->env->getExtension("native_profiler");
        $__internal_7af0c3c9bd08eede1cebf191f3afed8e163d052b30b84eab0ecdec92afc31c3f->enter($__internal_7af0c3c9bd08eede1cebf191f3afed8e163d052b30b84eab0ecdec92afc31c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
\t";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "AdminBundle:Product:view.html.twig", 6)->display($context);
        // line 7
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "nameDerived", array()), "html", null, true);
        echo "
</div>



<p>Produits derivees</p>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["derived"]) {
            // line 14
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["derived"], "nameDerived", array()), "html", null, true);
            echo "</p>
<div>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["derived"], "price", array()), "html", null, true);
            echo " \$</div>
<span>___________</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['derived'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "

";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "add-derived")));
        echo "

";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_derived", array()), 'row', array("label" => "Nom du produit derives", "attr" => array("class" => "field_product")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row', array("label" => "Prix du produit", "attr" => array("class" => "field_product")));
        echo "
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight", array()), 'row', array("label" => "Weight", "attr" => array("class" => "field_product")));
        echo "
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'row', array("label" => "Status", "attr" => array("class" => "field_product")));
        echo "
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medias", array()), "vars", array()), "prototype", array()), "files", array()), 'row');
        echo "
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


<button type=\"submit\">Ajouter</button>
";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7af0c3c9bd08eede1cebf191f3afed8e163d052b30b84eab0ecdec92afc31c3f->leave($__internal_7af0c3c9bd08eede1cebf191f3afed8e163d052b30b84eab0ecdec92afc31c3f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  78 => 20,  74 => 18,  65 => 15,  60 => 14,  56 => 13,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/* {% block board %}*/
/* */
/* <div id='admin_view_product'>*/
/* 	{% include("ProductBundle:Product:products.html.twig" ) %}*/
/* 	{{product.productsDerived[0].nameDerived}}*/
/* </div>*/
/* */
/* */
/* */
/* <p>Produits derivees</p>*/
/* {% for derived in product.productsDerived%}*/
/* <p>{{derived.nameDerived}}</p>*/
/* <div>{{derived.price}} $</div>*/
/* <span>___________</span>*/
/* {%endfor%}*/
/* */
/* */
/* {{ form_start(form, {'attr': {'class': 'add-derived'}}) }}*/
/* */
/* {{ form_row(form.name_derived, {'label' : "Nom du produit derives", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.price, {'label' : "Prix du produit", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.weight, {'label' : "Weight", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.status, {'label' : "Status", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.medias.vars.prototype.files) }}*/
/* {{ form_widget(form) }}*/
/* */
/* */
/* <button type="submit">Ajouter</button>*/
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
