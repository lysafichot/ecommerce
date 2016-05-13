<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7ed4e99a3931de5f1fa3ba0c67ab9645e711f8d47a69703b7d0e768ae13eca44 extends Twig_Template
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
        $__internal_ff96312c1bba2126310d4efef7f43df01668692d8a9b4c69aa871e7989f53cf5 = $this->env->getExtension("native_profiler");
        $__internal_ff96312c1bba2126310d4efef7f43df01668692d8a9b4c69aa871e7989f53cf5->enter($__internal_ff96312c1bba2126310d4efef7f43df01668692d8a9b4c69aa871e7989f53cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ff96312c1bba2126310d4efef7f43df01668692d8a9b4c69aa871e7989f53cf5->leave($__internal_ff96312c1bba2126310d4efef7f43df01668692d8a9b4c69aa871e7989f53cf5_prof);

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
