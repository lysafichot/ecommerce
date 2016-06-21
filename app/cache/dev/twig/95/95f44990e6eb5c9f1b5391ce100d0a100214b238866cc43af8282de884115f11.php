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
        $__internal_4186af093397ac8772c2e36959cdaf75200c9e484f46bb80736193fff9d6ff60 = $this->env->getExtension("native_profiler");
        $__internal_4186af093397ac8772c2e36959cdaf75200c9e484f46bb80736193fff9d6ff60->enter($__internal_4186af093397ac8772c2e36959cdaf75200c9e484f46bb80736193fff9d6ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_4186af093397ac8772c2e36959cdaf75200c9e484f46bb80736193fff9d6ff60->leave($__internal_4186af093397ac8772c2e36959cdaf75200c9e484f46bb80736193fff9d6ff60_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_91291307061a7b2b848c18280fda145938683dbfe3380627bc41a29a45e2af38 = $this->env->getExtension("native_profiler");
        $__internal_91291307061a7b2b848c18280fda145938683dbfe3380627bc41a29a45e2af38->enter($__internal_91291307061a7b2b848c18280fda145938683dbfe3380627bc41a29a45e2af38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_91291307061a7b2b848c18280fda145938683dbfe3380627bc41a29a45e2af38->leave($__internal_91291307061a7b2b848c18280fda145938683dbfe3380627bc41a29a45e2af38_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_27d115401fc40cf70340351c4fca9e65a739b74b2bd8ef718627f7ff47f09717 = $this->env->getExtension("native_profiler");
        $__internal_27d115401fc40cf70340351c4fca9e65a739b74b2bd8ef718627f7ff47f09717->enter($__internal_27d115401fc40cf70340351c4fca9e65a739b74b2bd8ef718627f7ff47f09717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_27d115401fc40cf70340351c4fca9e65a739b74b2bd8ef718627f7ff47f09717->leave($__internal_27d115401fc40cf70340351c4fca9e65a739b74b2bd8ef718627f7ff47f09717_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_698369122937aba8c63d6e548304b96767d130c3e0a77dedcb26cc53f658d58e = $this->env->getExtension("native_profiler");
        $__internal_698369122937aba8c63d6e548304b96767d130c3e0a77dedcb26cc53f658d58e->enter($__internal_698369122937aba8c63d6e548304b96767d130c3e0a77dedcb26cc53f658d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_698369122937aba8c63d6e548304b96767d130c3e0a77dedcb26cc53f658d58e->leave($__internal_698369122937aba8c63d6e548304b96767d130c3e0a77dedcb26cc53f658d58e_prof);

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
