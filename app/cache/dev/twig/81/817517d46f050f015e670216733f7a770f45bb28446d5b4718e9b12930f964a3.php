<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_92c16abf62fa57b426b0b66e12f16ae8e9e0869ff5e91a40a0ea0a0316310bd9 extends Twig_Template
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
        $__internal_c564f7174b5d36b68366bd3d1fc4589926010b756918a5748b7ffe7f3e76b891 = $this->env->getExtension("native_profiler");
        $__internal_c564f7174b5d36b68366bd3d1fc4589926010b756918a5748b7ffe7f3e76b891->enter($__internal_c564f7174b5d36b68366bd3d1fc4589926010b756918a5748b7ffe7f3e76b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c564f7174b5d36b68366bd3d1fc4589926010b756918a5748b7ffe7f3e76b891->leave($__internal_c564f7174b5d36b68366bd3d1fc4589926010b756918a5748b7ffe7f3e76b891_prof);

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
