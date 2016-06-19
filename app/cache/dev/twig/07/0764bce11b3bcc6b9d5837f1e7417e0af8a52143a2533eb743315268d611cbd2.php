<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_618c7876661791aef7c9cc6be2bccc3963c84b842705ce68b06d1421312fda0b extends Twig_Template
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
        $__internal_7a8703f343da29dbc76572ce804513e049b45ff87b4edcd71574246bd103054a = $this->env->getExtension("native_profiler");
        $__internal_7a8703f343da29dbc76572ce804513e049b45ff87b4edcd71574246bd103054a->enter($__internal_7a8703f343da29dbc76572ce804513e049b45ff87b4edcd71574246bd103054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7a8703f343da29dbc76572ce804513e049b45ff87b4edcd71574246bd103054a->leave($__internal_7a8703f343da29dbc76572ce804513e049b45ff87b4edcd71574246bd103054a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
