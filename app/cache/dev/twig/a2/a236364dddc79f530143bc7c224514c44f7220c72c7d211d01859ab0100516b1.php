<?php

/* :layout:menu.html.twig */
class __TwigTemplate_2ee7e1c1d7f85f38930e9ef98be4e065c8b50d8361c9afcc1422032800e88dcc extends Twig_Template
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
        $__internal_d14cf1a64b4680aa8a1b4ca7bd963ad5f9e2678ce0b159a956bf9b3f69ee8290 = $this->env->getExtension("native_profiler");
        $__internal_d14cf1a64b4680aa8a1b4ca7bd963ad5f9e2678ce0b159a956bf9b3f69ee8290->enter($__internal_d14cf1a64b4680aa8a1b4ca7bd963ad5f9e2678ce0b159a956bf9b3f69ee8290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:menu.html.twig"));

        // line 1
        echo "<div id='menu'>

\t<div class='item_menu' id='connexion'>

\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "\t\t<div class='item'>
\t\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a>
\t\t</div>
\t\t<div class='item'>
\t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("account");
            echo "\">Mon compte</a>
\t\t</div>
\t\t";
        } else {
            // line 13
            echo "\t\t<div class='item'>
\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/log.png"), "html", null, true);
            echo "\"></a>
\t\t\t<span>Connexion</span>
\t\t</div>


\t\t<div id=login>
\t\t\t";
            // line 20
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 21
                echo "\t\t\t<div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 23
            echo "
\t\t\t<form action=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Username:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />


\t\t\t\t<button type=\"submit\">Se connecter</button>
\t\t\t</form>
\t\t\t<a id='inscription' href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("registration");
            echo "\">S'inscrire</a>
\t\t</div>



\t\t";
        }
        // line 40
        echo "\t</div>
</div>

";
        
        $__internal_d14cf1a64b4680aa8a1b4ca7bd963ad5f9e2678ce0b159a956bf9b3f69ee8290->leave($__internal_d14cf1a64b4680aa8a1b4ca7bd963ad5f9e2678ce0b159a956bf9b3f69ee8290_prof);

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
        return array (  95 => 40,  86 => 34,  75 => 26,  70 => 24,  67 => 23,  61 => 21,  59 => 20,  48 => 14,  45 => 13,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div id='menu'>*/
/* */
/* 	<div class='item_menu' id='connexion'>*/
/* */
/* 		{% if is_granted('ROLE_USER') %}*/
/* 		<div class='item'>*/
/* 			<a href="{{ path('logout') }}">Deconnexion</a>*/
/* 		</div>*/
/* 		<div class='item'>*/
/* 			<a href="{{ path('account') }}">Mon compte</a>*/
/* 		</div>*/
/* 		{% else %}*/
/* 		<div class='item'>*/
/* 			<a href="{{ path('login') }}"><img src="{{ asset('images/log.png') }}"></a>*/
/* 			<span>Connexion</span>*/
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
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* */
/* */
