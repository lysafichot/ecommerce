<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c262a51927415f0982cedbb6301e0488b8415283ec2885854a84e47b5b620a66 extends Twig_Template
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
        $__internal_d13b77538cdeb9dfc3708e6158cd1223702c2aca9c2290397fbc11bdc7100ce9 = $this->env->getExtension("native_profiler");
        $__internal_d13b77538cdeb9dfc3708e6158cd1223702c2aca9c2290397fbc11bdc7100ce9->enter($__internal_d13b77538cdeb9dfc3708e6158cd1223702c2aca9c2290397fbc11bdc7100ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d13b77538cdeb9dfc3708e6158cd1223702c2aca9c2290397fbc11bdc7100ce9->leave($__internal_d13b77538cdeb9dfc3708e6158cd1223702c2aca9c2290397fbc11bdc7100ce9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
