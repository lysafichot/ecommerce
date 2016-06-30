<?php

/* @BraincraftedBootstrap/layout.html.twig */
class __TwigTemplate_ce7182beec58716d5acf32fe30ccd482178bfc5843f3186bc9998f05031fdd7c extends Twig_Template
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
        $__internal_e64273cfcefc1da628c9daf824eaa4e7c547cbe39caf69322b3724cdac7689da = $this->env->getExtension("native_profiler");
        $__internal_e64273cfcefc1da628c9daf824eaa4e7c547cbe39caf69322b3724cdac7689da->enter($__internal_e64273cfcefc1da628c9daf824eaa4e7c547cbe39caf69322b3724cdac7689da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BraincraftedBootstrap/layout.html.twig"));

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
        
        $__internal_e64273cfcefc1da628c9daf824eaa4e7c547cbe39caf69322b3724cdac7689da->leave($__internal_e64273cfcefc1da628c9daf824eaa4e7c547cbe39caf69322b3724cdac7689da_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d10175926f295d3d70851ffe00b7ee9ec08c676c0fd87251b45215dfb8e2b231 = $this->env->getExtension("native_profiler");
        $__internal_d10175926f295d3d70851ffe00b7ee9ec08c676c0fd87251b45215dfb8e2b231->enter($__internal_d10175926f295d3d70851ffe00b7ee9ec08c676c0fd87251b45215dfb8e2b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_d10175926f295d3d70851ffe00b7ee9ec08c676c0fd87251b45215dfb8e2b231->leave($__internal_d10175926f295d3d70851ffe00b7ee9ec08c676c0fd87251b45215dfb8e2b231_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ad6c3865fa471671dbbd842158bebbeb5bf54184070714435cc4419e223902f = $this->env->getExtension("native_profiler");
        $__internal_6ad6c3865fa471671dbbd842158bebbeb5bf54184070714435cc4419e223902f->enter($__internal_6ad6c3865fa471671dbbd842158bebbeb5bf54184070714435cc4419e223902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6ad6c3865fa471671dbbd842158bebbeb5bf54184070714435cc4419e223902f->leave($__internal_6ad6c3865fa471671dbbd842158bebbeb5bf54184070714435cc4419e223902f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_addbf79ad2f24f09912d3c20da197914e1a79796aafb128792f490dd3ff4c78b = $this->env->getExtension("native_profiler");
        $__internal_addbf79ad2f24f09912d3c20da197914e1a79796aafb128792f490dd3ff4c78b->enter($__internal_addbf79ad2f24f09912d3c20da197914e1a79796aafb128792f490dd3ff4c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_addbf79ad2f24f09912d3c20da197914e1a79796aafb128792f490dd3ff4c78b->leave($__internal_addbf79ad2f24f09912d3c20da197914e1a79796aafb128792f490dd3ff4c78b_prof);

    }

    public function getTemplateName()
    {
        return "@BraincraftedBootstrap/layout.html.twig";
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
