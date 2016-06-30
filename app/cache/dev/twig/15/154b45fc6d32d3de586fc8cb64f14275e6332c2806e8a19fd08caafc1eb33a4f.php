<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_58bb6b6e1273fc74f3c233ece3434118a12530fb054d98254c3da5eae2d2475c extends Twig_Template
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
        $__internal_d749a58505a39cb6f4181b89b70b52c77b69c8e7d5930303f23d2226262a8c56 = $this->env->getExtension("native_profiler");
        $__internal_d749a58505a39cb6f4181b89b70b52c77b69c8e7d5930303f23d2226262a8c56->enter($__internal_d749a58505a39cb6f4181b89b70b52c77b69c8e7d5930303f23d2226262a8c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d749a58505a39cb6f4181b89b70b52c77b69c8e7d5930303f23d2226262a8c56->leave($__internal_d749a58505a39cb6f4181b89b70b52c77b69c8e7d5930303f23d2226262a8c56_prof);

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
