<?php

/* FuturSiteBundle:Site:index.html.twig */
class __TwigTemplate_234b08c5e0a0846c18dcd0ec49d25a0de2bf0339b28e1b526e53439f1c26d3a4 extends Twig_Template
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
<div class=\"left_index\">

";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "
\t<div class=\"current_act\">

\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 12
                echo "
\t\t<p>
\t\t- ";
                // line 14
                echo $this->env->getExtension('translator')->getTranslator()->trans("Le projet", array(), "messages");
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_activite_infos", array("id" => $this->getAttribute($context["activite"], "id", array()), "id2" => $this->getAttribute($context["activite"], "module", array()))), "html", null, true);
                echo "\" style=\"text-decoration:none;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "name", array()), "html", null, true);
                echo " </a> ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("est en cours", array(), "messages");
                echo " ! ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Faites votre rendu avant le", array(), "messages");
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activite"], "datefin", array()), "Y-m-d"), "html", null, true);
                echo ".
\t\t</p>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 17
                echo "\t\t<div id=\"infos_1\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Pas de projets en cours", array(), "messages");
                echo " !</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
\t</div>

";
        } else {
            // line 23
            echo "
<div class=\"current_act\">

\t";
            // line 26
            echo $this->env->getExtension('translator')->getTranslator()->trans("Connecte toi pour voir les activités en cours", array(), "messages");
            echo " !

\t</div>

";
        }
        // line 31
        echo "
</div>




";
    }

    public function getTemplateName()
    {
        return "FuturSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  98 => 26,  93 => 23,  87 => 19,  78 => 17,  60 => 14,  56 => 12,  51 => 11,  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
