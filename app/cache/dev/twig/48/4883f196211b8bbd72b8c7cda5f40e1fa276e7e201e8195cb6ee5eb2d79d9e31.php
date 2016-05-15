<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2d9694522d6fb72b0055787ccee49235226d5d67f7bae21ee2961a4811a32e9a extends Twig_Template
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
        $__internal_d9d88fa2f1bec7338492f62653e364aa2465b94092adc982ffe2bf2459d6e092 = $this->env->getExtension("native_profiler");
        $__internal_d9d88fa2f1bec7338492f62653e364aa2465b94092adc982ffe2bf2459d6e092->enter($__internal_d9d88fa2f1bec7338492f62653e364aa2465b94092adc982ffe2bf2459d6e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d9d88fa2f1bec7338492f62653e364aa2465b94092adc982ffe2bf2459d6e092->leave($__internal_d9d88fa2f1bec7338492f62653e364aa2465b94092adc982ffe2bf2459d6e092_prof);

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
