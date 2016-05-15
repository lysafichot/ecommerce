<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8046e40cbb62370d1c3c3d145762bc0a6ddd3543a8cfe3c4339085888f35a942 extends Twig_Template
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
        $__internal_1b2944a1942860aeaec597bb1ab30d920092ec2cc1286b64b45014043ab8359f = $this->env->getExtension("native_profiler");
        $__internal_1b2944a1942860aeaec597bb1ab30d920092ec2cc1286b64b45014043ab8359f->enter($__internal_1b2944a1942860aeaec597bb1ab30d920092ec2cc1286b64b45014043ab8359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b2944a1942860aeaec597bb1ab30d920092ec2cc1286b64b45014043ab8359f->leave($__internal_1b2944a1942860aeaec597bb1ab30d920092ec2cc1286b64b45014043ab8359f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
