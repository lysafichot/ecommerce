<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3e001d85ba1c87de160b66a898cd025bd90e1ead1139e02ec3d7e664260ed889 extends Twig_Template
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
        $__internal_6909b6131bcafaba876eb1f3deed5a5671874ba1e2a6072dddf14079427769e9 = $this->env->getExtension("native_profiler");
        $__internal_6909b6131bcafaba876eb1f3deed5a5671874ba1e2a6072dddf14079427769e9->enter($__internal_6909b6131bcafaba876eb1f3deed5a5671874ba1e2a6072dddf14079427769e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6909b6131bcafaba876eb1f3deed5a5671874ba1e2a6072dddf14079427769e9->leave($__internal_6909b6131bcafaba876eb1f3deed5a5671874ba1e2a6072dddf14079427769e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
