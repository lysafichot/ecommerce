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
        $__internal_aceb4203c58dc19776234bf390a4b865bc778c149f57070cc8ecbab7e91ddd94 = $this->env->getExtension("native_profiler");
        $__internal_aceb4203c58dc19776234bf390a4b865bc778c149f57070cc8ecbab7e91ddd94->enter($__internal_aceb4203c58dc19776234bf390a4b865bc778c149f57070cc8ecbab7e91ddd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_aceb4203c58dc19776234bf390a4b865bc778c149f57070cc8ecbab7e91ddd94->leave($__internal_aceb4203c58dc19776234bf390a4b865bc778c149f57070cc8ecbab7e91ddd94_prof);

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
