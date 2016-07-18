<?php

/* AccountBundle:Security:login.html.twig */
class __TwigTemplate_5fc953ddeb1e3cf28aad7809c956e7b0ea8e8d19140d12566b3d63bc9a8779f0 extends Twig_Template
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
        $__internal_af59e4b01c0c0a31b7fb9f5019c2275578d4ea11ec6e44e8982efabac75baf5c = $this->env->getExtension("native_profiler");
        $__internal_af59e4b01c0c0a31b7fb9f5019c2275578d4ea11ec6e44e8982efabac75baf5c->enter($__internal_af59e4b01c0c0a31b7fb9f5019c2275578d4ea11ec6e44e8982efabac75baf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Security:login.html.twig"));

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
        
        $__internal_af59e4b01c0c0a31b7fb9f5019c2275578d4ea11ec6e44e8982efabac75baf5c->leave($__internal_af59e4b01c0c0a31b7fb9f5019c2275578d4ea11ec6e44e8982efabac75baf5c_prof);

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
