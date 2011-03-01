<?php

/* FrameworkBundle:Exception:trace.html.twig */
class __TwigTemplate_186752513b4907abcd742878aec94c7c extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'trace', '1'), "function", array(), "any", false, 1)) {
            // line 2
            echo "    at <strong><abbr title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '2'), "class", array(), "any", false, 2), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '2'), "short_class", array(), "any", false, 2), "html");
            echo "</abbr>";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, 'trace', '2'), "type", array(), "any", false, 2) . $this->getAttribute($this->getContext($context, 'trace', '2'), "function", array(), "any", false, 2)), "html");
            echo "</strong>(";
            echo $this->env->getExtension('templating')->formatArgs($this->getAttribute($this->getContext($context, 'trace', '2'), "args", array(), "any", false, 2));
            echo ")<br />
";
        }
        // line 4
        if (($this->getAttribute($this->getContext($context, 'trace', '4'), "file", array(), "any", true, 4) && $this->getAttribute($this->getContext($context, 'trace', '4'), "line", array(), "any", true, 4))) {
            // line 5
            echo "    in <em>";
            echo $this->env->getExtension('templating')->formatFile($this->getAttribute($this->getContext($context, 'trace', '5'), "file", array(), "any", false, 5), $this->getAttribute($this->getContext($context, 'trace', '5'), "line", array(), "any", false, 5));
            echo "</em>
    <a href=\"#\" onclick=\"toggle('trace_";
            // line 6
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '6') . "_") . $this->getContext($context, 'i', '6')), "html");
            echo "'); return false;\">&raquo;</a><br />
    <div id=\"trace_";
            // line 7
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '7') . "_") . $this->getContext($context, 'i', '7')), "html");
            echo "\" class=\"trace\" style=\"display: ";
            echo (((0 == $this->getContext($context, 'i', '7'))) ? ("block") : ("none"));
            echo "\">
        ";
            // line 8
            echo $this->env->getExtension('templating')->fileExcerpt($this->getAttribute($this->getContext($context, 'trace', '8'), "file", array(), "any", false, 8), $this->getAttribute($this->getContext($context, 'trace', '8'), "line", array(), "any", false, 8));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:trace.html.twig";
    }
}
