<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1ffc81dd56aadd9b09f817e1d621338fa083880d8607e0ac09c112c0d12823dd extends Twig_Template
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
        $__internal_a23ae0976763ee0d393799f0b22f631e48035261337be27bfc22bd0554a7c74b = $this->env->getExtension("native_profiler");
        $__internal_a23ae0976763ee0d393799f0b22f631e48035261337be27bfc22bd0554a7c74b->enter($__internal_a23ae0976763ee0d393799f0b22f631e48035261337be27bfc22bd0554a7c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a23ae0976763ee0d393799f0b22f631e48035261337be27bfc22bd0554a7c74b->leave($__internal_a23ae0976763ee0d393799f0b22f631e48035261337be27bfc22bd0554a7c74b_prof);

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
