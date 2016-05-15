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
        $__internal_09d4f58f36685711f8ca707323794b302fb78c4d606f9b77814a322a778ab964 = $this->env->getExtension("native_profiler");
        $__internal_09d4f58f36685711f8ca707323794b302fb78c4d606f9b77814a322a778ab964->enter($__internal_09d4f58f36685711f8ca707323794b302fb78c4d606f9b77814a322a778ab964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_09d4f58f36685711f8ca707323794b302fb78c4d606f9b77814a322a778ab964->leave($__internal_09d4f58f36685711f8ca707323794b302fb78c4d606f9b77814a322a778ab964_prof);

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
