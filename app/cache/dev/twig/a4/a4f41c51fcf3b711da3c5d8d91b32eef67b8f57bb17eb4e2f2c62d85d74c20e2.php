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
        $__internal_ed251e204887542ecb6e4156e414cd43e8a795d92d046ced6b545ef39b049ad2 = $this->env->getExtension("native_profiler");
        $__internal_ed251e204887542ecb6e4156e414cd43e8a795d92d046ced6b545ef39b049ad2->enter($__internal_ed251e204887542ecb6e4156e414cd43e8a795d92d046ced6b545ef39b049ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ed251e204887542ecb6e4156e414cd43e8a795d92d046ced6b545ef39b049ad2->leave($__internal_ed251e204887542ecb6e4156e414cd43e8a795d92d046ced6b545ef39b049ad2_prof);

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
