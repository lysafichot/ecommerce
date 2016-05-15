<?php

/* AccountBundle:Auth:login.html.twig */
class __TwigTemplate_be24efb3f9d6cf3a5d672052fc3862df01966a8ea1716d586253ad4b5959a1df extends Twig_Template
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
        $__internal_0413d727bcd4901c64998cbf50d08aedee8f1d5003cf910d42745ac5db106051 = $this->env->getExtension("native_profiler");
        $__internal_0413d727bcd4901c64998cbf50d08aedee8f1d5003cf910d42745ac5db106051->enter($__internal_0413d727bcd4901c64998cbf50d08aedee8f1d5003cf910d42745ac5db106051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:login.html.twig"));

        // line 1
        echo "<form class=\"\" method='post' action='";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "'>
    ";
        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div class='red'>lol error</div><br>
    ";
        }
        // line 5
        echo "    <label for=\"\" class=\"\">Username</label>
    <input type=\"text\" id=\"\" name='username' class=\"\" placeholder=\"Username\" required autofocus>
    <label for=\"\" class=\"\">Password</label>
    <input type=\"password\" id=\"\" name=\"password\" class=\"\" placeholder=\"Password\" required>
    <div class=\"checkbox\">
    </div>
    <button class=\"\" type=\"submit\">Connexion</button>
</form>";
        
        $__internal_0413d727bcd4901c64998cbf50d08aedee8f1d5003cf910d42745ac5db106051->leave($__internal_0413d727bcd4901c64998cbf50d08aedee8f1d5003cf910d42745ac5db106051_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
/* <form class="" method='post' action='{{path("login")}}'>*/
/*     {% if error %}*/
/*     <div class='red'>lol error</div><br>*/
/*     {% endif %}*/
/*     <label for="" class="">Username</label>*/
/*     <input type="text" id="" name='username' class="" placeholder="Username" required autofocus>*/
/*     <label for="" class="">Password</label>*/
/*     <input type="password" id="" name="password" class="" placeholder="Password" required>*/
/*     <div class="checkbox">*/
/*     </div>*/
/*     <button class="" type="submit">Connexion</button>*/
/* </form>*/
