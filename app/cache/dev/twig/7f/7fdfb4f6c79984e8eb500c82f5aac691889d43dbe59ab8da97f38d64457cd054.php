<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2cbaf8e46e5665fc6b4952248360ae2811bcc1ad9bbde56c5f38c22415fd0727 extends Twig_Template
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
        $__internal_554b914cf06b1365a81870b0f4b2ac9cc9987a20eb988799bffbbed3c241cc18 = $this->env->getExtension("native_profiler");
        $__internal_554b914cf06b1365a81870b0f4b2ac9cc9987a20eb988799bffbbed3c241cc18->enter($__internal_554b914cf06b1365a81870b0f4b2ac9cc9987a20eb988799bffbbed3c241cc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_554b914cf06b1365a81870b0f4b2ac9cc9987a20eb988799bffbbed3c241cc18->leave($__internal_554b914cf06b1365a81870b0f4b2ac9cc9987a20eb988799bffbbed3c241cc18_prof);

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
