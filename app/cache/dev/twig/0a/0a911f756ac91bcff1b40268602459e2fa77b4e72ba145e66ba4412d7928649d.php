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
        $__internal_3eb75657dec208964358d452a6045e052f7eb4d99becbcd769352ee1163d35ca = $this->env->getExtension("native_profiler");
        $__internal_3eb75657dec208964358d452a6045e052f7eb4d99becbcd769352ee1163d35ca->enter($__internal_3eb75657dec208964358d452a6045e052f7eb4d99becbcd769352ee1163d35ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3eb75657dec208964358d452a6045e052f7eb4d99becbcd769352ee1163d35ca->leave($__internal_3eb75657dec208964358d452a6045e052f7eb4d99becbcd769352ee1163d35ca_prof);

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
