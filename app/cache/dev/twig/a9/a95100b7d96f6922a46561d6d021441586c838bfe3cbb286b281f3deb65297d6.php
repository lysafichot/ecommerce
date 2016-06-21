<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c262a51927415f0982cedbb6301e0488b8415283ec2885854a84e47b5b620a66 extends Twig_Template
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
        $__internal_827e0ff90ab61acf243fa93b098206bb4b5567c4d1da27e1f55552706dfe22cf = $this->env->getExtension("native_profiler");
        $__internal_827e0ff90ab61acf243fa93b098206bb4b5567c4d1da27e1f55552706dfe22cf->enter($__internal_827e0ff90ab61acf243fa93b098206bb4b5567c4d1da27e1f55552706dfe22cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_827e0ff90ab61acf243fa93b098206bb4b5567c4d1da27e1f55552706dfe22cf->leave($__internal_827e0ff90ab61acf243fa93b098206bb4b5567c4d1da27e1f55552706dfe22cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
