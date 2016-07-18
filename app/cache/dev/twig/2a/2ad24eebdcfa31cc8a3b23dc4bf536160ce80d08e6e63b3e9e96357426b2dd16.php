<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_098a2a1ce466bf17bea5516152eac529c968f754bf459adf8929436d6605ab4f extends Twig_Template
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
        $__internal_e0bb165548f51dd004a7be6288e9a2ec32ad2a4465332d09d1c0692fe2711b15 = $this->env->getExtension("native_profiler");
        $__internal_e0bb165548f51dd004a7be6288e9a2ec32ad2a4465332d09d1c0692fe2711b15->enter($__internal_e0bb165548f51dd004a7be6288e9a2ec32ad2a4465332d09d1c0692fe2711b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e0bb165548f51dd004a7be6288e9a2ec32ad2a4465332d09d1c0692fe2711b15->leave($__internal_e0bb165548f51dd004a7be6288e9a2ec32ad2a4465332d09d1c0692fe2711b15_prof);

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
