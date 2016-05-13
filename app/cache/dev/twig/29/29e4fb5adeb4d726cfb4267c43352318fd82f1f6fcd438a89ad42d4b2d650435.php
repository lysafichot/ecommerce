<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c58c73764be62890d783dc239ddc91e4279c34b1f1d208a0962ee936b38a3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aee9b75d8ed9fcd217e1443d353e399e1952e88f73122c4f6995e7150ea3881 = $this->env->getExtension("native_profiler");
        $__internal_7aee9b75d8ed9fcd217e1443d353e399e1952e88f73122c4f6995e7150ea3881->enter($__internal_7aee9b75d8ed9fcd217e1443d353e399e1952e88f73122c4f6995e7150ea3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aee9b75d8ed9fcd217e1443d353e399e1952e88f73122c4f6995e7150ea3881->leave($__internal_7aee9b75d8ed9fcd217e1443d353e399e1952e88f73122c4f6995e7150ea3881_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_645287ebc3bab1017a90304f28ffad6fa2ce1bbbb2e519fa2f1106363509eab4 = $this->env->getExtension("native_profiler");
        $__internal_645287ebc3bab1017a90304f28ffad6fa2ce1bbbb2e519fa2f1106363509eab4->enter($__internal_645287ebc3bab1017a90304f28ffad6fa2ce1bbbb2e519fa2f1106363509eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_645287ebc3bab1017a90304f28ffad6fa2ce1bbbb2e519fa2f1106363509eab4->leave($__internal_645287ebc3bab1017a90304f28ffad6fa2ce1bbbb2e519fa2f1106363509eab4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f398a53275021842ef2afb9867eebe90fc6c1aeacb6d340dc98c6db5286b2aa = $this->env->getExtension("native_profiler");
        $__internal_7f398a53275021842ef2afb9867eebe90fc6c1aeacb6d340dc98c6db5286b2aa->enter($__internal_7f398a53275021842ef2afb9867eebe90fc6c1aeacb6d340dc98c6db5286b2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f398a53275021842ef2afb9867eebe90fc6c1aeacb6d340dc98c6db5286b2aa->leave($__internal_7f398a53275021842ef2afb9867eebe90fc6c1aeacb6d340dc98c6db5286b2aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_837e17b14d55153dd0fb83e8e42d66febbff9c512731ea1a9fb6712978c23303 = $this->env->getExtension("native_profiler");
        $__internal_837e17b14d55153dd0fb83e8e42d66febbff9c512731ea1a9fb6712978c23303->enter($__internal_837e17b14d55153dd0fb83e8e42d66febbff9c512731ea1a9fb6712978c23303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_837e17b14d55153dd0fb83e8e42d66febbff9c512731ea1a9fb6712978c23303->leave($__internal_837e17b14d55153dd0fb83e8e42d66febbff9c512731ea1a9fb6712978c23303_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
