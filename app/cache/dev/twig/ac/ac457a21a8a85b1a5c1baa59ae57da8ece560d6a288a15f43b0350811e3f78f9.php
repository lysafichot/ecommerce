<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0fd70eac9dc24d329aac6d911c1182973acd1323627e8901226fd07292f59e4e extends Twig_Template
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
        $__internal_601d575bd4cc9332c69457a0bebd47207b2f9a23eeb8a008dedf764b0c00ce58 = $this->env->getExtension("native_profiler");
        $__internal_601d575bd4cc9332c69457a0bebd47207b2f9a23eeb8a008dedf764b0c00ce58->enter($__internal_601d575bd4cc9332c69457a0bebd47207b2f9a23eeb8a008dedf764b0c00ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_601d575bd4cc9332c69457a0bebd47207b2f9a23eeb8a008dedf764b0c00ce58->leave($__internal_601d575bd4cc9332c69457a0bebd47207b2f9a23eeb8a008dedf764b0c00ce58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
