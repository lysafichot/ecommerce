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
        $__internal_4a70f528a493b2e1acf3aa0f937af6dbf0f1208921ac959f01759ccc045ee9ab = $this->env->getExtension("native_profiler");
        $__internal_4a70f528a493b2e1acf3aa0f937af6dbf0f1208921ac959f01759ccc045ee9ab->enter($__internal_4a70f528a493b2e1acf3aa0f937af6dbf0f1208921ac959f01759ccc045ee9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BraincraftedBootstrap/layout.html.twig"));

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
        
        $__internal_4a70f528a493b2e1acf3aa0f937af6dbf0f1208921ac959f01759ccc045ee9ab->leave($__internal_4a70f528a493b2e1acf3aa0f937af6dbf0f1208921ac959f01759ccc045ee9ab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4d53d19b825bb5342788a29da9d9c7ec25aad5002009c14391d59f475968c1d = $this->env->getExtension("native_profiler");
        $__internal_b4d53d19b825bb5342788a29da9d9c7ec25aad5002009c14391d59f475968c1d->enter($__internal_b4d53d19b825bb5342788a29da9d9c7ec25aad5002009c14391d59f475968c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_b4d53d19b825bb5342788a29da9d9c7ec25aad5002009c14391d59f475968c1d->leave($__internal_b4d53d19b825bb5342788a29da9d9c7ec25aad5002009c14391d59f475968c1d_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfc7ee8e174c75d00dcd3c72fb21101d887a9e772132415de8c931386c3ec295 = $this->env->getExtension("native_profiler");
        $__internal_cfc7ee8e174c75d00dcd3c72fb21101d887a9e772132415de8c931386c3ec295->enter($__internal_cfc7ee8e174c75d00dcd3c72fb21101d887a9e772132415de8c931386c3ec295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cfc7ee8e174c75d00dcd3c72fb21101d887a9e772132415de8c931386c3ec295->leave($__internal_cfc7ee8e174c75d00dcd3c72fb21101d887a9e772132415de8c931386c3ec295_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_61bf79a540537d95def8f2cc5f0e7a1d17143139b29b8cc0c88b64411981f078 = $this->env->getExtension("native_profiler");
        $__internal_61bf79a540537d95def8f2cc5f0e7a1d17143139b29b8cc0c88b64411981f078->enter($__internal_61bf79a540537d95def8f2cc5f0e7a1d17143139b29b8cc0c88b64411981f078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61bf79a540537d95def8f2cc5f0e7a1d17143139b29b8cc0c88b64411981f078->leave($__internal_61bf79a540537d95def8f2cc5f0e7a1d17143139b29b8cc0c88b64411981f078_prof);

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
