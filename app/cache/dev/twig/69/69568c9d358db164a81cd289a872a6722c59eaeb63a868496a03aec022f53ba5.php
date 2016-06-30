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
        $__internal_21d40f93ec8bce89e5028a05465eb09bb118eb265683b8b0eefe1dd1bbb6a150 = $this->env->getExtension("native_profiler");
        $__internal_21d40f93ec8bce89e5028a05465eb09bb118eb265683b8b0eefe1dd1bbb6a150->enter($__internal_21d40f93ec8bce89e5028a05465eb09bb118eb265683b8b0eefe1dd1bbb6a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d40f93ec8bce89e5028a05465eb09bb118eb265683b8b0eefe1dd1bbb6a150->leave($__internal_21d40f93ec8bce89e5028a05465eb09bb118eb265683b8b0eefe1dd1bbb6a150_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23a46eb557ad1483d6d4aeaff6e0d8602cf305704caf32d9f602be5e6d7e6a73 = $this->env->getExtension("native_profiler");
        $__internal_23a46eb557ad1483d6d4aeaff6e0d8602cf305704caf32d9f602be5e6d7e6a73->enter($__internal_23a46eb557ad1483d6d4aeaff6e0d8602cf305704caf32d9f602be5e6d7e6a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23a46eb557ad1483d6d4aeaff6e0d8602cf305704caf32d9f602be5e6d7e6a73->leave($__internal_23a46eb557ad1483d6d4aeaff6e0d8602cf305704caf32d9f602be5e6d7e6a73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d859a15395f4fa33086315ba14a5972ca8f18c60c37e85a7ad53eeef46f9b1 = $this->env->getExtension("native_profiler");
        $__internal_b6d859a15395f4fa33086315ba14a5972ca8f18c60c37e85a7ad53eeef46f9b1->enter($__internal_b6d859a15395f4fa33086315ba14a5972ca8f18c60c37e85a7ad53eeef46f9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b6d859a15395f4fa33086315ba14a5972ca8f18c60c37e85a7ad53eeef46f9b1->leave($__internal_b6d859a15395f4fa33086315ba14a5972ca8f18c60c37e85a7ad53eeef46f9b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d837da5b683f9ed8d4e8d36b4348e208e6e68ba0f0ac6f8d4a190262096c8d0e = $this->env->getExtension("native_profiler");
        $__internal_d837da5b683f9ed8d4e8d36b4348e208e6e68ba0f0ac6f8d4a190262096c8d0e->enter($__internal_d837da5b683f9ed8d4e8d36b4348e208e6e68ba0f0ac6f8d4a190262096c8d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d837da5b683f9ed8d4e8d36b4348e208e6e68ba0f0ac6f8d4a190262096c8d0e->leave($__internal_d837da5b683f9ed8d4e8d36b4348e208e6e68ba0f0ac6f8d4a190262096c8d0e_prof);

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
