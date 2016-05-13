<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d540cb7e50eff703e8729116c95744e0ba1a648e9f8ff542574bc26ce66d513f extends Twig_Template
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
        $__internal_1ccfaaac883db553b48229959fded926b07a508d65f4ab78a8c4a34ba1e552ae = $this->env->getExtension("native_profiler");
        $__internal_1ccfaaac883db553b48229959fded926b07a508d65f4ab78a8c4a34ba1e552ae->enter($__internal_1ccfaaac883db553b48229959fded926b07a508d65f4ab78a8c4a34ba1e552ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccfaaac883db553b48229959fded926b07a508d65f4ab78a8c4a34ba1e552ae->leave($__internal_1ccfaaac883db553b48229959fded926b07a508d65f4ab78a8c4a34ba1e552ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f185bd8a2abac1030f8cb57c6e9e0b1f7dfbb8e7ae9ca8821499a265cd9941f0 = $this->env->getExtension("native_profiler");
        $__internal_f185bd8a2abac1030f8cb57c6e9e0b1f7dfbb8e7ae9ca8821499a265cd9941f0->enter($__internal_f185bd8a2abac1030f8cb57c6e9e0b1f7dfbb8e7ae9ca8821499a265cd9941f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f185bd8a2abac1030f8cb57c6e9e0b1f7dfbb8e7ae9ca8821499a265cd9941f0->leave($__internal_f185bd8a2abac1030f8cb57c6e9e0b1f7dfbb8e7ae9ca8821499a265cd9941f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f436868251ebab3909f2d06f8cc5de0e78e9844fedc12585e37bc53c3d815af = $this->env->getExtension("native_profiler");
        $__internal_1f436868251ebab3909f2d06f8cc5de0e78e9844fedc12585e37bc53c3d815af->enter($__internal_1f436868251ebab3909f2d06f8cc5de0e78e9844fedc12585e37bc53c3d815af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f436868251ebab3909f2d06f8cc5de0e78e9844fedc12585e37bc53c3d815af->leave($__internal_1f436868251ebab3909f2d06f8cc5de0e78e9844fedc12585e37bc53c3d815af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf3bab3eae3343c8dfdc9b9dad6e89c0524c758fab81aa37a492c21ec2212d7 = $this->env->getExtension("native_profiler");
        $__internal_7cf3bab3eae3343c8dfdc9b9dad6e89c0524c758fab81aa37a492c21ec2212d7->enter($__internal_7cf3bab3eae3343c8dfdc9b9dad6e89c0524c758fab81aa37a492c21ec2212d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7cf3bab3eae3343c8dfdc9b9dad6e89c0524c758fab81aa37a492c21ec2212d7->leave($__internal_7cf3bab3eae3343c8dfdc9b9dad6e89c0524c758fab81aa37a492c21ec2212d7_prof);

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
