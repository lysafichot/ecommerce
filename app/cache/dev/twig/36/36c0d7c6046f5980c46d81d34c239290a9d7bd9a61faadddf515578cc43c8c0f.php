<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6c2f5be3a27812ef791bc5bfe62d1eaa5fab2e9c4933513bec4abfee7c034f7e extends Twig_Template
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
        $__internal_ff0a132a154265a6de3135cedd41cfa8bc8e0fb854bbfb5d7bfd45c7da82bb71 = $this->env->getExtension("native_profiler");
        $__internal_ff0a132a154265a6de3135cedd41cfa8bc8e0fb854bbfb5d7bfd45c7da82bb71->enter($__internal_ff0a132a154265a6de3135cedd41cfa8bc8e0fb854bbfb5d7bfd45c7da82bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ff0a132a154265a6de3135cedd41cfa8bc8e0fb854bbfb5d7bfd45c7da82bb71->leave($__internal_ff0a132a154265a6de3135cedd41cfa8bc8e0fb854bbfb5d7bfd45c7da82bb71_prof);

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
