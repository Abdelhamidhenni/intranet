<?php

/* FuturTicketBundle:Ticket:index.html.twig */
class __TwigTemplate_513a1e43c11a389b9a92a3416ceddcaee022b31c41993c8ed5fbfdb6d675cc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FuturTicketBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'mainticket' => array($this, 'block_mainticket'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FuturTicketBundle::layout.html.twig";
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
\t<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ticket_new");
        echo " \" style=\"text-decoration:none;\"><div id=\"newti\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nouveau ticket", array(), "messages");
        echo "</div></a>
\t";
        // line 5
        if (((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")) != null)) {
            // line 6
            echo "\t\t<div id=\"mestickets\">
\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
                // line 8
                echo "\t\t\t\t";
                if (($this->getAttribute($context["tickets"], "idauteur", array()) == (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))) {
                    // line 9
                    echo "\t\t\t\t\t";
                    $this->env->loadTemplate("FuturTicketBundle:Ticket:ticket_elem.html.twig")->display($context);
                    // line 10
                    echo "\t\t\t\t";
                }
                // line 11
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t</div>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        $this->displayBlock('mainticket', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 15
    public function block_mainticket($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) != null)) {
            // line 17
            echo "\t\t\t";
            $this->env->loadTemplate("FuturTicketBundle:Ticket:ticket_detail.html.twig")->display($context);
            // line 18
            echo "\t\t";
        }
        // line 19
        echo "\t";
    }

    public function getTemplateName()
    {
        return "FuturTicketBundle:Ticket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 19,  117 => 18,  114 => 17,  111 => 16,  108 => 15,  103 => 20,  101 => 15,  98 => 14,  94 => 12,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  54 => 7,  51 => 6,  49 => 5,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
