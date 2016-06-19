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
        $__internal_623571e326496d917d53e3eb4df8233f32f99fd814f3d3e1b0d8c1e55b7ae40d = $this->env->getExtension("native_profiler");
        $__internal_623571e326496d917d53e3eb4df8233f32f99fd814f3d3e1b0d8c1e55b7ae40d->enter($__internal_623571e326496d917d53e3eb4df8233f32f99fd814f3d3e1b0d8c1e55b7ae40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_623571e326496d917d53e3eb4df8233f32f99fd814f3d3e1b0d8c1e55b7ae40d->leave($__internal_623571e326496d917d53e3eb4df8233f32f99fd814f3d3e1b0d8c1e55b7ae40d_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_5f2ed67affc1a9431a12cbe3716cbde171b253beb6137c8345099d182f0c9dfd = $this->env->getExtension("native_profiler");
        $__internal_5f2ed67affc1a9431a12cbe3716cbde171b253beb6137c8345099d182f0c9dfd->enter($__internal_5f2ed67affc1a9431a12cbe3716cbde171b253beb6137c8345099d182f0c9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
   ";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "@Admin/Product/view.html.twig", 6)->display($context);
        // line 7
        echo "</div>

";
        
        $__internal_5f2ed67affc1a9431a12cbe3716cbde171b253beb6137c8345099d182f0c9dfd->leave($__internal_5f2ed67affc1a9431a12cbe3716cbde171b253beb6137c8345099d182f0c9dfd_prof);

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
/* </div>*/
/* */
/* {% endblock %}*/
