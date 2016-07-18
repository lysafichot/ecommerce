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
        $__internal_0bc54ac01653e4092fa08e7c59e8613f58c5370cbbaece82d8eb37f5262ed9cc = $this->env->getExtension("native_profiler");
        $__internal_0bc54ac01653e4092fa08e7c59e8613f58c5370cbbaece82d8eb37f5262ed9cc->enter($__internal_0bc54ac01653e4092fa08e7c59e8613f58c5370cbbaece82d8eb37f5262ed9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc54ac01653e4092fa08e7c59e8613f58c5370cbbaece82d8eb37f5262ed9cc->leave($__internal_0bc54ac01653e4092fa08e7c59e8613f58c5370cbbaece82d8eb37f5262ed9cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2ad4fcb46515b4810feb99cb7e4bef15297c70ca60b1038861bd2852d05c0cc = $this->env->getExtension("native_profiler");
        $__internal_c2ad4fcb46515b4810feb99cb7e4bef15297c70ca60b1038861bd2852d05c0cc->enter($__internal_c2ad4fcb46515b4810feb99cb7e4bef15297c70ca60b1038861bd2852d05c0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c2ad4fcb46515b4810feb99cb7e4bef15297c70ca60b1038861bd2852d05c0cc->leave($__internal_c2ad4fcb46515b4810feb99cb7e4bef15297c70ca60b1038861bd2852d05c0cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_709f046813d20f37bb5a5811baee7c3458f04931506bfa789b07d0e528a7197a = $this->env->getExtension("native_profiler");
        $__internal_709f046813d20f37bb5a5811baee7c3458f04931506bfa789b07d0e528a7197a->enter($__internal_709f046813d20f37bb5a5811baee7c3458f04931506bfa789b07d0e528a7197a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_709f046813d20f37bb5a5811baee7c3458f04931506bfa789b07d0e528a7197a->leave($__internal_709f046813d20f37bb5a5811baee7c3458f04931506bfa789b07d0e528a7197a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f16ff85c31fc95769b8a8f1a7fcd388408040344f6dcb4393851185cde86917 = $this->env->getExtension("native_profiler");
        $__internal_2f16ff85c31fc95769b8a8f1a7fcd388408040344f6dcb4393851185cde86917->enter($__internal_2f16ff85c31fc95769b8a8f1a7fcd388408040344f6dcb4393851185cde86917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2f16ff85c31fc95769b8a8f1a7fcd388408040344f6dcb4393851185cde86917->leave($__internal_2f16ff85c31fc95769b8a8f1a7fcd388408040344f6dcb4393851185cde86917_prof);

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
