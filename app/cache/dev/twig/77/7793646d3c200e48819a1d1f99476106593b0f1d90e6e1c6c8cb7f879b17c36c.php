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
        $__internal_dc3d8ff88250db6d9972b2e9db43c3d2d22491eef850ea4fd6dacf89ad4b07d7 = $this->env->getExtension("native_profiler");
        $__internal_dc3d8ff88250db6d9972b2e9db43c3d2d22491eef850ea4fd6dacf89ad4b07d7->enter($__internal_dc3d8ff88250db6d9972b2e9db43c3d2d22491eef850ea4fd6dacf89ad4b07d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3d8ff88250db6d9972b2e9db43c3d2d22491eef850ea4fd6dacf89ad4b07d7->leave($__internal_dc3d8ff88250db6d9972b2e9db43c3d2d22491eef850ea4fd6dacf89ad4b07d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6f566b16ba3e2766d47c3c9cda9a2e69e729c1a2fef7528e4053766bcb3d708 = $this->env->getExtension("native_profiler");
        $__internal_d6f566b16ba3e2766d47c3c9cda9a2e69e729c1a2fef7528e4053766bcb3d708->enter($__internal_d6f566b16ba3e2766d47c3c9cda9a2e69e729c1a2fef7528e4053766bcb3d708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6f566b16ba3e2766d47c3c9cda9a2e69e729c1a2fef7528e4053766bcb3d708->leave($__internal_d6f566b16ba3e2766d47c3c9cda9a2e69e729c1a2fef7528e4053766bcb3d708_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c19fa8cc1f5e0ff6ac08c70a0c581cb1b7e6ce7fe354b24ab534ae78e673f0c3 = $this->env->getExtension("native_profiler");
        $__internal_c19fa8cc1f5e0ff6ac08c70a0c581cb1b7e6ce7fe354b24ab534ae78e673f0c3->enter($__internal_c19fa8cc1f5e0ff6ac08c70a0c581cb1b7e6ce7fe354b24ab534ae78e673f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c19fa8cc1f5e0ff6ac08c70a0c581cb1b7e6ce7fe354b24ab534ae78e673f0c3->leave($__internal_c19fa8cc1f5e0ff6ac08c70a0c581cb1b7e6ce7fe354b24ab534ae78e673f0c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9433f93e5cabca8e2347a7799d86a49b85dc77ad84d68cc6786b9650a10ff9 = $this->env->getExtension("native_profiler");
        $__internal_8d9433f93e5cabca8e2347a7799d86a49b85dc77ad84d68cc6786b9650a10ff9->enter($__internal_8d9433f93e5cabca8e2347a7799d86a49b85dc77ad84d68cc6786b9650a10ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8d9433f93e5cabca8e2347a7799d86a49b85dc77ad84d68cc6786b9650a10ff9->leave($__internal_8d9433f93e5cabca8e2347a7799d86a49b85dc77ad84d68cc6786b9650a10ff9_prof);

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
