<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4462d1b050f34d308b6855db146cd1d3b7e7a56a3829e73a2a5e02973a462c8b extends Twig_Template
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
        $__internal_250a4f260b5038128019bd5b7fb33ad6781793297e31062a6d9e08fc415df44a = $this->env->getExtension("native_profiler");
        $__internal_250a4f260b5038128019bd5b7fb33ad6781793297e31062a6d9e08fc415df44a->enter($__internal_250a4f260b5038128019bd5b7fb33ad6781793297e31062a6d9e08fc415df44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_250a4f260b5038128019bd5b7fb33ad6781793297e31062a6d9e08fc415df44a->leave($__internal_250a4f260b5038128019bd5b7fb33ad6781793297e31062a6d9e08fc415df44a_prof);

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
