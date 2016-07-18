<?php

/* AdminBundle:Product:add.html.twig */
class __TwigTemplate_3e58cc60b34273ed38ad1e1ae6526a687907d28d927f92179e4d8d53f94addd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Product:add.html.twig", 1);
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
        $__internal_95fbb2d0bd7b72379395a033130919801fa1930c5c9ebe58451f125f8e9ec758 = $this->env->getExtension("native_profiler");
        $__internal_95fbb2d0bd7b72379395a033130919801fa1930c5c9ebe58451f125f8e9ec758->enter($__internal_95fbb2d0bd7b72379395a033130919801fa1930c5c9ebe58451f125f8e9ec758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95fbb2d0bd7b72379395a033130919801fa1930c5c9ebe58451f125f8e9ec758->leave($__internal_95fbb2d0bd7b72379395a033130919801fa1930c5c9ebe58451f125f8e9ec758_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_a4c8e95d4723bc0940812b345885e4800d490db416387c3a0460a5c6900874dc = $this->env->getExtension("native_profiler");
        $__internal_a4c8e95d4723bc0940812b345885e4800d490db416387c3a0460a5c6900874dc->enter($__internal_a4c8e95d4723bc0940812b345885e4800d490db416387c3a0460a5c6900874dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-product")));
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Nom du produit", "attr" => array("class" => "field")));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row', array("label" => "Description", "attr" => array("class" => "field")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'row', array("label" => "Resume", "attr" => array("class" => "field")));
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row', array("label" => "Categories", "attr" => array("class" => "field")));
        echo "

";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "name_derived", array()), 'row', array("label" => "Nom du produit derives", "attr" => array("class" => "field_product")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "price", array()), 'row', array("label" => "Prix du produit", "attr" => array("class" => "field_product")));
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "weight", array()), 'row', array("label" => "Weight", "attr" => array("class" => "field_product")));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "status", array()), 'row', array("label" => "Status", "attr" => array("class" => "field_product")));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "medias", array()), "vars", array()), "prototype", array()), "files", array()), 'row');
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), 'widget');
        echo "


<button type=\"submit\">Ajouter</button>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    ";
        
        $__internal_a4c8e95d4723bc0940812b345885e4800d490db416387c3a0460a5c6900874dc->leave($__internal_a4c8e95d4723bc0940812b345885e4800d490db416387c3a0460a5c6900874dc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/* {% block board %}*/
/* {{ form_start(form, {'attr': {'class': 'form-add-product'}}) }}*/
/* {{ form_row(form.name, {'label' : "Nom du produit", 'attr': {'class': 'field'}}) }}*/
/* {{ form_row(form.description, {'label' : "Description", 'attr': {'class': 'field'}}) }}*/
/* {{ form_row(form.summary, {'label' : "Resume", 'attr': {'class': 'field'}}) }}*/
/* {{ form_row(form.categories, {'label' : "Categories", 'attr': {'class': 'field'}}) }}*/
/* */
/* {{ form_row(form.productsDerived.vars.prototype.name_derived, {'label' : "Nom du produit derives", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.productsDerived.vars.prototype.price, {'label' : "Prix du produit", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.productsDerived.vars.prototype.weight, {'label' : "Weight", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.productsDerived.vars.prototype.status, {'label' : "Status", 'attr': {'class': 'field_product'}}) }}*/
/* {{ form_row(form.productsDerived.vars.prototype.medias.vars.prototype.files) }}*/
/* {{ form_widget(form.productsDerived) }}*/
/* */
/* */
/* <button type="submit">Ajouter</button>*/
/* {{ form_end(form) }}    {% endblock %}*/
