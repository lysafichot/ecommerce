<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c4401f2019bad4ede9fc74179ee3dcdc6f478582e3bfa1a8e89ad8d7d51ed457 extends Twig_Template
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
        $__internal_fdeb8a3cdb09238dcd913be7f4dc5df21314debd86637c65a69a83e44726d94d = $this->env->getExtension("native_profiler");
        $__internal_fdeb8a3cdb09238dcd913be7f4dc5df21314debd86637c65a69a83e44726d94d->enter($__internal_fdeb8a3cdb09238dcd913be7f4dc5df21314debd86637c65a69a83e44726d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fdeb8a3cdb09238dcd913be7f4dc5df21314debd86637c65a69a83e44726d94d->leave($__internal_fdeb8a3cdb09238dcd913be7f4dc5df21314debd86637c65a69a83e44726d94d_prof);

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
