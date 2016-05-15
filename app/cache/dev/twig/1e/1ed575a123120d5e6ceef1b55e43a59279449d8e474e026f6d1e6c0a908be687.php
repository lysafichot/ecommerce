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
        $__internal_dc8ba9cb0bbd48e22b5fea342e0da6a3900d6ecf83f7b8b149e8313fc9dc580c = $this->env->getExtension("native_profiler");
        $__internal_dc8ba9cb0bbd48e22b5fea342e0da6a3900d6ecf83f7b8b149e8313fc9dc580c->enter($__internal_dc8ba9cb0bbd48e22b5fea342e0da6a3900d6ecf83f7b8b149e8313fc9dc580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_dc8ba9cb0bbd48e22b5fea342e0da6a3900d6ecf83f7b8b149e8313fc9dc580c->leave($__internal_dc8ba9cb0bbd48e22b5fea342e0da6a3900d6ecf83f7b8b149e8313fc9dc580c_prof);

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
