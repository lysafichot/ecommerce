<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f908cbfe4eafffd0d682de8dbec6ad590240178a30e66bd2113e341b047734b8 extends Twig_Template
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
        $__internal_ec2cc595dd6a63799579207c3fd4157d54611bef79023a4f19fb4f1e95028783 = $this->env->getExtension("native_profiler");
        $__internal_ec2cc595dd6a63799579207c3fd4157d54611bef79023a4f19fb4f1e95028783->enter($__internal_ec2cc595dd6a63799579207c3fd4157d54611bef79023a4f19fb4f1e95028783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ec2cc595dd6a63799579207c3fd4157d54611bef79023a4f19fb4f1e95028783->leave($__internal_ec2cc595dd6a63799579207c3fd4157d54611bef79023a4f19fb4f1e95028783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
