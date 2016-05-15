<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_77cdc77c1a767b97402c00853afb30bfd233738bb355b51ec7c0ad05ff953a78 extends Twig_Template
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
        $__internal_c69bf696193d7bb54882cd76ed9fd8f6f11e971a6481a4e0f24eb1dba4d427e8 = $this->env->getExtension("native_profiler");
        $__internal_c69bf696193d7bb54882cd76ed9fd8f6f11e971a6481a4e0f24eb1dba4d427e8->enter($__internal_c69bf696193d7bb54882cd76ed9fd8f6f11e971a6481a4e0f24eb1dba4d427e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c69bf696193d7bb54882cd76ed9fd8f6f11e971a6481a4e0f24eb1dba4d427e8->leave($__internal_c69bf696193d7bb54882cd76ed9fd8f6f11e971a6481a4e0f24eb1dba4d427e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
