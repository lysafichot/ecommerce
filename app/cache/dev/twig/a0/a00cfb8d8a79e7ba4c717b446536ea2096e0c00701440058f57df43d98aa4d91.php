<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_321e5e8afa2d19035fc49c3baa6d062e4d2a92af7e3bf54264f277bd064c6ff4 extends Twig_Template
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
        $__internal_7bebe8a9272c6b82482f8a1b225cc31fa6e98b8b09e71e24a938c71ad33af27c = $this->env->getExtension("native_profiler");
        $__internal_7bebe8a9272c6b82482f8a1b225cc31fa6e98b8b09e71e24a938c71ad33af27c->enter($__internal_7bebe8a9272c6b82482f8a1b225cc31fa6e98b8b09e71e24a938c71ad33af27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7bebe8a9272c6b82482f8a1b225cc31fa6e98b8b09e71e24a938c71ad33af27c->leave($__internal_7bebe8a9272c6b82482f8a1b225cc31fa6e98b8b09e71e24a938c71ad33af27c_prof);

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
