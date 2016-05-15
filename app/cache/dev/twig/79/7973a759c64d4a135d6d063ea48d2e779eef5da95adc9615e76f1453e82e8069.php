<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28133f59ea1b2c326f54c4c802a39c5e8ca80b4a76080b7f7e368abdb9a6e390 extends Twig_Template
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
        $__internal_c9d65fcd03edc2ce89bc2d861981cdfa7682e894ed50b90c42482030e4b69c53 = $this->env->getExtension("native_profiler");
        $__internal_c9d65fcd03edc2ce89bc2d861981cdfa7682e894ed50b90c42482030e4b69c53->enter($__internal_c9d65fcd03edc2ce89bc2d861981cdfa7682e894ed50b90c42482030e4b69c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c9d65fcd03edc2ce89bc2d861981cdfa7682e894ed50b90c42482030e4b69c53->leave($__internal_c9d65fcd03edc2ce89bc2d861981cdfa7682e894ed50b90c42482030e4b69c53_prof);

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
