<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0f70a762025a7c41dc0447cba9e9b1a94bc03f5c6978d429ba266a37a89f5f0f extends Twig_Template
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
        $__internal_d35551689a8693c3bd126f4f26f665a705a48276379e8817b6853bd44aa5c2a9 = $this->env->getExtension("native_profiler");
        $__internal_d35551689a8693c3bd126f4f26f665a705a48276379e8817b6853bd44aa5c2a9->enter($__internal_d35551689a8693c3bd126f4f26f665a705a48276379e8817b6853bd44aa5c2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d35551689a8693c3bd126f4f26f665a705a48276379e8817b6853bd44aa5c2a9->leave($__internal_d35551689a8693c3bd126f4f26f665a705a48276379e8817b6853bd44aa5c2a9_prof);

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
