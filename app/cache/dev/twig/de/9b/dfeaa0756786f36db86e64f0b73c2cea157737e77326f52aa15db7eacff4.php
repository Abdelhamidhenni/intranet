<?php

/* menu.html.twig */
class __TwigTemplate_de9bdfeaa0756786f36db86e64f0b73c2cea157737e77326f52aa15db7eacff4 extends Twig_Template
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
        // line 1
        echo "

<div id=\"menu\">

\t<div id=\"language2\">
\t<ul> ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Langue", array(), "messages");
        // line 7
        echo "
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "fr"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 9
            echo "
\t        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => $context["locale"]))), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</li>
\t        </a>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t</ul>

</div>

<div id=\"fullmenu\">

\t<ul>
\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("futursite_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Accueil", array(), "messages");
        echo "</li></a>
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Profil", array(), "messages");
        echo "</li></a>
\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ticket_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ticket", array(), "messages");
        echo "</li></a>

\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("futur_annuaire_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Annuaire", array(), "messages");
        echo "</li></a>
\t\t<br/>
\t\t<br/>
\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("futur_module_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modules", array(), "messages");
        echo "</li></a>
\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("futur_cours_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cours", array(), "messages");
        echo "</li></a>
\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ccdn_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forum", array(), "messages");
        echo "</li></a>
\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
        echo "\"><li>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Planning", array(), "messages");
        echo "</li></a>
\t</ul>

</div>

</div>


";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  99 => 31,  93 => 30,  87 => 29,  79 => 26,  72 => 24,  66 => 23,  60 => 22,  50 => 14,  38 => 10,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
