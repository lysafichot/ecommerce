<?php

/* AccountBundle:Security:registration.html.twig */
class __TwigTemplate_8bc0cdaa98fd498625bf62897ef7d28e4af69abe19251462f537dd6119dfb68d extends Twig_Template
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
        $__internal_d3e4069d97e241b741d0e474efde1b753b3770f9ed33b3ec3e467d6530c0290a = $this->env->getExtension("native_profiler");
        $__internal_d3e4069d97e241b741d0e474efde1b753b3770f9ed33b3ec3e467d6530c0290a->enter($__internal_d3e4069d97e241b741d0e474efde1b753b3770f9ed33b3ec3e467d6530c0290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Security:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e4069d97e241b741d0e474efde1b753b3770f9ed33b3ec3e467d6530c0290a->leave($__internal_d3e4069d97e241b741d0e474efde1b753b3770f9ed33b3ec3e467d6530c0290a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da6406d0f904470614bf84da81a1b4e1e66dfd1aa9f4328613339e4c39206b18 = $this->env->getExtension("native_profiler");
        $__internal_da6406d0f904470614bf84da81a1b4e1e66dfd1aa9f4328613339e4c39206b18->enter($__internal_da6406d0f904470614bf84da81a1b4e1e66dfd1aa9f4328613339e4c39206b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_da6406d0f904470614bf84da81a1b4e1e66dfd1aa9f4328613339e4c39206b18->leave($__internal_da6406d0f904470614bf84da81a1b4e1e66dfd1aa9f4328613339e4c39206b18_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_9118fc049994910d31296bc1f3ff9576a2582436822e67e1d8aff9f758e7ec84 = $this->env->getExtension("native_profiler");
        $__internal_9118fc049994910d31296bc1f3ff9576a2582436822e67e1d8aff9f758e7ec84->enter($__internal_9118fc049994910d31296bc1f3ff9576a2582436822e67e1d8aff9f758e7ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_9118fc049994910d31296bc1f3ff9576a2582436822e67e1d8aff9f758e7ec84->leave($__internal_9118fc049994910d31296bc1f3ff9576a2582436822e67e1d8aff9f758e7ec84_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_41971599f413fbf6182d97a010c761a65c90e9eda5a594adb135a13e2b95effc = $this->env->getExtension("native_profiler");
        $__internal_41971599f413fbf6182d97a010c761a65c90e9eda5a594adb135a13e2b95effc->enter($__internal_41971599f413fbf6182d97a010c761a65c90e9eda5a594adb135a13e2b95effc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41971599f413fbf6182d97a010c761a65c90e9eda5a594adb135a13e2b95effc->leave($__internal_41971599f413fbf6182d97a010c761a65c90e9eda5a594adb135a13e2b95effc_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_1068fc29d6ada328568fa03abcf947ed4f6339aa6128a170448c9d3ea96f86d2 = $this->env->getExtension("native_profiler");
        $__internal_1068fc29d6ada328568fa03abcf947ed4f6339aa6128a170448c9d3ea96f86d2->enter($__internal_1068fc29d6ada328568fa03abcf947ed4f6339aa6128a170448c9d3ea96f86d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_1068fc29d6ada328568fa03abcf947ed4f6339aa6128a170448c9d3ea96f86d2->leave($__internal_1068fc29d6ada328568fa03abcf947ed4f6339aa6128a170448c9d3ea96f86d2_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_e865ccb5b280de7a7c7b3b88f35ed4b85e8a5baac0674b64d7ef7563017292b0 = $this->env->getExtension("native_profiler");
        $__internal_e865ccb5b280de7a7c7b3b88f35ed4b85e8a5baac0674b64d7ef7563017292b0->enter($__internal_e865ccb5b280de7a7c7b3b88f35ed4b85e8a5baac0674b64d7ef7563017292b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_e865ccb5b280de7a7c7b3b88f35ed4b85e8a5baac0674b64d7ef7563017292b0->leave($__internal_e865ccb5b280de7a7c7b3b88f35ed4b85e8a5baac0674b64d7ef7563017292b0_prof);

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
