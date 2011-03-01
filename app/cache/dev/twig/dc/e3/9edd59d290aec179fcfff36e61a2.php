<?php

/* FrameworkBundle:Exception:logs.html.twig */
class __TwigTemplate_dce39edd59d290aec179fcfff36e61a2 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ol>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'logs', '2'));
        foreach ($context['_seq'] as $context['_key'] => $context['log']) {
            // line 3
            echo "        <li";
            if (("ERR" == $this->getAttribute($this->getContext($context, 'log', '3'), "priorityName", array(), "any", false, 3))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '4'), "priorityName", array(), "any", false, 4), "html");
            echo "
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '5'), "message", array(), "any", false, 5), "html");
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:logs.html.twig";
    }
}
