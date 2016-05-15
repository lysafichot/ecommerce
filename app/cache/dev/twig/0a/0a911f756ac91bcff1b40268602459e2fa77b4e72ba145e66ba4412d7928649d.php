<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_50a612e8048e59334dd1d15876a4a3a2770a67566442e100db4ccad0e7afc6fb extends Twig_Template
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
        $__internal_7549c8059d8eacc2a3eb156ab5f3791da6d3ed40a139cd61263e96d46b05c55d = $this->env->getExtension("native_profiler");
        $__internal_7549c8059d8eacc2a3eb156ab5f3791da6d3ed40a139cd61263e96d46b05c55d->enter($__internal_7549c8059d8eacc2a3eb156ab5f3791da6d3ed40a139cd61263e96d46b05c55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7549c8059d8eacc2a3eb156ab5f3791da6d3ed40a139cd61263e96d46b05c55d->leave($__internal_7549c8059d8eacc2a3eb156ab5f3791da6d3ed40a139cd61263e96d46b05c55d_prof);

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
