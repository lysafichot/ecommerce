<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ac9d6a2f82ff03a383e4d85beb70f8bd8de55128155811574f2fc5141dfc6ea8 extends Twig_Template
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
        $__internal_1129b038c4e7622b4ae1ea28c4b63f896af7e11e82d3d57101983a69d700082e = $this->env->getExtension("native_profiler");
        $__internal_1129b038c4e7622b4ae1ea28c4b63f896af7e11e82d3d57101983a69d700082e->enter($__internal_1129b038c4e7622b4ae1ea28c4b63f896af7e11e82d3d57101983a69d700082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1129b038c4e7622b4ae1ea28c4b63f896af7e11e82d3d57101983a69d700082e->leave($__internal_1129b038c4e7622b4ae1ea28c4b63f896af7e11e82d3d57101983a69d700082e_prof);

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
