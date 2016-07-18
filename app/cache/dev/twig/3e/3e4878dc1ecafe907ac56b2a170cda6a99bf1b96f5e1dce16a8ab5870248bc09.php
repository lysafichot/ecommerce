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
        $__internal_6c091d1d2b43cd18fc76a1a11ea3a66d519fb509df0b5e86b2788d0880c38089 = $this->env->getExtension("native_profiler");
        $__internal_6c091d1d2b43cd18fc76a1a11ea3a66d519fb509df0b5e86b2788d0880c38089->enter($__internal_6c091d1d2b43cd18fc76a1a11ea3a66d519fb509df0b5e86b2788d0880c38089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Security:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c091d1d2b43cd18fc76a1a11ea3a66d519fb509df0b5e86b2788d0880c38089->leave($__internal_6c091d1d2b43cd18fc76a1a11ea3a66d519fb509df0b5e86b2788d0880c38089_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63940fe140f297aa845a4964478e9dabfa972c12203329f65c18f920ffc90baa = $this->env->getExtension("native_profiler");
        $__internal_63940fe140f297aa845a4964478e9dabfa972c12203329f65c18f920ffc90baa->enter($__internal_63940fe140f297aa845a4964478e9dabfa972c12203329f65c18f920ffc90baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_63940fe140f297aa845a4964478e9dabfa972c12203329f65c18f920ffc90baa->leave($__internal_63940fe140f297aa845a4964478e9dabfa972c12203329f65c18f920ffc90baa_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f981b961d4d2b986f6c315d047b95532521744084c51fc828b3843001e59a4b = $this->env->getExtension("native_profiler");
        $__internal_0f981b961d4d2b986f6c315d047b95532521744084c51fc828b3843001e59a4b->enter($__internal_0f981b961d4d2b986f6c315d047b95532521744084c51fc828b3843001e59a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_0f981b961d4d2b986f6c315d047b95532521744084c51fc828b3843001e59a4b->leave($__internal_0f981b961d4d2b986f6c315d047b95532521744084c51fc828b3843001e59a4b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d60a1063a6e0305f2063d6605379456891010058bccad60ff2315d618da2e8 = $this->env->getExtension("native_profiler");
        $__internal_97d60a1063a6e0305f2063d6605379456891010058bccad60ff2315d618da2e8->enter($__internal_97d60a1063a6e0305f2063d6605379456891010058bccad60ff2315d618da2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97d60a1063a6e0305f2063d6605379456891010058bccad60ff2315d618da2e8->leave($__internal_97d60a1063a6e0305f2063d6605379456891010058bccad60ff2315d618da2e8_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_be533b3db018807323bee2e352ca361e2956d54b173d8276efed7f6f039428f7 = $this->env->getExtension("native_profiler");
        $__internal_be533b3db018807323bee2e352ca361e2956d54b173d8276efed7f6f039428f7->enter($__internal_be533b3db018807323bee2e352ca361e2956d54b173d8276efed7f6f039428f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_be533b3db018807323bee2e352ca361e2956d54b173d8276efed7f6f039428f7->leave($__internal_be533b3db018807323bee2e352ca361e2956d54b173d8276efed7f6f039428f7_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_3e0d2dae44304404678e4564c0accd434175567501d88f56448c9b5ba0ea68b2 = $this->env->getExtension("native_profiler");
        $__internal_3e0d2dae44304404678e4564c0accd434175567501d88f56448c9b5ba0ea68b2->enter($__internal_3e0d2dae44304404678e4564c0accd434175567501d88f56448c9b5ba0ea68b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_3e0d2dae44304404678e4564c0accd434175567501d88f56448c9b5ba0ea68b2->leave($__internal_3e0d2dae44304404678e4564c0accd434175567501d88f56448c9b5ba0ea68b2_prof);

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
