<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4fc55b0300bf7b58668e650bd0c2aad263f7dace0b4b68fb6e165487e5808f53 extends Twig_Template
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
        $__internal_2fe5329282eee853db3744abb16c5c32ee4f257a4a63d71be5a2e35ef876cf96 = $this->env->getExtension("native_profiler");
        $__internal_2fe5329282eee853db3744abb16c5c32ee4f257a4a63d71be5a2e35ef876cf96->enter($__internal_2fe5329282eee853db3744abb16c5c32ee4f257a4a63d71be5a2e35ef876cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2fe5329282eee853db3744abb16c5c32ee4f257a4a63d71be5a2e35ef876cf96->leave($__internal_2fe5329282eee853db3744abb16c5c32ee4f257a4a63d71be5a2e35ef876cf96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
