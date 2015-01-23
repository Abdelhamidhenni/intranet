<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a87799d5a2bde795fb92ca14df0ecb51d5195242670177e2629e5e51a6f4ee13 extends Twig_Template
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
            'main' => array($this, 'block_main'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"connexion\">
  ";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 6
        echo "</div>
";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  50 => 4,  45 => 6,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
