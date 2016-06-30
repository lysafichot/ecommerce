<?php

/* @Admin/Product/view.html.twig */
class __TwigTemplate_875620917639a70457d63faf93d42bc9e2ccdd733d34c03a5a934374422b1863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Product/view.html.twig", 1);
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
        $__internal_02aa99638bcda3480c764a5793185ae995cfe5422a0acd8d6d9914a75779bda6 = $this->env->getExtension("native_profiler");
        $__internal_02aa99638bcda3480c764a5793185ae995cfe5422a0acd8d6d9914a75779bda6->enter($__internal_02aa99638bcda3480c764a5793185ae995cfe5422a0acd8d6d9914a75779bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02aa99638bcda3480c764a5793185ae995cfe5422a0acd8d6d9914a75779bda6->leave($__internal_02aa99638bcda3480c764a5793185ae995cfe5422a0acd8d6d9914a75779bda6_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_ad9452b5e2c6695c75df84afecc82801628078895812d1016cf153b27cf8b4d9 = $this->env->getExtension("native_profiler");
        $__internal_ad9452b5e2c6695c75df84afecc82801628078895812d1016cf153b27cf8b4d9->enter($__internal_ad9452b5e2c6695c75df84afecc82801628078895812d1016cf153b27cf8b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
   ";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "@Admin/Product/view.html.twig", 6)->display($context);
        // line 7
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "productsDerived", array()), 0, array(), "array"), "nameDerived", array()), "html", null, true);
        echo "
</div>

";
        
        $__internal_ad9452b5e2c6695c75df84afecc82801628078895812d1016cf153b27cf8b4d9->leave($__internal_ad9452b5e2c6695c75df84afecc82801628078895812d1016cf153b27cf8b4d9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Product/view.html.twig";
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
