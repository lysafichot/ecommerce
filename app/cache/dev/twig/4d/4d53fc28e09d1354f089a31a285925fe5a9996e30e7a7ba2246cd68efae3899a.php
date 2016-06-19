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
        $__internal_cab48ae27f3a2fb68bc222630afe40408a9c4d8bf02e951be48e829e3defb6c8 = $this->env->getExtension("native_profiler");
        $__internal_cab48ae27f3a2fb68bc222630afe40408a9c4d8bf02e951be48e829e3defb6c8->enter($__internal_cab48ae27f3a2fb68bc222630afe40408a9c4d8bf02e951be48e829e3defb6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cab48ae27f3a2fb68bc222630afe40408a9c4d8bf02e951be48e829e3defb6c8->leave($__internal_cab48ae27f3a2fb68bc222630afe40408a9c4d8bf02e951be48e829e3defb6c8_prof);

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
