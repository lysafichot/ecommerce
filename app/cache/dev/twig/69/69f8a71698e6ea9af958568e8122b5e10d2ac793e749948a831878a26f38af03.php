<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c97d05f8116e8f154e37f8a51bf28958670324e4b2ed56eee3e71027c2acb934 extends Twig_Template
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
        $__internal_54f3d96d1468e07cc048f795c0195155e8a0f733c98e6408d12f9107388adb34 = $this->env->getExtension("native_profiler");
        $__internal_54f3d96d1468e07cc048f795c0195155e8a0f733c98e6408d12f9107388adb34->enter($__internal_54f3d96d1468e07cc048f795c0195155e8a0f733c98e6408d12f9107388adb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_54f3d96d1468e07cc048f795c0195155e8a0f733c98e6408d12f9107388adb34->leave($__internal_54f3d96d1468e07cc048f795c0195155e8a0f733c98e6408d12f9107388adb34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
