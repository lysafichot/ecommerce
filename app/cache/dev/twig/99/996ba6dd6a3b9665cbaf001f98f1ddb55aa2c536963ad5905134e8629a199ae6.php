<?php

/* AccountBundle:Auth:account.html.twig */
class __TwigTemplate_633af8af5b302fd068f3600c717c0e71d3d7066e0e99b74a7aae138e8ccdc62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccountBundle:Auth:account.html.twig", 1);
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
        $__internal_0c10b3ecf3d763d4246ade389ee37991ccb8552842eb0877fc5c777e50d8193b = $this->env->getExtension("native_profiler");
        $__internal_0c10b3ecf3d763d4246ade389ee37991ccb8552842eb0877fc5c777e50d8193b->enter($__internal_0c10b3ecf3d763d4246ade389ee37991ccb8552842eb0877fc5c777e50d8193b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c10b3ecf3d763d4246ade389ee37991ccb8552842eb0877fc5c777e50d8193b->leave($__internal_0c10b3ecf3d763d4246ade389ee37991ccb8552842eb0877fc5c777e50d8193b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_840e808d67768732f189a786357edc44d12c86e20ad7065a6642ba20c67212db = $this->env->getExtension("native_profiler");
        $__internal_840e808d67768732f189a786357edc44d12c86e20ad7065a6642ba20c67212db->enter($__internal_840e808d67768732f189a786357edc44d12c86e20ad7065a6642ba20c67212db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_840e808d67768732f189a786357edc44d12c86e20ad7065a6642ba20c67212db->leave($__internal_840e808d67768732f189a786357edc44d12c86e20ad7065a6642ba20c67212db_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce86837496b9f7d48b604eb17b548076c127418d37d5579b154e51e92d07ad74 = $this->env->getExtension("native_profiler");
        $__internal_ce86837496b9f7d48b604eb17b548076c127418d37d5579b154e51e92d07ad74->enter($__internal_ce86837496b9f7d48b604eb17b548076c127418d37d5579b154e51e92d07ad74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_ce86837496b9f7d48b604eb17b548076c127418d37d5579b154e51e92d07ad74->leave($__internal_ce86837496b9f7d48b604eb17b548076c127418d37d5579b154e51e92d07ad74_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_82b59689dd028b28f841996c6c923b9c9b4131f8dd0c88eac78e1073a9e182ee = $this->env->getExtension("native_profiler");
        $__internal_82b59689dd028b28f841996c6c923b9c9b4131f8dd0c88eac78e1073a9e182ee->enter($__internal_82b59689dd028b28f841996c6c923b9c9b4131f8dd0c88eac78e1073a9e182ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div id='myaccount'>
\t\t\t<div id='gestion'>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mon profil</a>
\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes commandes</a>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("account");
        echo "\">Mes adresses</a>




\t\t\t</div>

\t\t\t<div id='info_contents'>

\t\t\t\t<div id='adresse_livraison'>
\t\t\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), 'form_start', array("attr" => array("class" => "form-add-infos")));
        echo "




\t\t\t\t\t<p> Information personnelles : </p>
\t\t\t\t\t<p><span> Nom : </span>
\t\t\t\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "lastname", array())) {
            // line 44
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "lastname", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<button>Edit</button>
\t\t\t\t\t\t";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "lastname", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "lastname", array()), "label" => "lastname", "attr" => array("class" => "field_civilite")));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "lastname", array()), 'widget', array("label" => "Lastname", "attr" => array("class" => "field_lastname")));
            echo "
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p><span>Prenom :</span>
\t\t\t\t\t\t";
        // line 52
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "firstname", array())) {
            // line 53
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "firstname", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<button>Edit</button>
\t\t\t\t\t\t";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "firstname", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "firstname", array()), "label" => "firstname", "attr" => array("class" => "field_firstname")));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "firstname", array()), 'widget', array("label" => "Firstname", "attr" => array("class" => "field_firstname")));
            echo "
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p><span>Civiltee :</span>
\t\t\t\t\t\t";
        // line 61
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "civilite", array())) {
            // line 62
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "civilite", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<button>Edit</button>
\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "civilite", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "civilite", array()), "label" => "civilite", "attr" => array("class" => "field_civilite")));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "civilite", array()), 'widget', array("label" => "Civilite", "attr" => array("class" => "field_civilite")));
            echo "
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</p>

\t\t\t\t\t<p><span>Date de naissance :</span>
\t\t\t\t\t\t";
        // line 71
        if ($this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "birthday", array())) {
            // line 72
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "birthday", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<button>Edit</button>
\t\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "birthday", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "birthday", array()), "label" => "birthday", "attr" => array("class" => "field_civilite")));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), "birthday", array()), 'widget', array("label" => "birthday", "attr" => array("class" => "field_birthday")));
            echo "
\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t</p>


\t\t\t\t\t<button type=\"submit\">Ajouter</button>

\t\t\t\t\t";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formInfo"]) ? $context["formInfo"] : $this->getContext($context, "formInfo")), 'form_end');
        echo "

\t\t\t\t\t<p>Adresse de livraison</p>

\t\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adressesLiv"]) ? $context["adressesLiv"] : $this->getContext($context, "adressesLiv")));
        foreach ($context['_seq'] as $context["_key"] => $context["adresseLiv"]) {
            // line 88
            echo "\t\t\t\t\t<div class ='adresse'>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<form action=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("update_adresse");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "id", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "numero", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"numero\" name=\"numero\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "numero", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "name", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "codePostal", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"codePostal\" name=\"codePostal\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "codePostal", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "city", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"city\" name=\"city\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "city", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"city\" name=\"selected\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseLiv"], "selected", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<button type=\"submit\">Modier</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div id = 'edit'>


\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresseLiv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
\t\t\t\t\t";
        // line 118
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), 'form_start', array("attr" => array("class" => "form-add-adresses")));
        echo "
\t\t\t\t\t";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "numero", array()), 'row', array("label" => "Numero", "attr" => array("class" => "field_numero")));
        echo "

\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "name", array()), 'row', array("label" => "Ajouter une adresse", "attr" => array("class" => "field_name")));
        echo "
\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "type", array()), 'row', array("label" => "", "attr" => array("class" => "field_type"), "value" => "Livraison"));
        echo "
\t\t\t\t\t";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "city", array()), 'row', array("label" => "", "attr" => array("class" => "field_city")));
        echo "
\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "codePostal", array()), 'row', array("label" => "", "attr" => array("class" => "field_codePostal")));
        echo "
\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), "selected", array()), 'row', array("label" => "Par default", "attr" => array("class" => "field_selected")));
        echo "

\t\t\t\t\t<button type=\"submit\">Ajouter</button>
\t\t\t\t\t";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLiv"]) ? $context["formLiv"] : $this->getContext($context, "formLiv")), 'form_end');
        echo "

\t\t\t\t</div>

\t\t\t\t<div id='adresse_facturation'>
\t\t\t\t\t<p>Adresse de facturation</p>

\t\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adressesFac"]) ? $context["adressesFac"] : $this->getContext($context, "adressesFac")));
        foreach ($context['_seq'] as $context["_key"] => $context["adresseFac"]) {
            // line 136
            echo "\t\t\t\t\t<div class ='adresse'>

\t\t\t\t\t<form action=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("update_adresse");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "id", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "numero", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"numero\" name=\"numero\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "numero", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "name", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "codePostal", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"codePostal\" name=\"codePostal\" value=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "codePostal", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<span>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "city", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"city\" name=\"city\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "city", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"city\" name=\"selected\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresseFac"], "selected", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t\t<button type=\"submit\">Modier</button>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresseFac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
\t\t\t\t\t";
        // line 161
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), 'form_start', array("attr" => array("class" => "form-add-adresses")));
        echo "
\t\t\t\t\t";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "numero", array()), 'row', array("label" => "Numero", "attr" => array("class" => "field_numero")));
        echo "

\t\t\t\t\t";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "name", array()), 'row', array("label" => "Ajouter une adresse", "attr" => array("class" => "field_name")));
        echo "
\t\t\t\t\t";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "type", array()), 'row', array("label" => "", "attr" => array("class" => "field_type"), "value" => "Facturation"));
        echo "
\t\t\t\t\t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "city", array()), 'row', array("label" => "", "attr" => array("class" => "field_city")));
        echo "
\t\t\t\t\t";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "codePostal", array()), 'row', array("label" => "", "attr" => array("class" => "field_codePostal")));
        echo "
\t\t\t\t\t";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), "selected", array()), 'row', array("label" => "Par default", "attr" => array("class" => "field_selected")));
        echo "

\t\t\t\t\t<button type=\"submit\">Ajouter</button>
\t\t\t\t\t";
        // line 171
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formFac"]) ? $context["formFac"] : $this->getContext($context, "formFac")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_82b59689dd028b28f841996c6c923b9c9b4131f8dd0c88eac78e1073a9e182ee->leave($__internal_82b59689dd028b28f841996c6c923b9c9b4131f8dd0c88eac78e1073a9e182ee_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_96fd3a0a56288655d62ee8d943aba2cdbd56f8f37121089b392a6ad0983bd877 = $this->env->getExtension("native_profiler");
        $__internal_96fd3a0a56288655d62ee8d943aba2cdbd56f8f37121089b392a6ad0983bd877->enter($__internal_96fd3a0a56288655d62ee8d943aba2cdbd56f8f37121089b392a6ad0983bd877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        
        $__internal_96fd3a0a56288655d62ee8d943aba2cdbd56f8f37121089b392a6ad0983bd877->leave($__internal_96fd3a0a56288655d62ee8d943aba2cdbd56f8f37121089b392a6ad0983bd877_prof);

    }

    // line 12
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_22b976ea741bac06e69d75568efba150d2478f5967195502e2004a52d7427129 = $this->env->getExtension("native_profiler");
        $__internal_22b976ea741bac06e69d75568efba150d2478f5967195502e2004a52d7427129->enter($__internal_22b976ea741bac06e69d75568efba150d2478f5967195502e2004a52d7427129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_22b976ea741bac06e69d75568efba150d2478f5967195502e2004a52d7427129->leave($__internal_22b976ea741bac06e69d75568efba150d2478f5967195502e2004a52d7427129_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Auth:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 12,  459 => 9,  445 => 171,  439 => 168,  435 => 167,  431 => 166,  427 => 165,  423 => 164,  418 => 162,  414 => 161,  411 => 160,  398 => 153,  393 => 151,  389 => 150,  384 => 148,  380 => 147,  375 => 145,  371 => 144,  366 => 142,  362 => 141,  357 => 139,  353 => 138,  349 => 136,  345 => 135,  335 => 128,  329 => 125,  325 => 124,  321 => 123,  317 => 122,  313 => 121,  308 => 119,  304 => 118,  301 => 117,  283 => 105,  278 => 103,  274 => 102,  269 => 100,  265 => 99,  260 => 97,  256 => 96,  251 => 94,  247 => 93,  242 => 91,  238 => 90,  234 => 88,  230 => 87,  223 => 83,  216 => 78,  210 => 76,  205 => 74,  199 => 72,  197 => 71,  192 => 68,  186 => 66,  181 => 64,  175 => 62,  173 => 61,  169 => 59,  163 => 57,  158 => 55,  152 => 53,  150 => 52,  146 => 50,  140 => 48,  135 => 46,  129 => 44,  127 => 43,  117 => 36,  104 => 26,  100 => 25,  96 => 24,  85 => 18,  78 => 13,  76 => 12,  72 => 10,  70 => 9,  64 => 8,  50 => 5,  38 => 3,  11 => 1,);
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
/* 		<div id='myaccount'>*/
/* 			<div id='gestion'>*/
/* 				<a href="{{ path('account') }}">Mon profil</a>*/
/* 				<a href="{{ path('account') }}">Mes commandes</a>*/
/* 				<a href="{{ path('account') }}">Mes adresses</a>*/
/* */
/* */
/* */
/* */
/* 			</div>*/
/* */
/* 			<div id='info_contents'>*/
/* */
/* 				<div id='adresse_livraison'>*/
/* 					{{ form_start(formInfo, {'attr': {'class': 'form-add-infos'}}) }}*/
/* */
/* */
/* */
/* */
/* 					<p> Information personnelles : </p>*/
/* 					<p><span> Nom : </span>*/
/* 						{% if account.lastname %}*/
/* 						{{ account.lastname}}*/
/* 						<button>Edit</button>*/
/* 						{{ form_widget(formInfo.lastname, {'value': account.lastname, 'label' : "lastname", 'attr': {'class': 'field_civilite'}}) }}*/
/* 						{% else %}*/
/* 						{{ form_widget(formInfo.lastname, {'label' : "Lastname", 'attr': {'class': 'field_lastname'}}) }}*/
/* 						{% endif %}*/
/* 					</p>*/
/* 					<p><span>Prenom :</span>*/
/* 						{% if account.firstname %}*/
/* 						{{ account.firstname}}*/
/* 						<button>Edit</button>*/
/* 						{{ form_widget(formInfo.firstname, {'value': account.firstname, 'label' : "firstname", 'attr': {'class': 'field_firstname'}}) }}*/
/* 						{% else %}*/
/* 						{{ form_widget(formInfo.firstname, {'label' : "Firstname", 'attr': {'class': 'field_firstname'}}) }}*/
/* 						{% endif %}*/
/* 					</p>*/
/* 					<p><span>Civiltee :</span>*/
/* 						{% if account.civilite %}*/
/* 						{{ account.civilite}}*/
/* 						<button>Edit</button>*/
/* 						{{ form_widget(formInfo.civilite, {'value': account.civilite, 'label' : "civilite", 'attr': {'class': 'field_civilite'}}) }}*/
/* 						{% else %}*/
/* 						{{ form_widget(formInfo.civilite, {'label' : "Civilite", 'attr': {'class': 'field_civilite'}}) }}*/
/* 						{% endif %}*/
/* 					</p>*/
/* */
/* 					<p><span>Date de naissance :</span>*/
/* 						{% if account.birthday %}*/
/* 						{{ account.birthday}}*/
/* 						<button>Edit</button>*/
/* 						{{ form_widget(formInfo.birthday, {'value': account.birthday, 'label' : "birthday", 'attr': {'class': 'field_civilite'}}) }}*/
/* 						{% else %}*/
/* 						{{ form_widget(formInfo.birthday, {'label' : "birthday", 'attr': {'class': 'field_birthday'}}) }}*/
/* 						{% endif %}*/
/* 					</p>*/
/* */
/* */
/* 					<button type="submit">Ajouter</button>*/
/* */
/* 					{{ form_end(formInfo) }}*/
/* */
/* 					<p>Adresse de livraison</p>*/
/* */
/* 					{% for adresseLiv in adressesLiv %}*/
/* 					<div class ='adresse'>*/
/* 						<div>*/
/* 							<form action="{{ path('update_adresse') }}" method="post">*/
/* 								<input type="hidden" name="id" value="{{ adresseLiv.id }}" />*/
/* */
/* 								<span>{{ adresseLiv.numero }}</span>*/
/* 								<input type="text" id="numero" name="numero" value="{{ adresseLiv.numero }}" />*/
/* */
/* 								<span>{{ adresseLiv.name }}</span>*/
/* 								<input type="text" id="name" name="name" value="{{  adresseLiv.name }}" />*/
/* */
/* 								<span>{{ adresseLiv.codePostal }}</span>*/
/* 								<input type="text" id="codePostal" name="codePostal" value="{{  adresseLiv.codePostal }}" />*/
/* */
/* 								<span>{{ adresseLiv.city }}</span>*/
/* 								<input type="text" id="city" name="city" value="{{  adresseLiv.city }}" />*/
/* */
/* 								<input type="checkbox" id="city" name="selected" value="{{  adresseLiv.selected }}" />*/
/* */
/* 								<button type="submit">Modier</button>*/
/* 							</form>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 					<div id = 'edit'>*/
/* */
/* */
/* 					</div>*/
/* 					{%endfor%}*/
/* */
/* 					{{ form_start(formLiv, {'attr': {'class': 'form-add-adresses'}}) }}*/
/* 					{{ form_row(formLiv.numero, {'label' : "Numero", 'attr': {'class': 'field_numero'}}) }}*/
/* */
/* 					{{ form_row(formLiv.name, {'label' : "Ajouter une adresse", 'attr': {'class': 'field_name'}}) }}*/
/* 					{{ form_row(formLiv.type, {'label' : "", 'attr': {'class': 'field_type'}, 'value' : 'Livraison'}) }}*/
/* 					{{ form_row(formLiv.city, {'label' : "", 'attr': {'class': 'field_city'}}) }}*/
/* 					{{ form_row(formLiv.codePostal, {'label' : "", 'attr': {'class': 'field_codePostal'}}) }}*/
/* 					{{ form_row(formLiv.selected, {'label' : "Par default", 'attr': {'class': 'field_selected'}}) }}*/
/* */
/* 					<button type="submit">Ajouter</button>*/
/* 					{{ form_end(formLiv) }}*/
/* */
/* 				</div>*/
/* */
/* 				<div id='adresse_facturation'>*/
/* 					<p>Adresse de facturation</p>*/
/* */
/* 					{% for adresseFac in adressesFac %}*/
/* 					<div class ='adresse'>*/
/* */
/* 					<form action="{{ path('update_adresse') }}" method="post">*/
/* 								<input type="hidden" name="id" value="{{ adresseFac.id }}" />*/
/* */
/* 								<span>{{ adresseFac.numero }}</span>*/
/* 								<input type="text" id="numero" name="numero" value="{{ adresseFac.numero }}" />*/
/* */
/* 								<span>{{ adresseFac.name }}</span>*/
/* 								<input type="text" id="name" name="name" value="{{  adresseFac.name }}" />*/
/* */
/* 								<span>{{ adresseFac.codePostal }}</span>*/
/* 								<input type="text" id="codePostal" name="codePostal" value="{{  adresseFac.codePostal }}" />*/
/* */
/* 								<span>{{ adresseFac.city }}</span>*/
/* 								<input type="text" id="city" name="city" value="{{  adresseFac.city }}" />*/
/* */
/* 								<input type="checkbox" id="city" name="selected" value="{{  adresseFac.selected }}" />*/
/* */
/* 								<button type="submit">Modier</button>*/
/* 							</form>*/
/* */
/* 					</div>*/
/* 					{%endfor%}*/
/* */
/* 					{{ form_start(formFac, {'attr': {'class': 'form-add-adresses'}}) }}*/
/* 					{{ form_row(formFac.numero, {'label' : "Numero", 'attr': {'class': 'field_numero'}}) }}*/
/* */
/* 					{{ form_row(formFac.name, {'label' : "Ajouter une adresse", 'attr': {'class': 'field_name'}}) }}*/
/* 					{{ form_row(formFac.type, {'label' : "", 'attr': {'class': 'field_type'}, 'value' : 'Facturation'}) }}*/
/* 					{{ form_row(formFac.city, {'label' : "", 'attr': {'class': 'field_city'}}) }}*/
/* 					{{ form_row(formFac.codePostal, {'label' : "", 'attr': {'class': 'field_codePostal'}}) }}*/
/* 					{{ form_row(formFac.selected, {'label' : "Par default", 'attr': {'class': 'field_selected'}}) }}*/
/* */
/* 					<button type="submit">Ajouter</button>*/
/* 					{{ form_end(formFac) }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock%}*/
