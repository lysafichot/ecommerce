<?php

/* layout/menu.html.twig */
class __TwigTemplate_fd669780c83350746c166360c740c8867b2e1a6ab1323c281b5facb5a3b1dc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fd140f0830acd0d3f69fdb30f410dcc71cf613d21c5cf7fba3f684f0896bbd3 = $this->env->getExtension("native_profiler");
        $__internal_8fd140f0830acd0d3f69fdb30f410dcc71cf613d21c5cf7fba3f684f0896bbd3->enter($__internal_8fd140f0830acd0d3f69fdb30f410dcc71cf613d21c5cf7fba3f684f0896bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "<div id='auth'>
\t<ul>
\t\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Connexion</a></li>
\t\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ecommerce_account_registration");
        echo "\">Inscription</a></li>

\t</ul>
</div>

";
        
        $__internal_8fd140f0830acd0d3f69fdb30f410dcc71cf613d21c5cf7fba3f684f0896bbd3->leave($__internal_8fd140f0830acd0d3f69fdb30f410dcc71cf613d21c5cf7fba3f684f0896bbd3_prof);

    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id='auth'>*/
/* 	<ul>*/
/* 		<li><a href="{{ path('login') }}">Connexion</a></li>*/
/* 		<li><a href="{{ path('ecommerce_account_registration') }}">Inscription</a></li>*/
/* */
/* 	</ul>*/
/* </div>*/
/* */
/* */
