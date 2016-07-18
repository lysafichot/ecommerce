<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6335cae077dbb06b3d4ab17cd775ff46731494b87644ea7fd9b01befd5c81a11 extends Twig_Template
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
        $__internal_f0fcbbe664bf638b326ad18142b11cd8d086c7c11628d4f41484c70b83e42db3 = $this->env->getExtension("native_profiler");
        $__internal_f0fcbbe664bf638b326ad18142b11cd8d086c7c11628d4f41484c70b83e42db3->enter($__internal_f0fcbbe664bf638b326ad18142b11cd8d086c7c11628d4f41484c70b83e42db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f0fcbbe664bf638b326ad18142b11cd8d086c7c11628d4f41484c70b83e42db3->leave($__internal_f0fcbbe664bf638b326ad18142b11cd8d086c7c11628d4f41484c70b83e42db3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
