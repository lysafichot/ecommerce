<?php

/* AccountBundle:security:login.html.twig */
class __TwigTemplate_640727145da757ead15649988f0f6293c689abeba6b775b07a42974cdc104722 extends Twig_Template
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
        $__internal_0440429b084ab0274a827113d8eabf2ac3ff6e9b991620af7e79990888193dd2 = $this->env->getExtension("native_profiler");
        $__internal_0440429b084ab0274a827113d8eabf2ac3ff6e9b991620af7e79990888193dd2->enter($__internal_0440429b084ab0274a827113d8eabf2ac3ff6e9b991620af7e79990888193dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:security:login.html.twig"));

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
        
        $__internal_0440429b084ab0274a827113d8eabf2ac3ff6e9b991620af7e79990888193dd2->leave($__internal_0440429b084ab0274a827113d8eabf2ac3ff6e9b991620af7e79990888193dd2_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:security:login.html.twig";
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
