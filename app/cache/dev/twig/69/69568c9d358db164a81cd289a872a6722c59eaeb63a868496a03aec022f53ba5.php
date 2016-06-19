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
        $__internal_c75afee0fe4369798d59ce578a023aaf56053098e8c59501f1815fa5965cdf61 = $this->env->getExtension("native_profiler");
        $__internal_c75afee0fe4369798d59ce578a023aaf56053098e8c59501f1815fa5965cdf61->enter($__internal_c75afee0fe4369798d59ce578a023aaf56053098e8c59501f1815fa5965cdf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75afee0fe4369798d59ce578a023aaf56053098e8c59501f1815fa5965cdf61->leave($__internal_c75afee0fe4369798d59ce578a023aaf56053098e8c59501f1815fa5965cdf61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79cd73ca42b2ddaeae13e5e7be473b7b884ea76af6aec2d4bca7f5fd472625e8 = $this->env->getExtension("native_profiler");
        $__internal_79cd73ca42b2ddaeae13e5e7be473b7b884ea76af6aec2d4bca7f5fd472625e8->enter($__internal_79cd73ca42b2ddaeae13e5e7be473b7b884ea76af6aec2d4bca7f5fd472625e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79cd73ca42b2ddaeae13e5e7be473b7b884ea76af6aec2d4bca7f5fd472625e8->leave($__internal_79cd73ca42b2ddaeae13e5e7be473b7b884ea76af6aec2d4bca7f5fd472625e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d065da9361cfac4a6b263bdebbdc96ccc5c2f2c5b6c6ac3cc4a4f107927e24c = $this->env->getExtension("native_profiler");
        $__internal_4d065da9361cfac4a6b263bdebbdc96ccc5c2f2c5b6c6ac3cc4a4f107927e24c->enter($__internal_4d065da9361cfac4a6b263bdebbdc96ccc5c2f2c5b6c6ac3cc4a4f107927e24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d065da9361cfac4a6b263bdebbdc96ccc5c2f2c5b6c6ac3cc4a4f107927e24c->leave($__internal_4d065da9361cfac4a6b263bdebbdc96ccc5c2f2c5b6c6ac3cc4a4f107927e24c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63e83086daf59912b468b2b86834d62fcfa82cbc578a4f5703374a5abeb35f9 = $this->env->getExtension("native_profiler");
        $__internal_c63e83086daf59912b468b2b86834d62fcfa82cbc578a4f5703374a5abeb35f9->enter($__internal_c63e83086daf59912b468b2b86834d62fcfa82cbc578a4f5703374a5abeb35f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c63e83086daf59912b468b2b86834d62fcfa82cbc578a4f5703374a5abeb35f9->leave($__internal_c63e83086daf59912b468b2b86834d62fcfa82cbc578a4f5703374a5abeb35f9_prof);

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
