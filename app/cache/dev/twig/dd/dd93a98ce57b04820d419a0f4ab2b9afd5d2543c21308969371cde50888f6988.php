<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cf20aab6ea162ca76f25acfa09e00812d590a37570a5c6ee456bbe72aafeb3e1 extends Twig_Template
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
        $__internal_1790f1b1ca3ef7c948ef70b40ff99fe62a635dde394fa6ae1335bc92198d0034 = $this->env->getExtension("native_profiler");
        $__internal_1790f1b1ca3ef7c948ef70b40ff99fe62a635dde394fa6ae1335bc92198d0034->enter($__internal_1790f1b1ca3ef7c948ef70b40ff99fe62a635dde394fa6ae1335bc92198d0034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1790f1b1ca3ef7c948ef70b40ff99fe62a635dde394fa6ae1335bc92198d0034->leave($__internal_1790f1b1ca3ef7c948ef70b40ff99fe62a635dde394fa6ae1335bc92198d0034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
