<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cc7c19d8df58730f1b24e8ac6a2c0f8f87f8e36aaa8a2591fb4cae079249415d extends Twig_Template
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
        $__internal_23593c632f1e164b799436232f15ed1c5fe1bc5750de363c70f8da46ffbbefcb = $this->env->getExtension("native_profiler");
        $__internal_23593c632f1e164b799436232f15ed1c5fe1bc5750de363c70f8da46ffbbefcb->enter($__internal_23593c632f1e164b799436232f15ed1c5fe1bc5750de363c70f8da46ffbbefcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_23593c632f1e164b799436232f15ed1c5fe1bc5750de363c70f8da46ffbbefcb->leave($__internal_23593c632f1e164b799436232f15ed1c5fe1bc5750de363c70f8da46ffbbefcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
