<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3097e226b6a1064d89cbf705ed2cae1aa149d9b2b010d14ce8dc6aec45ddfa5b extends Twig_Template
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
        $__internal_cacf12046d8d7fbece844a5ab3b3b902d6aa336fa74293413a94aea0192c6f0d = $this->env->getExtension("native_profiler");
        $__internal_cacf12046d8d7fbece844a5ab3b3b902d6aa336fa74293413a94aea0192c6f0d->enter($__internal_cacf12046d8d7fbece844a5ab3b3b902d6aa336fa74293413a94aea0192c6f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cacf12046d8d7fbece844a5ab3b3b902d6aa336fa74293413a94aea0192c6f0d->leave($__internal_cacf12046d8d7fbece844a5ab3b3b902d6aa336fa74293413a94aea0192c6f0d_prof);

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
