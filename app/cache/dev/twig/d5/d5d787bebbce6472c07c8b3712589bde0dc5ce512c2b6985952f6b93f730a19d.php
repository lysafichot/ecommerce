<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_35f18d0b302653361a12adeec1b34e77c1cddf3020f73cae58a92a1b7a290fad extends Twig_Template
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
        $__internal_03de4069c9b354ef45035c5ed9011dfcee5f95d221485503775f0ba63a716045 = $this->env->getExtension("native_profiler");
        $__internal_03de4069c9b354ef45035c5ed9011dfcee5f95d221485503775f0ba63a716045->enter($__internal_03de4069c9b354ef45035c5ed9011dfcee5f95d221485503775f0ba63a716045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03de4069c9b354ef45035c5ed9011dfcee5f95d221485503775f0ba63a716045->leave($__internal_03de4069c9b354ef45035c5ed9011dfcee5f95d221485503775f0ba63a716045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
