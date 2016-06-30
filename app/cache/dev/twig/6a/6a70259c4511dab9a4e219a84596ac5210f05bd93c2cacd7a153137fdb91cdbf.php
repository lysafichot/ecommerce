<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_0cb29f66a957b6ce7a6e263dbe9a1e4bcdaf68ab5b96f7ae931cad68fda48125 extends Twig_Template
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
        $__internal_2c7cb4ea8a51542df5203e3ba4c20a5335ef4de9de9c2a2f637c3b3ffe06c8b1 = $this->env->getExtension("native_profiler");
        $__internal_2c7cb4ea8a51542df5203e3ba4c20a5335ef4de9de9c2a2f637c3b3ffe06c8b1->enter($__internal_2c7cb4ea8a51542df5203e3ba4c20a5335ef4de9de9c2a2f637c3b3ffe06c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2c7cb4ea8a51542df5203e3ba4c20a5335ef4de9de9c2a2f637c3b3ffe06c8b1->leave($__internal_2c7cb4ea8a51542df5203e3ba4c20a5335ef4de9de9c2a2f637c3b3ffe06c8b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
