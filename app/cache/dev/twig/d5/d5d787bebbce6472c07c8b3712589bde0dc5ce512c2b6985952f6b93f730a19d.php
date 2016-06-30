<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_35f18d0b302653361a12adeec1b34e77c1cddf3020f73cae58a92a1b7a290fad extends Twig_Template
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
        $__internal_43d176f7ebc6e39ef7a1a731473945bdd204b703c89eab48c6c25cdfda8c9871 = $this->env->getExtension("native_profiler");
        $__internal_43d176f7ebc6e39ef7a1a731473945bdd204b703c89eab48c6c25cdfda8c9871->enter($__internal_43d176f7ebc6e39ef7a1a731473945bdd204b703c89eab48c6c25cdfda8c9871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_43d176f7ebc6e39ef7a1a731473945bdd204b703c89eab48c6c25cdfda8c9871->leave($__internal_43d176f7ebc6e39ef7a1a731473945bdd204b703c89eab48c6c25cdfda8c9871_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
