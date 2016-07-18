<?php

/* ProductBundle:Panier:transaction.html.twig */
class __TwigTemplate_c96f22d364988f33ecf3e87d463973f5f1f640842e722ff9e1b2d08976a73561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Panier:transaction.html.twig", 1);
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
        $__internal_b99c4eb3ff9a16278933fa23dd9ef6e8a5603a0d99d96fe20a456c2551ba4ab2 = $this->env->getExtension("native_profiler");
        $__internal_b99c4eb3ff9a16278933fa23dd9ef6e8a5603a0d99d96fe20a456c2551ba4ab2->enter($__internal_b99c4eb3ff9a16278933fa23dd9ef6e8a5603a0d99d96fe20a456c2551ba4ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Panier:transaction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b99c4eb3ff9a16278933fa23dd9ef6e8a5603a0d99d96fe20a456c2551ba4ab2->leave($__internal_b99c4eb3ff9a16278933fa23dd9ef6e8a5603a0d99d96fe20a456c2551ba4ab2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9849d9223c4a2f1b3ec4f0b14b614b2b4d0c1faf5256332ed3cd5228b82f8dde = $this->env->getExtension("native_profiler");
        $__internal_9849d9223c4a2f1b3ec4f0b14b614b2b4d0c1faf5256332ed3cd5228b82f8dde->enter($__internal_9849d9223c4a2f1b3ec4f0b14b614b2b4d0c1faf5256332ed3cd5228b82f8dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_9849d9223c4a2f1b3ec4f0b14b614b2b4d0c1faf5256332ed3cd5228b82f8dde->leave($__internal_9849d9223c4a2f1b3ec4f0b14b614b2b4d0c1faf5256332ed3cd5228b82f8dde_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb20d44134d067382b7da6da026082dc8cd65dbd17176ec74c29c25ebc976360 = $this->env->getExtension("native_profiler");
        $__internal_fb20d44134d067382b7da6da026082dc8cd65dbd17176ec74c29c25ebc976360->enter($__internal_fb20d44134d067382b7da6da026082dc8cd65dbd17176ec74c29c25ebc976360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_fb20d44134d067382b7da6da026082dc8cd65dbd17176ec74c29c25ebc976360->leave($__internal_fb20d44134d067382b7da6da026082dc8cd65dbd17176ec74c29c25ebc976360_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_246f021406fb4a76d0b12aaf24ef90a1f84981729792373bb8b1d706d69ad2c9 = $this->env->getExtension("native_profiler");
        $__internal_246f021406fb4a76d0b12aaf24ef90a1f84981729792373bb8b1d706d69ad2c9->enter($__internal_246f021406fb4a76d0b12aaf24ef90a1f84981729792373bb8b1d706d69ad2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='confirm'>





\t\t</div>
\t</div>
</div>
";
        
        $__internal_246f021406fb4a76d0b12aaf24ef90a1f84981729792373bb8b1d706d69ad2c9->leave($__internal_246f021406fb4a76d0b12aaf24ef90a1f84981729792373bb8b1d706d69ad2c9_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c2d8f885e979e7e438aeac24a56fdd2b9f34b0063562065bc38215d0d4dd142 = $this->env->getExtension("native_profiler");
        $__internal_3c2d8f885e979e7e438aeac24a56fdd2b9f34b0063562065bc38215d0d4dd142->enter($__internal_3c2d8f885e979e7e438aeac24a56fdd2b9f34b0063562065bc38215d0d4dd142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_3c2d8f885e979e7e438aeac24a56fdd2b9f34b0063562065bc38215d0d4dd142->leave($__internal_3c2d8f885e979e7e438aeac24a56fdd2b9f34b0063562065bc38215d0d4dd142_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_ec0f3c3d6979ef6f1d40723ccfdeb4269109d3845639bf09a50483f91cdc7dd9 = $this->env->getExtension("native_profiler");
        $__internal_ec0f3c3d6979ef6f1d40723ccfdeb4269109d3845639bf09a50483f91cdc7dd9->enter($__internal_ec0f3c3d6979ef6f1d40723ccfdeb4269109d3845639bf09a50483f91cdc7dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_ec0f3c3d6979ef6f1d40723ccfdeb4269109d3845639bf09a50483f91cdc7dd9->leave($__internal_ec0f3c3d6979ef6f1d40723ccfdeb4269109d3845639bf09a50483f91cdc7dd9_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Panier:transaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 12,  108 => 9,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='confirm'>*/
/* */
/* */
/* */
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
