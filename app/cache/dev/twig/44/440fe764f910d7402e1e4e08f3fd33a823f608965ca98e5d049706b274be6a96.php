<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c495fa08eca1df3da5596aef3b32e4784be1e9ac65dff5d3236fed2f739f2c40 extends Twig_Template
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
        $__internal_8fbd1c471a039d6909995bc0e804ed522552ccb8307361f997dcb63d29423251 = $this->env->getExtension("native_profiler");
        $__internal_8fbd1c471a039d6909995bc0e804ed522552ccb8307361f997dcb63d29423251->enter($__internal_8fbd1c471a039d6909995bc0e804ed522552ccb8307361f997dcb63d29423251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8fbd1c471a039d6909995bc0e804ed522552ccb8307361f997dcb63d29423251->leave($__internal_8fbd1c471a039d6909995bc0e804ed522552ccb8307361f997dcb63d29423251_prof);

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
