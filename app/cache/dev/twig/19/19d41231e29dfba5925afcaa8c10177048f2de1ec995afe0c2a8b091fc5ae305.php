<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9d83da14c842557ddfb3dd2312b212831f24ce45cdc6d345592dacdfc97f5675 extends Twig_Template
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
        $__internal_42a51820360e218ac8441ff29166c2efebf437dbd12d3616764c397ddfdda6a5 = $this->env->getExtension("native_profiler");
        $__internal_42a51820360e218ac8441ff29166c2efebf437dbd12d3616764c397ddfdda6a5->enter($__internal_42a51820360e218ac8441ff29166c2efebf437dbd12d3616764c397ddfdda6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_42a51820360e218ac8441ff29166c2efebf437dbd12d3616764c397ddfdda6a5->leave($__internal_42a51820360e218ac8441ff29166c2efebf437dbd12d3616764c397ddfdda6a5_prof);

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
