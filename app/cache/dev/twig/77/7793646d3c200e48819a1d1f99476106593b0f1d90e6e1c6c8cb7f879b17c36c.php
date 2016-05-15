<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b44aaebe31ee969ea0bdd88b646f3b7c76e19c991be84c152806431fd5d7f9ae extends Twig_Template
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
        $__internal_a87daf58ea6c24e906571eedc7bd314fcda1f8353d00fdb1aedc7f3a56cc7696 = $this->env->getExtension("native_profiler");
        $__internal_a87daf58ea6c24e906571eedc7bd314fcda1f8353d00fdb1aedc7f3a56cc7696->enter($__internal_a87daf58ea6c24e906571eedc7bd314fcda1f8353d00fdb1aedc7f3a56cc7696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87daf58ea6c24e906571eedc7bd314fcda1f8353d00fdb1aedc7f3a56cc7696->leave($__internal_a87daf58ea6c24e906571eedc7bd314fcda1f8353d00fdb1aedc7f3a56cc7696_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dec624c7627033bf76d0caafb5691ba523bff509735b46de38d1c19c613c9c6e = $this->env->getExtension("native_profiler");
        $__internal_dec624c7627033bf76d0caafb5691ba523bff509735b46de38d1c19c613c9c6e->enter($__internal_dec624c7627033bf76d0caafb5691ba523bff509735b46de38d1c19c613c9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dec624c7627033bf76d0caafb5691ba523bff509735b46de38d1c19c613c9c6e->leave($__internal_dec624c7627033bf76d0caafb5691ba523bff509735b46de38d1c19c613c9c6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e61e2768b768eb16d072b861a51d926b68bcdebb5ed31cf7f4712f3956c5afd = $this->env->getExtension("native_profiler");
        $__internal_5e61e2768b768eb16d072b861a51d926b68bcdebb5ed31cf7f4712f3956c5afd->enter($__internal_5e61e2768b768eb16d072b861a51d926b68bcdebb5ed31cf7f4712f3956c5afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5e61e2768b768eb16d072b861a51d926b68bcdebb5ed31cf7f4712f3956c5afd->leave($__internal_5e61e2768b768eb16d072b861a51d926b68bcdebb5ed31cf7f4712f3956c5afd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec684f6e82e8801b74f938d6afd3d296acc6f785c9c11ffbc14e9f79408f73fe = $this->env->getExtension("native_profiler");
        $__internal_ec684f6e82e8801b74f938d6afd3d296acc6f785c9c11ffbc14e9f79408f73fe->enter($__internal_ec684f6e82e8801b74f938d6afd3d296acc6f785c9c11ffbc14e9f79408f73fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec684f6e82e8801b74f938d6afd3d296acc6f785c9c11ffbc14e9f79408f73fe->leave($__internal_ec684f6e82e8801b74f938d6afd3d296acc6f785c9c11ffbc14e9f79408f73fe_prof);

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
