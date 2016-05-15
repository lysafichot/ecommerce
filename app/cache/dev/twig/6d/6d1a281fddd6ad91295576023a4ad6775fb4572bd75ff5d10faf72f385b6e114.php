<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d62131331b7cc364cca4389571cb6526740630628306aee368b701fb3ec910c extends Twig_Template
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
        $__internal_b89d3bf998f0a339ff4ff947241a3cb0c2d9e0c94b83b00bb14af236bbcceee8 = $this->env->getExtension("native_profiler");
        $__internal_b89d3bf998f0a339ff4ff947241a3cb0c2d9e0c94b83b00bb14af236bbcceee8->enter($__internal_b89d3bf998f0a339ff4ff947241a3cb0c2d9e0c94b83b00bb14af236bbcceee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b89d3bf998f0a339ff4ff947241a3cb0c2d9e0c94b83b00bb14af236bbcceee8->leave($__internal_b89d3bf998f0a339ff4ff947241a3cb0c2d9e0c94b83b00bb14af236bbcceee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
