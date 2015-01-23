<?php

/* FuturPlanningBundle:Planning:index.html.twig */
class __TwigTemplate_b60ba6f9f91b5424827317dab8ff37835795e8738be888c3e01b08288ee2d9e0 extends Twig_Template
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
        // line 107
        echo "
";
    }

    // line 4
    public function block_mainplanning($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"planningtitle\">

\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.title"), "html", null, true);
        echo "

</div>

<div class=\"planning\">

<table>
\t<tr>
\t\t<td colspan=\"7\" align=\"center\">
\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ((isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")) - 1), "html", null, true);
        echo "\">
\t\t\t\t&lt;&lt;
\t\t\t</a>
\t\t\t&nbsp;&nbsp;";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monthArray"]) ? $context["monthArray"] : $this->getContext($context, "monthArray")), (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), array(), "array"), "html", null, true);
        echo "&nbsp;&nbsp;
\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ((isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")) + 1), "html", null, true);
        echo "\">
\t\t\t\t&gt;&gt;
\t\t\t</a>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"7\" align=\"center\">
\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
        echo "/";
        echo twig_escape_filter($this->env, ((isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")) - 1), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), "html", null, true);
        echo "\">
\t\t\t\t&lt;&lt;
\t\t\t</a>
\t\t\t&nbsp;&nbsp;";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
        echo "&nbsp;&nbsp;
\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
        echo "/";
        echo twig_escape_filter($this->env, ((isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")) + 1), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), "html", null, true);
        echo "\">
\t\t\t\t&gt;&gt;
\t\t\t</a>
\t\t</td>
\t</tr>

\t<tr>
\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "\t\t<td>
\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dayArray"]) ? $context["dayArray"] : $this->getContext($context, "dayArray")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
            echo "&nbsp;
\t\t</td>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</tr>

\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "\t<tr>
\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 49
                echo "\t\t\t<td>
\t\t\t\t";
                // line 50
                if ((is_string($__internal_0d1fdeb3507db0e8f49fbc771e42b548f9fdb0728d92d45f45c49ffa38b231d0 = $this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array")) && is_string($__internal_b825406a4504725461f149a767a04cd319cfe2775b92096bdc69311207766fad = "*") && ('' === $__internal_b825406a4504725461f149a767a04cd319cfe2775b92096bdc69311207766fad || 0 === strpos($__internal_0d1fdeb3507db0e8f49fbc771e42b548f9fdb0728d92d45f45c49ffa38b231d0, $__internal_b825406a4504725461f149a767a04cd319cfe2775b92096bdc69311207766fad)))) {
                    // line 51
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array"), 1, null), "html", null, true);
                    echo "\" style=\"text-decoration: none; color: black;\">
\t\t\t\t\t\t";
                    // line 52
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array"), 1, null), "html", null, true);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->env->getExtension('routing')->getPath("futur_planning_homepage");
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array"), "html", null, true);
                    echo "\" style=\"text-decoration: none;
";
                    // line 56
                    if ((((((isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")) == (isset($context["monthDate"]) ? $context["monthDate"] : $this->getContext($context, "monthDate"))) && ((isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")) == (isset($context["yearDate"]) ? $context["yearDate"] : $this->getContext($context, "yearDate")))) && ((isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")) == (isset($context["yearDate"]) ? $context["yearDate"] : $this->getContext($context, "yearDate")))) && ($this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array") == (isset($context["dayDate"]) ? $context["dayDate"] : $this->getContext($context, "dayDate"))))) {
                        // line 57
                        echo "\tbackground-color: \trgba(109,3,41,1);
\tpadding-left:\t\t13px;
\tpadding-right:\t\t13px;
\tborder-radius:\t\t6px;
";
                    } else {
                        // line 62
                        echo "
";
                    }
                    // line 63
                    echo "\"
\t\t\t\t\t>
\t\t\t\t\t\t";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planningArray"]) ? $context["planningArray"] : $this->getContext($context, "planningArray")), $context["i"], array(), "array"), $context["j"], array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t</td>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</table>

</div>

<div class=\"paper\" style=\"font-family: Calibri, Arial, serif, sans-serif;\">

\t<div class=\"curdate\">

\t";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.events"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "W"), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, (isset($context["dayNum"]) ? $context["dayNum"] : $this->getContext($context, "dayNum")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["monthNum"]) ? $context["monthNum"] : $this->getContext($context, "monthNum")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["yearNum"]) ? $context["yearNum"] : $this->getContext($context, "yearNum")), "html", null, true);
        echo "] :

\t</div>
\t\t";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allevents"]) ? $context["allevents"] : $this->getContext($context, "allevents")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            if (((twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "YW") >= twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "YW")) && (twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "YW") <= twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "YW")))) {
                // line 84
                echo "\t\t\t<h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</h3>
\t\t\t<p>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.event.start"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "d M Y H:i"), "html", null, true);
                echo "</p>
\t\t\t<p>";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.event.end"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "d M Y H:i"), "html", null, true);
                echo "</p>
\t\t\t<p>";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.event.description"), "html", null, true);
                echo " :<br />";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
                echo "</p>
\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 89
            echo "
\t\t";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("planning.event.nothing"), "html", null, true);
            echo "

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
</div>


<hr />
<a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("futur_planning_creer_evenement");
        echo "\">
<div class=\"addeventp\">


Créer un évènement

</div>
</a>
\t";
    }

    public function getTemplateName()
    {
        return "FuturPlanningBundle:Planning:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 98,  317 => 93,  308 => 90,  305 => 89,  295 => 87,  289 => 86,  283 => 85,  278 => 84,  272 => 83,  258 => 80,  248 => 72,  241 => 70,  234 => 68,  228 => 65,  224 => 63,  220 => 62,  213 => 57,  211 => 56,  200 => 55,  194 => 52,  183 => 51,  181 => 50,  178 => 49,  174 => 48,  171 => 47,  167 => 46,  163 => 44,  146 => 41,  143 => 40,  126 => 39,  112 => 32,  108 => 31,  98 => 28,  84 => 21,  80 => 20,  70 => 17,  58 => 8,  53 => 5,  50 => 4,  45 => 107,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
