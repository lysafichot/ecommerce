<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e64a749d24e316df7428d209bf711c5b808344c4c088e5164e97ae1064bca726 extends Twig_Template
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
        $__internal_164f5f0ca8dff086cb606902bd2052cfe64281c6f03d5c6a39465e75341d66b8 = $this->env->getExtension("native_profiler");
        $__internal_164f5f0ca8dff086cb606902bd2052cfe64281c6f03d5c6a39465e75341d66b8->enter($__internal_164f5f0ca8dff086cb606902bd2052cfe64281c6f03d5c6a39465e75341d66b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_164f5f0ca8dff086cb606902bd2052cfe64281c6f03d5c6a39465e75341d66b8->leave($__internal_164f5f0ca8dff086cb606902bd2052cfe64281c6f03d5c6a39465e75341d66b8_prof);

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
