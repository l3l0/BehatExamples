<?php

/* FrameworkBundle:Exception:traces.txt.twig */
class __TwigTemplate_5d6c770a5c436c091159875a33a0fb07 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '1'), "trace", array(), "any", false, 1))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '2'), "trace", array(), "any", false, 2));
            foreach ($context['_seq'] as $context['_key'] => $context['trace']) {
                // line 3
                $template = "FrameworkBundle:Exception:trace.txt.twig";
                if ($template instanceof Twig_Template) {
                    $template->display(array("trace" => $this->getContext($context, 'trace', '3')));
                } else {
                    echo $this->env->getExtension('templating')->getTemplating()->render($template, array("trace" => $this->getContext($context, 'trace', '3')));
                }
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Exception:traces.txt.twig";
    }
}
