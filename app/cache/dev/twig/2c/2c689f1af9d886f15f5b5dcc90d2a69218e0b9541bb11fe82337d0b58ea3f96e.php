<?php

/* layout/menu.html.twig */
class __TwigTemplate_6366488304ecc600094871ae9e89cbc9cdc26221692b87081617186b1c80de47 extends Twig_Template
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
        $__internal_aa7572c5a7ffda140e62ab1603948c0e01392966eca0fa49966885acb426e0df = $this->env->getExtension("native_profiler");
        $__internal_aa7572c5a7ffda140e62ab1603948c0e01392966eca0fa49966885acb426e0df->enter($__internal_aa7572c5a7ffda140e62ab1603948c0e01392966eca0fa49966885acb426e0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "<div id='menu'>

\t<div class='item_menu' id='connexion'>

\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "<div class='item'>
\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a>
\t\t</div>
\t\t";
        } else {
            // line 10
            echo "\t\t<div class='item'>
\t\t\t<a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/log.png"), "html", null, true);
            echo "\"></a>
\t\t\t<span>Mon compte</span>
\t\t</div>


\t\t<div id=login>
\t\t\t";
            // line 17
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 18
                echo "\t\t\t<div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 20
            echo "
\t\t\t<form action=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Username:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />


\t\t\t\t<button type=\"submit\">Se connecter</button>
\t\t\t</form>
\t\t\t<a id='inscription' href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("registration");
            echo "\">S'inscrire</a>
\t\t</div>



\t";
        }
        // line 37
        echo "\t</div>
</div>

";
        
        $__internal_aa7572c5a7ffda140e62ab1603948c0e01392966eca0fa49966885acb426e0df->leave($__internal_aa7572c5a7ffda140e62ab1603948c0e01392966eca0fa49966885acb426e0df_prof);

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
        return array (  89 => 37,  80 => 31,  69 => 23,  64 => 21,  61 => 20,  55 => 18,  53 => 17,  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div id='menu'>*/
/* */
/* 	<div class='item_menu' id='connexion'>*/
/* */
/* 		{% if is_granted('ROLE_USER') %}*/
/* <div class='item'>*/
/* 		<a href="{{ path('logout') }}">Deconnexion</a>*/
/* 		</div>*/
/* 		{% else %}*/
/* 		<div class='item'>*/
/* 			<a href="{{ path('login') }}"><img src="{{ asset('images/log.png') }}"></a>*/
/* 			<span>Mon compte</span>*/
/* 		</div>*/
/* */
/* */
/* 		<div id=login>*/
/* 			{% if error %}*/
/* 			<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 			{% endif %}*/
/* */
/* 			<form action="{{ path('login') }}" method="post">*/
/* 				<label for="username">Username:</label>*/
/* 				<input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/* 				<label for="password">Password:</label>*/
/* 				<input type="password" id="password" name="_password" />*/
/* */
/* */
/* 				<button type="submit">Se connecter</button>*/
/* 			</form>*/
/* 			<a id='inscription' href="{{ path('registration') }}">S'inscrire</a>*/
/* 		</div>*/
/* */
/* */
/* */
/* 	{% endif %}*/
/* 	</div>*/
/* </div>*/
/* */
/* */
