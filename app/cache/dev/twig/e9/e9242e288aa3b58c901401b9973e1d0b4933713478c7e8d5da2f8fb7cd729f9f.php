<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dbc137bc4250d1d197ebaa7f605b06098d4b1bb844d79c6ef2662a9bb6ebd6d0 extends Twig_Template
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
        $__internal_68f280a3a39bf57094326d9c8137604b66925b99b94011366573ee955498d493 = $this->env->getExtension("native_profiler");
        $__internal_68f280a3a39bf57094326d9c8137604b66925b99b94011366573ee955498d493->enter($__internal_68f280a3a39bf57094326d9c8137604b66925b99b94011366573ee955498d493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_68f280a3a39bf57094326d9c8137604b66925b99b94011366573ee955498d493->leave($__internal_68f280a3a39bf57094326d9c8137604b66925b99b94011366573ee955498d493_prof);

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
