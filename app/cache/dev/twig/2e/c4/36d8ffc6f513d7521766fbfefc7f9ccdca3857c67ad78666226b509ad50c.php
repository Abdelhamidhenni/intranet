<?php

/* header.html.twig */
class __TwigTemplate_2ec436d8ffc6f513d7521766fbfefc7f9ccdca3857c67ad78666226b509ad50c extends Twig_Template
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
        echo "<header>



<div id=\"titre\">

<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("futursite_homepage");
        echo "\"><h1>Intra42<h1></a>
</div>
<br/>
\t<p>

\t\t<div id=\"user\">
\t  \t\t";
        // line 13
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "\t    \t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Salut", array(), "messages");
            echo ", <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>   !   <a class=\"yolo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Déconnexion", array(), "messages");
            echo "</a>
\t\t\t";
        } else {
            // line 16
            echo "
\t\t\t\t<a class=\"yolo\" href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Inscription", array(), "messages");
            echo "</a>

\t\t\t\t<a class=\"yolo\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Connexion", array(), "messages");
            echo "</a>


\t\t\t";
        }
        // line 23
        echo "\t\t</div>

\t</p>

</header>
";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  62 => 19,  55 => 17,  52 => 16,  38 => 14,  36 => 13,  27 => 7,  19 => 1,);
    }
}
