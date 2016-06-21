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
        $__internal_d65d96b219cc9589a14e8c87ebaf646162f4615365fcba45137f1a69da57cdc7 = $this->env->getExtension("native_profiler");
        $__internal_d65d96b219cc9589a14e8c87ebaf646162f4615365fcba45137f1a69da57cdc7->enter($__internal_d65d96b219cc9589a14e8c87ebaf646162f4615365fcba45137f1a69da57cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65d96b219cc9589a14e8c87ebaf646162f4615365fcba45137f1a69da57cdc7->leave($__internal_d65d96b219cc9589a14e8c87ebaf646162f4615365fcba45137f1a69da57cdc7_prof);

    }

    // line 2
    public function block_board($context, array $blocks = array())
    {
        $__internal_5eb93138eddf3da26242aac8dbbf0584dfea3d95a994c1ba502155f26ca0e3c3 = $this->env->getExtension("native_profiler");
        $__internal_5eb93138eddf3da26242aac8dbbf0584dfea3d95a994c1ba502155f26ca0e3c3->enter($__internal_5eb93138eddf3da26242aac8dbbf0584dfea3d95a994c1ba502155f26ca0e3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        
        $__internal_5eb93138eddf3da26242aac8dbbf0584dfea3d95a994c1ba502155f26ca0e3c3->leave($__internal_5eb93138eddf3da26242aac8dbbf0584dfea3d95a994c1ba502155f26ca0e3c3_prof);

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
