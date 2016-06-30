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
        $__internal_00b211a613031b45cdaa7152c5f5c9810a2b0ecb272f6a8b63f6d4685b3595e8 = $this->env->getExtension("native_profiler");
        $__internal_00b211a613031b45cdaa7152c5f5c9810a2b0ecb272f6a8b63f6d4685b3595e8->enter($__internal_00b211a613031b45cdaa7152c5f5c9810a2b0ecb272f6a8b63f6d4685b3595e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_00b211a613031b45cdaa7152c5f5c9810a2b0ecb272f6a8b63f6d4685b3595e8->leave($__internal_00b211a613031b45cdaa7152c5f5c9810a2b0ecb272f6a8b63f6d4685b3595e8_prof);

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
