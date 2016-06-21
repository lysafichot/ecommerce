<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d46d0dd0640b134bd1c63840fbe0cc9d61d816f2396396ec0c2a4c21d45d37d5 extends Twig_Template
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
        $__internal_976f795adc28ba1fe65bc12182b767cbe351faa1631bbe9b2b3e700a93befc23 = $this->env->getExtension("native_profiler");
        $__internal_976f795adc28ba1fe65bc12182b767cbe351faa1631bbe9b2b3e700a93befc23->enter($__internal_976f795adc28ba1fe65bc12182b767cbe351faa1631bbe9b2b3e700a93befc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_976f795adc28ba1fe65bc12182b767cbe351faa1631bbe9b2b3e700a93befc23->leave($__internal_976f795adc28ba1fe65bc12182b767cbe351faa1631bbe9b2b3e700a93befc23_prof);

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
