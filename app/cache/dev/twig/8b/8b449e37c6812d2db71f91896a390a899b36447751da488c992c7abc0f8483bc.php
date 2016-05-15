<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a52a46f7a4fd9e1b97b0fa1bf5849f8e12c2ee90cf95715d161f729f8d085461 extends Twig_Template
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
        $__internal_5b76a9d7cfe638f0f4984780c0135faec5ca9a705f3153b2867a6ce7e5ab355c = $this->env->getExtension("native_profiler");
        $__internal_5b76a9d7cfe638f0f4984780c0135faec5ca9a705f3153b2867a6ce7e5ab355c->enter($__internal_5b76a9d7cfe638f0f4984780c0135faec5ca9a705f3153b2867a6ce7e5ab355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5b76a9d7cfe638f0f4984780c0135faec5ca9a705f3153b2867a6ce7e5ab355c->leave($__internal_5b76a9d7cfe638f0f4984780c0135faec5ca9a705f3153b2867a6ce7e5ab355c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
