<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1732e02376643b3f4998d1cd5deb0728a16fbac07d5d9b9a70065bbaed100a1c extends Twig_Template
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
        $__internal_ca9b6f8531dc95a384746bc49763e8faed4a78a7033dc0bc88a3f9ffd2d4fbe3 = $this->env->getExtension("native_profiler");
        $__internal_ca9b6f8531dc95a384746bc49763e8faed4a78a7033dc0bc88a3f9ffd2d4fbe3->enter($__internal_ca9b6f8531dc95a384746bc49763e8faed4a78a7033dc0bc88a3f9ffd2d4fbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_ca9b6f8531dc95a384746bc49763e8faed4a78a7033dc0bc88a3f9ffd2d4fbe3->leave($__internal_ca9b6f8531dc95a384746bc49763e8faed4a78a7033dc0bc88a3f9ffd2d4fbe3_prof);

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
