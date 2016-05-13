<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7ca2badc93b693f90bdec707720c1e9613e30376fa9d2a168bcdce535372a22e extends Twig_Template
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
        $__internal_fa7a36a8b9a675a6428913ff19334e28fa46f881b02c6cd90694df5757f93ccf = $this->env->getExtension("native_profiler");
        $__internal_fa7a36a8b9a675a6428913ff19334e28fa46f881b02c6cd90694df5757f93ccf->enter($__internal_fa7a36a8b9a675a6428913ff19334e28fa46f881b02c6cd90694df5757f93ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fa7a36a8b9a675a6428913ff19334e28fa46f881b02c6cd90694df5757f93ccf->leave($__internal_fa7a36a8b9a675a6428913ff19334e28fa46f881b02c6cd90694df5757f93ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
