<?php

/* :layout:menu.html.twig */
class __TwigTemplate_61a66131cd225e5d1e81feace443aaba3af01237cafe0c3b57ec872a768b7382 extends Twig_Template
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
        $__internal_f16ea1593605e06f45c9a1a772241173614267e313ad8a1fdfb9f7554d58a201 = $this->env->getExtension("native_profiler");
        $__internal_f16ea1593605e06f45c9a1a772241173614267e313ad8a1fdfb9f7554d58a201->enter($__internal_f16ea1593605e06f45c9a1a772241173614267e313ad8a1fdfb9f7554d58a201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:menu.html.twig"));

        // line 1
        echo "<div id='auth'>
\t<ul>
\t\t";
        // line 3
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 4
            echo "
\t\t<li><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a></li>
\t\t";
        } else {
            // line 7
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
\t\t<li><a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("registration");
            echo "\">Inscription</a></li>
\t\t";
        }
        // line 10
        echo "

\t</ul>
</div>

";
        
        $__internal_f16ea1593605e06f45c9a1a772241173614267e313ad8a1fdfb9f7554d58a201->leave($__internal_f16ea1593605e06f45c9a1a772241173614267e313ad8a1fdfb9f7554d58a201_prof);

    }

    public function getTemplateName()
    {
        return ":layout:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 8,  36 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id='auth'>*/
/* 	<ul>*/
/* 		{% if is_granted('ROLE_USER') %}*/
/* */
/* 		<li><a href="{{ path('logout') }}">Deconnexion</a></li>*/
/* 		{% else %}*/
/* 		<li><a href="{{ path('login') }}">Connexion</a></li>*/
/* 		<li><a href="{{ path('registration') }}">Inscription</a></li>*/
/* 		{% endif %}*/
/* */
/* */
/* 	</ul>*/
/* </div>*/
/* */
/* */
