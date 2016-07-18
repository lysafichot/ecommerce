<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_428aba6e85d274aaeb3c5252206e53fd6520e0dc5fec963e74853b8be8ba7605 extends Twig_Template
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
        $__internal_3918a558c51dda6a57375b06217726562b2c1e7c3f8c6e5ad26abe735253a4cc = $this->env->getExtension("native_profiler");
        $__internal_3918a558c51dda6a57375b06217726562b2c1e7c3f8c6e5ad26abe735253a4cc->enter($__internal_3918a558c51dda6a57375b06217726562b2c1e7c3f8c6e5ad26abe735253a4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3918a558c51dda6a57375b06217726562b2c1e7c3f8c6e5ad26abe735253a4cc->leave($__internal_3918a558c51dda6a57375b06217726562b2c1e7c3f8c6e5ad26abe735253a4cc_prof);

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
