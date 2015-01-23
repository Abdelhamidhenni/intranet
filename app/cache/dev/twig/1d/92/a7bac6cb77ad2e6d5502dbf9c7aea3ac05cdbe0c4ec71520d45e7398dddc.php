<?php

/* FuturModuleBundle:Modules:allmodules.html.twig */
class __TwigTemplate_1d92a7bac6cb77ad2e6d5502dbf9c7aea3ac05cdbe0c4ec71520d45e7398dddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FuturSiteBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FuturSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "

";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "
\t<a style=\"text-decoration:none;\" class=\"test\" href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("futur_module_add");
            echo "\">
\t\t<div class=\"module_link\">
\t\t\t+ ";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ajouter un module", array(), "messages");
            // line 11
            echo "\t\t</div>
\t</a>

<hr/>

";
        }
        // line 17
        echo "
<div class=\"allmodules\">

<h1 style=\"margin-left: 20px;\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Liste des modules", array(), "messages");
        echo " : </h1>
\t";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "
\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 24
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_module_infos", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" style=\"text-decoration:none;\">
\t\t<div class=\"module_line\" style=\"text-decoration:none;\">
\t\t\t";
                // line 26
                $this->env->loadTemplate("FuturModuleBundle:Modules:module.html.twig")->display($context);
                // line 27
                echo "\t\t</div>
\t\t</a>
\t\t";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 30
                echo "\t\t\t<div id=\"infos_1\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Pas de module pour l'instant", array(), "messages");
                echo "!</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t</div>

\t";
        } else {
            // line 35
            echo "
\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 37
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_module_infos", array("id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" style=\"text-decoration:none;\">
\t\t<div class=\"module_line\" style=\"text-decoration:none;\">
\t\t\t";
                // line 39
                $this->env->loadTemplate("FuturModuleBundle:Modules:module.html.twig")->display($context);
                // line 40
                echo "\t\t</div>
\t\t</a>
\t\t";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 43
                echo "\t\t\t<div id=\"infos_1\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Pas de module pour l'instant", array(), "messages");
                echo "!</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
\t\t";
        }
        // line 47
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "FuturModuleBundle:Modules:allmodules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 47,  185 => 45,  176 => 43,  161 => 40,  159 => 39,  153 => 37,  135 => 36,  132 => 35,  127 => 32,  118 => 30,  103 => 27,  101 => 26,  95 => 24,  77 => 23,  74 => 22,  72 => 21,  68 => 20,  63 => 17,  55 => 11,  53 => 10,  48 => 8,  45 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
