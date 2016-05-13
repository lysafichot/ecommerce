<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a8c486e7898f1804b2d1f9f32905719b478d200bc7b19a4965c9acc2d5724039 extends Twig_Template
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
        $__internal_8170c4ac6eb0d393cd0c853862401113255d5d88ef21d9e48f0a29606b53b284 = $this->env->getExtension("native_profiler");
        $__internal_8170c4ac6eb0d393cd0c853862401113255d5d88ef21d9e48f0a29606b53b284->enter($__internal_8170c4ac6eb0d393cd0c853862401113255d5d88ef21d9e48f0a29606b53b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8170c4ac6eb0d393cd0c853862401113255d5d88ef21d9e48f0a29606b53b284->leave($__internal_8170c4ac6eb0d393cd0c853862401113255d5d88ef21d9e48f0a29606b53b284_prof);

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
