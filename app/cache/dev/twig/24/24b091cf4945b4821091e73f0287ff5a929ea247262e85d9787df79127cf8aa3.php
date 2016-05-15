<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_21ca377a51a9567633434945bfeab8bd7ce886689b88bd66d7ef419526f538d3 extends Twig_Template
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
        $__internal_68844aa848f63517624ea69756b3495e2118dc187ab2c52a26660feacba7cc8c = $this->env->getExtension("native_profiler");
        $__internal_68844aa848f63517624ea69756b3495e2118dc187ab2c52a26660feacba7cc8c->enter($__internal_68844aa848f63517624ea69756b3495e2118dc187ab2c52a26660feacba7cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_68844aa848f63517624ea69756b3495e2118dc187ab2c52a26660feacba7cc8c->leave($__internal_68844aa848f63517624ea69756b3495e2118dc187ab2c52a26660feacba7cc8c_prof);

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
