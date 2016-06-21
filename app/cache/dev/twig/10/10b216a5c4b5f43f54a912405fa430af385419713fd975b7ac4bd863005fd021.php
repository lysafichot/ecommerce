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
        $__internal_e616025c877487da5612759d642449caaf5ed5cc124d2b1608c1995af517f7c7 = $this->env->getExtension("native_profiler");
        $__internal_e616025c877487da5612759d642449caaf5ed5cc124d2b1608c1995af517f7c7->enter($__internal_e616025c877487da5612759d642449caaf5ed5cc124d2b1608c1995af517f7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BraincraftedBootstrap/layout.html.twig"));

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
        
        $__internal_e616025c877487da5612759d642449caaf5ed5cc124d2b1608c1995af517f7c7->leave($__internal_e616025c877487da5612759d642449caaf5ed5cc124d2b1608c1995af517f7c7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_eca4682ce98731a0dc6c37397e31d7419b5bb2abcca4c7bf11702da9784206df = $this->env->getExtension("native_profiler");
        $__internal_eca4682ce98731a0dc6c37397e31d7419b5bb2abcca4c7bf11702da9784206df->enter($__internal_eca4682ce98731a0dc6c37397e31d7419b5bb2abcca4c7bf11702da9784206df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_eca4682ce98731a0dc6c37397e31d7419b5bb2abcca4c7bf11702da9784206df->leave($__internal_eca4682ce98731a0dc6c37397e31d7419b5bb2abcca4c7bf11702da9784206df_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6e964123fa0e89d6583cfcb6dd32ed4059ea9a5ee2f5593c018e11e2f0dfd49 = $this->env->getExtension("native_profiler");
        $__internal_b6e964123fa0e89d6583cfcb6dd32ed4059ea9a5ee2f5593c018e11e2f0dfd49->enter($__internal_b6e964123fa0e89d6583cfcb6dd32ed4059ea9a5ee2f5593c018e11e2f0dfd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b6e964123fa0e89d6583cfcb6dd32ed4059ea9a5ee2f5593c018e11e2f0dfd49->leave($__internal_b6e964123fa0e89d6583cfcb6dd32ed4059ea9a5ee2f5593c018e11e2f0dfd49_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfeeca3fe1b3d20b92683088a68d3edf938727cf31e10a6ecd6c0011cfe36639 = $this->env->getExtension("native_profiler");
        $__internal_bfeeca3fe1b3d20b92683088a68d3edf938727cf31e10a6ecd6c0011cfe36639->enter($__internal_bfeeca3fe1b3d20b92683088a68d3edf938727cf31e10a6ecd6c0011cfe36639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfeeca3fe1b3d20b92683088a68d3edf938727cf31e10a6ecd6c0011cfe36639->leave($__internal_bfeeca3fe1b3d20b92683088a68d3edf938727cf31e10a6ecd6c0011cfe36639_prof);

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
