<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1e0392b8391411a9e727629d8a933c88c44434bc2a6d7de1309811039e48ceb1 extends Twig_Template
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
        $__internal_39d9dccbc407a013b296f56e2161c3c2bdd02b478f1ed711dd6bf6047d31c898 = $this->env->getExtension("native_profiler");
        $__internal_39d9dccbc407a013b296f56e2161c3c2bdd02b478f1ed711dd6bf6047d31c898->enter($__internal_39d9dccbc407a013b296f56e2161c3c2bdd02b478f1ed711dd6bf6047d31c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_39d9dccbc407a013b296f56e2161c3c2bdd02b478f1ed711dd6bf6047d31c898->leave($__internal_39d9dccbc407a013b296f56e2161c3c2bdd02b478f1ed711dd6bf6047d31c898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
