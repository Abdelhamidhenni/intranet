<?php

/* FuturCoursBundle:Cours:index.html.twig */
class __TwigTemplate_59e681dccb86641f3334c7e248668eb82abf28d3f3f4259354873e7d4784afdb extends Twig_Template
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

<div class=\"paper\">

<div class=\"framen\"> ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cours", array(), "messages");
        echo " </div>

<hr />

";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 13
            echo "<p> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cliquez sur une activité pour accéder a son cours", array(), "messages");
            echo ".</p>

<ul><h3>Module ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo " :</h3>


\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 19
                echo "

\t\t";
                // line 21
                if (($this->getAttribute($context["activite"], "module", array()) == $this->getAttribute($context["module"], "name", array()))) {
                    // line 22
                    echo "\t<li>
\t\t- <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_cours_infos", array("id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                    echo "\" style=\"text-decoration:none;\">
\t\t\t\t\t";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "name", array()), "html", null, true);
                    echo "
\t\t</a>
\t</li>
\t";
                }
                // line 28
                echo "
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 30
                echo "
";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("Pas d'activité' pour l'instant", array(), "messages");
                // line 32
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
</ul>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "
<div class=\"framen\">";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("Pas de cours pour l'instant", array(), "messages");
            echo " :(</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

</div>

";
    }

    public function getTemplateName()
    {
        return "FuturCoursBundle:Cours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  122 => 38,  119 => 37,  112 => 34,  105 => 32,  103 => 31,  100 => 30,  94 => 28,  87 => 24,  83 => 23,  80 => 22,  78 => 21,  74 => 19,  69 => 18,  63 => 15,  57 => 13,  52 => 12,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
