<?php

/* layout/header.html.twig */
class __TwigTemplate_d25566381cc45004f0801f1351a8410962417534187370654b22e94c3bc8ff75 extends Twig_Template
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
        $__internal_3c79a2be4348bced000a8e7a7d033edf6c00809ce5dd687e45ebadc9f8b112cc = $this->env->getExtension("native_profiler");
        $__internal_3c79a2be4348bced000a8e7a7d033edf6c00809ce5dd687e45ebadc9f8b112cc->enter($__internal_3c79a2be4348bced000a8e7a7d033edf6c00809ce5dd687e45ebadc9f8b112cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "<header>
\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>
\t<div id=panier>
\t\t<div id='username_home'></div>
\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t";
        }
        // line 8
        echo "\t\t<a href=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cart.png"), "html", null, true);
        echo "\"/></a>
\t\t<div id='count'><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "total"), "method"), "html", null, true);
        echo "</span></div>
\t\t<div id=list_panier>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_panier"]) ? $context["products_panier"] : $this->getContext($context, "products_panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <p><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "nameDerived", array()), "html", null, true);
            echo "</span> Prix unite: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()), "html", null, true);
            echo "<span>Qte: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "count", array()), "html", null, true);
            echo "</span><span>Prix: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()) * $this->getAttribute($context["product"], "count", array())), "html", null, true);
            echo "</span></p>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "           Prix total ";
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
        echo " \$
\t\t</div>
\t</div>

</header>";
        
        $__internal_3c79a2be4348bced000a8e7a7d033edf6c00809ce5dd687e45ebadc9f8b112cc->leave($__internal_3c79a2be4348bced000a8e7a7d033edf6c00809ce5dd687e45ebadc9f8b112cc_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  53 => 12,  49 => 11,  44 => 9,  39 => 8,  33 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
/* <header>*/
/* 	<img src="{{ asset('images/logo.png') }}"/>*/
/* 	<div id=panier>*/
/* 		<div id='username_home'></div>*/
/* 		{% if is_granted('ROLE_USER') %}*/
/* 		{{ app.user.username }}*/
/* 		{% endif %}*/
/* 		<a href=""><img src="{{ asset('images/cart.png') }}"/></a>*/
/* 		<div id='count'><span>{{app.session.get('total') }}</span></div>*/
/* 		<div id=list_panier>*/
/*   {% for product in products_panier %}*/
/*             <p><span>{{ product.derived.nameDerived}}</span> Prix unite: {{ product.derived.price }}<span>Qte: {{ product.count}}</span><span>Prix: {{ product.derived.price * product.count}}</span></p>*/
/* */
/*             {% endfor %}*/
/*            Prix total {{price}} $*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </header>*/
