<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2d80332cddbd229b22967640bcabf13271da4f05a727c08aefc8a531cc9e2ced extends Twig_Template
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
        $__internal_c53b6b67ab9033faca7c97de91dbf634b473e25ed92a708e6103db0d6f1be334 = $this->env->getExtension("native_profiler");
        $__internal_c53b6b67ab9033faca7c97de91dbf634b473e25ed92a708e6103db0d6f1be334->enter($__internal_c53b6b67ab9033faca7c97de91dbf634b473e25ed92a708e6103db0d6f1be334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c53b6b67ab9033faca7c97de91dbf634b473e25ed92a708e6103db0d6f1be334->leave($__internal_c53b6b67ab9033faca7c97de91dbf634b473e25ed92a708e6103db0d6f1be334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
