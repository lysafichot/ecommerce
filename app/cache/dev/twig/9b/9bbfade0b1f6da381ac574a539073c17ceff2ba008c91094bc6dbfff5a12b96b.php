<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_945016917391c385917399c4eb7a8b2eaa51b4a92556968f530745d9c0b09fe1 extends Twig_Template
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
        $__internal_9802aa8fddc616c52860f23f05a99d05bd172abd5b227319eb2026267044c7a1 = $this->env->getExtension("native_profiler");
        $__internal_9802aa8fddc616c52860f23f05a99d05bd172abd5b227319eb2026267044c7a1->enter($__internal_9802aa8fddc616c52860f23f05a99d05bd172abd5b227319eb2026267044c7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9802aa8fddc616c52860f23f05a99d05bd172abd5b227319eb2026267044c7a1->leave($__internal_9802aa8fddc616c52860f23f05a99d05bd172abd5b227319eb2026267044c7a1_prof);

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
