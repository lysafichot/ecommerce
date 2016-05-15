<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6a4d24b045c66d31c857cb0e54200df67c68c026f3dc7712efdcc316bb05e39a extends Twig_Template
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
        $__internal_39ba8ce524dda118bbfbd718bde6297beeda0ca73f5c696e9fe60235a191bdcb = $this->env->getExtension("native_profiler");
        $__internal_39ba8ce524dda118bbfbd718bde6297beeda0ca73f5c696e9fe60235a191bdcb->enter($__internal_39ba8ce524dda118bbfbd718bde6297beeda0ca73f5c696e9fe60235a191bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ba8ce524dda118bbfbd718bde6297beeda0ca73f5c696e9fe60235a191bdcb->leave($__internal_39ba8ce524dda118bbfbd718bde6297beeda0ca73f5c696e9fe60235a191bdcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20c616e1b7131c3894922ab510eb1131c996cd482bc263797f6a7e46213c955f = $this->env->getExtension("native_profiler");
        $__internal_20c616e1b7131c3894922ab510eb1131c996cd482bc263797f6a7e46213c955f->enter($__internal_20c616e1b7131c3894922ab510eb1131c996cd482bc263797f6a7e46213c955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20c616e1b7131c3894922ab510eb1131c996cd482bc263797f6a7e46213c955f->leave($__internal_20c616e1b7131c3894922ab510eb1131c996cd482bc263797f6a7e46213c955f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2948fabcbe85a8d2fb6698115a8b144d948297215931642d003be7b431cbd113 = $this->env->getExtension("native_profiler");
        $__internal_2948fabcbe85a8d2fb6698115a8b144d948297215931642d003be7b431cbd113->enter($__internal_2948fabcbe85a8d2fb6698115a8b144d948297215931642d003be7b431cbd113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2948fabcbe85a8d2fb6698115a8b144d948297215931642d003be7b431cbd113->leave($__internal_2948fabcbe85a8d2fb6698115a8b144d948297215931642d003be7b431cbd113_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b49087b6d8defb10cf713f500ad34d6db0114bef25d34275154519b1e4bb91f = $this->env->getExtension("native_profiler");
        $__internal_3b49087b6d8defb10cf713f500ad34d6db0114bef25d34275154519b1e4bb91f->enter($__internal_3b49087b6d8defb10cf713f500ad34d6db0114bef25d34275154519b1e4bb91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b49087b6d8defb10cf713f500ad34d6db0114bef25d34275154519b1e4bb91f->leave($__internal_3b49087b6d8defb10cf713f500ad34d6db0114bef25d34275154519b1e4bb91f_prof);

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
