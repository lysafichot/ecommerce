<?php

/* ProductBundle:Panier:payement.html.twig */
class __TwigTemplate_fcc3ed803a006dddd1068eaab76100b4e802101ed7ed1d8f7ee0b644afb34482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Panier:payement.html.twig", 1);
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
        $__internal_c83c5ef2628242f48c5d55ec61be5325e59edc257f087bb8d75bc7a2816e272e = $this->env->getExtension("native_profiler");
        $__internal_c83c5ef2628242f48c5d55ec61be5325e59edc257f087bb8d75bc7a2816e272e->enter($__internal_c83c5ef2628242f48c5d55ec61be5325e59edc257f087bb8d75bc7a2816e272e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:payement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c83c5ef2628242f48c5d55ec61be5325e59edc257f087bb8d75bc7a2816e272e->leave($__internal_c83c5ef2628242f48c5d55ec61be5325e59edc257f087bb8d75bc7a2816e272e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1f8c142b02eaa46add92f4dd11a46680ba725fde1b837b509ea9b005f4abea0 = $this->env->getExtension("native_profiler");
        $__internal_d1f8c142b02eaa46add92f4dd11a46680ba725fde1b837b509ea9b005f4abea0->enter($__internal_d1f8c142b02eaa46add92f4dd11a46680ba725fde1b837b509ea9b005f4abea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_d1f8c142b02eaa46add92f4dd11a46680ba725fde1b837b509ea9b005f4abea0->leave($__internal_d1f8c142b02eaa46add92f4dd11a46680ba725fde1b837b509ea9b005f4abea0_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c17247bf6e00816360b3a573265b9194c97ca6e3e2422db309f7b44c7ca49f3 = $this->env->getExtension("native_profiler");
        $__internal_9c17247bf6e00816360b3a573265b9194c97ca6e3e2422db309f7b44c7ca49f3->enter($__internal_9c17247bf6e00816360b3a573265b9194c97ca6e3e2422db309f7b44c7ca49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_9c17247bf6e00816360b3a573265b9194c97ca6e3e2422db309f7b44c7ca49f3->leave($__internal_9c17247bf6e00816360b3a573265b9194c97ca6e3e2422db309f7b44c7ca49f3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffaaf4f09394368f7504fc9a82f614e9151262f72a706d37bc8243a9333fdb96 = $this->env->getExtension("native_profiler");
        $__internal_ffaaf4f09394368f7504fc9a82f614e9151262f72a706d37bc8243a9333fdb96->enter($__internal_ffaaf4f09394368f7504fc9a82f614e9151262f72a706d37bc8243a9333fdb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='payement'>

\t\t<div id='paypal'></div>
\t\t<div id='card'></div>



\t\t</div>
\t</div>
</div>
";
        
        $__internal_ffaaf4f09394368f7504fc9a82f614e9151262f72a706d37bc8243a9333fdb96->leave($__internal_ffaaf4f09394368f7504fc9a82f614e9151262f72a706d37bc8243a9333fdb96_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_eaeb354e9cbf36b5c107954d05865c2bb318c09fb3a85d80efaa24b9e0d820a4 = $this->env->getExtension("native_profiler");
        $__internal_eaeb354e9cbf36b5c107954d05865c2bb318c09fb3a85d80efaa24b9e0d820a4->enter($__internal_eaeb354e9cbf36b5c107954d05865c2bb318c09fb3a85d80efaa24b9e0d820a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_eaeb354e9cbf36b5c107954d05865c2bb318c09fb3a85d80efaa24b9e0d820a4->leave($__internal_eaeb354e9cbf36b5c107954d05865c2bb318c09fb3a85d80efaa24b9e0d820a4_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_e9cd3e6568e34ce943ed8514b17eb72a770ebfbe1a058f9300938b0980734396 = $this->env->getExtension("native_profiler");
        $__internal_e9cd3e6568e34ce943ed8514b17eb72a770ebfbe1a058f9300938b0980734396->enter($__internal_e9cd3e6568e34ce943ed8514b17eb72a770ebfbe1a058f9300938b0980734396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_e9cd3e6568e34ce943ed8514b17eb72a770ebfbe1a058f9300938b0980734396->leave($__internal_e9cd3e6568e34ce943ed8514b17eb72a770ebfbe1a058f9300938b0980734396_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Panier:payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 12,  109 => 9,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='payement'>*/
/* */
/* 		<div id='paypal'></div>*/
/* 		<div id='card'></div>*/
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
