<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4720e64891a1d62f09d8e3ad92c9033a1705566480711753ceb6965de0ad845c extends Twig_Template
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
        $__internal_32d211192d1698da682338083d7e6418839789df89fe4a65ebe46a285752956c = $this->env->getExtension("native_profiler");
        $__internal_32d211192d1698da682338083d7e6418839789df89fe4a65ebe46a285752956c->enter($__internal_32d211192d1698da682338083d7e6418839789df89fe4a65ebe46a285752956c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32d211192d1698da682338083d7e6418839789df89fe4a65ebe46a285752956c->leave($__internal_32d211192d1698da682338083d7e6418839789df89fe4a65ebe46a285752956c_prof);

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
