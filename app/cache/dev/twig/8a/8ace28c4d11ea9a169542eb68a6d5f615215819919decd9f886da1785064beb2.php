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
        $__internal_93ccaffcc515bfc1a35edff59e2e41c1adb1ff99bb4f2c90ed7be20d9f2122d2 = $this->env->getExtension("native_profiler");
        $__internal_93ccaffcc515bfc1a35edff59e2e41c1adb1ff99bb4f2c90ed7be20d9f2122d2->enter($__internal_93ccaffcc515bfc1a35edff59e2e41c1adb1ff99bb4f2c90ed7be20d9f2122d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_93ccaffcc515bfc1a35edff59e2e41c1adb1ff99bb4f2c90ed7be20d9f2122d2->leave($__internal_93ccaffcc515bfc1a35edff59e2e41c1adb1ff99bb4f2c90ed7be20d9f2122d2_prof);

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
