<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3c096f0741110c6158038c4e25f8263ff17ba830ef608353649c7e380a05595b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62eec371f0333af7dc756205702f8fcbfe2c41c44d5faea4786b9de155fea4f8 = $this->env->getExtension("native_profiler");
        $__internal_62eec371f0333af7dc756205702f8fcbfe2c41c44d5faea4786b9de155fea4f8->enter($__internal_62eec371f0333af7dc756205702f8fcbfe2c41c44d5faea4786b9de155fea4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62eec371f0333af7dc756205702f8fcbfe2c41c44d5faea4786b9de155fea4f8->leave($__internal_62eec371f0333af7dc756205702f8fcbfe2c41c44d5faea4786b9de155fea4f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e79c6e1d7a6c131411dc4446988139ce8c7cf4ce18bd1ceda4c9595baf6ae7 = $this->env->getExtension("native_profiler");
        $__internal_27e79c6e1d7a6c131411dc4446988139ce8c7cf4ce18bd1ceda4c9595baf6ae7->enter($__internal_27e79c6e1d7a6c131411dc4446988139ce8c7cf4ce18bd1ceda4c9595baf6ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_27e79c6e1d7a6c131411dc4446988139ce8c7cf4ce18bd1ceda4c9595baf6ae7->leave($__internal_27e79c6e1d7a6c131411dc4446988139ce8c7cf4ce18bd1ceda4c9595baf6ae7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_307bf06318e8ffed42eb792ae41b24791003491071bc55e2378c9c4d74b7846a = $this->env->getExtension("native_profiler");
        $__internal_307bf06318e8ffed42eb792ae41b24791003491071bc55e2378c9c4d74b7846a->enter($__internal_307bf06318e8ffed42eb792ae41b24791003491071bc55e2378c9c4d74b7846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_307bf06318e8ffed42eb792ae41b24791003491071bc55e2378c9c4d74b7846a->leave($__internal_307bf06318e8ffed42eb792ae41b24791003491071bc55e2378c9c4d74b7846a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30c454656ea9ec7e701bf366b68e165e6ebea64617a2d053d32b08c7a82cd85f = $this->env->getExtension("native_profiler");
        $__internal_30c454656ea9ec7e701bf366b68e165e6ebea64617a2d053d32b08c7a82cd85f->enter($__internal_30c454656ea9ec7e701bf366b68e165e6ebea64617a2d053d32b08c7a82cd85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_30c454656ea9ec7e701bf366b68e165e6ebea64617a2d053d32b08c7a82cd85f->leave($__internal_30c454656ea9ec7e701bf366b68e165e6ebea64617a2d053d32b08c7a82cd85f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
