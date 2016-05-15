<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5f9aec91e4ef371f6530ead1019c9b9c11ca469f6ef04b9e0c0ace79599cce84 extends Twig_Template
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
        $__internal_1ca0cc62375409a3fce91b010f824fdb6cbfcf5e673be4f300d0333346d22108 = $this->env->getExtension("native_profiler");
        $__internal_1ca0cc62375409a3fce91b010f824fdb6cbfcf5e673be4f300d0333346d22108->enter($__internal_1ca0cc62375409a3fce91b010f824fdb6cbfcf5e673be4f300d0333346d22108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1ca0cc62375409a3fce91b010f824fdb6cbfcf5e673be4f300d0333346d22108->leave($__internal_1ca0cc62375409a3fce91b010f824fdb6cbfcf5e673be4f300d0333346d22108_prof);

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
