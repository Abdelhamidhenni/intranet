<?php

/* FuturTicketBundle::layout.html.twig */
class __TwigTemplate_836b72d9bdd2ecba422e2ef47b98b33cb7aebced7a2c3ab3e085cdd621151211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bundle' => array($this, 'block_bundle'),
            'page' => array($this, 'block_page'),
            'mainticket' => array($this, 'block_mainticket'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Ticket";
    }

    // line 9
    public function block_bundle($context, array $blocks = array())
    {
        // line 10
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Ticketcss/ticket/ticket.css"), "html", null, true);
        echo "\" type=\"text/css\" />

Ticket

";
    }

    // line 17
    public function block_page($context, array $blocks = array())
    {
        echo "Ticket";
    }

    // line 19
    public function block_mainticket($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "FuturTicketBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  66 => 19,  60 => 17,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  11 => 3,);
    }
}
