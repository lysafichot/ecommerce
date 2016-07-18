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
        $__internal_be7340c329b6cfa61f03cb46a23b2f63001720e5ee20cb2f302b25ea9af6666f = $this->env->getExtension("native_profiler");
        $__internal_be7340c329b6cfa61f03cb46a23b2f63001720e5ee20cb2f302b25ea9af6666f->enter($__internal_be7340c329b6cfa61f03cb46a23b2f63001720e5ee20cb2f302b25ea9af6666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_be7340c329b6cfa61f03cb46a23b2f63001720e5ee20cb2f302b25ea9af6666f->leave($__internal_be7340c329b6cfa61f03cb46a23b2f63001720e5ee20cb2f302b25ea9af6666f_prof);

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
