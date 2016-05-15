<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0562a8bc118b0b9a5f0a12e41eb7e805e85a0e13e39ae3a22149e1fba33f2be9 extends Twig_Template
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
        $__internal_0c63d5cf7fdfe7ee53b59e38a2b6154b3214cdb322ca1d88af691e90ec533150 = $this->env->getExtension("native_profiler");
        $__internal_0c63d5cf7fdfe7ee53b59e38a2b6154b3214cdb322ca1d88af691e90ec533150->enter($__internal_0c63d5cf7fdfe7ee53b59e38a2b6154b3214cdb322ca1d88af691e90ec533150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0c63d5cf7fdfe7ee53b59e38a2b6154b3214cdb322ca1d88af691e90ec533150->leave($__internal_0c63d5cf7fdfe7ee53b59e38a2b6154b3214cdb322ca1d88af691e90ec533150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
