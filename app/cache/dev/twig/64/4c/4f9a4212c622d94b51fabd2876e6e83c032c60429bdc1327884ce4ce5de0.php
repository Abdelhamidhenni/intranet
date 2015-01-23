<?php

/* FuturAnnuaireBundle:Annuaire:index.html.twig */
class __TwigTemplate_644c4f9a4212c622d94b51fabd2876e6e83c032c60429bdc1327884ce4ce5de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FuturAnnuaireBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'mainannuaire' => array($this, 'block_mainannuaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FuturAnnuaireBundle::layout.html.twig";
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
        $this->displayBlock('mainannuaire', $context, $blocks);
        // line 129
        echo "

";
    }

    // line 4
    public function block_mainannuaire($context, array $blocks = array())
    {
        // line 5
        echo "<style type=\"text/css\">
section#annuaire {
\tpadding-bottom: 100px;
}

section#annuaire article
{
\tdisplay: inline-block;
\twidth: 200px;
\tmargin-bottom: 50px;
\tfont-family: calibri;
\ttext-align: left;
}

section#annuaire p {
\ttext-align: left;
}

section#annuaire article img
{
\tmax-height: 100px;
}

.detuser
{
\tbackground-color: \trgba(169,3,41,1);
\tfont-family: \t\tindie Flower;
\tcolor:\t\t\t\tAntiquewhite;
\twidth: \t\t\t\t210px;
\tpadding: \t\t\t10px;
\tborder-radius: \t\t10px;
\ttext-align: \t\tcenter;
\tdisplay: \t\t\tinline-block;
\tmargin: \t\t\t10px;
\tbox-shadow: \t\t5px 5px 5px #aaa;
}

section#annuaire table.menu_horizontal {
\twidth: 90%;
\tmargin: auto;
\ttext-align: center;
\tmargin-bottom: 20px;
\tfont-family: 'Calibri', serif, sans-serif;
}

section#annuaire table.menu_horizontal th {
\tborder-bottom: 1px solid #000000;
\ttext-align: center;
}

section#annuaire table.menu_horizontal td {
\tpadding: 5px;
}

section#annuaire table.menu_horizontal td a {
\tcolor: dodgerblue;
}

section#annuaire table.menu_horizontal td.search_form {
\ttext-align: left;
}
</style>

<h3>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.title"), "html", null, true);
        echo "</h3>

<section id=\"annuaire\">

<table class=\"menu_horizontal\">
<tr>
\t<th colspan=\"26\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.search.uid"), "html", null, true);
        echo "</th>
</tr>
<tr>
";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 78
            echo "\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_annuaire_search_by_uid", array("filter" => twig_lower_filter($this->env, $context["letter"]))), "html", null, true);
            echo "*\">";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</a></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</tr>
</table>

<table class=\"menu_horizontal\">
<tr>
\t<th colspan=\"26\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.search.first_name"), "html", null, true);
        echo "</th>
</tr>
<tr>
";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 89
            echo "\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_annuaire_search_by_firstName", array("firstName" => twig_lower_filter($this->env, $context["letter"]))), "html", null, true);
            echo "*\">";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</a></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "</tr>
</table>

<table class=\"menu_horizontal\">
<tr>
\t<th colspan=\"26\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.search.last_name"), "html", null, true);
        echo "</th>
</tr>
<tr>
";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 100
            echo "\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("futur_annuaire_search_by_lastName", array("lastName" => twig_lower_filter($this->env, $context["letter"]))), "html", null, true);
            echo "*\">";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</a></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "</tr>
</table>

\t";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 106
            echo "\t<div class=\"detuser\">

\t\t<article>
\t\t";
            // line 109
            if ($this->getAttribute($context["items"], "picture", array(), "any", true, true)) {
                // line 110
                echo "\t\t\t<img src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "picture", array()), 0, array(), "array"), "html", null, true);
                echo "\" /><br />
\t\t";
            }
            // line 112
            echo "\t\t<p>
\t\t\t<strong>";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.data.uid"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "uid", array()), 0, array(), "array"), "html", null, true);
            echo "<br />
\t\t\t<strong>";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.data.first_name"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "firstName", array()), 0, array(), "array"), "html", null, true);
            echo "<br />
\t\t\t<strong>";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.data.last_name"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "lastName", array()), 0, array(), "array"), "html", null, true);
            echo "<br />
\t\t\t<strong>";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.data.email"), "html", null, true);
            echo "</strong>:<br />
\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "alias", array()), 0, array(), "array"), "html", null, true);
            echo "<br />
\t\t\t";
            // line 118
            if ($this->getAttribute($context["items"], "mobilePhone", array(), "any", true, true)) {
                // line 119
                echo "\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yearbook.data.mobile_phone"), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "mobilePhone", array()), 0, array(), "array"), "html", null, true);
                echo "<br />
\t\t\t";
            }
            // line 121
            echo "\t\t</p>
\t\t</article>

\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "</section>
\t";
    }

    public function getTemplateName()
    {
        return "FuturAnnuaireBundle:Annuaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 127,  266 => 121,  258 => 119,  256 => 118,  252 => 117,  248 => 116,  242 => 115,  236 => 114,  230 => 113,  227 => 112,  221 => 110,  219 => 109,  214 => 106,  210 => 105,  205 => 102,  194 => 100,  190 => 99,  184 => 96,  177 => 91,  166 => 89,  162 => 88,  156 => 85,  149 => 80,  138 => 78,  134 => 77,  128 => 74,  119 => 68,  54 => 5,  51 => 4,  45 => 129,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
