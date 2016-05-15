<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b55d9092ff2ff5b333bf1f80cd9c32bd5e54ccf168a4c6a739fe879b41170cce extends Twig_Template
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
        $__internal_174df102e6b564a2b1653654f9401612c4e9f52d2ca852c1b2bd1e5e034686ce = $this->env->getExtension("native_profiler");
        $__internal_174df102e6b564a2b1653654f9401612c4e9f52d2ca852c1b2bd1e5e034686ce->enter($__internal_174df102e6b564a2b1653654f9401612c4e9f52d2ca852c1b2bd1e5e034686ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_174df102e6b564a2b1653654f9401612c4e9f52d2ca852c1b2bd1e5e034686ce->leave($__internal_174df102e6b564a2b1653654f9401612c4e9f52d2ca852c1b2bd1e5e034686ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
