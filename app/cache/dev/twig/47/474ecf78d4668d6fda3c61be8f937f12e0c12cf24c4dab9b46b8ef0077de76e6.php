<?php

/* @Account/Security/registration.html.twig */
class __TwigTemplate_6346f577327de2908941b6c98595e6043a297def87afed146092fda7d461eb3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Account/Security/registration.html.twig", 1);
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
        $__internal_12fcf524786a2c300daedfda99d79430daa00a691959ed05323687ae503dc72f = $this->env->getExtension("native_profiler");
        $__internal_12fcf524786a2c300daedfda99d79430daa00a691959ed05323687ae503dc72f->enter($__internal_12fcf524786a2c300daedfda99d79430daa00a691959ed05323687ae503dc72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Security/registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12fcf524786a2c300daedfda99d79430daa00a691959ed05323687ae503dc72f->leave($__internal_12fcf524786a2c300daedfda99d79430daa00a691959ed05323687ae503dc72f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7cb0ee85bf251290daa2a29e4753e3767949e6c66a0c2a7932823650ffe0c7 = $this->env->getExtension("native_profiler");
        $__internal_ea7cb0ee85bf251290daa2a29e4753e3767949e6c66a0c2a7932823650ffe0c7->enter($__internal_ea7cb0ee85bf251290daa2a29e4753e3767949e6c66a0c2a7932823650ffe0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_ea7cb0ee85bf251290daa2a29e4753e3767949e6c66a0c2a7932823650ffe0c7->leave($__internal_ea7cb0ee85bf251290daa2a29e4753e3767949e6c66a0c2a7932823650ffe0c7_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_9677f000537dbd85107bb3805757c4bc85582619e240673b0516b9bf6fee8d36 = $this->env->getExtension("native_profiler");
        $__internal_9677f000537dbd85107bb3805757c4bc85582619e240673b0516b9bf6fee8d36->enter($__internal_9677f000537dbd85107bb3805757c4bc85582619e240673b0516b9bf6fee8d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_9677f000537dbd85107bb3805757c4bc85582619e240673b0516b9bf6fee8d36->leave($__internal_9677f000537dbd85107bb3805757c4bc85582619e240673b0516b9bf6fee8d36_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7180a20bc66aca3deb523bed554038c84e4a19296fc55f2a6fb3d840809d3cba = $this->env->getExtension("native_profiler");
        $__internal_7180a20bc66aca3deb523bed554038c84e4a19296fc55f2a6fb3d840809d3cba->enter($__internal_7180a20bc66aca3deb523bed554038c84e4a19296fc55f2a6fb3d840809d3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7180a20bc66aca3deb523bed554038c84e4a19296fc55f2a6fb3d840809d3cba->leave($__internal_7180a20bc66aca3deb523bed554038c84e4a19296fc55f2a6fb3d840809d3cba_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_bb4485278e23a1e6d83531b488038904a1b0ddb02b55401311b1e85aef49a4ac = $this->env->getExtension("native_profiler");
        $__internal_bb4485278e23a1e6d83531b488038904a1b0ddb02b55401311b1e85aef49a4ac->enter($__internal_bb4485278e23a1e6d83531b488038904a1b0ddb02b55401311b1e85aef49a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_bb4485278e23a1e6d83531b488038904a1b0ddb02b55401311b1e85aef49a4ac->leave($__internal_bb4485278e23a1e6d83531b488038904a1b0ddb02b55401311b1e85aef49a4ac_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_b492768020f08cd3ea43509bdfb967437733497d9d7930f02b2568bdb0fab61b = $this->env->getExtension("native_profiler");
        $__internal_b492768020f08cd3ea43509bdfb967437733497d9d7930f02b2568bdb0fab61b->enter($__internal_b492768020f08cd3ea43509bdfb967437733497d9d7930f02b2568bdb0fab61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_b492768020f08cd3ea43509bdfb967437733497d9d7930f02b2568bdb0fab61b->leave($__internal_b492768020f08cd3ea43509bdfb967437733497d9d7930f02b2568bdb0fab61b_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Security/registration.html.twig";
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
