<?php

/* FrameworkBundle:Exception:trace.txt.twig */
class __TwigTemplate_5e7bc3cb0df1363d11bf793d56919b1c extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'trace', '1'), "function", array(), "any", false, 1)) {
            // line 2
            echo "                at ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'trace', '2'), "class", array(), "any", false, 2) . $this->getAttribute($this->getContext($context, 'trace', '2'), "type", array(), "any", false, 2)) . $this->getAttribute($this->getContext($context, 'trace', '2'), "function", array(), "any", false, 2)), "html");
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->formatArgsAsText($this->getAttribute($this->getContext($context, 'trace', '2'), "args", array(), "any", false, 2)), "html");
            echo ")
";
        } else {
            // line 4
            echo "                at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, 'trace', '6'), "file", array(), "any", true, 6) && $this->getAttribute($this->getContext($context, 'trace', '6'), "line", array(), "any", true, 6))) {
            // line 7
            echo "                    in ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '7'), "file", array(), "any", false, 7), "html");
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '7'), "line", array(), "any", false, 7), "html");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:trace.txt.twig";
    }
}
