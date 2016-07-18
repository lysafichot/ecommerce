<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_06d24c0767c7084ee8f14230c0038ed0652a38dd6d726b8b1a78f067400d644c extends Twig_Template
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
        $__internal_39bb58608f96e0cba4c252c49f882838213527ca4269fb3b57cd5ebb2a075ef5 = $this->env->getExtension("native_profiler");
        $__internal_39bb58608f96e0cba4c252c49f882838213527ca4269fb3b57cd5ebb2a075ef5->enter($__internal_39bb58608f96e0cba4c252c49f882838213527ca4269fb3b57cd5ebb2a075ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_39bb58608f96e0cba4c252c49f882838213527ca4269fb3b57cd5ebb2a075ef5->leave($__internal_39bb58608f96e0cba4c252c49f882838213527ca4269fb3b57cd5ebb2a075ef5_prof);

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
