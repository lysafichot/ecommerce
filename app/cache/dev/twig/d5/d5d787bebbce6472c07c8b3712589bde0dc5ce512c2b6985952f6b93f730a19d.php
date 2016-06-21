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
        $__internal_488bc7ebe5640de8318dee9e7c8f62851ee719434d579f293c998ad9f28cc942 = $this->env->getExtension("native_profiler");
        $__internal_488bc7ebe5640de8318dee9e7c8f62851ee719434d579f293c998ad9f28cc942->enter($__internal_488bc7ebe5640de8318dee9e7c8f62851ee719434d579f293c998ad9f28cc942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_488bc7ebe5640de8318dee9e7c8f62851ee719434d579f293c998ad9f28cc942->leave($__internal_488bc7ebe5640de8318dee9e7c8f62851ee719434d579f293c998ad9f28cc942_prof);

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
