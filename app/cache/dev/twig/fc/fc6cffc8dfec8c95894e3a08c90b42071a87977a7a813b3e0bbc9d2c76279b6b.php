<?php

/* :layout:menu.html.twig */
class __TwigTemplate_e22c0ce38909a426f55f9bb9e72e10476f1f4da3546dce61b490ed93f4dd7424 extends Twig_Template
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
        $__internal_089ab196eb317b1ddb4da0ca43c738f2f4d8708dae80fdb72bb7847b4eff107f = $this->env->getExtension("native_profiler");
        $__internal_089ab196eb317b1ddb4da0ca43c738f2f4d8708dae80fdb72bb7847b4eff107f->enter($__internal_089ab196eb317b1ddb4da0ca43c738f2f4d8708dae80fdb72bb7847b4eff107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:menu.html.twig"));

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
        
        $__internal_089ab196eb317b1ddb4da0ca43c738f2f4d8708dae80fdb72bb7847b4eff107f->leave($__internal_089ab196eb317b1ddb4da0ca43c738f2f4d8708dae80fdb72bb7847b4eff107f_prof);

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
