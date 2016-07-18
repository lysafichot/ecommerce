<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7090a007f02b8060f4b3718801fec664d1607a11314be58808bc4160cd665f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_40fd6e816742f0418472712ee5be4f70b4c3f846157f6fb024b796cdf4658797 = $this->env->getExtension("native_profiler");
        $__internal_40fd6e816742f0418472712ee5be4f70b4c3f846157f6fb024b796cdf4658797->enter($__internal_40fd6e816742f0418472712ee5be4f70b4c3f846157f6fb024b796cdf4658797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40fd6e816742f0418472712ee5be4f70b4c3f846157f6fb024b796cdf4658797->leave($__internal_40fd6e816742f0418472712ee5be4f70b4c3f846157f6fb024b796cdf4658797_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb187d8585e062807babb349abec3a197943f73a3c4bbad5c6a2800d6ab8c964 = $this->env->getExtension("native_profiler");
        $__internal_eb187d8585e062807babb349abec3a197943f73a3c4bbad5c6a2800d6ab8c964->enter($__internal_eb187d8585e062807babb349abec3a197943f73a3c4bbad5c6a2800d6ab8c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb187d8585e062807babb349abec3a197943f73a3c4bbad5c6a2800d6ab8c964->leave($__internal_eb187d8585e062807babb349abec3a197943f73a3c4bbad5c6a2800d6ab8c964_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50e8af69a8845180e92f0b091857b997d5ef9b3f94548eb99bf2ca4237ebe67f = $this->env->getExtension("native_profiler");
        $__internal_50e8af69a8845180e92f0b091857b997d5ef9b3f94548eb99bf2ca4237ebe67f->enter($__internal_50e8af69a8845180e92f0b091857b997d5ef9b3f94548eb99bf2ca4237ebe67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50e8af69a8845180e92f0b091857b997d5ef9b3f94548eb99bf2ca4237ebe67f->leave($__internal_50e8af69a8845180e92f0b091857b997d5ef9b3f94548eb99bf2ca4237ebe67f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d79f3eacbb4de66e84afd9cf4cd28b18b49a6477fe29c7dc243df7715530f9f2 = $this->env->getExtension("native_profiler");
        $__internal_d79f3eacbb4de66e84afd9cf4cd28b18b49a6477fe29c7dc243df7715530f9f2->enter($__internal_d79f3eacbb4de66e84afd9cf4cd28b18b49a6477fe29c7dc243df7715530f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d79f3eacbb4de66e84afd9cf4cd28b18b49a6477fe29c7dc243df7715530f9f2->leave($__internal_d79f3eacbb4de66e84afd9cf4cd28b18b49a6477fe29c7dc243df7715530f9f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
