<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_23d88b21af2fabdb15385c5b6007c55051ede3fb1de879c4aa5d7509923e69f6 extends Twig_Template
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
        $__internal_d81d28a8b831a3c4623e01d0b1e887fb7cb21ea2d1091ccc7679f3d93cdce0ac = $this->env->getExtension("native_profiler");
        $__internal_d81d28a8b831a3c4623e01d0b1e887fb7cb21ea2d1091ccc7679f3d93cdce0ac->enter($__internal_d81d28a8b831a3c4623e01d0b1e887fb7cb21ea2d1091ccc7679f3d93cdce0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d81d28a8b831a3c4623e01d0b1e887fb7cb21ea2d1091ccc7679f3d93cdce0ac->leave($__internal_d81d28a8b831a3c4623e01d0b1e887fb7cb21ea2d1091ccc7679f3d93cdce0ac_prof);

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
