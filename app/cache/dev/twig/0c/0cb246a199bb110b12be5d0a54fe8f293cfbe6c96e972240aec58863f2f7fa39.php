<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ce6c0c627868122c58e6d5b190fe1610d232e632454f1e94f0b5e71b875bcef1 extends Twig_Template
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
        $__internal_f96535b414f9b2fc54f7d6dfca4f0aaec9f9d177700174f662b8e1a70a591a11 = $this->env->getExtension("native_profiler");
        $__internal_f96535b414f9b2fc54f7d6dfca4f0aaec9f9d177700174f662b8e1a70a591a11->enter($__internal_f96535b414f9b2fc54f7d6dfca4f0aaec9f9d177700174f662b8e1a70a591a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f96535b414f9b2fc54f7d6dfca4f0aaec9f9d177700174f662b8e1a70a591a11->leave($__internal_f96535b414f9b2fc54f7d6dfca4f0aaec9f9d177700174f662b8e1a70a591a11_prof);

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
