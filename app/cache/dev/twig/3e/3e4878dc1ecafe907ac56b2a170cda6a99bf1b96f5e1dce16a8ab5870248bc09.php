<?php

/* AccountBundle:Security:registration.html.twig */
class __TwigTemplate_6a4bf626d057602ed371d02f98ae126752562f9d4ae91c6b09f17cf691e0ede3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccountBundle:Security:registration.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu_auth' => array($this, 'block_menu_auth'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf99a640b733cc9f6c19f9fa4dacf5905152c5ea7781580e043e1de0b15b0a4 = $this->env->getExtension("native_profiler");
        $__internal_bcf99a640b733cc9f6c19f9fa4dacf5905152c5ea7781580e043e1de0b15b0a4->enter($__internal_bcf99a640b733cc9f6c19f9fa4dacf5905152c5ea7781580e043e1de0b15b0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Security:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf99a640b733cc9f6c19f9fa4dacf5905152c5ea7781580e043e1de0b15b0a4->leave($__internal_bcf99a640b733cc9f6c19f9fa4dacf5905152c5ea7781580e043e1de0b15b0a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eedcb2e7e21d977c4266968f938e696e93c3423b891165be02a5bd6dfb5190d8 = $this->env->getExtension("native_profiler");
        $__internal_eedcb2e7e21d977c4266968f938e696e93c3423b891165be02a5bd6dfb5190d8->enter($__internal_eedcb2e7e21d977c4266968f938e696e93c3423b891165be02a5bd6dfb5190d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_eedcb2e7e21d977c4266968f938e696e93c3423b891165be02a5bd6dfb5190d8->leave($__internal_eedcb2e7e21d977c4266968f938e696e93c3423b891165be02a5bd6dfb5190d8_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_637691b230e19fd844626339ecc789c939d001b6a7dab697576ded382265bd5c = $this->env->getExtension("native_profiler");
        $__internal_637691b230e19fd844626339ecc789c939d001b6a7dab697576ded382265bd5c->enter($__internal_637691b230e19fd844626339ecc789c939d001b6a7dab697576ded382265bd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_637691b230e19fd844626339ecc789c939d001b6a7dab697576ded382265bd5c->leave($__internal_637691b230e19fd844626339ecc789c939d001b6a7dab697576ded382265bd5c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c86f913d00d493cb22f7cd6b6d8fec318134767bb542f15a2ed267db24f3a16a = $this->env->getExtension("native_profiler");
        $__internal_c86f913d00d493cb22f7cd6b6d8fec318134767bb542f15a2ed267db24f3a16a->enter($__internal_c86f913d00d493cb22f7cd6b6d8fec318134767bb542f15a2ed267db24f3a16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
<div id='search_login'>
\t";
        // line 12
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 13
        echo "</div>
<div id=\"main_div\">
\t<div id='contents'>

\t\t<div  class='arbre'>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>

\t\t\t<a href=\"\"></a>
\t\t</div>
\t\t<div id ='registration'>
\t\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-register")));
        echo "
\t\t\t<div id='registre'>
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

\t\t\t</div>

\t\t\t<div class='hidden'>

\t\t\t</div>
\t\t\t<button type=\"submit\">Register!</button>
\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>


\t</div>
</div>
";
        
        $__internal_c86f913d00d493cb22f7cd6b6d8fec318134767bb542f15a2ed267db24f3a16a->leave($__internal_c86f913d00d493cb22f7cd6b6d8fec318134767bb542f15a2ed267db24f3a16a_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_1ebc76cee2cdb3151307c4248536bd341e8b83b526be9dee0c340911615334df = $this->env->getExtension("native_profiler");
        $__internal_1ebc76cee2cdb3151307c4248536bd341e8b83b526be9dee0c340911615334df->enter($__internal_1ebc76cee2cdb3151307c4248536bd341e8b83b526be9dee0c340911615334df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_1ebc76cee2cdb3151307c4248536bd341e8b83b526be9dee0c340911615334df->leave($__internal_1ebc76cee2cdb3151307c4248536bd341e8b83b526be9dee0c340911615334df_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_2e002c3b86dbd6887ef849bc543924a5fdd401aafbf4d7caae7b8d167befd7ae = $this->env->getExtension("native_profiler");
        $__internal_2e002c3b86dbd6887ef849bc543924a5fdd401aafbf4d7caae7b8d167befd7ae->enter($__internal_2e002c3b86dbd6887ef849bc543924a5fdd401aafbf4d7caae7b8d167befd7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_2e002c3b86dbd6887ef849bc543924a5fdd401aafbf4d7caae7b8d167befd7ae->leave($__internal_2e002c3b86dbd6887ef849bc543924a5fdd401aafbf4d7caae7b8d167befd7ae_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Security:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 12,  137 => 9,  123 => 36,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  95 => 23,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Accueil {% endblock %}*/
/* */
/* {% block head %} {{ parent() }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* {% block header %} {{ parent() }} {% endblock %}*/
/* */
/* <div id='search_login'>*/
/* 	{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* </div>*/
/* <div id="main_div">*/
/* 	<div id='contents'>*/
/* */
/* 		<div  class='arbre'>*/
/* 			<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* */
/* 			<a href=""></a>*/
/* 		</div>*/
/* 		<div id ='registration'>*/
/* 				{{ form_start(form, {'attr': {'class': 'form-register'}}) }}*/
/* 			<div id='registre'>*/
/* 				{{ form_row(form.username) }}*/
/* 				{{ form_row(form.email) }}*/
/* 				{{ form_row(form.plainPassword.first) }}*/
/* 				{{ form_row(form.plainPassword.second) }}*/
/* */
/* 			</div>*/
/* */
/* 			<div class='hidden'>*/
/* */
/* 			</div>*/
/* 			<button type="submit">Register!</button>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* */
/* */
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
