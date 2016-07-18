<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b93fa58878fb58d36291d0edef1180d9a560ccf34a17f02d5680b96b2a21d6e0 extends Twig_Template
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
        $__internal_3a9ae30df651529d42142f0f655219f7fd0c1f55aa6f3712232474b842b52446 = $this->env->getExtension("native_profiler");
        $__internal_3a9ae30df651529d42142f0f655219f7fd0c1f55aa6f3712232474b842b52446->enter($__internal_3a9ae30df651529d42142f0f655219f7fd0c1f55aa6f3712232474b842b52446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3a9ae30df651529d42142f0f655219f7fd0c1f55aa6f3712232474b842b52446->leave($__internal_3a9ae30df651529d42142f0f655219f7fd0c1f55aa6f3712232474b842b52446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
