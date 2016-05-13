<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_61c38bf8dc15b51aec65ef23068d1550f62be635d86a7732a4171f7ec7550cf8 extends Twig_Template
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
        $__internal_2df7587d3926ddc98a71cc5d58216be07a9a9ee0f5210fefa7a91be359fcec78 = $this->env->getExtension("native_profiler");
        $__internal_2df7587d3926ddc98a71cc5d58216be07a9a9ee0f5210fefa7a91be359fcec78->enter($__internal_2df7587d3926ddc98a71cc5d58216be07a9a9ee0f5210fefa7a91be359fcec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2df7587d3926ddc98a71cc5d58216be07a9a9ee0f5210fefa7a91be359fcec78->leave($__internal_2df7587d3926ddc98a71cc5d58216be07a9a9ee0f5210fefa7a91be359fcec78_prof);

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
