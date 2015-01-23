<?php

/* FuturSiteBundle::layout.html.twig */
class __TwigTemplate_e551e79c48fde5542a53f9cc4543715709f9a24caa5655a411fb6a8a582bf3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bundle' => array($this, 'block_bundle'),
            'page' => array($this, 'block_page'),
            'main' => array($this, 'block_main'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_bundle($context, array $blocks = array())
    {
        echo "Ticket";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        echo "</h4>
OLOLOL
";
    }

    public function getTemplateName()
    {
        return "FuturSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  57 => 9,  51 => 7,  45 => 5,  39 => 3,  11 => 1,);
    }
}
