<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_36b78ea86fbe15f3a20ec54af02259a29f6377be2b2b20178ff89628a0a0d258 extends Twig_Template
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
        $__internal_bbfe2462e2986a1bc183f6d802668fa2c5111c91ff7773c7b720999ddb8583b4 = $this->env->getExtension("native_profiler");
        $__internal_bbfe2462e2986a1bc183f6d802668fa2c5111c91ff7773c7b720999ddb8583b4->enter($__internal_bbfe2462e2986a1bc183f6d802668fa2c5111c91ff7773c7b720999ddb8583b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bbfe2462e2986a1bc183f6d802668fa2c5111c91ff7773c7b720999ddb8583b4->leave($__internal_bbfe2462e2986a1bc183f6d802668fa2c5111c91ff7773c7b720999ddb8583b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
