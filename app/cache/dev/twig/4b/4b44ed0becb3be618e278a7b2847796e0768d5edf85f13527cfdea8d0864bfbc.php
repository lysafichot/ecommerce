<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_dbd21e91b44140bbc883180ed84cfb7b193e2bfb6d338234d7e73a1679b5f7e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2acda11052487bebd5cb08b86008d0856a24c4232969d99783169b1270138391 = $this->env->getExtension("native_profiler");
        $__internal_2acda11052487bebd5cb08b86008d0856a24c4232969d99783169b1270138391->enter($__internal_2acda11052487bebd5cb08b86008d0856a24c4232969d99783169b1270138391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig"));

        // line 11
        $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acda11052487bebd5cb08b86008d0856a24c4232969d99783169b1270138391->leave($__internal_2acda11052487bebd5cb08b86008d0856a24c4232969d99783169b1270138391_prof);

    }

    // line 13
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_c3cd48ac16863fc5f0ca4237823cd70c6f3f09b66055d80eb93aa40540a99711 = $this->env->getExtension("native_profiler");
        $__internal_c3cd48ac16863fc5f0ca4237823cd70c6f3f09b66055d80eb93aa40540a99711->enter($__internal_c3cd48ac16863fc5f0ca4237823cd70c6f3f09b66055d80eb93aa40540a99711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 14
        ob_start();
        // line 15
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c3cd48ac16863fc5f0ca4237823cd70c6f3f09b66055d80eb93aa40540a99711->leave($__internal_c3cd48ac16863fc5f0ca4237823cd70c6f3f09b66055d80eb93aa40540a99711_prof);

    }

    // line 19
    public function block_root($context, array $blocks = array())
    {
        $__internal_d10fd0ccb5e7f794bcdd66590c1f07dc10ecf62d9314739ae1c67179d236c0cd = $this->env->getExtension("native_profiler");
        $__internal_d10fd0ccb5e7f794bcdd66590c1f07dc10ecf62d9314739ae1c67179d236c0cd->enter($__internal_d10fd0ccb5e7f794bcdd66590c1f07dc10ecf62d9314739ae1c67179d236c0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 24
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => 0));
        // line 25
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array()) == "current"))) {
            // line 26
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentClass" => "active"));
            // line 27
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("ancestorClass" => "active"));
        }
        // line 29
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 30
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_d10fd0ccb5e7f794bcdd66590c1f07dc10ecf62d9314739ae1c67179d236c0cd->leave($__internal_d10fd0ccb5e7f794bcdd66590c1f07dc10ecf62d9314739ae1c67179d236c0cd_prof);

    }

    // line 33
    public function block_list($context, array $blocks = array())
    {
        $__internal_1fc68f3bf52e9b579b403e85c54f5c0caff2e41095a8dafbe35b6959c748b0ea = $this->env->getExtension("native_profiler");
        $__internal_1fc68f3bf52e9b579b403e85c54f5c0caff2e41095a8dafbe35b6959c748b0ea->enter($__internal_1fc68f3bf52e9b579b403e85c54f5c0caff2e41095a8dafbe35b6959c748b0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 34
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 35
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")))));
            // line 36
            echo "
    ";
            // line 37
            $context["listClass"] = "";
            // line 38
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "stacked-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "justified-tabs"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "justified-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "stacked-pills"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "list"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "navbar"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 54
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "navbar-right"))) {
                // line 55
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 56
                echo "    ";
            }
            // line 57
            echo "
    ";
            // line 58
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull", array()) == "right"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . " pull-right"));
                // line 60
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull", array()) == "left"))) {
                // line 61
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . "pull-left"));
                // line 62
                echo "    ";
            }
            // line 63
            echo "    
    ";
            // line 64
            $context["listClass"] = ((($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) == 0)) ? (((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")) . " nav")) : ((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))));
            // line 65
            echo "
    ";
            // line 66
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))))));
            // line 67
            echo "
    <ul";
            // line 68
            echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 69
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_1fc68f3bf52e9b579b403e85c54f5c0caff2e41095a8dafbe35b6959c748b0ea->leave($__internal_1fc68f3bf52e9b579b403e85c54f5c0caff2e41095a8dafbe35b6959c748b0ea_prof);

    }

    // line 74
    public function block_dropdownList($context, array $blocks = array())
    {
        $__internal_c7dff21d3a1a53e19c5b0475714a4924fee105087c0a294413c842e4ad54d169 = $this->env->getExtension("native_profiler");
        $__internal_c7dff21d3a1a53e19c5b0475714a4924fee105087c0a294413c842e4ad54d169->enter($__internal_c7dff21d3a1a53e19c5b0475714a4924fee105087c0a294413c842e4ad54d169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownList"));

        // line 75
        ob_start();
        // line 76
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true))))) {
            // line 77
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 78
            echo "        <ul";
            echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 79
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c7dff21d3a1a53e19c5b0475714a4924fee105087c0a294413c842e4ad54d169->leave($__internal_c7dff21d3a1a53e19c5b0475714a4924fee105087c0a294413c842e4ad54d169_prof);

    }

    // line 85
    public function block_listList($context, array $blocks = array())
    {
        $__internal_ef25d28878b1bd7b1b0d6d0753e299136de19714a3882abbd1d594ee9abb80f4 = $this->env->getExtension("native_profiler");
        $__internal_ef25d28878b1bd7b1b0d6d0753e299136de19714a3882abbd1d594ee9abb80f4->enter($__internal_ef25d28878b1bd7b1b0d6d0753e299136de19714a3882abbd1d594ee9abb80f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listList"));

        // line 86
        ob_start();
        // line 87
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 88
            echo "        <ul";
            echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 89
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef25d28878b1bd7b1b0d6d0753e299136de19714a3882abbd1d594ee9abb80f4->leave($__internal_ef25d28878b1bd7b1b0d6d0753e299136de19714a3882abbd1d594ee9abb80f4_prof);

    }

    // line 95
    public function block_children($context, array $blocks = array())
    {
        $__internal_22c6d47b6b79de4d81dfeaee26a6c788c50742fd7dbed22d7886512777f6103b = $this->env->getExtension("native_profiler");
        $__internal_22c6d47b6b79de4d81dfeaee26a6c788c50742fd7dbed22d7886512777f6103b->enter($__internal_22c6d47b6b79de4d81dfeaee26a6c788c50742fd7dbed22d7886512777f6103b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 97
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 98
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 100
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 101
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 103
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) + 1)));
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 109
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_22c6d47b6b79de4d81dfeaee26a6c788c50742fd7dbed22d7886512777f6103b->leave($__internal_22c6d47b6b79de4d81dfeaee26a6c788c50742fd7dbed22d7886512777f6103b_prof);

    }

    // line 112
    public function block_item($context, array $blocks = array())
    {
        $__internal_9f3f374a0d1acb3a7e09221708855bd562186864acce675f920cf4606e5f2b68 = $this->env->getExtension("native_profiler");
        $__internal_9f3f374a0d1acb3a7e09221708855bd562186864acce675f920cf4606e5f2b68->enter($__internal_9f3f374a0d1acb3a7e09221708855bd562186864acce675f920cf4606e5f2b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 113
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 115
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 116
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())))) {
                // line 117
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif (((            // line 118
array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())))) {
                // line 119
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 121
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 122
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 124
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 125
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 127
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "list")) ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) === 1)))) {
                // line 128
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "nav-header"));
            } elseif (((($this->getAttribute(            // line 129
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true))))) {
                // line 130
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
            }
            // line 133
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 135
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider", array()))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) === 1))) {
                // line 136
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute(            // line 137
(isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider", array())))) {
                // line 138
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider"));
            }
            // line 141
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 142
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 145
            echo "    <li";
            echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 146
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider", array())))) {
            } elseif ((((($this->getAttribute(            // line 147
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) === 1)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()) === true))))) {
                // line 148
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute(            // line 149
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) === 1)) && (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "dropdown", array()) === false)) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array(0 => false), "method")))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 151
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ((array_key_exists("matcher", $context) &&  !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 152
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 153
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 154
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 156
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 159
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 160
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 161
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 162
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()) == "list") ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth", array()) === 1)))) {
                // line 163
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute(            // line 164
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 165
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 167
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 169
            echo "    </li>
";
        }
        
        $__internal_9f3f374a0d1acb3a7e09221708855bd562186864acce675f920cf4606e5f2b68->leave($__internal_9f3f374a0d1acb3a7e09221708855bd562186864acce675f920cf4606e5f2b68_prof);

    }

    // line 173
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_00143042e92a7c215e4a0d379339ea9dbd207ee5bc8ffa1b47cb3d3f155bd24e = $this->env->getExtension("native_profiler");
        $__internal_00143042e92a7c215e4a0d379339ea9dbd207ee5bc8ffa1b47cb3d3f155bd24e->enter($__internal_00143042e92a7c215e4a0d379339ea9dbd207ee5bc8ffa1b47cb3d3f155bd24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_00143042e92a7c215e4a0d379339ea9dbd207ee5bc8ffa1b47cb3d3f155bd24e->leave($__internal_00143042e92a7c215e4a0d379339ea9dbd207ee5bc8ffa1b47cb3d3f155bd24e_prof);

    }

    // line 175
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_556a3a4e4a33d60a6242ab5d86545f775582901d13ec23f138518e86a4522062 = $this->env->getExtension("native_profiler");
        $__internal_556a3a4e4a33d60a6242ab5d86545f775582901d13ec23f138518e86a4522062->enter($__internal_556a3a4e4a33d60a6242ab5d86545f775582901d13ec23f138518e86a4522062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array());
        // line 178
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 179
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("data-toggle" => "dropdown"));
        // line 180
        echo "    <a href=\"#\"";
        echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_556a3a4e4a33d60a6242ab5d86545f775582901d13ec23f138518e86a4522062->leave($__internal_556a3a4e4a33d60a6242ab5d86545f775582901d13ec23f138518e86a4522062_prof);

    }

    // line 184
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_b1ddad93374216bbf71131d7960286dcbfa5ed76694ef378d65c1418b8e2f2b2 = $this->env->getExtension("native_profiler");
        $__internal_b1ddad93374216bbf71131d7960286dcbfa5ed76694ef378d65c1418b8e2f2b2->enter($__internal_b1ddad93374216bbf71131d7960286dcbfa5ed76694ef378d65c1418b8e2f2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 185
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1ddad93374216bbf71131d7960286dcbfa5ed76694ef378d65c1418b8e2f2b2->leave($__internal_b1ddad93374216bbf71131d7960286dcbfa5ed76694ef378d65c1418b8e2f2b2_prof);

    }

    // line 189
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_fa2d2d51d71d5522c8bea23ee12b93b9f4d82655935993751957e50569809ffc = $this->env->getExtension("native_profiler");
        $__internal_fa2d2d51d71d5522c8bea23ee12b93b9f4d82655935993751957e50569809ffc->enter($__internal_fa2d2d51d71d5522c8bea23ee12b93b9f4d82655935993751957e50569809ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<span";
        echo $context["__internal_ed6d0861aad97c994fbb511a07ac0d873d0be6a036c41233ed9677d26edc56cb"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_fa2d2d51d71d5522c8bea23ee12b93b9f4d82655935993751957e50569809ffc->leave($__internal_fa2d2d51d71d5522c8bea23ee12b93b9f4d82655935993751957e50569809ffc_prof);

    }

    // line 191
    public function block_label($context, array $blocks = array())
    {
        $__internal_90ec3f31b6e5cc3b6d69a924da11c91f8a28ea3632d4af7b08d2c3a045d72b68 = $this->env->getExtension("native_profiler");
        $__internal_90ec3f31b6e5cc3b6d69a924da11c91f8a28ea3632d4af7b08d2c3a045d72b68->enter($__internal_90ec3f31b6e5cc3b6d69a924da11c91f8a28ea3632d4af7b08d2c3a045d72b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")), "html", null, true));
        }
        
        $__internal_90ec3f31b6e5cc3b6d69a924da11c91f8a28ea3632d4af7b08d2c3a045d72b68->leave($__internal_90ec3f31b6e5cc3b6d69a924da11c91f8a28ea3632d4af7b08d2c3a045d72b68_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a355bf91315da7758e2b0914ddb9a8f89460293b05cd768fe6e23420024f4d65 = $this->env->getExtension("native_profiler");
            $__internal_a355bf91315da7758e2b0914ddb9a8f89460293b05cd768fe6e23420024f4d65->enter($__internal_a355bf91315da7758e2b0914ddb9a8f89460293b05cd768fe6e23420024f4d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_a355bf91315da7758e2b0914ddb9a8f89460293b05cd768fe6e23420024f4d65->leave($__internal_a355bf91315da7758e2b0914ddb9a8f89460293b05cd768fe6e23420024f4d65_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 6,  557 => 5,  553 => 4,  538 => 3,  522 => 191,  506 => 189,  498 => 185,  492 => 184,  479 => 180,  476 => 179,  473 => 178,  470 => 177,  468 => 176,  462 => 175,  444 => 173,  435 => 169,  431 => 167,  427 => 165,  425 => 164,  422 => 163,  420 => 162,  418 => 161,  416 => 160,  414 => 159,  410 => 156,  406 => 154,  404 => 153,  401 => 152,  399 => 151,  396 => 150,  394 => 149,  391 => 148,  389 => 147,  387 => 146,  383 => 145,  380 => 142,  378 => 141,  375 => 138,  373 => 137,  371 => 136,  369 => 135,  367 => 133,  364 => 130,  362 => 129,  360 => 128,  358 => 127,  355 => 125,  353 => 124,  350 => 122,  348 => 121,  345 => 119,  343 => 118,  341 => 117,  339 => 116,  337 => 115,  335 => 113,  329 => 112,  322 => 109,  320 => 108,  303 => 105,  286 => 104,  284 => 103,  281 => 101,  279 => 100,  277 => 98,  275 => 97,  269 => 95,  257 => 89,  252 => 88,  249 => 87,  247 => 86,  241 => 85,  229 => 79,  224 => 78,  221 => 77,  218 => 76,  216 => 75,  210 => 74,  199 => 69,  195 => 68,  192 => 67,  190 => 66,  187 => 65,  185 => 64,  182 => 63,  179 => 62,  176 => 61,  173 => 60,  170 => 59,  168 => 58,  165 => 57,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  114 => 40,  111 => 39,  108 => 38,  106 => 37,  103 => 36,  100 => 35,  98 => 34,  92 => 33,  85 => 30,  83 => 29,  79 => 27,  76 => 26,  74 => 25,  72 => 24,  66 => 19,  56 => 15,  54 => 14,  48 => 13,  41 => 1,  39 => 11,  11 => 1,);
    }
}
/* {% extends 'knp_menu_base.html.twig' %}*/
/* */
/* {% macro attributes(attributes) %}*/
/* {% for name, value in attributes %}*/
/*     {%- if value is not none and value is not same as (false) -%}*/
/*         {{- ' %s="%s"'|format(name, value is same as (true) ? name|e : value|e)|raw -}}*/
/*     {%- endif -%}*/
/* {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% from _self import attributes as attributes %}*/
/* */
/* {% block compressed_root %}*/
/* {% spaceless %}*/
/* {{ block('root') }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/* {#*/
/*     Twitter Bootstrap uses the CSS class "active" to indicate*/
/*     the current item, so lets change that.*/
/* #}*/
/* {% set options = options|merge({'currentDepth': 0}) %}*/
/* {% if options.style is defined and options.currentClass is defined and options.currentClass == 'current' %}*/
/*     {% set options = options|merge({'currentClass': 'active'}) %}*/
/*     {% set options = options|merge({'ancestorClass': 'active'}) %}*/
/* {% endif %}*/
/* {% set listAttributes = item.childrenAttributes %}*/
/* {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/* {% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}*/
/*     {% set listAttributes = listAttributes|merge({'class': listAttributes.class|default('')|trim}) %}*/
/* */
/*     {% set listClass = '' %}*/
/*     {% if options.style is defined and options.style == 'tabs' %}*/
/*         {% set listClass = 'nav-tabs' %}*/
/*     {% elseif options.style is defined and options.style == 'stacked-tabs' %}*/
/*         {% set listClass = 'nav-tabs nav-stacked' %}*/
/*     {% elseif options.style is defined and options.style == 'justified-tabs' %}*/
/*         {% set listClass = 'nav-tabs nav-justified' %}*/
/*     {% elseif options.style is defined and options.style == 'pills' %}*/
/*         {% set listClass = 'nav-pills' %}*/
/*     {% elseif options.style is defined and options.style == 'justified-pills' %}*/
/*         {% set listClass = 'nav-pills nav-justified' %}*/
/*     {% elseif options.style is defined and options.style == 'stacked-pills' %}*/
/*         {% set listClass = 'nav-pills nav-stacked' %}*/
/*     {% elseif options.style is defined and options.style == 'list' %}*/
/*         {% set listClass = 'nav-list' %}*/
/*     {% elseif options.style is defined and options.style == 'navbar' %}*/
/*         {% set listClass = 'navbar-nav' %}*/
/*     {% elseif options.style is defined and options.style == 'navbar-right' %}*/
/*         {% set listClass = 'navbar-nav navbar-right' %}*/
/*     {% endif %}*/
/* */
/*     {% if options.pull is defined and options.pull == 'right' %}*/
/*         {% set listClass = (listClass|default('') ~ ' pull-right')|trim %}*/
/*     {% elseif options.pull is defined and options.pull == 'left' %}*/
/*         {% set listClass = (listClass|default('') ~ 'pull-left')|trim %}*/
/*     {% endif %}*/
/*     */
/*     {% set listClass = (options.currentDepth == 0) ? listClass ~ ' nav' : listClass %}*/
/* */
/*     {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' ' ~ listClass)|trim}) %}*/
/* */
/*     <ul{{ attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dropdownList %}*/
/* {% spaceless %}*/
/*     {% if item.hasChildren and options.depth is not same as (0) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*         {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' dropdown-menu')|trim}) %}*/
/*         <ul{{ attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock dropdownList %}*/
/* */
/* {% block listList %}*/
/* {% spaceless %}*/
/*     {% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}*/
/*         <ul{{ attributes(listAttributes) }}>*/
/*             {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock listList %}*/
/* */
/* {% block children %}*/
/* {# save current variables #}*/
/* {% set currentOptions = options %}*/
/* {% set currentItem = item %}*/
/* {# update the depth for children #}*/
/* {% if options.depth is not none %}*/
/* {% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}*/
/* {% endif %}*/
/* {% set options = options|merge({'currentDepth': options.currentDepth + 1}) %}*/
/* {% for item in currentItem.children %}*/
/*     {{ block('item') }}*/
/* {% endfor %}*/
/* {# restore current variables #}*/
/* {% set item = currentItem %}*/
/* {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% if item.displayed %}*/
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*     {%- if (matcher is defined and matcher.isCurrent(item)) or (item.current is defined and item.current) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*     {%- elseif (matcher is defined and matcher.isAncestor(item, options.depth)) or (item.currentAncestor is defined and item.currentAncestor) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.hasChildren and ((options.style is defined and options.style == 'list') or options.currentDepth is not same as (1)) %}*/
/*         {%- set classes = classes|merge(['nav-header']) %}*/
/*     {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*     {%- endif %}*/
/* */
/*     {%- set attributes = item.attributes %}*/
/* */
/*     {%- if options.style is defined and options.style == 'navbar' and attributes.divider is defined and attributes.divider is not empty and options.currentDepth is same as (1) %}*/
/*         {%- set classes = classes|merge(['divider-vertical']) %}*/
/*     {%- elseif attributes.divider is defined and attributes.divider is not empty %}*/
/*         {%- set classes = classes|merge(['divider']) %}*/
/*     {%- endif %}*/
/* */
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/* {# displaying the item #}*/
/*     <li{{ attributes(attributes) }}>*/
/*         {%- if attributes.divider is defined and attributes.divider is not empty %}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*             {{ block('dropdownElement') }}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is defined and item.extras.dropdown is same as (false) or item.displayChildren(false) )) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- elseif item.uri is not empty and ((matcher is defined and not matcher.isCurrent(item)) or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- elseif item.uri is not empty and ((item.current is defined and not item.current) or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- else %}*/
/*             {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {%- if item.hasChildren and options.style is defined and (options.style == 'list' or options.currentDepth is not same as (1)) %}*/
/*             {{ block('listList') }}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] %}*/
/*             {{ block('dropdownList') }}*/
/*         {%- else %}*/
/*             {{ block('list') }}*/
/*         {%- endif %}*/
/*     </li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}<a href="{{ item.uri }}"{{ attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/* {% spaceless %}*/
/*     {% set labelAttributes = item.labelAttributes %}*/
/*     {% set labelAttributes = labelAttributes|merge({'class': (labelAttributes.class|default('') ~ ' dropdown-toggle')|trim}) %}*/
/*     {% set labelAttributes = labelAttributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ attributes(labelAttributes) }}>{{ block('label') }} <b class="caret"></b></a>*/
/* {% endspaceless %}*/
/* {% endblock dropdownElement %}*/
/* */
/* {% block dividerElement %}*/
/* {% spaceless %}*/
/* {% endspaceless %}*/
/* {% endblock dividerElement %}*/
/* */
/* {% block spanElement %}<span{{ attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}*/
/* */
/* {% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|raw|parse_icons }}{% else %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|parse_icons }}{% endif %}{% endblock %}*/
