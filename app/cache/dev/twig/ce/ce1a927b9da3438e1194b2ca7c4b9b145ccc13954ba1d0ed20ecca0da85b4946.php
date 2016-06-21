<?php

/* AccountBundle:Security:login.html.twig */
class __TwigTemplate_e2e77a85de52c79bc307e7e652e50548689e73483fdeff237d1d63ecd783a943 extends Twig_Template
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
        $__internal_59d9fb10ea1a2cd32a71caf527e70bcffa947034a6d43740c1315d94489dc4c3 = $this->env->getExtension("native_profiler");
        $__internal_59d9fb10ea1a2cd32a71caf527e70bcffa947034a6d43740c1315d94489dc4c3->enter($__internal_59d9fb10ea1a2cd32a71caf527e70bcffa947034a6d43740c1315d94489dc4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Security:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />


    <button type=\"submit\">login</button>
</form>";
        
        $__internal_59d9fb10ea1a2cd32a71caf527e70bcffa947034a6d43740c1315d94489dc4c3->leave($__internal_59d9fb10ea1a2cd32a71caf527e70bcffa947034a6d43740c1315d94489dc4c3_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
