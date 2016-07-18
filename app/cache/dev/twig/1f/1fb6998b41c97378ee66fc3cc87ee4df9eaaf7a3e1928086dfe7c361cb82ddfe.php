<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9ff5785737e0a42f2aaf45913065eaf711f67bad2b29e5e1ca1aa1e2565182f2 extends Twig_Template
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
        $__internal_70477cd560aa15bf5e16b43a70ccb55db1ea9a67b972c1f8f179ab25e088b5bc = $this->env->getExtension("native_profiler");
        $__internal_70477cd560aa15bf5e16b43a70ccb55db1ea9a67b972c1f8f179ab25e088b5bc->enter($__internal_70477cd560aa15bf5e16b43a70ccb55db1ea9a67b972c1f8f179ab25e088b5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_70477cd560aa15bf5e16b43a70ccb55db1ea9a67b972c1f8f179ab25e088b5bc->leave($__internal_70477cd560aa15bf5e16b43a70ccb55db1ea9a67b972c1f8f179ab25e088b5bc_prof);

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
