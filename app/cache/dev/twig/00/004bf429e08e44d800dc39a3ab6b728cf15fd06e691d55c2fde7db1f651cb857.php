<?php

/* AdminBundle:Category:categories.html.twig */
class __TwigTemplate_47420ed15b560d0ae091d5656ed55e69699f19f89597ccaa132d6daa01b6f095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Category:categories.html.twig", 1);
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
        $__internal_b2105ad77e302f7bd03d47a9efa39f7671b14cb050ef5672841ba67db15ba824 = $this->env->getExtension("native_profiler");
        $__internal_b2105ad77e302f7bd03d47a9efa39f7671b14cb050ef5672841ba67db15ba824->enter($__internal_b2105ad77e302f7bd03d47a9efa39f7671b14cb050ef5672841ba67db15ba824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2105ad77e302f7bd03d47a9efa39f7671b14cb050ef5672841ba67db15ba824->leave($__internal_b2105ad77e302f7bd03d47a9efa39f7671b14cb050ef5672841ba67db15ba824_prof);

    }

    // line 2
    public function block_board($context, array $blocks = array())
    {
        $__internal_8ac989e791958628f33e595da85fe075bf91d78ccc280b3832a2ca7b430c9557 = $this->env->getExtension("native_profiler");
        $__internal_8ac989e791958628f33e595da85fe075bf91d78ccc280b3832a2ca7b430c9557->enter($__internal_8ac989e791958628f33e595da85fe075bf91d78ccc280b3832a2ca7b430c9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
            $this->loadTemplate("AdminBundle:Category:category.html.twig", "AdminBundle:Category:categories.html.twig", 18)->display($context);
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
        
        $__internal_8ac989e791958628f33e595da85fe075bf91d78ccc280b3832a2ca7b430c9557->leave($__internal_8ac989e791958628f33e595da85fe075bf91d78ccc280b3832a2ca7b430c9557_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:categories.html.twig";
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
