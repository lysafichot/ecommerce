<?php

/* @Account/Auth/account.html.twig */
class __TwigTemplate_08147c42b9108ac578198aec8056a7fd6cabf194afe29b30e3e59d8547306936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Account/Auth/account.html.twig", 1);
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
        $__internal_f92336bf7dff5672a2639df22d530241c2010cf273138e18a233da381abff6f4 = $this->env->getExtension("native_profiler");
        $__internal_f92336bf7dff5672a2639df22d530241c2010cf273138e18a233da381abff6f4->enter($__internal_f92336bf7dff5672a2639df22d530241c2010cf273138e18a233da381abff6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f92336bf7dff5672a2639df22d530241c2010cf273138e18a233da381abff6f4->leave($__internal_f92336bf7dff5672a2639df22d530241c2010cf273138e18a233da381abff6f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed5a89e935195712b69b5d5f130772b5e9cca673ab88bab6fac375ab250cd675 = $this->env->getExtension("native_profiler");
        $__internal_ed5a89e935195712b69b5d5f130772b5e9cca673ab88bab6fac375ab250cd675->enter($__internal_ed5a89e935195712b69b5d5f130772b5e9cca673ab88bab6fac375ab250cd675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_ed5a89e935195712b69b5d5f130772b5e9cca673ab88bab6fac375ab250cd675->leave($__internal_ed5a89e935195712b69b5d5f130772b5e9cca673ab88bab6fac375ab250cd675_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_eabf2da0074d38fafbb50cacb1a4faf5b61b6cf2282e007f86f57ae7b8568986 = $this->env->getExtension("native_profiler");
        $__internal_eabf2da0074d38fafbb50cacb1a4faf5b61b6cf2282e007f86f57ae7b8568986->enter($__internal_eabf2da0074d38fafbb50cacb1a4faf5b61b6cf2282e007f86f57ae7b8568986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_eabf2da0074d38fafbb50cacb1a4faf5b61b6cf2282e007f86f57ae7b8568986->leave($__internal_eabf2da0074d38fafbb50cacb1a4faf5b61b6cf2282e007f86f57ae7b8568986_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b87f99020aa40d765bc313397635f62cf5962c7002f02b0eca5be6a46002515c = $this->env->getExtension("native_profiler");
        $__internal_b87f99020aa40d765bc313397635f62cf5962c7002f02b0eca5be6a46002515c->enter($__internal_b87f99020aa40d765bc313397635f62cf5962c7002f02b0eca5be6a46002515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='myaccount'>
\t\t\t<div id='gestion'>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mon profil</a>
\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes commandes</a>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes adresses</a>




\t\t\t</div>

\t\t\t<div id='info_contents'>

\t\t\t</div>



\t\t</div>
\t</div>
</div>
";
        
        $__internal_b87f99020aa40d765bc313397635f62cf5962c7002f02b0eca5be6a46002515c->leave($__internal_b87f99020aa40d765bc313397635f62cf5962c7002f02b0eca5be6a46002515c_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_7420a4276737d6828521b8e3d4dcecab42b5a608a8b017ef38d1f7886b50dcac = $this->env->getExtension("native_profiler");
        $__internal_7420a4276737d6828521b8e3d4dcecab42b5a608a8b017ef38d1f7886b50dcac->enter($__internal_7420a4276737d6828521b8e3d4dcecab42b5a608a8b017ef38d1f7886b50dcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_7420a4276737d6828521b8e3d4dcecab42b5a608a8b017ef38d1f7886b50dcac->leave($__internal_7420a4276737d6828521b8e3d4dcecab42b5a608a8b017ef38d1f7886b50dcac_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_f3979ad416a39bc8c0cbb227b7ecb3eacdbb2088e8d60e9de22e5d0676e30c73 = $this->env->getExtension("native_profiler");
        $__internal_f3979ad416a39bc8c0cbb227b7ecb3eacdbb2088e8d60e9de22e5d0676e30c73->enter($__internal_f3979ad416a39bc8c0cbb227b7ecb3eacdbb2088e8d60e9de22e5d0676e30c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_f3979ad416a39bc8c0cbb227b7ecb3eacdbb2088e8d60e9de22e5d0676e30c73->leave($__internal_f3979ad416a39bc8c0cbb227b7ecb3eacdbb2088e8d60e9de22e5d0676e30c73_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Auth/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 12,  128 => 9,  104 => 26,  100 => 25,  96 => 24,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='myaccount'>*/
/* 			<div id='gestion'>*/
/* 				<a href="{{ path('account') }}">Mon profil</a>*/
/* 				<a href="{{ path('account') }}">Mes commandes</a>*/
/* 				<a href="{{ path('account') }}">Mes adresses</a>*/
/* */
/* */
/* */
/* */
/* 			</div>*/
/* */
/* 			<div id='info_contents'>*/
/* */
/* 			</div>*/
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
