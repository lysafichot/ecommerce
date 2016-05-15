<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7b017bc7208316850f5eda5be547c3b4bf733921f64ccf06e61b857c9dd90d29 extends Twig_Template
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
        $__internal_7861132966d4105662a62636fa0222fd50dd5b10ce3c0fe8e1e8e32042fc4f3f = $this->env->getExtension("native_profiler");
        $__internal_7861132966d4105662a62636fa0222fd50dd5b10ce3c0fe8e1e8e32042fc4f3f->enter($__internal_7861132966d4105662a62636fa0222fd50dd5b10ce3c0fe8e1e8e32042fc4f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7861132966d4105662a62636fa0222fd50dd5b10ce3c0fe8e1e8e32042fc4f3f->leave($__internal_7861132966d4105662a62636fa0222fd50dd5b10ce3c0fe8e1e8e32042fc4f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
