<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_62e8f2864009082ae834b378433ea13dd09ab8f5f8a3876048ade81e96ff67be extends Twig_Template
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
        $__internal_be2cba95872fb33fa6e6b3ab6227e72ee1ef23e1819a8409cde4b2048fe2044b = $this->env->getExtension("native_profiler");
        $__internal_be2cba95872fb33fa6e6b3ab6227e72ee1ef23e1819a8409cde4b2048fe2044b->enter($__internal_be2cba95872fb33fa6e6b3ab6227e72ee1ef23e1819a8409cde4b2048fe2044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_be2cba95872fb33fa6e6b3ab6227e72ee1ef23e1819a8409cde4b2048fe2044b->leave($__internal_be2cba95872fb33fa6e6b3ab6227e72ee1ef23e1819a8409cde4b2048fe2044b_prof);

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
