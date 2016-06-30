<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_2b25ce6e16d958bc87ea324d63e63b583cb65b6b18cea15ca65dff46ae9f63e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac83a3144800abee16acea8f5dee9211738fe2d18a74abf591c5e0885686eabe = $this->env->getExtension("native_profiler");
        $__internal_ac83a3144800abee16acea8f5dee9211738fe2d18a74abf591c5e0885686eabe->enter($__internal_ac83a3144800abee16acea8f5dee9211738fe2d18a74abf591c5e0885686eabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
";
        
        $__internal_ac83a3144800abee16acea8f5dee9211738fe2d18a74abf591c5e0885686eabe->leave($__internal_ac83a3144800abee16acea8f5dee9211738fe2d18a74abf591c5e0885686eabe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc21536a6e68397474ac16d2e4fb8d6f97fba0b85ed98b58fc9ee58af0418014 = $this->env->getExtension("native_profiler");
        $__internal_bc21536a6e68397474ac16d2e4fb8d6f97fba0b85ed98b58fc9ee58af0418014->enter($__internal_bc21536a6e68397474ac16d2e4fb8d6f97fba0b85ed98b58fc9ee58af0418014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_bc21536a6e68397474ac16d2e4fb8d6f97fba0b85ed98b58fc9ee58af0418014->leave($__internal_bc21536a6e68397474ac16d2e4fb8d6f97fba0b85ed98b58fc9ee58af0418014_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_469f090d2f331f1022a650ce446ad5320438ce177cac047c93c90173c95f9357 = $this->env->getExtension("native_profiler");
        $__internal_469f090d2f331f1022a650ce446ad5320438ce177cac047c93c90173c95f9357->enter($__internal_469f090d2f331f1022a650ce446ad5320438ce177cac047c93c90173c95f9357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_469f090d2f331f1022a650ce446ad5320438ce177cac047c93c90173c95f9357->leave($__internal_469f090d2f331f1022a650ce446ad5320438ce177cac047c93c90173c95f9357_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_64a78622ca61d8579946883cc630951dfc584f6684a5bfe0ebbfe45702f9fbc3 = $this->env->getExtension("native_profiler");
        $__internal_64a78622ca61d8579946883cc630951dfc584f6684a5bfe0ebbfe45702f9fbc3->enter($__internal_64a78622ca61d8579946883cc630951dfc584f6684a5bfe0ebbfe45702f9fbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64a78622ca61d8579946883cc630951dfc584f6684a5bfe0ebbfe45702f9fbc3->leave($__internal_64a78622ca61d8579946883cc630951dfc584f6684a5bfe0ebbfe45702f9fbc3_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  88 => 12,  76 => 6,  61 => 23,  55 => 19,  53 => 18,  46 => 13,  44 => 12,  39 => 10,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/* <title>{% block title %}BraincraftedBootstrapBundle by Florian Eckerstorfer{% endblock title %}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* */
/* {% block head %}{% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% block body %}{% endblock body %}*/
/* */
/* <!-- JavaScript plugins (requires jQuery) -->*/
/* <script src="//code.jquery.com/jquery.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/* */
/* <!-- Optionally enable responsive features in IE8 -->*/
/* <script src="js/respond.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
