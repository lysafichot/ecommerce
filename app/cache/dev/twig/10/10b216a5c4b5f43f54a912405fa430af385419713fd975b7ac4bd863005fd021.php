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
        $__internal_f3151550e555d74cd4bd510455d02fb81542c78023cdea208f13e67d6caa011c = $this->env->getExtension("native_profiler");
        $__internal_f3151550e555d74cd4bd510455d02fb81542c78023cdea208f13e67d6caa011c->enter($__internal_f3151550e555d74cd4bd510455d02fb81542c78023cdea208f13e67d6caa011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BraincraftedBootstrap/layout.html.twig"));

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
        
        $__internal_f3151550e555d74cd4bd510455d02fb81542c78023cdea208f13e67d6caa011c->leave($__internal_f3151550e555d74cd4bd510455d02fb81542c78023cdea208f13e67d6caa011c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0de8ad08ff220fec1bf0126fa93bee5ca1f406ccaf54ad1353be3130e674ae76 = $this->env->getExtension("native_profiler");
        $__internal_0de8ad08ff220fec1bf0126fa93bee5ca1f406ccaf54ad1353be3130e674ae76->enter($__internal_0de8ad08ff220fec1bf0126fa93bee5ca1f406ccaf54ad1353be3130e674ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_0de8ad08ff220fec1bf0126fa93bee5ca1f406ccaf54ad1353be3130e674ae76->leave($__internal_0de8ad08ff220fec1bf0126fa93bee5ca1f406ccaf54ad1353be3130e674ae76_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_c490bff3851a6b6c5fc9d067c39ccb5f50b6b87db73754169bd82d05221061b2 = $this->env->getExtension("native_profiler");
        $__internal_c490bff3851a6b6c5fc9d067c39ccb5f50b6b87db73754169bd82d05221061b2->enter($__internal_c490bff3851a6b6c5fc9d067c39ccb5f50b6b87db73754169bd82d05221061b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c490bff3851a6b6c5fc9d067c39ccb5f50b6b87db73754169bd82d05221061b2->leave($__internal_c490bff3851a6b6c5fc9d067c39ccb5f50b6b87db73754169bd82d05221061b2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab89b3b5f6d232904751f044c14d3ed619e21ae2833b73b345a6ad5d9cbbb742 = $this->env->getExtension("native_profiler");
        $__internal_ab89b3b5f6d232904751f044c14d3ed619e21ae2833b73b345a6ad5d9cbbb742->enter($__internal_ab89b3b5f6d232904751f044c14d3ed619e21ae2833b73b345a6ad5d9cbbb742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab89b3b5f6d232904751f044c14d3ed619e21ae2833b73b345a6ad5d9cbbb742->leave($__internal_ab89b3b5f6d232904751f044c14d3ed619e21ae2833b73b345a6ad5d9cbbb742_prof);

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
