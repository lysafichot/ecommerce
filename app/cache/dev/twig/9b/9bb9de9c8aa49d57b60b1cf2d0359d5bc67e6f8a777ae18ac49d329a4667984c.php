<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_edbe4837ccc1e16cef18e795e7fe7b8662f499ce616ef0bbd5877105eafcb603 extends Twig_Template
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
        $__internal_3837e98e4c004bcf9489a22e7f2c2e1f1fd3e36bcbf3e2a6aafd36c7102153b7 = $this->env->getExtension("native_profiler");
        $__internal_3837e98e4c004bcf9489a22e7f2c2e1f1fd3e36bcbf3e2a6aafd36c7102153b7->enter($__internal_3837e98e4c004bcf9489a22e7f2c2e1f1fd3e36bcbf3e2a6aafd36c7102153b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3837e98e4c004bcf9489a22e7f2c2e1f1fd3e36bcbf3e2a6aafd36c7102153b7->leave($__internal_3837e98e4c004bcf9489a22e7f2c2e1f1fd3e36bcbf3e2a6aafd36c7102153b7_prof);

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
