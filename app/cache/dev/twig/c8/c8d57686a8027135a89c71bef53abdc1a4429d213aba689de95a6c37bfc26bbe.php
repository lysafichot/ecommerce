<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1d37056485262b249c4326c2aa8e6ed6b74ec899977178b773f52667dae75f1c extends Twig_Template
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
        $__internal_a78302d93208735068cb9628c7e6e3ca47e4687a4327c1e4b190c4355de22c13 = $this->env->getExtension("native_profiler");
        $__internal_a78302d93208735068cb9628c7e6e3ca47e4687a4327c1e4b190c4355de22c13->enter($__internal_a78302d93208735068cb9628c7e6e3ca47e4687a4327c1e4b190c4355de22c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a78302d93208735068cb9628c7e6e3ca47e4687a4327c1e4b190c4355de22c13->leave($__internal_a78302d93208735068cb9628c7e6e3ca47e4687a4327c1e4b190c4355de22c13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */