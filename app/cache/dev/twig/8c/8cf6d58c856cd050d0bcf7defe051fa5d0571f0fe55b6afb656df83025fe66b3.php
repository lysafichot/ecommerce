<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_04345647b7c838d49f48b324813306ae521c374b7e6613a76f9f2232bc90b49e extends Twig_Template
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
        $__internal_77d1c243c8c543c8394c61940721692d9b7e3062a9e32f864b9a89899abbfb44 = $this->env->getExtension("native_profiler");
        $__internal_77d1c243c8c543c8394c61940721692d9b7e3062a9e32f864b9a89899abbfb44->enter($__internal_77d1c243c8c543c8394c61940721692d9b7e3062a9e32f864b9a89899abbfb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_77d1c243c8c543c8394c61940721692d9b7e3062a9e32f864b9a89899abbfb44->leave($__internal_77d1c243c8c543c8394c61940721692d9b7e3062a9e32f864b9a89899abbfb44_prof);

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
