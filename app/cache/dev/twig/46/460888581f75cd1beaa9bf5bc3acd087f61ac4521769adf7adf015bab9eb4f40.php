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
        $__internal_0b4137546d7d0c19a50ead175dff27f9fa187b4ab7d82ee6e9515417accdb05c = $this->env->getExtension("native_profiler");
        $__internal_0b4137546d7d0c19a50ead175dff27f9fa187b4ab7d82ee6e9515417accdb05c->enter($__internal_0b4137546d7d0c19a50ead175dff27f9fa187b4ab7d82ee6e9515417accdb05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0b4137546d7d0c19a50ead175dff27f9fa187b4ab7d82ee6e9515417accdb05c->leave($__internal_0b4137546d7d0c19a50ead175dff27f9fa187b4ab7d82ee6e9515417accdb05c_prof);

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
