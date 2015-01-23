<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ae33a9442b72b6f63272a1997934611b370ea8c31407a2d7fc11ea3428df9cbe extends Twig_Template
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
        // line 2
        echo "

<div class=\"userglob\">
\t<div class=\"userprof\">


\t\t<p><img src=\"data:image/png;base64,";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
        echo "\" style=\"height: 200px; float: left; border: 1px solid black; margin: 0px 15px\" /></p>
\t    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.first_name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
\t    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.last_name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</p>
\t    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.mobile_phone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilePhone", array()), "html", null, true);
        echo "</p>

\t</div>
\t<h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.activity.title", array(), "FOSUserBundle"), "html", null, true);
        echo "</h1>
\t<div class=\"usermods\">

\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "activites", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 20
            echo "
\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_activite_infos", array("id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
            echo "\" style=\"text-decoration:none;\">
\t\t\t<div class=\"activite_line\">
\t\t\t\t";
            // line 23
            $this->env->loadTemplate("FuturSujetBundle:Activites:activite.html.twig")->display($context);
            // line 24
            echo "\t\t\t</div>
\t\t\t</a>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t\t\t\t<div id=\"infos_1\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.activity.no_activity", array(), "FOSUserBundle"), "html", null, true);
            echo "</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t</div>
\t<h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.mark.title", array(), "FOSUserBundle"), "html", null, true);
        echo "</h1>
\t<div class=\"usermods\">
\t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.mark.actual", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "note", array()), "html", null, true);
        echo "/20</p>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  126 => 32,  122 => 30,  112 => 27,  97 => 24,  95 => 23,  90 => 21,  87 => 20,  69 => 19,  63 => 16,  55 => 13,  49 => 12,  43 => 11,  37 => 10,  31 => 9,  27 => 8,  19 => 2,);
    }
}
