<?php

/* FrameworkBundle:Exception:exception.txt.twig */
class __TwigTemplate_a1747ef8e117ff9426080546f912fbbf extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((($this->getContext($context, 'status_code', '1') . " | ") . $this->getContext($context, 'status_text', '1')) . " | ") . $this->getAttribute($this->getContext($context, 'exception', '1'), "class", array(), "any", false, 1)), "html");
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '2'), "message", array(), "any", false, 2), "html");
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '3'), "toarray", array(), "any", false, 3));
        foreach ($context['_seq'] as $context['i'] => $context['e']) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ($this->getContext($context, 'i', '4') + 1), "html");
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e', '4'), "class", array(), "any", false, 4), "html");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e', '4'), "message", array(), "any", false, 4), "html");
            echo "
";
            // line 5
            $template = "FrameworkBundle:Exception:traces.txt.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("exception" => $this->getContext($context, 'e', '5')));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("exception" => $this->getContext($context, 'e', '5')));
            }
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:exception.txt.twig";
    }
}
