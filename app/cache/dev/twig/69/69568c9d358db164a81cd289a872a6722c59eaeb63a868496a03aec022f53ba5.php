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
        $__internal_016b48fd93924666d0fa7b4d2791fda2b1c37632944ba280d046e92e4b4c84ad = $this->env->getExtension("native_profiler");
        $__internal_016b48fd93924666d0fa7b4d2791fda2b1c37632944ba280d046e92e4b4c84ad->enter($__internal_016b48fd93924666d0fa7b4d2791fda2b1c37632944ba280d046e92e4b4c84ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016b48fd93924666d0fa7b4d2791fda2b1c37632944ba280d046e92e4b4c84ad->leave($__internal_016b48fd93924666d0fa7b4d2791fda2b1c37632944ba280d046e92e4b4c84ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_859bba96eb51300f0c42c879375c5714d2854fb1b341e317c4dd0f0fd2438ee7 = $this->env->getExtension("native_profiler");
        $__internal_859bba96eb51300f0c42c879375c5714d2854fb1b341e317c4dd0f0fd2438ee7->enter($__internal_859bba96eb51300f0c42c879375c5714d2854fb1b341e317c4dd0f0fd2438ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_859bba96eb51300f0c42c879375c5714d2854fb1b341e317c4dd0f0fd2438ee7->leave($__internal_859bba96eb51300f0c42c879375c5714d2854fb1b341e317c4dd0f0fd2438ee7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0634c35fb6e62e8fa22bbda81227d7238885fc0c789f18d17586301389eea04c = $this->env->getExtension("native_profiler");
        $__internal_0634c35fb6e62e8fa22bbda81227d7238885fc0c789f18d17586301389eea04c->enter($__internal_0634c35fb6e62e8fa22bbda81227d7238885fc0c789f18d17586301389eea04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0634c35fb6e62e8fa22bbda81227d7238885fc0c789f18d17586301389eea04c->leave($__internal_0634c35fb6e62e8fa22bbda81227d7238885fc0c789f18d17586301389eea04c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_077e0b8a707842b9b24a5400afc6d8dd87f3fc5a31574bd619045f9a7dba0b00 = $this->env->getExtension("native_profiler");
        $__internal_077e0b8a707842b9b24a5400afc6d8dd87f3fc5a31574bd619045f9a7dba0b00->enter($__internal_077e0b8a707842b9b24a5400afc6d8dd87f3fc5a31574bd619045f9a7dba0b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_077e0b8a707842b9b24a5400afc6d8dd87f3fc5a31574bd619045f9a7dba0b00->leave($__internal_077e0b8a707842b9b24a5400afc6d8dd87f3fc5a31574bd619045f9a7dba0b00_prof);

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
