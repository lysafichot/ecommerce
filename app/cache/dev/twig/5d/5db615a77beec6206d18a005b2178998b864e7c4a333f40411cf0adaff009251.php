<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ae6d993a29b00063fdd670f501db13ca0a5f1195d072183c6b95aa89f0dcbc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7109de28e0d25523ab00f709f5cbee7f7b7ab0c1b3c8bfa2b6ed33176b648561 = $this->env->getExtension("native_profiler");
        $__internal_7109de28e0d25523ab00f709f5cbee7f7b7ab0c1b3c8bfa2b6ed33176b648561->enter($__internal_7109de28e0d25523ab00f709f5cbee7f7b7ab0c1b3c8bfa2b6ed33176b648561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7109de28e0d25523ab00f709f5cbee7f7b7ab0c1b3c8bfa2b6ed33176b648561->leave($__internal_7109de28e0d25523ab00f709f5cbee7f7b7ab0c1b3c8bfa2b6ed33176b648561_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
