<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_682d6e7da115e33baa1b1b9aab0f5907857501ac69eb2b18db10bfa319afd54e extends Twig_Template
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
        $__internal_3a98e0e20533f8a4233e664136cfa34f40ec953db395645142627f272b895af6 = $this->env->getExtension("native_profiler");
        $__internal_3a98e0e20533f8a4233e664136cfa34f40ec953db395645142627f272b895af6->enter($__internal_3a98e0e20533f8a4233e664136cfa34f40ec953db395645142627f272b895af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3a98e0e20533f8a4233e664136cfa34f40ec953db395645142627f272b895af6->leave($__internal_3a98e0e20533f8a4233e664136cfa34f40ec953db395645142627f272b895af6_prof);

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
