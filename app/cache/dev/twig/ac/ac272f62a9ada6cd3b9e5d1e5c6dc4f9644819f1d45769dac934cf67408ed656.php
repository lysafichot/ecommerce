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
        $__internal_dee7bad0a0a82f2fbe65ff0a3fbdecf33fbd45df17c67af865fb05eb43714162 = $this->env->getExtension("native_profiler");
        $__internal_dee7bad0a0a82f2fbe65ff0a3fbdecf33fbd45df17c67af865fb05eb43714162->enter($__internal_dee7bad0a0a82f2fbe65ff0a3fbdecf33fbd45df17c67af865fb05eb43714162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee7bad0a0a82f2fbe65ff0a3fbdecf33fbd45df17c67af865fb05eb43714162->leave($__internal_dee7bad0a0a82f2fbe65ff0a3fbdecf33fbd45df17c67af865fb05eb43714162_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_42eb977bb9f09871b6a162a5917eb625138e844e16c118e97084f4738a476b32 = $this->env->getExtension("native_profiler");
        $__internal_42eb977bb9f09871b6a162a5917eb625138e844e16c118e97084f4738a476b32->enter($__internal_42eb977bb9f09871b6a162a5917eb625138e844e16c118e97084f4738a476b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        
        $__internal_42eb977bb9f09871b6a162a5917eb625138e844e16c118e97084f4738a476b32->leave($__internal_42eb977bb9f09871b6a162a5917eb625138e844e16c118e97084f4738a476b32_prof);

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
