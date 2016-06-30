<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c3d931549114272ed9b7ed852606b87e48cbf21d3a0ce32549581bae53e6b2ff extends Twig_Template
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
        $__internal_895224f80f4f7a354ec3a0b514794c837a9866496ebe75214962c7a62302f157 = $this->env->getExtension("native_profiler");
        $__internal_895224f80f4f7a354ec3a0b514794c837a9866496ebe75214962c7a62302f157->enter($__internal_895224f80f4f7a354ec3a0b514794c837a9866496ebe75214962c7a62302f157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_895224f80f4f7a354ec3a0b514794c837a9866496ebe75214962c7a62302f157->leave($__internal_895224f80f4f7a354ec3a0b514794c837a9866496ebe75214962c7a62302f157_prof);

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
