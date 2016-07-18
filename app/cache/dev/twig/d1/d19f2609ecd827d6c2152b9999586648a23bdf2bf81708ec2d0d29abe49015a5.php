<?php

/* @Product/Panier/payement.html.twig */
class __TwigTemplate_b4e777d6182ea059fa2699b85e62a313243d8dd85560ad4888206e35563914de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Product/Panier/payement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu_auth' => array($this, 'block_menu_auth'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04041a2e05006aca6149b427299426401d4c9128c546d2f5cad69f8a14bad360 = $this->env->getExtension("native_profiler");
        $__internal_04041a2e05006aca6149b427299426401d4c9128c546d2f5cad69f8a14bad360->enter($__internal_04041a2e05006aca6149b427299426401d4c9128c546d2f5cad69f8a14bad360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Panier/payement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04041a2e05006aca6149b427299426401d4c9128c546d2f5cad69f8a14bad360->leave($__internal_04041a2e05006aca6149b427299426401d4c9128c546d2f5cad69f8a14bad360_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ebea58c23619193fb0065de8257fa54cbfcf6881a90be64508fad3eaf24605 = $this->env->getExtension("native_profiler");
        $__internal_68ebea58c23619193fb0065de8257fa54cbfcf6881a90be64508fad3eaf24605->enter($__internal_68ebea58c23619193fb0065de8257fa54cbfcf6881a90be64508fad3eaf24605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_68ebea58c23619193fb0065de8257fa54cbfcf6881a90be64508fad3eaf24605->leave($__internal_68ebea58c23619193fb0065de8257fa54cbfcf6881a90be64508fad3eaf24605_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_330461ef9ed6840b7c8c9a8054d4c225270ab8e05deb44438a78e1700a8a643f = $this->env->getExtension("native_profiler");
        $__internal_330461ef9ed6840b7c8c9a8054d4c225270ab8e05deb44438a78e1700a8a643f->enter($__internal_330461ef9ed6840b7c8c9a8054d4c225270ab8e05deb44438a78e1700a8a643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_330461ef9ed6840b7c8c9a8054d4c225270ab8e05deb44438a78e1700a8a643f->leave($__internal_330461ef9ed6840b7c8c9a8054d4c225270ab8e05deb44438a78e1700a8a643f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_702ed8ee0698a33031435438d863b4b4201b95e5e49cbb07572a631e30ea2b80 = $this->env->getExtension("native_profiler");
        $__internal_702ed8ee0698a33031435438d863b4b4201b95e5e49cbb07572a631e30ea2b80->enter($__internal_702ed8ee0698a33031435438d863b4b4201b95e5e49cbb07572a631e30ea2b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
<div id='search_login'>
\t";
        // line 12
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 13
        echo "</div>
<div id=\"main_div\">
\t<div id='contents'>

\t\t<div  class='arbre'>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ecommerce_homepage");
        echo "\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\"/></a>

\t\t\t<a href=\"\"></a>
\t\t</div>
\t\t<div id='payement'>

\t\t\t<div id='paypal'></div>
\t\t\t<div id='card'></div>

\t\t\t";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 28
            echo "
\t\t\t";
            // line 29
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 30
                echo "\t\t\t<div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 32
            echo "
\t\t\t<form action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Username:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />


\t\t\t\t<button type=\"submit\">login</button>
\t\t\t</form>

\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("registration");
            echo "\">S'inscrire</a>








\t\t\t";
        } else {
            // line 54
            echo "
\t\t\t";
            // line 55
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), 'form_start', array("attr" => array("class" => "form-add-infos")));
            echo "

\t\t\t<p> Information personnelles : </p>
\t\t\t<p><span> Nom : </span>

\t\t\t\t";
            // line 60
            if ((((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")) && $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "lastname", array()))) {
                // line 61
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "lastname", array()), "html", null, true);
                echo "
\t\t\t\t";
                // line 62
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "lastname", array()), 'widget', array("label" => "Lastname", "attr" => array("class" => "hidden")));
                echo "

\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "lastname", array()), 'widget', array("label" => "Lastname", "attr" => array("class" => "field_lastname")));
                echo "
\t\t\t\t";
            }
            // line 67
            echo "\t\t\t</p>
\t\t\t<p><span>Prenom :</span>
\t\t\t\t";
            // line 69
            if ((((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")) && $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "firstname", array()))) {
                // line 70
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "firstname", array()), "html", null, true);
                echo "
\t\t\t\t";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "firstname", array()), 'widget', array("label" => "Firstname", "attr" => array("class" => "hidden")));
                echo "

\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "firstname", array()), 'widget', array("label" => "Firstname", "attr" => array("class" => "field_firstname")));
                echo "
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t</p>
\t\t\t<p><span>Civiltee :</span>
\t\t\t\t";
            // line 78
            if ((((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")) && $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "civilite", array()))) {
                // line 79
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "civilite", array()), "html", null, true);
                echo "
\t\t\t\t";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "civilite", array()), 'widget', array("label" => "Civilite", "attr" => array("class" => "hidden")));
                echo "

\t\t\t\t";
            } else {
                // line 83
                echo "\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "civilite", array()), 'widget', array("label" => "Civilite", "attr" => array("class" => "field_civilite")));
                echo "
\t\t\t\t";
            }
            // line 85
            echo "\t\t\t</p>
\t\t\t<p><span>Birthday :</span>

\t\t\t\t";
            // line 88
            if ((((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")) && $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "birthday", array()))) {
                // line 89
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "birthday", array()), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t";
                // line 90
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "birthday", array()), 'widget', array("label" => "", "attr" => array("class" => "hidden")));
                echo "</p>

\t\t\t\t";
            } else {
                // line 93
                echo "
\t\t\t\t";
                // line 94
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "birthday", array()), 'widget', array("label" => "", "attr" => array("class" => "field_birthday")));
                echo "</p>
\t\t\t\t";
            }
            // line 96
            echo "

\t\t\t\t";
            // line 98
            if (((((((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")) == null) || ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()) == null)) || ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "lastname", array()) == null))) || ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "firstname", array()) == null))) || ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "user", array()), "civilite", array()) == null)))) {
                // line 99
                echo "
\t\t\t\t<button type=\"submit\">Ajouter</button>
\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t";
            // line 103
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), 'form_end');
            echo "

\t\t\t\t";
            // line 105
            if ((twig_length_filter($this->env, (isset($context["adresses"]) ? $context["adresses"] : $this->getContext($context, "adresses"))) > 0)) {
                // line 106
                echo "\t\t\t\t<form action=\"";
                echo $this->env->getExtension('routing')->getPath("confirmation");
                echo "\" method=\"post\">
\t\t\t\t\t";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) ? $context["adresses"] : $this->getContext($context, "adresses")));
                foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                    // line 108
                    echo "\t\t\t\t\t<div>

\t\t\t\t\t\t<p><span>";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "numero", array()), "html", null, true);
                    echo "  </span><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "name", array()), "html", null, true);
                    echo "</span></p>
\t\t\t\t\t\t<p><span>";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codePostal", array()), "html", null, true);
                    echo "  </span><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "city", array()), "html", null, true);
                    echo "</span></p>

\t\t\t\t\t\t<input type=\"hidden\" id=\"\" name=\"adresse_id\" value=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                    echo "\" />


\t\t\t\t\t\t";
                    // line 116
                    if (($this->getAttribute($context["adresse"], "selected", array()) == 1)) {
                        // line 117
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected\"  value='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                        echo "' checked=\"1\" />
\t\t\t\t\t\t";
                    } else {
                        // line 119
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" value='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                        echo "'' name=\"selected\" />

\t\t\t\t\t\t";
                    }
                    // line 122
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "\t\t\t\t\t<button type=\"submit\">Confirmer</button>
\t\t\t\t\t<div id='payer'>

\t\t\t\t\t</div>
\t\t\t\t</form>



\t\t\t\t";
            } else {
                // line 134
                echo "
\t\t\t\t";
                // line 135
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), 'form_start', array("attr" => array("class" => "form-add-adresses")));
                echo "
\t\t\t\t";
                // line 136
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "numero", array()), 'row', array("label" => "Numero", "attr" => array("class" => "field_numero")));
                echo "

\t\t\t\t";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "name", array()), 'row', array("label" => "Ajouter une adresse", "attr" => array("class" => "field_name")));
                echo "
\t\t\t\t";
                // line 139
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "type", array()), 'row', array("label" => "", "attr" => array("class" => "field_type"), "value" => "Livraison"));
                echo "
\t\t\t\t";
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "city", array()), 'row', array("label" => "", "attr" => array("class" => "field_city")));
                echo "
\t\t\t\t";
                // line 141
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "codePostal", array()), 'row', array("label" => "", "attr" => array("class" => "field_codePostal")));
                echo "
\t\t\t\t";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), "selected", array()), 'widget', array("label" => "Par default", "attr" => array("class" => "hidden")));
                echo "


\t\t\t\t<button type=\"submit\">Confirmer</button>
\t\t\t\t";
                // line 146
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAdr"]) ? $context["formAdr"] : $this->getContext($context, "formAdr")), 'form_end');
                echo "
\t\t\t\t";
            }
            // line 148
            echo "
\t\t\t\t";
        }
        // line 150
        echo "

\t\t\t</div>
\t\t</div>
\t</div>
\t";
        
        $__internal_702ed8ee0698a33031435438d863b4b4201b95e5e49cbb07572a631e30ea2b80->leave($__internal_702ed8ee0698a33031435438d863b4b4201b95e5e49cbb07572a631e30ea2b80_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_b498e93bbc511c9ed0a96c780bd8574705239a098eced503ea46a9436b10865f = $this->env->getExtension("native_profiler");
        $__internal_b498e93bbc511c9ed0a96c780bd8574705239a098eced503ea46a9436b10865f->enter($__internal_b498e93bbc511c9ed0a96c780bd8574705239a098eced503ea46a9436b10865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_b498e93bbc511c9ed0a96c780bd8574705239a098eced503ea46a9436b10865f->leave($__internal_b498e93bbc511c9ed0a96c780bd8574705239a098eced503ea46a9436b10865f_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_e839228e1802d4321b940edeae44c9361816574f90bd1e9ca30255cea63281c7 = $this->env->getExtension("native_profiler");
        $__internal_e839228e1802d4321b940edeae44c9361816574f90bd1e9ca30255cea63281c7->enter($__internal_e839228e1802d4321b940edeae44c9361816574f90bd1e9ca30255cea63281c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_e839228e1802d4321b940edeae44c9361816574f90bd1e9ca30255cea63281c7->leave($__internal_e839228e1802d4321b940edeae44c9361816574f90bd1e9ca30255cea63281c7_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Panier/payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 12,  390 => 9,  378 => 150,  374 => 148,  369 => 146,  362 => 142,  358 => 141,  354 => 140,  350 => 139,  346 => 138,  341 => 136,  337 => 135,  334 => 134,  323 => 125,  315 => 122,  308 => 119,  302 => 117,  300 => 116,  294 => 113,  287 => 111,  281 => 110,  277 => 108,  273 => 107,  268 => 106,  266 => 105,  261 => 103,  258 => 102,  253 => 99,  251 => 98,  247 => 96,  242 => 94,  239 => 93,  233 => 90,  228 => 89,  226 => 88,  221 => 85,  215 => 83,  209 => 80,  204 => 79,  202 => 78,  198 => 76,  192 => 74,  186 => 71,  181 => 70,  179 => 69,  175 => 67,  169 => 65,  163 => 62,  158 => 61,  156 => 60,  148 => 55,  145 => 54,  132 => 44,  120 => 35,  115 => 33,  112 => 32,  106 => 30,  104 => 29,  101 => 28,  99 => 27,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Accueil {% endblock %}*/
/* */
/* {% block head %} {{ parent() }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* {% block header %} {{ parent() }} {% endblock %}*/
/* */
/* <div id='search_login'>*/
/* 	{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* </div>*/
/* <div id="main_div">*/
/* 	<div id='contents'>*/
/* */
/* 		<div  class='arbre'>*/
/* 			<a href="{{ path('ecommerce_homepage')}}"><img  src="{{ asset('images/home.png') }}"/></a>*/
/* */
/* 			<a href=""></a>*/
/* 		</div>*/
/* 		<div id='payement'>*/
/* */
/* 			<div id='paypal'></div>*/
/* 			<div id='card'></div>*/
/* */
/* 			{% if app.user == null %}*/
/* */
/* 			{% if error %}*/
/* 			<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 			{% endif %}*/
/* */
/* 			<form action="{{ path('login') }}" method="post">*/
/* 				<label for="username">Username:</label>*/
/* 				<input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/* 				<label for="password">Password:</label>*/
/* 				<input type="password" id="password" name="_password" />*/
/* */
/* */
/* 				<button type="submit">login</button>*/
/* 			</form>*/
/* */
/* 			<a href="{{ path('registration')}}">S'inscrire</a>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 			{%else%}*/
/* */
/* 			{{ form_start(formInfo, {'attr': {'class': 'form-add-infos'}}) }}*/
/* */
/* 			<p> Information personnelles : </p>*/
/* 			<p><span> Nom : </span>*/
/* */
/* 				{% if account and account.user and account.user.lastname %}*/
/* 				{{ account.user.lastname}}*/
/* 				{{ form_widget(formInfo.lastname, {'label' : "Lastname", 'attr': {'class': 'hidden'}}) }}*/
/* */
/* 				{% else %}*/
/* 				{{ form_widget(formInfo.lastname, {'label' : "Lastname", 'attr': {'class': 'field_lastname'}}) }}*/
/* 				{% endif %}*/
/* 			</p>*/
/* 			<p><span>Prenom :</span>*/
/* 				{% if account and account.user and account.user.firstname %}*/
/* 				{{ account.user.firstname}}*/
/* 				{{ form_widget(formInfo.firstname, {'label' : "Firstname", 'attr': {'class': 'hidden'}}) }}*/
/* */
/* 				{% else %}*/
/* 				{{ form_widget(formInfo.firstname, {'label' : "Firstname", 'attr': {'class': 'field_firstname'}}) }}*/
/* 				{% endif %}*/
/* 			</p>*/
/* 			<p><span>Civiltee :</span>*/
/* 				{% if account and account.user and account.user.civilite %}*/
/* 				{{ account.user.civilite}}*/
/* 				{{ form_widget(formInfo.civilite, {'label' : "Civilite", 'attr': {'class': 'hidden'}}) }}*/
/* */
/* 				{% else %}*/
/* 				{{ form_widget(formInfo.civilite, {'label' : "Civilite", 'attr': {'class': 'field_civilite'}}) }}*/
/* 				{% endif %}*/
/* 			</p>*/
/* 			<p><span>Birthday :</span>*/
/* */
/* 				{% if account and account.user and account.user.birthday %}*/
/* 				{{ account.user.birthday|date('Y-m-d') }}*/
/* 				{{ form_widget(formInfo.birthday, {'label' : "", 'attr': {'class': 'hidden'}}) }}</p>*/
/* */
/* 				{% else %}*/
/* */
/* 				{{ form_widget(formInfo.birthday, {'label' : "", 'attr': {'class': 'field_birthday'}}) }}</p>*/
/* 				{% endif %}*/
/* */
/* */
/* 				{% if account  == null or account.user == null or account.user and account.user.lastname == null or account.user and account.user.firstname == null or account.user and account.user.civilite == null %}*/
/* */
/* 				<button type="submit">Ajouter</button>*/
/* 				{%endif%}*/
/* */
/* 				{{ form_end(formInfo) }}*/
/* */
/* 				{%if adresses|length > 0%}*/
/* 				<form action="{{ path('confirmation') }}" method="post">*/
/* 					{% for adresse in adresses %}*/
/* 					<div>*/
/* */
/* 						<p><span>{{adresse.numero}}  </span><span>{{adresse.name}}</span></p>*/
/* 						<p><span>{{adresse.codePostal }}  </span><span>{{adresse.city}}</span></p>*/
/* */
/* 						<input type="hidden" id="" name="adresse_id" value="{{ adresse.id }}" />*/
/* */
/* */
/* 						{% if adresse.selected == 1 %}*/
/* 						<input type="checkbox" name="selected"  value='{{ adresse.id }}' checked="1" />*/
/* 						{% else %}*/
/* 						<input type="checkbox" value='{{ adresse.id }}'' name="selected" />*/
/* */
/* 						{%endif%}*/
/* */
/* 					</div>*/
/* 					{% endfor %}*/
/* 					<button type="submit">Confirmer</button>*/
/* 					<div id='payer'>*/
/* */
/* 					</div>*/
/* 				</form>*/
/* */
/* */
/* */
/* 				{%else%}*/
/* */
/* 				{{ form_start(formAdr, {'attr': {'class': 'form-add-adresses'}}) }}*/
/* 				{{ form_row(formAdr.numero, {'label' : "Numero", 'attr': {'class': 'field_numero'}}) }}*/
/* */
/* 				{{ form_row(formAdr.name, {'label' : "Ajouter une adresse", 'attr': {'class': 'field_name'}}) }}*/
/* 				{{ form_row(formAdr.type, {'label' : "", 'attr': {'class': 'field_type'}, 'value' : 'Livraison'}) }}*/
/* 				{{ form_row(formAdr.city, {'label' : "", 'attr': {'class': 'field_city'}}) }}*/
/* 				{{ form_row(formAdr.codePostal, {'label' : "", 'attr': {'class': 'field_codePostal'}}) }}*/
/* 				{{ form_widget(formAdr.selected, {'label' : "Par default", 'attr': {'class': 'hidden'}}) }}*/
/* */
/* */
/* 				<button type="submit">Confirmer</button>*/
/* 				{{ form_end(formAdr) }}*/
/* 				{%endif%}*/
/* */
/* 				{% endif %}*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{%endblock%}*/
