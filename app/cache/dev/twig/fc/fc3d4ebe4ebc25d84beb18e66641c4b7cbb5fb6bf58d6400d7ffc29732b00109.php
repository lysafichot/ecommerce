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
        $__internal_5bb5357f126c59ea790ad70913e5e47d6b7605b3655ebc7091632b024bdec844 = $this->env->getExtension("native_profiler");
        $__internal_5bb5357f126c59ea790ad70913e5e47d6b7605b3655ebc7091632b024bdec844->enter($__internal_5bb5357f126c59ea790ad70913e5e47d6b7605b3655ebc7091632b024bdec844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5bb5357f126c59ea790ad70913e5e47d6b7605b3655ebc7091632b024bdec844->leave($__internal_5bb5357f126c59ea790ad70913e5e47d6b7605b3655ebc7091632b024bdec844_prof);

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
