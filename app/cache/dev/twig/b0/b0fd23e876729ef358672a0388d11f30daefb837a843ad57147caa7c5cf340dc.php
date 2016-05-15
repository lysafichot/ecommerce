<?php

/* @Account/Auth/login.html.twig */
class __TwigTemplate_1cd283ab0cf9ef8dedc58775c345afed8a44de7808ffa6c6204f6070ea72a55e extends Twig_Template
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
        $__internal_819479bed451346306581ab7f876b155d2e3bde9b413fc7efa23b3f99b0aea22 = $this->env->getExtension("native_profiler");
        $__internal_819479bed451346306581ab7f876b155d2e3bde9b413fc7efa23b3f99b0aea22->enter($__internal_819479bed451346306581ab7f876b155d2e3bde9b413fc7efa23b3f99b0aea22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/login.html.twig"));

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
        
        $__internal_819479bed451346306581ab7f876b155d2e3bde9b413fc7efa23b3f99b0aea22->leave($__internal_819479bed451346306581ab7f876b155d2e3bde9b413fc7efa23b3f99b0aea22_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Auth/login.html.twig";
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
