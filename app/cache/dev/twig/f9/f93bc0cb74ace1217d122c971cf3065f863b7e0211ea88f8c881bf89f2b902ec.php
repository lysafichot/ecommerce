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
        $__internal_965bb90af357850b4269f37d29c7ec62c5b772fdbd7a1cc0be0fcbcfd9ac40e7 = $this->env->getExtension("native_profiler");
        $__internal_965bb90af357850b4269f37d29c7ec62c5b772fdbd7a1cc0be0fcbcfd9ac40e7->enter($__internal_965bb90af357850b4269f37d29c7ec62c5b772fdbd7a1cc0be0fcbcfd9ac40e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_965bb90af357850b4269f37d29c7ec62c5b772fdbd7a1cc0be0fcbcfd9ac40e7->leave($__internal_965bb90af357850b4269f37d29c7ec62c5b772fdbd7a1cc0be0fcbcfd9ac40e7_prof);

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