<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d46d0dd0640b134bd1c63840fbe0cc9d61d816f2396396ec0c2a4c21d45d37d5 extends Twig_Template
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
        $__internal_1684b605a2d9d811aeaca014c63518f2f17c4c5bfc66805a17a91819650082c9 = $this->env->getExtension("native_profiler");
        $__internal_1684b605a2d9d811aeaca014c63518f2f17c4c5bfc66805a17a91819650082c9->enter($__internal_1684b605a2d9d811aeaca014c63518f2f17c4c5bfc66805a17a91819650082c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1684b605a2d9d811aeaca014c63518f2f17c4c5bfc66805a17a91819650082c9->leave($__internal_1684b605a2d9d811aeaca014c63518f2f17c4c5bfc66805a17a91819650082c9_prof);

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
