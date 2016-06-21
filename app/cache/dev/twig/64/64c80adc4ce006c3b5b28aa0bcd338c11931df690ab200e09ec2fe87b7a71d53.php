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
        $__internal_bf4cfd94a0cd42fd27ce1bfc9bfe8383c62d9ebb2f84eb8c0c6d61ea721623bb = $this->env->getExtension("native_profiler");
        $__internal_bf4cfd94a0cd42fd27ce1bfc9bfe8383c62d9ebb2f84eb8c0c6d61ea721623bb->enter($__internal_bf4cfd94a0cd42fd27ce1bfc9bfe8383c62d9ebb2f84eb8c0c6d61ea721623bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4cfd94a0cd42fd27ce1bfc9bfe8383c62d9ebb2f84eb8c0c6d61ea721623bb->leave($__internal_bf4cfd94a0cd42fd27ce1bfc9bfe8383c62d9ebb2f84eb8c0c6d61ea721623bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1027b9ff1c49bb19aa4e7e9b4fae0c2a7288865443d8cd885f09f275d90fbe40 = $this->env->getExtension("native_profiler");
        $__internal_1027b9ff1c49bb19aa4e7e9b4fae0c2a7288865443d8cd885f09f275d90fbe40->enter($__internal_1027b9ff1c49bb19aa4e7e9b4fae0c2a7288865443d8cd885f09f275d90fbe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1027b9ff1c49bb19aa4e7e9b4fae0c2a7288865443d8cd885f09f275d90fbe40->leave($__internal_1027b9ff1c49bb19aa4e7e9b4fae0c2a7288865443d8cd885f09f275d90fbe40_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10b3159e43e716668a143abc807b47cbfd3d6694b83ee4815ed4b3ac99a1a747 = $this->env->getExtension("native_profiler");
        $__internal_10b3159e43e716668a143abc807b47cbfd3d6694b83ee4815ed4b3ac99a1a747->enter($__internal_10b3159e43e716668a143abc807b47cbfd3d6694b83ee4815ed4b3ac99a1a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10b3159e43e716668a143abc807b47cbfd3d6694b83ee4815ed4b3ac99a1a747->leave($__internal_10b3159e43e716668a143abc807b47cbfd3d6694b83ee4815ed4b3ac99a1a747_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17ca4192886e508c80bcd9064185e28c3be2b5d04765ad10da00f1bdef62f98d = $this->env->getExtension("native_profiler");
        $__internal_17ca4192886e508c80bcd9064185e28c3be2b5d04765ad10da00f1bdef62f98d->enter($__internal_17ca4192886e508c80bcd9064185e28c3be2b5d04765ad10da00f1bdef62f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17ca4192886e508c80bcd9064185e28c3be2b5d04765ad10da00f1bdef62f98d->leave($__internal_17ca4192886e508c80bcd9064185e28c3be2b5d04765ad10da00f1bdef62f98d_prof);

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
