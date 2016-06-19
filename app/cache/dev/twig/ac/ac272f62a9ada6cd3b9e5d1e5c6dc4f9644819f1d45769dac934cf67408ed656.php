<?php

/* AdminBundle:Product:view.html.twig */
class __TwigTemplate_488582c7f69ecb627dce98a537f5a8f27adb5d181daea7b82b2d0a91f0ed5698 extends Twig_Template
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
        $__internal_d25879c9c4db56900030aceb9ddb984243633f92ea62c4cc13f24d3b31bd8f2b = $this->env->getExtension("native_profiler");
        $__internal_d25879c9c4db56900030aceb9ddb984243633f92ea62c4cc13f24d3b31bd8f2b->enter($__internal_d25879c9c4db56900030aceb9ddb984243633f92ea62c4cc13f24d3b31bd8f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d25879c9c4db56900030aceb9ddb984243633f92ea62c4cc13f24d3b31bd8f2b->leave($__internal_d25879c9c4db56900030aceb9ddb984243633f92ea62c4cc13f24d3b31bd8f2b_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_7d09b14174873511d5ebae58536e24358424c3b484297de63e3d380bf9f1e6d1 = $this->env->getExtension("native_profiler");
        $__internal_7d09b14174873511d5ebae58536e24358424c3b484297de63e3d380bf9f1e6d1->enter($__internal_7d09b14174873511d5ebae58536e24358424c3b484297de63e3d380bf9f1e6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
   ";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "AdminBundle:Product:view.html.twig", 6)->display($context);
        // line 7
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "nameDerived", array()), "html", null, true);
        echo "
</div>

";
        
        $__internal_7d09b14174873511d5ebae58536e24358424c3b484297de63e3d380bf9f1e6d1->leave($__internal_7d09b14174873511d5ebae58536e24358424c3b484297de63e3d380bf9f1e6d1_prof);

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
        return array (  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/* {% block board %}*/
/* */
/* <div id='admin_view_product'>*/
/*    {% include("ProductBundle:Product:products.html.twig" ) %}*/
/*    {{product.productsDerived[0].nameDerived}}*/
/* </div>*/
/* */
/* {% endblock %}*/
