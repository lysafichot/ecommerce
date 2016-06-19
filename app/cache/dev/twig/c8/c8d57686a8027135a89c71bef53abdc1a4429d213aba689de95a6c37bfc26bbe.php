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
        $__internal_116df2a058bee410868462243c5bbc080c089418c68de38a85fc72412dbf3584 = $this->env->getExtension("native_profiler");
        $__internal_116df2a058bee410868462243c5bbc080c089418c68de38a85fc72412dbf3584->enter($__internal_116df2a058bee410868462243c5bbc080c089418c68de38a85fc72412dbf3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_116df2a058bee410868462243c5bbc080c089418c68de38a85fc72412dbf3584->leave($__internal_116df2a058bee410868462243c5bbc080c089418c68de38a85fc72412dbf3584_prof);

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
