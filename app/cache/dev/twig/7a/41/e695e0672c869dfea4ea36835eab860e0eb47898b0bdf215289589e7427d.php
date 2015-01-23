<?php

/* FuturTicketBundle:Ticket:ticket_new.html.twig */
class __TwigTemplate_7a41e695e0672c869dfea4ea36835eab860e0eb47898b0bdf215289589e7427d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FuturTicketBundle::layout.html.twig");
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
        return "FuturTicketBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"newticket\">
\t<form method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
\t\t";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Titre", array(), "messages");
        // line 6
        echo "\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "input1")));
        echo "
\t\t<br/>
\t\t";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Problème", array(), "messages");
        // line 9
        echo "\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "probleme", array()), 'widget', array("attr" => array("class" => "input2")));
        echo "
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<br/>
\t\t<br/>
\t\t<button type=\"submit\" class=\"b4 b55\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Envoyer", array(), "messages");
        echo "</button>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FuturTicketBundle:Ticket:ticket_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 10,  56 => 9,  54 => 8,  48 => 6,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
