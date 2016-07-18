<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_85903df898f0dde4865cf26b489575c473725bb939d122be88e6bd5c4d8313aa extends Twig_Template
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
        $__internal_099d8510bca934181354d7e4ac8ac662d523dfe09e2dc04a13438de127c8d4cb = $this->env->getExtension("native_profiler");
        $__internal_099d8510bca934181354d7e4ac8ac662d523dfe09e2dc04a13438de127c8d4cb->enter($__internal_099d8510bca934181354d7e4ac8ac662d523dfe09e2dc04a13438de127c8d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_099d8510bca934181354d7e4ac8ac662d523dfe09e2dc04a13438de127c8d4cb->leave($__internal_099d8510bca934181354d7e4ac8ac662d523dfe09e2dc04a13438de127c8d4cb_prof);

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
