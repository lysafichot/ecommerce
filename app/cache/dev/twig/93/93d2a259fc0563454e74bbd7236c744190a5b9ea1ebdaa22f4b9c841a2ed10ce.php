<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_67020d7fc8ce3ad508833653f73f039c5df13e0bc235d19b9dee404084156412 extends Twig_Template
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
        $__internal_b44e646fed7f25d5a68e1c8a6de0a4cadbff8573af50e443df93a7e11700cc7f = $this->env->getExtension("native_profiler");
        $__internal_b44e646fed7f25d5a68e1c8a6de0a4cadbff8573af50e443df93a7e11700cc7f->enter($__internal_b44e646fed7f25d5a68e1c8a6de0a4cadbff8573af50e443df93a7e11700cc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b44e646fed7f25d5a68e1c8a6de0a4cadbff8573af50e443df93a7e11700cc7f->leave($__internal_b44e646fed7f25d5a68e1c8a6de0a4cadbff8573af50e443df93a7e11700cc7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
