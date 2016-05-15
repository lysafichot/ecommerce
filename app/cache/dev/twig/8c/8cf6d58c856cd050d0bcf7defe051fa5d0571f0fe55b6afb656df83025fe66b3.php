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
        $__internal_0be369dafec25b6921f7e99c8df88e5f35928728822bb2a06556cc8d342a763a = $this->env->getExtension("native_profiler");
        $__internal_0be369dafec25b6921f7e99c8df88e5f35928728822bb2a06556cc8d342a763a->enter($__internal_0be369dafec25b6921f7e99c8df88e5f35928728822bb2a06556cc8d342a763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0be369dafec25b6921f7e99c8df88e5f35928728822bb2a06556cc8d342a763a->leave($__internal_0be369dafec25b6921f7e99c8df88e5f35928728822bb2a06556cc8d342a763a_prof);

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
