<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b77d4beb16b5947b9bbf6518b21589bc1495d35c5ca2bcd696bc26068f29c5e6 extends Twig_Template
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
        $__internal_01e35f7799a6fa9e04ad63774436cbab3b61a136f75ba3f421dc3e636a0f5490 = $this->env->getExtension("native_profiler");
        $__internal_01e35f7799a6fa9e04ad63774436cbab3b61a136f75ba3f421dc3e636a0f5490->enter($__internal_01e35f7799a6fa9e04ad63774436cbab3b61a136f75ba3f421dc3e636a0f5490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_01e35f7799a6fa9e04ad63774436cbab3b61a136f75ba3f421dc3e636a0f5490->leave($__internal_01e35f7799a6fa9e04ad63774436cbab3b61a136f75ba3f421dc3e636a0f5490_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
