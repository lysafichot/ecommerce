<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f709e15f6ec57ef5a977434dcb0cc6f99563d8ad33ff4647148585c7053423f3 extends Twig_Template
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
        $__internal_ac2c83f603c0a07a83d646b65e6ca116028200894ca00c2cd3ab5ceb499dc053 = $this->env->getExtension("native_profiler");
        $__internal_ac2c83f603c0a07a83d646b65e6ca116028200894ca00c2cd3ab5ceb499dc053->enter($__internal_ac2c83f603c0a07a83d646b65e6ca116028200894ca00c2cd3ab5ceb499dc053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ac2c83f603c0a07a83d646b65e6ca116028200894ca00c2cd3ab5ceb499dc053->leave($__internal_ac2c83f603c0a07a83d646b65e6ca116028200894ca00c2cd3ab5ceb499dc053_prof);

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
