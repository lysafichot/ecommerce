<?php

/* @Product/Panier/transaction.html.twig */
class __TwigTemplate_60f33de0eae1646e52f152d8c96a688dcbbed34706074ccc395892c54755c93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Panier/transaction.html.twig", 1);
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
        $__internal_991df3ba0ce6615c4d8d4ab2e42a5628e29c8424a2ee221019e7478356130eaa = $this->env->getExtension("native_profiler");
        $__internal_991df3ba0ce6615c4d8d4ab2e42a5628e29c8424a2ee221019e7478356130eaa->enter($__internal_991df3ba0ce6615c4d8d4ab2e42a5628e29c8424a2ee221019e7478356130eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Panier/transaction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991df3ba0ce6615c4d8d4ab2e42a5628e29c8424a2ee221019e7478356130eaa->leave($__internal_991df3ba0ce6615c4d8d4ab2e42a5628e29c8424a2ee221019e7478356130eaa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0fceff5ea27350f0e5e0096a313bd570d552089e5d14873db3fe20198fca719 = $this->env->getExtension("native_profiler");
        $__internal_c0fceff5ea27350f0e5e0096a313bd570d552089e5d14873db3fe20198fca719->enter($__internal_c0fceff5ea27350f0e5e0096a313bd570d552089e5d14873db3fe20198fca719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_c0fceff5ea27350f0e5e0096a313bd570d552089e5d14873db3fe20198fca719->leave($__internal_c0fceff5ea27350f0e5e0096a313bd570d552089e5d14873db3fe20198fca719_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_d59d16cf72e6c688eee5cb07d1df8b2e71a79ddeed4d550ac4e99f631ff927db = $this->env->getExtension("native_profiler");
        $__internal_d59d16cf72e6c688eee5cb07d1df8b2e71a79ddeed4d550ac4e99f631ff927db->enter($__internal_d59d16cf72e6c688eee5cb07d1df8b2e71a79ddeed4d550ac4e99f631ff927db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_d59d16cf72e6c688eee5cb07d1df8b2e71a79ddeed4d550ac4e99f631ff927db->leave($__internal_d59d16cf72e6c688eee5cb07d1df8b2e71a79ddeed4d550ac4e99f631ff927db_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c69aefd6f8ec7895d45f8cc51c120a1321eec41755ea53700c25f20c260e9423 = $this->env->getExtension("native_profiler");
        $__internal_c69aefd6f8ec7895d45f8cc51c120a1321eec41755ea53700c25f20c260e9423->enter($__internal_c69aefd6f8ec7895d45f8cc51c120a1321eec41755ea53700c25f20c260e9423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c69aefd6f8ec7895d45f8cc51c120a1321eec41755ea53700c25f20c260e9423->leave($__internal_c69aefd6f8ec7895d45f8cc51c120a1321eec41755ea53700c25f20c260e9423_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_27b3b9bafae9b56e3e6f38258ef62324ecb7916e077083d940f1e61df870c9d3 = $this->env->getExtension("native_profiler");
        $__internal_27b3b9bafae9b56e3e6f38258ef62324ecb7916e077083d940f1e61df870c9d3->enter($__internal_27b3b9bafae9b56e3e6f38258ef62324ecb7916e077083d940f1e61df870c9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_27b3b9bafae9b56e3e6f38258ef62324ecb7916e077083d940f1e61df870c9d3->leave($__internal_27b3b9bafae9b56e3e6f38258ef62324ecb7916e077083d940f1e61df870c9d3_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_5cc4f6a55c7e2589e5d628fd59f3aabe4ac7b2397313ea517a1283cca638b074 = $this->env->getExtension("native_profiler");
        $__internal_5cc4f6a55c7e2589e5d628fd59f3aabe4ac7b2397313ea517a1283cca638b074->enter($__internal_5cc4f6a55c7e2589e5d628fd59f3aabe4ac7b2397313ea517a1283cca638b074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_5cc4f6a55c7e2589e5d628fd59f3aabe4ac7b2397313ea517a1283cca638b074->leave($__internal_5cc4f6a55c7e2589e5d628fd59f3aabe4ac7b2397313ea517a1283cca638b074_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Panier/transaction.html.twig";
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
