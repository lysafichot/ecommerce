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
        $__internal_26f76de0bb6f479f8bd1c4bf7df41573b893e6841ba9c5d5a784dbb793d91dfe = $this->env->getExtension("native_profiler");
        $__internal_26f76de0bb6f479f8bd1c4bf7df41573b893e6841ba9c5d5a784dbb793d91dfe->enter($__internal_26f76de0bb6f479f8bd1c4bf7df41573b893e6841ba9c5d5a784dbb793d91dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_26f76de0bb6f479f8bd1c4bf7df41573b893e6841ba9c5d5a784dbb793d91dfe->leave($__internal_26f76de0bb6f479f8bd1c4bf7df41573b893e6841ba9c5d5a784dbb793d91dfe_prof);

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
