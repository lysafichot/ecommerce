<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f34f1f915ac52133dd4ff6f31b3512e222312af283f81a30d92a880137d570e9 extends Twig_Template
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
        $__internal_861f2d9dd001e2bc62d93c2d91924d5d97c7aa1e04b7ae95397aca9875961aca = $this->env->getExtension("native_profiler");
        $__internal_861f2d9dd001e2bc62d93c2d91924d5d97c7aa1e04b7ae95397aca9875961aca->enter($__internal_861f2d9dd001e2bc62d93c2d91924d5d97c7aa1e04b7ae95397aca9875961aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_861f2d9dd001e2bc62d93c2d91924d5d97c7aa1e04b7ae95397aca9875961aca->leave($__internal_861f2d9dd001e2bc62d93c2d91924d5d97c7aa1e04b7ae95397aca9875961aca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
