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
        $__internal_ade249e2b9a6090e69b221bbdc00d6c345752ff157b8f9505056c564e03f97f8 = $this->env->getExtension("native_profiler");
        $__internal_ade249e2b9a6090e69b221bbdc00d6c345752ff157b8f9505056c564e03f97f8->enter($__internal_ade249e2b9a6090e69b221bbdc00d6c345752ff157b8f9505056c564e03f97f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ade249e2b9a6090e69b221bbdc00d6c345752ff157b8f9505056c564e03f97f8->leave($__internal_ade249e2b9a6090e69b221bbdc00d6c345752ff157b8f9505056c564e03f97f8_prof);

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
