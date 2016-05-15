<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_000c6d9548fb8807e627dfef71b259c5b7f793f45e98d275942f613566d6abd0 extends Twig_Template
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
        $__internal_8c4de270d70b7f8a82202b0f5f1a9b480ce221888304f02bf01ece4b45869b36 = $this->env->getExtension("native_profiler");
        $__internal_8c4de270d70b7f8a82202b0f5f1a9b480ce221888304f02bf01ece4b45869b36->enter($__internal_8c4de270d70b7f8a82202b0f5f1a9b480ce221888304f02bf01ece4b45869b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8c4de270d70b7f8a82202b0f5f1a9b480ce221888304f02bf01ece4b45869b36->leave($__internal_8c4de270d70b7f8a82202b0f5f1a9b480ce221888304f02bf01ece4b45869b36_prof);

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
