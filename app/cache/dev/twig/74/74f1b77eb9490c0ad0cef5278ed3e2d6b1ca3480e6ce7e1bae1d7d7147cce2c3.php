<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a949e19f77d919c60438afda47401c40893421b8f8a719999d49c7f2ef38dc82 extends Twig_Template
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
        $__internal_144e0e12b637ffc8fa2e97f1b435356b63778d96e672e5acda69b6663dd10220 = $this->env->getExtension("native_profiler");
        $__internal_144e0e12b637ffc8fa2e97f1b435356b63778d96e672e5acda69b6663dd10220->enter($__internal_144e0e12b637ffc8fa2e97f1b435356b63778d96e672e5acda69b6663dd10220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_144e0e12b637ffc8fa2e97f1b435356b63778d96e672e5acda69b6663dd10220->leave($__internal_144e0e12b637ffc8fa2e97f1b435356b63778d96e672e5acda69b6663dd10220_prof);

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
