<?php

/* FuturPlanningBundle:Planning:creerEvenement.html.twig */
class __TwigTemplate_5c52674dd645ed7f9030d3a5fbf6252f7d6555836b449f5c30d3313e7ebc7452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FuturPlanningBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'mainplanning' => array($this, 'block_mainplanning'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FuturPlanningBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "
\t";
        // line 4
        $this->displayBlock('mainplanning', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 4
    public function block_mainplanning($context, array $blocks = array())
    {
        // line 5
        echo "<h3>Créer un évènement</h3>

<form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" class=\"btn btn-primary\" />
</form>
\t";
    }

    public function getTemplateName()
    {
        return "FuturPlanningBundle:Planning:creerEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 5,  50 => 4,  45 => 12,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
