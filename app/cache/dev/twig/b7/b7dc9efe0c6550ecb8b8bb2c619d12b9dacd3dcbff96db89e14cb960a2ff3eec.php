<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b2111745d6fd773383e3ca5b4bb8db746e8ef449399a9e14ae623e9b1a2acd9 extends Twig_Template
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
        $__internal_6fd4e2a8bd1b4e85b7d5d3e748ac497e7d56418ebfff8977c96e853b799f97b3 = $this->env->getExtension("native_profiler");
        $__internal_6fd4e2a8bd1b4e85b7d5d3e748ac497e7d56418ebfff8977c96e853b799f97b3->enter($__internal_6fd4e2a8bd1b4e85b7d5d3e748ac497e7d56418ebfff8977c96e853b799f97b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd4e2a8bd1b4e85b7d5d3e748ac497e7d56418ebfff8977c96e853b799f97b3->leave($__internal_6fd4e2a8bd1b4e85b7d5d3e748ac497e7d56418ebfff8977c96e853b799f97b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7de0fa30de80c3debe94da5ed3cc1928f226f50ab200f0e3cd7358644554e224 = $this->env->getExtension("native_profiler");
        $__internal_7de0fa30de80c3debe94da5ed3cc1928f226f50ab200f0e3cd7358644554e224->enter($__internal_7de0fa30de80c3debe94da5ed3cc1928f226f50ab200f0e3cd7358644554e224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7de0fa30de80c3debe94da5ed3cc1928f226f50ab200f0e3cd7358644554e224->leave($__internal_7de0fa30de80c3debe94da5ed3cc1928f226f50ab200f0e3cd7358644554e224_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6264a25bd01260878dbe3a11994927e5d683efeb8a8e14abfa7637d734e2759 = $this->env->getExtension("native_profiler");
        $__internal_f6264a25bd01260878dbe3a11994927e5d683efeb8a8e14abfa7637d734e2759->enter($__internal_f6264a25bd01260878dbe3a11994927e5d683efeb8a8e14abfa7637d734e2759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6264a25bd01260878dbe3a11994927e5d683efeb8a8e14abfa7637d734e2759->leave($__internal_f6264a25bd01260878dbe3a11994927e5d683efeb8a8e14abfa7637d734e2759_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_663880ea6fec18efcee550023695ea96c214117b081863229c1e786fcedd9d74 = $this->env->getExtension("native_profiler");
        $__internal_663880ea6fec18efcee550023695ea96c214117b081863229c1e786fcedd9d74->enter($__internal_663880ea6fec18efcee550023695ea96c214117b081863229c1e786fcedd9d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_663880ea6fec18efcee550023695ea96c214117b081863229c1e786fcedd9d74->leave($__internal_663880ea6fec18efcee550023695ea96c214117b081863229c1e786fcedd9d74_prof);

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
