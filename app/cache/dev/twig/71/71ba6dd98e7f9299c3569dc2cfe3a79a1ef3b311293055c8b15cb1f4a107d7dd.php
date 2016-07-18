<?php

/* @Admin/Category/categories.html.twig */
class __TwigTemplate_e4ee53162b6214bde2c6689e4e3972fd90e0c531fa3965a45fdd4108af54bbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Category/categories.html.twig", 1);
        $this->blocks = array(
            'board' => array($this, 'block_board'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2aa2f4b7832ced4001b8fcff12506ede61497d06bf55e1c79baa14c50c8c1f8 = $this->env->getExtension("native_profiler");
        $__internal_d2aa2f4b7832ced4001b8fcff12506ede61497d06bf55e1c79baa14c50c8c1f8->enter($__internal_d2aa2f4b7832ced4001b8fcff12506ede61497d06bf55e1c79baa14c50c8c1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Category/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2aa2f4b7832ced4001b8fcff12506ede61497d06bf55e1c79baa14c50c8c1f8->leave($__internal_d2aa2f4b7832ced4001b8fcff12506ede61497d06bf55e1c79baa14c50c8c1f8_prof);

    }

    // line 2
    public function block_board($context, array $blocks = array())
    {
        $__internal_a0f39ae53c29a8b293c991b77ffe43624d0305c457a3cf30e144acf7f25a6bbb = $this->env->getExtension("native_profiler");
        $__internal_a0f39ae53c29a8b293c991b77ffe43624d0305c457a3cf30e144acf7f25a6bbb->enter($__internal_a0f39ae53c29a8b293c991b77ffe43624d0305c457a3cf30e144acf7f25a6bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 3
        echo "
<div class='contents'>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-category")));
        echo "

  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Nom de la categorie", "attr" => array("class" => "field_category")));
        echo "
  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medias", array()), "vars", array()), "prototype", array()), "files", array()), 'row', array("label" => "Media", "attr" => array("class" => "field_category")));
        echo "
  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preview", array()), 'widget', array("attr" => array("class" => "field_category")));
        echo "

  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medias", array()), 'widget');
        echo "
    <button type=\"submit\">Ajouter</button>
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <div class='categories'>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "   ";
            $this->loadTemplate("AdminBundle:Category:category.html.twig", "@Admin/Category/categories.html.twig", 18)->display($context);
            // line 19
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</div>
</div>
";
        
        $__internal_a0f39ae53c29a8b293c991b77ffe43624d0305c457a3cf30e144acf7f25a6bbb->leave($__internal_a0f39ae53c29a8b293c991b77ffe43624d0305c457a3cf30e144acf7f25a6bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Category/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  94 => 19,  91 => 18,  74 => 17,  68 => 14,  63 => 12,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/*      {% block board %}*/
/* */
/* <div class='contents'>*/
/* */
/* {{ form_start(form, {'attr': {'class': 'form-add-category'}}) }}*/
/* */
/*   {{ form_row(form.name, {'label' : "Nom de la categorie", 'attr': {'class': 'field_category'}}) }}*/
/*   {{ form_row(form.medias.vars.prototype.files, {'label' : "Media", 'attr': {'class': 'field_category'}}) }}*/
/*   {{ form_widget(form.preview, {'attr': {'class': 'field_category'}})}}*/
/* */
/*   {{ form_widget(form.medias) }}*/
/*     <button type="submit">Ajouter</button>*/
/*     {{ form_end(form) }}*/
/* */
/*     <div class='categories'>*/
/*   {% for category in categories %}*/
/*    {% include("AdminBundle:Category:category.html.twig" ) %}*/
/*   {% endfor %}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
