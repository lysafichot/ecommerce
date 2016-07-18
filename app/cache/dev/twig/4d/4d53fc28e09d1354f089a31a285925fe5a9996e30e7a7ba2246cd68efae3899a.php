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
        $__internal_c507e96b07a2cdf5a1be7359834b39b7d8a2a722d32c421dba284758e763e9b0 = $this->env->getExtension("native_profiler");
        $__internal_c507e96b07a2cdf5a1be7359834b39b7d8a2a722d32c421dba284758e763e9b0->enter($__internal_c507e96b07a2cdf5a1be7359834b39b7d8a2a722d32c421dba284758e763e9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c507e96b07a2cdf5a1be7359834b39b7d8a2a722d32c421dba284758e763e9b0->leave($__internal_c507e96b07a2cdf5a1be7359834b39b7d8a2a722d32c421dba284758e763e9b0_prof);

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
