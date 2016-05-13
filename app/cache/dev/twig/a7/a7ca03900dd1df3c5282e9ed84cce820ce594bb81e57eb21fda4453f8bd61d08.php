<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_465d82b863f3a92ba898afb7bc8f17a4e80b80620cd2e799e2a690a67dda0068 extends Twig_Template
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
        $__internal_d30ef3ef44951befdd2896e81831bbdb57dbb554f3bb841da7597f934615432f = $this->env->getExtension("native_profiler");
        $__internal_d30ef3ef44951befdd2896e81831bbdb57dbb554f3bb841da7597f934615432f->enter($__internal_d30ef3ef44951befdd2896e81831bbdb57dbb554f3bb841da7597f934615432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d30ef3ef44951befdd2896e81831bbdb57dbb554f3bb841da7597f934615432f->leave($__internal_d30ef3ef44951befdd2896e81831bbdb57dbb554f3bb841da7597f934615432f_prof);

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
