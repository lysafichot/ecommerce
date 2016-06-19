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
        $__internal_dfe9a095f2ddfec431c37f711a5988444fac036659bb02013d37e6123e152707 = $this->env->getExtension("native_profiler");
        $__internal_dfe9a095f2ddfec431c37f711a5988444fac036659bb02013d37e6123e152707->enter($__internal_dfe9a095f2ddfec431c37f711a5988444fac036659bb02013d37e6123e152707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_dfe9a095f2ddfec431c37f711a5988444fac036659bb02013d37e6123e152707->leave($__internal_dfe9a095f2ddfec431c37f711a5988444fac036659bb02013d37e6123e152707_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c0c973ac5e57fd10ba7f9c49cdd558af992a590f9481dc3791511a3eef4c21e = $this->env->getExtension("native_profiler");
        $__internal_3c0c973ac5e57fd10ba7f9c49cdd558af992a590f9481dc3791511a3eef4c21e->enter($__internal_3c0c973ac5e57fd10ba7f9c49cdd558af992a590f9481dc3791511a3eef4c21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_3c0c973ac5e57fd10ba7f9c49cdd558af992a590f9481dc3791511a3eef4c21e->leave($__internal_3c0c973ac5e57fd10ba7f9c49cdd558af992a590f9481dc3791511a3eef4c21e_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a60e04b3501f67a58f81de28b783f706095f81fa3af3212cbf83996a51b6a04 = $this->env->getExtension("native_profiler");
        $__internal_1a60e04b3501f67a58f81de28b783f706095f81fa3af3212cbf83996a51b6a04->enter($__internal_1a60e04b3501f67a58f81de28b783f706095f81fa3af3212cbf83996a51b6a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1a60e04b3501f67a58f81de28b783f706095f81fa3af3212cbf83996a51b6a04->leave($__internal_1a60e04b3501f67a58f81de28b783f706095f81fa3af3212cbf83996a51b6a04_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e5b9fa67c967ad0a927b3b72a5dac24bf4ffc41c67885750c9045b5414291e = $this->env->getExtension("native_profiler");
        $__internal_d3e5b9fa67c967ad0a927b3b72a5dac24bf4ffc41c67885750c9045b5414291e->enter($__internal_d3e5b9fa67c967ad0a927b3b72a5dac24bf4ffc41c67885750c9045b5414291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3e5b9fa67c967ad0a927b3b72a5dac24bf4ffc41c67885750c9045b5414291e->leave($__internal_d3e5b9fa67c967ad0a927b3b72a5dac24bf4ffc41c67885750c9045b5414291e_prof);

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
