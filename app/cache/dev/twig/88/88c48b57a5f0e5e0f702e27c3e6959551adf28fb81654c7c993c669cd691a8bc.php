<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ecb4a255a58d5e133cf4e2e1ea77bd3c3597a671779b289cfb7965f5a8aa3b92 extends Twig_Template
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
        $__internal_a0b89f40f338c270af88cf76292c028fc3eb5f21a96c7bb5ae6828308924900b = $this->env->getExtension("native_profiler");
        $__internal_a0b89f40f338c270af88cf76292c028fc3eb5f21a96c7bb5ae6828308924900b->enter($__internal_a0b89f40f338c270af88cf76292c028fc3eb5f21a96c7bb5ae6828308924900b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a0b89f40f338c270af88cf76292c028fc3eb5f21a96c7bb5ae6828308924900b->leave($__internal_a0b89f40f338c270af88cf76292c028fc3eb5f21a96c7bb5ae6828308924900b_prof);

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
