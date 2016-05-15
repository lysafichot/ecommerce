<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a146e8677cf90d2c08c38481803a904a01569f20a21800cc94c11e0f7ab842e5 extends Twig_Template
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
        $__internal_2b7455dbb981e5b1c32e27cecc94031c08a83532f8140f246c3c27c85b03effb = $this->env->getExtension("native_profiler");
        $__internal_2b7455dbb981e5b1c32e27cecc94031c08a83532f8140f246c3c27c85b03effb->enter($__internal_2b7455dbb981e5b1c32e27cecc94031c08a83532f8140f246c3c27c85b03effb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2b7455dbb981e5b1c32e27cecc94031c08a83532f8140f246c3c27c85b03effb->leave($__internal_2b7455dbb981e5b1c32e27cecc94031c08a83532f8140f246c3c27c85b03effb_prof);

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
