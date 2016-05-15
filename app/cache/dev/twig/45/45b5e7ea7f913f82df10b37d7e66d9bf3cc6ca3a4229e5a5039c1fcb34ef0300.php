<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cc1de2c6920961d7a8fe4ca84f5cedd2c535956a5198e917b568617776630f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0ec762542d8baf8d8dbf1af027871adf45f9ba625c8baf99d0a7194abbc1cc = $this->env->getExtension("native_profiler");
        $__internal_5e0ec762542d8baf8d8dbf1af027871adf45f9ba625c8baf99d0a7194abbc1cc->enter($__internal_5e0ec762542d8baf8d8dbf1af027871adf45f9ba625c8baf99d0a7194abbc1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0ec762542d8baf8d8dbf1af027871adf45f9ba625c8baf99d0a7194abbc1cc->leave($__internal_5e0ec762542d8baf8d8dbf1af027871adf45f9ba625c8baf99d0a7194abbc1cc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8a60b5aa7c167b55b2b9ad4e3f1a1eb91d84e2891d150be9a2d4fb3ae30bd571 = $this->env->getExtension("native_profiler");
        $__internal_8a60b5aa7c167b55b2b9ad4e3f1a1eb91d84e2891d150be9a2d4fb3ae30bd571->enter($__internal_8a60b5aa7c167b55b2b9ad4e3f1a1eb91d84e2891d150be9a2d4fb3ae30bd571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_8a60b5aa7c167b55b2b9ad4e3f1a1eb91d84e2891d150be9a2d4fb3ae30bd571->leave($__internal_8a60b5aa7c167b55b2b9ad4e3f1a1eb91d84e2891d150be9a2d4fb3ae30bd571_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2de9ae95d57ed6b8f200a74583d6867f7da0acb716f7864d2f916f861aec9794 = $this->env->getExtension("native_profiler");
        $__internal_2de9ae95d57ed6b8f200a74583d6867f7da0acb716f7864d2f916f861aec9794->enter($__internal_2de9ae95d57ed6b8f200a74583d6867f7da0acb716f7864d2f916f861aec9794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2de9ae95d57ed6b8f200a74583d6867f7da0acb716f7864d2f916f861aec9794->leave($__internal_2de9ae95d57ed6b8f200a74583d6867f7da0acb716f7864d2f916f861aec9794_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% set messages = {*/
/*     'purge' : {*/
/*         status:  'success',*/
/*         title:   'The profiler database was purged successfully',*/
/*         message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'*/
/*     },*/
/*     'no_token' : {*/
/*         status:  'error',*/
/*         title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',*/
/*         message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token "' ~ token|default('') ~ '" was not found in the database.'*/
/*     },*/
/*     'upload_error' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'No file given or the file was not uploaded successfully.'*/
/*     },*/
/*     'already_exists' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'The token already exists in the database.'*/
/*     }*/
/* } %}*/
/* */
/* {% block summary %}*/
/*     <div class="status status-{{ messages[about].status }}">*/
/*         <div class="container">*/
/*             <h2>{{ messages[about].status|title }}</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ messages[about].title }}</h2>*/
/*     <p>{{ messages[about].message }}</p>*/
/* {% endblock %}*/
/* */
