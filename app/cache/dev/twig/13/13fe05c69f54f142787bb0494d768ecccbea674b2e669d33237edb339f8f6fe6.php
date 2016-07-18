<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_df310b1135242c76b2debab3e70c8f6a4a4343d04a32f7cbdcd5834d277bec0b extends Twig_Template
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
        $__internal_cab0a7575c2b673b64fccc799ad2ed7a9171f63c9d51d38f79d95ed0e8e0155f = $this->env->getExtension("native_profiler");
        $__internal_cab0a7575c2b673b64fccc799ad2ed7a9171f63c9d51d38f79d95ed0e8e0155f->enter($__internal_cab0a7575c2b673b64fccc799ad2ed7a9171f63c9d51d38f79d95ed0e8e0155f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cab0a7575c2b673b64fccc799ad2ed7a9171f63c9d51d38f79d95ed0e8e0155f->leave($__internal_cab0a7575c2b673b64fccc799ad2ed7a9171f63c9d51d38f79d95ed0e8e0155f_prof);

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
