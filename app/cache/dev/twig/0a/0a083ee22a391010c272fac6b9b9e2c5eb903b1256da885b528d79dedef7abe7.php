<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_61b82224e2ba105d07ad96ca591cf939ccc6ada429c220e5aee9fb9111176d86 extends Twig_Template
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
        $__internal_a5ebc3979fd65acd0227afc10cfaf22f6ac782f5fe5fe24b810f8904d80b25bf = $this->env->getExtension("native_profiler");
        $__internal_a5ebc3979fd65acd0227afc10cfaf22f6ac782f5fe5fe24b810f8904d80b25bf->enter($__internal_a5ebc3979fd65acd0227afc10cfaf22f6ac782f5fe5fe24b810f8904d80b25bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a5ebc3979fd65acd0227afc10cfaf22f6ac782f5fe5fe24b810f8904d80b25bf->leave($__internal_a5ebc3979fd65acd0227afc10cfaf22f6ac782f5fe5fe24b810f8904d80b25bf_prof);

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
