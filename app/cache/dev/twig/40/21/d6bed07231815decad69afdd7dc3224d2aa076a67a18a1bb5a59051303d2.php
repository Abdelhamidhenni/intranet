<?php

/* FuturAnnuaireBundle::layout.html.twig */
class __TwigTemplate_4021d6bed07231815decad69afdd7dc3224d2aa076a67a18a1bb5a59051303d2 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Annuaire";
    }

    // line 4
    public function block_bundle($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Annuairecss/annuaire/annuaire.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\tPlanning
";
    }

    // line 9
    public function block_page($context, array $blocks = array())
    {
        echo "Annuaire des étudiants";
    }

    // line 11
    public function block_mainticket($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FuturAnnuaireBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  56 => 9,  48 => 5,  45 => 4,  39 => 2,  11 => 1,);
    }
}
