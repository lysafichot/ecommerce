<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_24d06ab99d07244ab54f25a8e3c923636b808832c33f53b1aac811cb825b4355 extends Twig_Template
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
        $__internal_d2942c1c995583dbd48c43694e4f6591d842f857b6580186ce4f4d10b0ac4271 = $this->env->getExtension("native_profiler");
        $__internal_d2942c1c995583dbd48c43694e4f6591d842f857b6580186ce4f4d10b0ac4271->enter($__internal_d2942c1c995583dbd48c43694e4f6591d842f857b6580186ce4f4d10b0ac4271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d2942c1c995583dbd48c43694e4f6591d842f857b6580186ce4f4d10b0ac4271->leave($__internal_d2942c1c995583dbd48c43694e4f6591d842f857b6580186ce4f4d10b0ac4271_prof);

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
