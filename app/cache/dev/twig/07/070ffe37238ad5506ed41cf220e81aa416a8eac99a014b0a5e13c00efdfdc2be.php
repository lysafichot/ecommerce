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
        $__internal_a74f90d4692eb68449d6db70c1f90fd1139861110710cdc87bae37998c7f7c55 = $this->env->getExtension("native_profiler");
        $__internal_a74f90d4692eb68449d6db70c1f90fd1139861110710cdc87bae37998c7f7c55->enter($__internal_a74f90d4692eb68449d6db70c1f90fd1139861110710cdc87bae37998c7f7c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a74f90d4692eb68449d6db70c1f90fd1139861110710cdc87bae37998c7f7c55->leave($__internal_a74f90d4692eb68449d6db70c1f90fd1139861110710cdc87bae37998c7f7c55_prof);

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
