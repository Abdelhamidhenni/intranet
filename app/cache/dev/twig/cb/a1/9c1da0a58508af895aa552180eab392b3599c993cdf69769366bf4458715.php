<?php

/* ::layout.html.twig */
class __TwigTemplate_cba19c1da0a58508af895aa552180eab392b3599c993cdf69769366bf4458715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bundle' => array($this, 'block_bundle'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <link rel=\"shortcut icon\" href=\"https://www.chaptereight.com/cms_media/images/cookie_icon.png\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generalcss/header.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generalcss/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generalcss/footer.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generalcss/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Modulecss/module.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Activitecss/activite.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-po.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Planningcss/Planning.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Indie+Flower|Sintony' rel='stylesheet' type='text/css'>
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>

  <body>
  ";
        // line 19
        $this->env->loadTemplate("header.html.twig")->display($context);
        // line 20
        echo "  ";
        $this->displayBlock('bundle', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 23
        echo "
  <div id=\"main\">
  ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "  </div>


  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 35
        $this->env->loadTemplate("footer.html.twig")->display($context);
        // line 36
        echo "  </body>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_bundle($context, array $blocks = array())
    {
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        // line 26
        echo "


  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  113 => 25,  108 => 20,  103 => 15,  97 => 36,  95 => 35,  91 => 34,  85 => 30,  83 => 25,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  69 => 19,  62 => 15,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
