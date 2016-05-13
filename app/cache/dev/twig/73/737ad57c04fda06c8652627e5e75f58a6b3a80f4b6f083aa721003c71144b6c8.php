<?php

/* base.html.twig */
class __TwigTemplate_460c5a4a2d78bd87268908608607f499bf67dc639393aa5fb037a6639cfea354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05969c849fc8e366f551115924cb7b49b4400723c8af43968a36c5d9eb484eb6 = $this->env->getExtension("native_profiler");
        $__internal_05969c849fc8e366f551115924cb7b49b4400723c8af43968a36c5d9eb484eb6->enter($__internal_05969c849fc8e366f551115924cb7b49b4400723c8af43968a36c5d9eb484eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "

    ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
        
        $__internal_05969c849fc8e366f551115924cb7b49b4400723c8af43968a36c5d9eb484eb6->leave($__internal_05969c849fc8e366f551115924cb7b49b4400723c8af43968a36c5d9eb484eb6_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_9840963962023d81e9c095677ac689c453d4c59ff264137f962dbb4d5158a8a0 = $this->env->getExtension("native_profiler");
        $__internal_9840963962023d81e9c095677ac689c453d4c59ff264137f962dbb4d5158a8a0->enter($__internal_9840963962023d81e9c095677ac689c453d4c59ff264137f962dbb4d5158a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - THT</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_9840963962023d81e9c095677ac689c453d4c59ff264137f962dbb4d5158a8a0->leave($__internal_9840963962023d81e9c095677ac689c453d4c59ff264137f962dbb4d5158a8a0_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33dce313b8736ee873300cabb4032d70c3d04e010ee87f4f9a17e4f74ac7841 = $this->env->getExtension("native_profiler");
        $__internal_b33dce313b8736ee873300cabb4032d70c3d04e010ee87f4f9a17e4f74ac7841->enter($__internal_b33dce313b8736ee873300cabb4032d70c3d04e010ee87f4f9a17e4f74ac7841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_b33dce313b8736ee873300cabb4032d70c3d04e010ee87f4f9a17e4f74ac7841->leave($__internal_b33dce313b8736ee873300cabb4032d70c3d04e010ee87f4f9a17e4f74ac7841_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_82866e70a23faf10548ebd457b93b1c044b334adcf4283ceff87dd494f182dc3 = $this->env->getExtension("native_profiler");
        $__internal_82866e70a23faf10548ebd457b93b1c044b334adcf4283ceff87dd494f182dc3->enter($__internal_82866e70a23faf10548ebd457b93b1c044b334adcf4283ceff87dd494f182dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 25
        echo "
    ";
        
        $__internal_82866e70a23faf10548ebd457b93b1c044b334adcf4283ceff87dd494f182dc3->leave($__internal_82866e70a23faf10548ebd457b93b1c044b334adcf4283ceff87dd494f182dc3_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_3a38f6449a002314f75012a1221c0ccd0f96fbc29ff014c8fa88e5c925b399c5 = $this->env->getExtension("native_profiler");
        $__internal_3a38f6449a002314f75012a1221c0ccd0f96fbc29ff014c8fa88e5c925b399c5->enter($__internal_3a38f6449a002314f75012a1221c0ccd0f96fbc29ff014c8fa88e5c925b399c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 19
        echo "    <div id='auth'>
        <ul>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ecommerce_account_connexion");
        echo "\">Connexion</a></li>
        </ul>
    </div>
    ";
        
        $__internal_3a38f6449a002314f75012a1221c0ccd0f96fbc29ff014c8fa88e5c925b399c5->leave($__internal_3a38f6449a002314f75012a1221c0ccd0f96fbc29ff014c8fa88e5c925b399c5_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_df5ce3592014d8cc8a53bb67567f551f84c2d13eb7deabb835ec0ea38860aca5 = $this->env->getExtension("native_profiler");
        $__internal_df5ce3592014d8cc8a53bb67567f551f84c2d13eb7deabb835ec0ea38860aca5->enter($__internal_df5ce3592014d8cc8a53bb67567f551f84c2d13eb7deabb835ec0ea38860aca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_df5ce3592014d8cc8a53bb67567f551f84c2d13eb7deabb835ec0ea38860aca5->leave($__internal_df5ce3592014d8cc8a53bb67567f551f84c2d13eb7deabb835ec0ea38860aca5_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82e67292885d573af06303f935b44438ad8949a56eab4fdfccafd23e98cdac62 = $this->env->getExtension("native_profiler");
        $__internal_82e67292885d573af06303f935b44438ad8949a56eab4fdfccafd23e98cdac62->enter($__internal_82e67292885d573af06303f935b44438ad8949a56eab4fdfccafd23e98cdac62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_82e67292885d573af06303f935b44438ad8949a56eab4fdfccafd23e98cdac62->leave($__internal_82e67292885d573af06303f935b44438ad8949a56eab4fdfccafd23e98cdac62_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 36,  167 => 35,  163 => 34,  160 => 33,  154 => 32,  143 => 29,  132 => 21,  128 => 19,  122 => 18,  114 => 25,  112 => 18,  109 => 17,  103 => 16,  91 => 8,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  62 => 5,  54 => 38,  52 => 32,  48 => 30,  46 => 29,  42 => 27,  40 => 16,  36 => 14,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*     {% block head %}*/
/* */
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Acceuil - {% endblock %} - THT</title>*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}"/>*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     {% block body %}*/
/* */
/*     {% block menu_auth %}*/
/*     <div id='auth'>*/
/*         <ul>*/
/*             <li><a href="{{ path('ecommerce_account_connexion') }}">Connexion</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/* */
/*     {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
