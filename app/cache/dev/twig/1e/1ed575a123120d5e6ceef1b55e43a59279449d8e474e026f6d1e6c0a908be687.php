<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e62de4f48d3a0618bc1d6d2d487819cf3fcb76f641d4341e3087792e5b629989 extends Twig_Template
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
        $__internal_7b62a684022ed4f1fdba11800189b1ed87952dbf689a57a4cb5a0b24933ac00e = $this->env->getExtension("native_profiler");
        $__internal_7b62a684022ed4f1fdba11800189b1ed87952dbf689a57a4cb5a0b24933ac00e->enter($__internal_7b62a684022ed4f1fdba11800189b1ed87952dbf689a57a4cb5a0b24933ac00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7b62a684022ed4f1fdba11800189b1ed87952dbf689a57a4cb5a0b24933ac00e->leave($__internal_7b62a684022ed4f1fdba11800189b1ed87952dbf689a57a4cb5a0b24933ac00e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
