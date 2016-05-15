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
        $__internal_15019fb351ed869f36f0d957b7bd91f0c24816d4065ce9b2c0646b915cd87885 = $this->env->getExtension("native_profiler");
        $__internal_15019fb351ed869f36f0d957b7bd91f0c24816d4065ce9b2c0646b915cd87885->enter($__internal_15019fb351ed869f36f0d957b7bd91f0c24816d4065ce9b2c0646b915cd87885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_15019fb351ed869f36f0d957b7bd91f0c24816d4065ce9b2c0646b915cd87885->leave($__internal_15019fb351ed869f36f0d957b7bd91f0c24816d4065ce9b2c0646b915cd87885_prof);

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
