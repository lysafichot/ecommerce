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
        $__internal_f258f5ada9fafd7aae207247a46942992f35e1bb1a0678d5b4673fbead0e7789 = $this->env->getExtension("native_profiler");
        $__internal_f258f5ada9fafd7aae207247a46942992f35e1bb1a0678d5b4673fbead0e7789->enter($__internal_f258f5ada9fafd7aae207247a46942992f35e1bb1a0678d5b4673fbead0e7789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_f258f5ada9fafd7aae207247a46942992f35e1bb1a0678d5b4673fbead0e7789->leave($__internal_f258f5ada9fafd7aae207247a46942992f35e1bb1a0678d5b4673fbead0e7789_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_410ab9029e73d4a7de6dafcd0631ceb99eb552fb9b1eb47ec9450a2e4bbcb157 = $this->env->getExtension("native_profiler");
        $__internal_410ab9029e73d4a7de6dafcd0631ceb99eb552fb9b1eb47ec9450a2e4bbcb157->enter($__internal_410ab9029e73d4a7de6dafcd0631ceb99eb552fb9b1eb47ec9450a2e4bbcb157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_410ab9029e73d4a7de6dafcd0631ceb99eb552fb9b1eb47ec9450a2e4bbcb157->leave($__internal_410ab9029e73d4a7de6dafcd0631ceb99eb552fb9b1eb47ec9450a2e4bbcb157_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a17ec318ae9cc891ce222f79cd4c2e694c973707de4d30f7a8fe7699ca105df = $this->env->getExtension("native_profiler");
        $__internal_0a17ec318ae9cc891ce222f79cd4c2e694c973707de4d30f7a8fe7699ca105df->enter($__internal_0a17ec318ae9cc891ce222f79cd4c2e694c973707de4d30f7a8fe7699ca105df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0a17ec318ae9cc891ce222f79cd4c2e694c973707de4d30f7a8fe7699ca105df->leave($__internal_0a17ec318ae9cc891ce222f79cd4c2e694c973707de4d30f7a8fe7699ca105df_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a61f0f30c8f1c8b00cd63e4b6f81b7aaa6a2e2c291deaa8afec09a50c22d3c = $this->env->getExtension("native_profiler");
        $__internal_f6a61f0f30c8f1c8b00cd63e4b6f81b7aaa6a2e2c291deaa8afec09a50c22d3c->enter($__internal_f6a61f0f30c8f1c8b00cd63e4b6f81b7aaa6a2e2c291deaa8afec09a50c22d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6a61f0f30c8f1c8b00cd63e4b6f81b7aaa6a2e2c291deaa8afec09a50c22d3c->leave($__internal_f6a61f0f30c8f1c8b00cd63e4b6f81b7aaa6a2e2c291deaa8afec09a50c22d3c_prof);

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
