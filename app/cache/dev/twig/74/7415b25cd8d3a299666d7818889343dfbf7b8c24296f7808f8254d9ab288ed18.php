<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f34f1f915ac52133dd4ff6f31b3512e222312af283f81a30d92a880137d570e9 extends Twig_Template
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
        $__internal_b1c1dca1b6d6015e2d6b7bd3caeb016a35e6f42c43bdc3c35f5c52f79eac0465 = $this->env->getExtension("native_profiler");
        $__internal_b1c1dca1b6d6015e2d6b7bd3caeb016a35e6f42c43bdc3c35f5c52f79eac0465->enter($__internal_b1c1dca1b6d6015e2d6b7bd3caeb016a35e6f42c43bdc3c35f5c52f79eac0465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b1c1dca1b6d6015e2d6b7bd3caeb016a35e6f42c43bdc3c35f5c52f79eac0465->leave($__internal_b1c1dca1b6d6015e2d6b7bd3caeb016a35e6f42c43bdc3c35f5c52f79eac0465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
