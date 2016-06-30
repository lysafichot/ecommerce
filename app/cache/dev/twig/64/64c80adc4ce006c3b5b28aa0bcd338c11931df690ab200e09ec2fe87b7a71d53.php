<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85d3d330adfa8988d616543848cc9ca01c25743d9b11ac238d5613ac9cb5c467 extends Twig_Template
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
        $__internal_7a8ef6671f4e859422ab636e4874f173c1ba08aac76bad6b16b702e9f39dbb5d = $this->env->getExtension("native_profiler");
        $__internal_7a8ef6671f4e859422ab636e4874f173c1ba08aac76bad6b16b702e9f39dbb5d->enter($__internal_7a8ef6671f4e859422ab636e4874f173c1ba08aac76bad6b16b702e9f39dbb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8ef6671f4e859422ab636e4874f173c1ba08aac76bad6b16b702e9f39dbb5d->leave($__internal_7a8ef6671f4e859422ab636e4874f173c1ba08aac76bad6b16b702e9f39dbb5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e06c49e5607af7ffec44040d9ca86143e8324bc07e3e9cf445510f538d224d0 = $this->env->getExtension("native_profiler");
        $__internal_4e06c49e5607af7ffec44040d9ca86143e8324bc07e3e9cf445510f538d224d0->enter($__internal_4e06c49e5607af7ffec44040d9ca86143e8324bc07e3e9cf445510f538d224d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e06c49e5607af7ffec44040d9ca86143e8324bc07e3e9cf445510f538d224d0->leave($__internal_4e06c49e5607af7ffec44040d9ca86143e8324bc07e3e9cf445510f538d224d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed5cfb27767f6ab86c073873e6c09e507e5343f2aacd98b46ecaf47fa12f028f = $this->env->getExtension("native_profiler");
        $__internal_ed5cfb27767f6ab86c073873e6c09e507e5343f2aacd98b46ecaf47fa12f028f->enter($__internal_ed5cfb27767f6ab86c073873e6c09e507e5343f2aacd98b46ecaf47fa12f028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed5cfb27767f6ab86c073873e6c09e507e5343f2aacd98b46ecaf47fa12f028f->leave($__internal_ed5cfb27767f6ab86c073873e6c09e507e5343f2aacd98b46ecaf47fa12f028f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb7276c23f53da5a597d81baa1cb8243b3d8073d9c2af6cd24650db9fe52270 = $this->env->getExtension("native_profiler");
        $__internal_edb7276c23f53da5a597d81baa1cb8243b3d8073d9c2af6cd24650db9fe52270->enter($__internal_edb7276c23f53da5a597d81baa1cb8243b3d8073d9c2af6cd24650db9fe52270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edb7276c23f53da5a597d81baa1cb8243b3d8073d9c2af6cd24650db9fe52270->leave($__internal_edb7276c23f53da5a597d81baa1cb8243b3d8073d9c2af6cd24650db9fe52270_prof);

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
