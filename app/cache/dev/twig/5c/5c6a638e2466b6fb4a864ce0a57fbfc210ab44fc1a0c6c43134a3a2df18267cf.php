<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_0a892b1da94fd24e52814c59861cfa3358bccea0dcd2cd3daa59765eb4d9a2bc extends Twig_Template
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
        $__internal_7e632d470dad82e4dc5cc601e67c56c129e03adb18305b74552b77226cbe8c01 = $this->env->getExtension("native_profiler");
        $__internal_7e632d470dad82e4dc5cc601e67c56c129e03adb18305b74552b77226cbe8c01->enter($__internal_7e632d470dad82e4dc5cc601e67c56c129e03adb18305b74552b77226cbe8c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_7e632d470dad82e4dc5cc601e67c56c129e03adb18305b74552b77226cbe8c01->leave($__internal_7e632d470dad82e4dc5cc601e67c56c129e03adb18305b74552b77226cbe8c01_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe71289398cdfb66b7f22b2d07dee78d8ee8b506dbc1b26b3ad66b5c61ebadfe = $this->env->getExtension("native_profiler");
        $__internal_fe71289398cdfb66b7f22b2d07dee78d8ee8b506dbc1b26b3ad66b5c61ebadfe->enter($__internal_fe71289398cdfb66b7f22b2d07dee78d8ee8b506dbc1b26b3ad66b5c61ebadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_fe71289398cdfb66b7f22b2d07dee78d8ee8b506dbc1b26b3ad66b5c61ebadfe->leave($__internal_fe71289398cdfb66b7f22b2d07dee78d8ee8b506dbc1b26b3ad66b5c61ebadfe_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_a267fa15f713eac274784827df917a0f3d2eb5493d8e6bd0896d67f6c43e48cc = $this->env->getExtension("native_profiler");
        $__internal_a267fa15f713eac274784827df917a0f3d2eb5493d8e6bd0896d67f6c43e48cc->enter($__internal_a267fa15f713eac274784827df917a0f3d2eb5493d8e6bd0896d67f6c43e48cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a267fa15f713eac274784827df917a0f3d2eb5493d8e6bd0896d67f6c43e48cc->leave($__internal_a267fa15f713eac274784827df917a0f3d2eb5493d8e6bd0896d67f6c43e48cc_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee371e8c4a5c381e4b6261bc1331e0051850fcbc10c973ff66daa25c6f1a3834 = $this->env->getExtension("native_profiler");
        $__internal_ee371e8c4a5c381e4b6261bc1331e0051850fcbc10c973ff66daa25c6f1a3834->enter($__internal_ee371e8c4a5c381e4b6261bc1331e0051850fcbc10c973ff66daa25c6f1a3834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee371e8c4a5c381e4b6261bc1331e0051850fcbc10c973ff66daa25c6f1a3834->leave($__internal_ee371e8c4a5c381e4b6261bc1331e0051850fcbc10c973ff66daa25c6f1a3834_prof);

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
