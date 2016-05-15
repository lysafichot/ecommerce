<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6c021db5a05f86420a12d940cd734f6a60fda2070fa855b78306c4fdc4fa2c01 extends Twig_Template
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
        $__internal_8733a41415924221c198049adabf977e36707afd13a42989c54c233c9face9d3 = $this->env->getExtension("native_profiler");
        $__internal_8733a41415924221c198049adabf977e36707afd13a42989c54c233c9face9d3->enter($__internal_8733a41415924221c198049adabf977e36707afd13a42989c54c233c9face9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8733a41415924221c198049adabf977e36707afd13a42989c54c233c9face9d3->leave($__internal_8733a41415924221c198049adabf977e36707afd13a42989c54c233c9face9d3_prof);

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
