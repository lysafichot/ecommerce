<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_6192228615ceaf3c8aa2527e0b1d9edbf3f51cd2a57dcea4c0c0d46cc7779a57 extends Twig_Template
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
        $__internal_bd9fef4ec76f1bdf1323d9cac383ce48d9850fc3daadae1f894d4548c6bd399c = $this->env->getExtension("native_profiler");
        $__internal_bd9fef4ec76f1bdf1323d9cac383ce48d9850fc3daadae1f894d4548c6bd399c->enter($__internal_bd9fef4ec76f1bdf1323d9cac383ce48d9850fc3daadae1f894d4548c6bd399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_bd9fef4ec76f1bdf1323d9cac383ce48d9850fc3daadae1f894d4548c6bd399c->leave($__internal_bd9fef4ec76f1bdf1323d9cac383ce48d9850fc3daadae1f894d4548c6bd399c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
