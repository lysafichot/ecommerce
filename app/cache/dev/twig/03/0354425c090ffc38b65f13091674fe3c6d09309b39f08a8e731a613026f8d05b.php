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
        $__internal_374ad94626e60c78ab759e7fb7d723c9b4d48434fd5e406226d5fc12b72805b2 = $this->env->getExtension("native_profiler");
        $__internal_374ad94626e60c78ab759e7fb7d723c9b4d48434fd5e406226d5fc12b72805b2->enter($__internal_374ad94626e60c78ab759e7fb7d723c9b4d48434fd5e406226d5fc12b72805b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_374ad94626e60c78ab759e7fb7d723c9b4d48434fd5e406226d5fc12b72805b2->leave($__internal_374ad94626e60c78ab759e7fb7d723c9b4d48434fd5e406226d5fc12b72805b2_prof);

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
