<?php

/* @Admin/Category/category.html.twig */
class __TwigTemplate_cebd487b50b050933271456c59cc0c79cb4622b08ede196d6a51549da36e6591 extends Twig_Template
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
        $__internal_d44245a4f94cb5660ab4e4eacf8d1a646da47b2500606661c2a0809e983310f2 = $this->env->getExtension("native_profiler");
        $__internal_d44245a4f94cb5660ab4e4eacf8d1a646da47b2500606661c2a0809e983310f2->enter($__internal_d44245a4f94cb5660ab4e4eacf8d1a646da47b2500606661c2a0809e983310f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Category/category.html.twig"));

        // line 1
        echo "<div class='category_item'>

\t<form class=\"form_delete\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" }}>

\t\t<h4 class='name_category'> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " </h4>
\t\t<input border=0 src=\"/images/delete.svg\" type=image value=submit align=\"middle\"/>
\t</form>
\t<div class='medias_category' >
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "medias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["medias"]) {
            // line 10
            echo "\t\t<img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["medias"], "path", array()), "html", null, true);
            echo " class='hidden' />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t\t";
        // line 13
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "children", array(), "any", true, true)) {
            // line 14
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "\t\t      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span></a>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t";
        }
        // line 19
        echo "\t</div>
</div>
";
        
        $__internal_d44245a4f94cb5660ab4e4eacf8d1a646da47b2500606661c2a0809e983310f2->leave($__internal_d44245a4f94cb5660ab4e4eacf8d1a646da47b2500606661c2a0809e983310f2_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  74 => 18,  62 => 15,  57 => 14,  55 => 13,  52 => 12,  42 => 10,  38 => 9,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <div class='category_item'>*/
/* */
/* 	<form class="form_delete" action="{{ path('admin_delete_category', {'id' :category.id}) }}" method="post" }}>*/
/* */
/* 		<h4 class='name_category'> {{category.name}} </h4>*/
/* 		<input border=0 src="/images/delete.svg" type=image value=submit align="middle"/>*/
/* 	</form>*/
/* 	<div class='medias_category' >*/
/* 		{% for medias in category.medias %}*/
/* 		<img src={{ asset('uploads/') }}{{medias.path}} class='hidden' />*/
/* 		{% endfor %}*/
/* */
/* 		{% if category.children is defined %}*/
/* 		{% for category in category.children %}*/
/* 		      <a href="{{ path('admin_products_category',  { 'id': category.id }) }}"><span>{{category.name}}</span></a>*/
/* */
/* 		{% endfor %}*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* */
