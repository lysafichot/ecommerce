<?php

/* :layout:header.html.twig */
class __TwigTemplate_5738b076fef560bf36e39b35322df757d66799a153f68168435366ab350a5f55 extends Twig_Template
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
        $__internal_11f596d5104763d3a18a11501b60815d7cfad4b1a2e3115eca6340f1691e91dd = $this->env->getExtension("native_profiler");
        $__internal_11f596d5104763d3a18a11501b60815d7cfad4b1a2e3115eca6340f1691e91dd->enter($__internal_11f596d5104763d3a18a11501b60815d7cfad4b1a2e3115eca6340f1691e91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:header.html.twig"));

        // line 1
        echo "<header>

\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>


\t<form  id='form-search' action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"post\" >
\t\t<input type=\"search\" name=\"search\">
\t\t<input type=\"submit\" name=\"OK\">
\t</form>

\t<div id=panier>
\t\t<div id='username_home'></div>
\t\t";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 14
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t";
        }
        // line 16
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/cart.png"), "html", null, true);
        echo "\"/></a>
\t\t<div id='count'><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "total"), "method"), "html", null, true);
        echo "</span></div>
\t\t<div id=list_panier>
\t\t\t<p id='detail_title'>Panier :</p>



\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "products"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "
\t\t\t<div class=product_cart>

\t\t\t\t<p><span class='designation_cart'>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "nameDerived", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t<p class='qte'><span class='price_cart'> Prix unite: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()), "html", null, true);
            echo " \$</span>
\t\t\t\t\t<span class='qte_cart'>Qte: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "count", array()), "html", null, true);
            echo "</span>
\t\t\t\t</p>

\t\t\t\t<p><span class='total'_cart'>Prix: ";
            // line 32
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["product"], "derived", array()), "price", array()) * $this->getAttribute($context["product"], "count", array())), "html", null, true);
            echo " \$</span></p>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t<span id='total_panier'>Total : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "price"), "method"), "html", null, true);
        echo " \$</span>


\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">Voir le panier</a>

\t\t</div>
\t</div>

</header>";
        
        $__internal_11f596d5104763d3a18a11501b60815d7cfad4b1a2e3115eca6340f1691e91dd->leave($__internal_11f596d5104763d3a18a11501b60815d7cfad4b1a2e3115eca6340f1691e91dd_prof);

    }

    public function getTemplateName()
    {
        return ":layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 35,  89 => 32,  83 => 29,  79 => 28,  75 => 27,  70 => 24,  66 => 23,  57 => 17,  50 => 16,  44 => 14,  42 => 13,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <header>*/
/* */
/* 	<img src="{{ asset('images/logo.png') }}"/>*/
/* */
/* */
/* 	<form  id='form-search' action="{{ path('search') }}" method="post" >*/
/* 		<input type="search" name="search">*/
/* 		<input type="submit" name="OK">*/
/* 	</form>*/
/* */
/* 	<div id=panier>*/
/* 		<div id='username_home'></div>*/
/* 		{% if is_granted('ROLE_USER') %}*/
/* 		{{ app.user.username }}*/
/* 		{% endif %}*/
/* 		<a href="{{ path('panier') }}"><img src="{{ asset('images/cart.png') }}"/></a>*/
/* 		<div id='count'><span>{{app.session.get('total') }}</span></div>*/
/* 		<div id=list_panier>*/
/* 			<p id='detail_title'>Panier :</p>*/
/* */
/* */
/* */
/* 			{% for product in app.session.get('products') %}*/
/* */
/* 			<div class=product_cart>*/
/* */
/* 				<p><span class='designation_cart'>{{ product.derived.nameDerived}}</span></p>*/
/* 				<p class='qte'><span class='price_cart'> Prix unite: {{ product.derived.price }} $</span>*/
/* 					<span class='qte_cart'>Qte: {{ product.count}}</span>*/
/* 				</p>*/
/* */
/* 				<p><span class='total'_cart'>Prix: {{ product.derived.price * product.count}} $</span></p>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 			<span id='total_panier'>Total : {{app.session.get('price')}} $</span>*/
/* */
/* */
/* 			<a href="{{ path('panier') }}">Voir le panier</a>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* </header>*/
