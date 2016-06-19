<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1eb45745e43f3b97c0047e200c75b5585a1af50f86111a77eaa198530604f443 extends Twig_Template
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
        $__internal_3421156581bec0e547abfe01a88b77ecca4dfef98c54b0969ab36dc68686dab3 = $this->env->getExtension("native_profiler");
        $__internal_3421156581bec0e547abfe01a88b77ecca4dfef98c54b0969ab36dc68686dab3->enter($__internal_3421156581bec0e547abfe01a88b77ecca4dfef98c54b0969ab36dc68686dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3421156581bec0e547abfe01a88b77ecca4dfef98c54b0969ab36dc68686dab3->leave($__internal_3421156581bec0e547abfe01a88b77ecca4dfef98c54b0969ab36dc68686dab3_prof);

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
