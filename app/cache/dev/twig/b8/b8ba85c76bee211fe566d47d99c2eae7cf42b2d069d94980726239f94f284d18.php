<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0a7af5f97d1daa94d2da8f62b9c8227285c444513be7c340a7becc06c5a2169e extends Twig_Template
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
        $__internal_df4144ece3819c2ab1aafb7336d004f4e233c7a9cc96801d9add599ea8204dee = $this->env->getExtension("native_profiler");
        $__internal_df4144ece3819c2ab1aafb7336d004f4e233c7a9cc96801d9add599ea8204dee->enter($__internal_df4144ece3819c2ab1aafb7336d004f4e233c7a9cc96801d9add599ea8204dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_df4144ece3819c2ab1aafb7336d004f4e233c7a9cc96801d9add599ea8204dee->leave($__internal_df4144ece3819c2ab1aafb7336d004f4e233c7a9cc96801d9add599ea8204dee_prof);

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
