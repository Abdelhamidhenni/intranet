<?php

/* FuturTicketBundle:Ticket:ticket_detail.html.twig */
class __TwigTemplate_1e4bdd6b4f995747c0ad14cba8a0cba5bcad9b090f2eae6398f08164d77cb2fd extends Twig_Template
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
        echo "<div id=\"detail\">
";
        // line 2
        if (($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "statut", array()) == true)) {
            // line 3
            echo "\t<div id=\"detailrep1\"> id : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "id", array()), "html", null, true);
            echo " </div>
\t<div id=\"detailrep2\"> date : ";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "date", array()), "d/m/Y"), "html", null, true);
            echo "</div>
\t<div id=\"detailrep1\"> ";
            // line 5
            echo $this->env->getExtension('translator')->getTranslator()->trans("Titre", array(), "messages");
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "titre", array()), "html", null, true);
            echo " </div>
\t<div id=\"detailrep3\"> ";
            // line 6
            echo $this->env->getExtension('translator')->getTranslator()->trans("Problème", array(), "messages");
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "probleme", array()), "html", null, true);
            echo " </div>
";
        }
        // line 8
        if ((($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "repondu", array()) == 1) && ($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "assignation", array()) != null))) {
            // line 9
            echo "\t\t<div id=\"detailrep1\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "assignation", array()), "html", null, true);
            echo $this->env->getExtension('translator')->getTranslator()->trans("vous a répondu", array(), "messages");
            echo "!</div>
";
        }
        // line 11
        if (($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "repondu", array()) == 1)) {
            // line 12
            echo "\t<div id=\"detailrep3\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Réponse", array(), "messages");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "reponse", array()), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "<div id=\"detailrep4\">
action :
\t";
        // line 16
        if (($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "statut", array()) == true)) {
            // line 17
            echo "\t\t<a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_del", array("ticket" => $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "id", array()))), "html", null, true);
            echo " \">
\t\t\t<div class=\"btn btn-default boutton\">";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("Supprimer le ticket", array(), "messages");
            echo "</div>
\t\t</a>
\t\t<a href=\" ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_update", array("ticket" => $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "id", array()))), "html", null, true);
            echo " \">
\t\t\t<div class=\"btn btn-default boutton1\">";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("Modifier le ticket", array(), "messages");
            echo "</div>
\t\t</a>
\t";
        }
        // line 24
        echo "\t<a href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_statut", array("ticket" => $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "id", array()))), "html", null, true);
        echo " \">
\t\t";
        // line 25
        if (($this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "statut", array()) == true)) {
            // line 26
            echo "\t\t\t<div class=\"btn btn-default boutton2\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Clore le ticket", array(), "messages");
            echo "</div>
\t\t";
        } else {
            // line 28
            echo "\t\t\t<div class=\"btn btn-default boutton2\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Rouvrir le ticket", array(), "messages");
            echo "</div>
\t\t";
        }
        // line 30
        echo "\t</a>


</div>
";
    }

    public function getTemplateName()
    {
        return "FuturTicketBundle:Ticket:ticket_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  104 => 28,  98 => 26,  96 => 25,  91 => 24,  85 => 21,  81 => 20,  76 => 18,  71 => 17,  69 => 16,  65 => 14,  57 => 12,  55 => 11,  48 => 9,  46 => 8,  39 => 6,  33 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
