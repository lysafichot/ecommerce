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
        $__internal_baf85280541c0b7211399426ece430b5057c653d6229568306e056d62227da55 = $this->env->getExtension("native_profiler");
        $__internal_baf85280541c0b7211399426ece430b5057c653d6229568306e056d62227da55->enter($__internal_baf85280541c0b7211399426ece430b5057c653d6229568306e056d62227da55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_baf85280541c0b7211399426ece430b5057c653d6229568306e056d62227da55->leave($__internal_baf85280541c0b7211399426ece430b5057c653d6229568306e056d62227da55_prof);

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
