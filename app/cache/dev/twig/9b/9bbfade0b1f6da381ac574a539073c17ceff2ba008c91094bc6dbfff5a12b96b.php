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
        $__internal_69b6f65f5dc250880f76476a77a594943b9373abd3eed3890d3b63e0023de771 = $this->env->getExtension("native_profiler");
        $__internal_69b6f65f5dc250880f76476a77a594943b9373abd3eed3890d3b63e0023de771->enter($__internal_69b6f65f5dc250880f76476a77a594943b9373abd3eed3890d3b63e0023de771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_69b6f65f5dc250880f76476a77a594943b9373abd3eed3890d3b63e0023de771->leave($__internal_69b6f65f5dc250880f76476a77a594943b9373abd3eed3890d3b63e0023de771_prof);

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
