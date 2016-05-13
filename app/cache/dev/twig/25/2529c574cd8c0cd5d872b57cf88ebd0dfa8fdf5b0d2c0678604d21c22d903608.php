<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e7aeb9bf7b9f53b0feb5a26d3baac976f492a52c3b8069176d05dc075ceca716 extends Twig_Template
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
        $__internal_5cb4e1016c962c7a747dd2e621c1ad0972ad51403a28657cc29d9e6bfaec8c3d = $this->env->getExtension("native_profiler");
        $__internal_5cb4e1016c962c7a747dd2e621c1ad0972ad51403a28657cc29d9e6bfaec8c3d->enter($__internal_5cb4e1016c962c7a747dd2e621c1ad0972ad51403a28657cc29d9e6bfaec8c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5cb4e1016c962c7a747dd2e621c1ad0972ad51403a28657cc29d9e6bfaec8c3d->leave($__internal_5cb4e1016c962c7a747dd2e621c1ad0972ad51403a28657cc29d9e6bfaec8c3d_prof);

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
