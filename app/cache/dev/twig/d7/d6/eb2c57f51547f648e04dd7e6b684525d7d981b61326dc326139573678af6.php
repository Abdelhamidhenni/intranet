<?php

/* FuturTicketBundle:Ticket:ticket_elem.html.twig */
class __TwigTemplate_d7d6eb2c57f51547f648e04dd7e6b684525d7d981b61326dc326139573678af6 extends Twig_Template
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
        echo "<a href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_homepage", array("id" => $this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "id", array()))), "html", null, true);
        echo " \">
\t";
        // line 2
        if (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "statut", array()) == false)) {
            // line 3
            echo "\t\t<div id=\"elem\" style=\"background-color:white;\">
\t";
        } else {
            // line 5
            echo "\t\t<div id=\"elem\">
\t";
        }
        // line 7
        echo "\t\t\t<div id=\"id\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "id", array()), "html", null, true);
        echo " </div>
\t\t\t<div id=\"date\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "date", array()), "d/m/Y"), "html", null, true);
        echo " </div>
\t\t\t<div id=\"titre2\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "titre", array()), "html", null, true);
        echo " </div>
\t\t\t<div id=\"repondre\">
\t\t\t";
        // line 11
        if (((($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "repondu", array()) == 1) && ($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "statut", array()) == true)) && ($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "vu", array()) == false))) {
            // line 12
            echo "\t\t\t\t<span style=\"color:red\"> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Nouvelle réponse", array(), "messages");
            echo " ! </span>
\t\t\t";
        } elseif (((($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "repondu", array()) == 1) && ($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "statut", array()) == true)) && ($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "vu", array()) == true))) {
            // line 14
            echo "\t\t\t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Voir la réponse", array(), "messages");
            // line 15
            echo "\t\t\t";
        } elseif (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "statut", array()) == true)) {
            // line 16
            echo "\t\t\t \t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Pas de réponse", array(), "messages");
            // line 17
            echo "\t\t\t";
        } elseif (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")), "statut", array()) == false)) {
            // line 18
            echo "\t\t\t\t<img src=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cadenas.jpg"), "html", null, true);
            echo " \" />
\t\t\t ";
        }
        // line 20
        echo "\t\t\t </div>
\t\t</div>
</a>
";
    }

    public function getTemplateName()
    {
        return "FuturTicketBundle:Ticket:ticket_elem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  50 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 7,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
