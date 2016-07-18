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
        $__internal_bb38607eebfa16efcfdf65d70e8f63c31dce22a402a2f983510cd2a6521b80bb = $this->env->getExtension("native_profiler");
        $__internal_bb38607eebfa16efcfdf65d70e8f63c31dce22a402a2f983510cd2a6521b80bb->enter($__internal_bb38607eebfa16efcfdf65d70e8f63c31dce22a402a2f983510cd2a6521b80bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_bb38607eebfa16efcfdf65d70e8f63c31dce22a402a2f983510cd2a6521b80bb->leave($__internal_bb38607eebfa16efcfdf65d70e8f63c31dce22a402a2f983510cd2a6521b80bb_prof);

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
