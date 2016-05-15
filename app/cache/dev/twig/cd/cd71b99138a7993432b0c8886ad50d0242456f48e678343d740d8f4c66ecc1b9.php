<?php

/* base.html.twig */
class __TwigTemplate_e2ba95b1fc5b0c35ba8fff39421054c042e21934b36b0488c66d6759ddd75740 extends Twig_Template
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
        $__internal_94289112472bf9f08d65c2e47ccf5ce7f78aa9c17f9b444fdce3a3f100bb04f6 = $this->env->getExtension("native_profiler");
        $__internal_94289112472bf9f08d65c2e47ccf5ce7f78aa9c17f9b444fdce3a3f100bb04f6->enter($__internal_94289112472bf9f08d65c2e47ccf5ce7f78aa9c17f9b444fdce3a3f100bb04f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 25
        echo "

    ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
</html>";
        
        $__internal_94289112472bf9f08d65c2e47ccf5ce7f78aa9c17f9b444fdce3a3f100bb04f6->leave($__internal_94289112472bf9f08d65c2e47ccf5ce7f78aa9c17f9b444fdce3a3f100bb04f6_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b52465d8ca9c5736ace9791990f94e58a68961b8fe233a01d495bc0e8153805 = $this->env->getExtension("native_profiler");
        $__internal_0b52465d8ca9c5736ace9791990f94e58a68961b8fe233a01d495bc0e8153805->enter($__internal_0b52465d8ca9c5736ace9791990f94e58a68961b8fe233a01d495bc0e8153805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b52465d8ca9c5736ace9791990f94e58a68961b8fe233a01d495bc0e8153805->leave($__internal_0b52465d8ca9c5736ace9791990f94e58a68961b8fe233a01d495bc0e8153805_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb560f5ff24b6eb62da26ac09efb9748bbe9b1f4b09d5fb2139bfa786f7f40c3 = $this->env->getExtension("native_profiler");
        $__internal_fb560f5ff24b6eb62da26ac09efb9748bbe9b1f4b09d5fb2139bfa786f7f40c3->enter($__internal_fb560f5ff24b6eb62da26ac09efb9748bbe9b1f4b09d5fb2139bfa786f7f40c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_fb560f5ff24b6eb62da26ac09efb9748bbe9b1f4b09d5fb2139bfa786f7f40c3->leave($__internal_fb560f5ff24b6eb62da26ac09efb9748bbe9b1f4b09d5fb2139bfa786f7f40c3_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ba0e3c0c3d2a610086e18b687bb9a6f738687785fa1ee0b7119c9c10f1491eb = $this->env->getExtension("native_profiler");
        $__internal_9ba0e3c0c3d2a610086e18b687bb9a6f738687785fa1ee0b7119c9c10f1491eb->enter($__internal_9ba0e3c0c3d2a610086e18b687bb9a6f738687785fa1ee0b7119c9c10f1491eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 23
        echo "
    ";
        
        $__internal_9ba0e3c0c3d2a610086e18b687bb9a6f738687785fa1ee0b7119c9c10f1491eb->leave($__internal_9ba0e3c0c3d2a610086e18b687bb9a6f738687785fa1ee0b7119c9c10f1491eb_prof);

    }

    // line 18
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_97e98bb35c81641a9ad0a269c365b5c218736ce45ee486cd13d534a41677c46a = $this->env->getExtension("native_profiler");
        $__internal_97e98bb35c81641a9ad0a269c365b5c218736ce45ee486cd13d534a41677c46a->enter($__internal_97e98bb35c81641a9ad0a269c365b5c218736ce45ee486cd13d534a41677c46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 19
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_97e98bb35c81641a9ad0a269c365b5c218736ce45ee486cd13d534a41677c46a->leave($__internal_97e98bb35c81641a9ad0a269c365b5c218736ce45ee486cd13d534a41677c46a_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7565d2d1ad721b47f625e2e9b3f9a113c8e1f9b7efb2a1b7fd16122bc56da39a = $this->env->getExtension("native_profiler");
        $__internal_7565d2d1ad721b47f625e2e9b3f9a113c8e1f9b7efb2a1b7fd16122bc56da39a->enter($__internal_7565d2d1ad721b47f625e2e9b3f9a113c8e1f9b7efb2a1b7fd16122bc56da39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7565d2d1ad721b47f625e2e9b3f9a113c8e1f9b7efb2a1b7fd16122bc56da39a->leave($__internal_7565d2d1ad721b47f625e2e9b3f9a113c8e1f9b7efb2a1b7fd16122bc56da39a_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e43c8f9c5be2628040a92a593f27c5d4901f3cfaa14cbf2c8be5c6b8f26576c9 = $this->env->getExtension("native_profiler");
        $__internal_e43c8f9c5be2628040a92a593f27c5d4901f3cfaa14cbf2c8be5c6b8f26576c9->enter($__internal_e43c8f9c5be2628040a92a593f27c5d4901f3cfaa14cbf2c8be5c6b8f26576c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_e43c8f9c5be2628040a92a593f27c5d4901f3cfaa14cbf2c8be5c6b8f26576c9->leave($__internal_e43c8f9c5be2628040a92a593f27c5d4901f3cfaa14cbf2c8be5c6b8f26576c9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 34,  165 => 33,  161 => 32,  158 => 31,  152 => 30,  141 => 27,  131 => 20,  128 => 19,  122 => 18,  114 => 23,  112 => 18,  109 => 17,  103 => 16,  91 => 8,  81 => 11,  77 => 10,  72 => 8,  68 => 6,  62 => 5,  54 => 36,  52 => 30,  48 => 28,  46 => 27,  42 => 25,  40 => 16,  36 => 14,  34 => 5,  28 => 1,);
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
/* */
/*     {{ include('layout/menu.html.twig')}}*/
/* */
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
