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
        $__internal_87528abc0033eefc07a8a55f9cab14281bf1abe34484a01fd3349f488a734d14 = $this->env->getExtension("native_profiler");
        $__internal_87528abc0033eefc07a8a55f9cab14281bf1abe34484a01fd3349f488a734d14->enter($__internal_87528abc0033eefc07a8a55f9cab14281bf1abe34484a01fd3349f488a734d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "<div id='auth'>
\t<ul>
\t\t";
        // line 3
        if ((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session"))) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a></li>
\t\t";
        } else {
            // line 6
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
\t\t<li><a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("ecommerce_account_registration");
            echo "\">Inscription</a></li>
\t\t";
        }
        // line 9
        echo "

\t</ul>
</div>

";
        
        $__internal_87528abc0033eefc07a8a55f9cab14281bf1abe34484a01fd3349f488a734d14->leave($__internal_87528abc0033eefc07a8a55f9cab14281bf1abe34484a01fd3349f488a734d14_prof);

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
        return array (  44 => 9,  39 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id='auth'>*/
/* 	<ul>*/
/* 		{% if(session)  %}*/
/* 		<li><a href="{{ path('logout') }}">Deconnexion</a></li>*/
/* 		{% else %}*/
/* 		<li><a href="{{ path('login') }}">Connexion</a></li>*/
/* 		<li><a href="{{ path('ecommerce_account_registration') }}">Inscription</a></li>*/
/* 		{% endif %}*/
/* */
/* */
/* 	</ul>*/
/* </div>*/
/* */
/* */
